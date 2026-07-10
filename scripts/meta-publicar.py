#!/usr/bin/env python3
"""Publicador de Meta (Facebook/Instagram) para FacturaQR.

Usa el secret META_TOKEN (token de página, no caduca).

Modos:
  verificar   — comprueba token, página e Instagram vinculado. No publica.
  prueba      — publica un post de prueba de texto en Facebook.
  lanzamiento — publica TODOS los posts con lote="lanzamiento" que sigan
                pendientes (Facebook, y también Instagram si está vinculado).
  diario      — publica el SIGUIENTE post con lote="diario" pendiente (uno).

Cola:  marketing/social/cola-posts.json   (la escribe el agente)
Estado: marketing/social/estado.json      (lo mantiene este script)
Imágenes: se publican como https://facturaqr.app/social/post-<id>.png
          (deben existir en social/ y estar desplegadas).
"""
import json
import os
import sys
import time
import urllib.error
import urllib.parse
import urllib.request
from pathlib import Path

TOKEN = os.environ.get("META_TOKEN", "")
GRAPH = "https://graph.facebook.com/v25.0"
RAIZ = Path(__file__).resolve().parent.parent
COLA = RAIZ / "marketing" / "social" / "cola-posts.json"
ESTADO = RAIZ / "marketing" / "social" / "estado.json"
BASE_IMG = "https://facturaqr.app/social"


def api(ruta, params=None, post=False):
    params = dict(params or {})
    params["access_token"] = TOKEN
    datos = urllib.parse.urlencode(params).encode()
    url = f"{GRAPH}/{ruta}"
    try:
        if post:
            req = urllib.request.Request(url, data=datos)
        else:
            req = urllib.request.Request(url + "?" + datos.decode())
        with urllib.request.urlopen(req, timeout=60) as r:
            return json.load(r)
    except urllib.error.HTTPError as e:
        try:
            return {"error": json.loads(e.read()).get("error", {})}
        except Exception:
            return {"error": {"message": f"HTTP {e.code}"}}
    except Exception as e:
        return {"error": {"message": str(e)}}


def api_delete(obj_id):
    """Borra un objeto de Graph (DELETE). Devuelve dict con 'success' o 'error'."""
    url = f"{GRAPH}/{obj_id}?" + urllib.parse.urlencode({"access_token": TOKEN})
    req = urllib.request.Request(url, method="DELETE")
    try:
        with urllib.request.urlopen(req, timeout=60) as r:
            return json.load(r)
    except urllib.error.HTTPError as e:
        try:
            return {"error": json.loads(e.read()).get("error", {})}
        except Exception:
            return {"error": {"message": f"HTTP {e.code}"}}
    except Exception as e:
        return {"error": {"message": str(e)}}


def _norm(s):
    return " ".join((s or "").split())


def id_pagina():
    yo = api("me", {"fields": "id,name"})
    return (yo.get("id"), yo.get("name")) if "error" not in yo else (None, None)


def id_instagram():
    ig = api("me", {"fields": "instagram_business_account{id,username}"})
    cuenta = ig.get("instagram_business_account") or {}
    return cuenta.get("id"), cuenta.get("username")


def cargar_estado():
    if ESTADO.exists():
        try:
            return json.loads(ESTADO.read_text())
        except Exception:
            pass
    return {"publicados": []}


def guardar_estado(est):
    ESTADO.parent.mkdir(parents=True, exist_ok=True)
    ESTADO.write_text(json.dumps(est, ensure_ascii=False, indent=1))


def cuerpo_post(p):
    txt = p.get("texto", "").strip()
    hs = p.get("hashtags", "").strip()
    return (txt + "\n\n" + hs).strip() if hs else txt


def publicar_fb(pagina_id, p):
    img = f"{BASE_IMG}/post-{p['id']:02d}.png"
    r = api(f"{pagina_id}/photos", {"url": img, "message": cuerpo_post(p)}, post=True)
    if "error" in r:
        # si la imagen no existe/carga, cae a post de solo texto
        r2 = api(f"{pagina_id}/feed", {"message": cuerpo_post(p)}, post=True)
        if "error" in r2:
            return False, r2["error"].get("message")
        return True, "texto (sin imagen: " + r["error"].get("message", "?") + ")"
    return True, "con imagen"


def publicar_ig(ig_id, p):
    img = f"{BASE_IMG}/post-{p['id']:02d}.png"
    crea = api(f"{ig_id}/media", {"image_url": img, "caption": cuerpo_post(p)}, post=True)
    if "error" in crea:
        return False, crea["error"].get("message")
    cid = crea.get("id")
    time.sleep(3)
    pub = api(f"{ig_id}/media_publish", {"creation_id": cid}, post=True)
    if "error" in pub:
        return False, pub["error"].get("message")
    return True, "publicado"


def cargar_cola():
    if not COLA.exists():
        print(f"[error] No existe la cola {COLA}", file=sys.stderr)
        return []
    try:
        return json.loads(COLA.read_text())
    except Exception as e:
        print(f"[error] Cola inválida: {e}", file=sys.stderr)
        return []


def publicar_lista(posts, etiqueta):
    if not TOKEN:
        print("[error] Falta META_TOKEN"); return 1
    pagina_id, nombre = id_pagina()
    if not pagina_id:
        print("[error] Token inválido"); return 1
    ig_id, ig_user = id_instagram()
    est = cargar_estado()
    hechos = set(est["publicados"])
    algo = False
    for p in posts:
        if p["id"] in hechos:
            continue
        okfb, detfb = publicar_fb(pagina_id, p)
        linea = f"[{'ok' if okfb else 'error'}] FB post {p['id']} ({p.get('tema','')}): {detfb}"
        okig = True
        if ig_id:
            okig, detig = publicar_ig(ig_id, p)
            linea += f" | IG: {'ok' if okig else 'error'} {detig}"
        else:
            linea += " | IG: (no vinculado; queda pendiente)"
        print(linea)
        # se marca como publicado solo si Facebook salió (IG se reintenta al vincular)
        if okfb:
            est["publicados"].append(p["id"])
            algo = True
    guardar_estado(est)
    if not algo:
        print(f"[ok] No hay posts '{etiqueta}' pendientes.")
    return 0


def verificar():
    if not TOKEN:
        print("[error] Falta META_TOKEN"); return 1
    pid, nombre = id_pagina()
    if not pid:
        print("[error] El token no funciona."); return 1
    print(f"[ok] Página conectada: {nombre} (id {pid})")
    ig_id, ig_user = id_instagram()
    if ig_id:
        print(f"[ok] Instagram vinculado: @{ig_user} (id {ig_id})")
    else:
        print("[warn] Instagram NO vinculado — Facebook sí publica; IG queda pendiente.")
    return 0


def borrar(lote, confirmar):
    """Borra en Facebook los posts del lote indicado (match por texto) y lista
    los de Instagram para borrado manual (la API de IG no permite borrar media).

    - confirmar=False (por defecto): solo vista previa, no borra nada.
    - confirmar=True: borra en FB y quita del estado los ids borrados.
    """
    if not TOKEN:
        print("[error] Falta META_TOKEN"); return 1
    pagina_id, nombre = id_pagina()
    if not pagina_id:
        print("[error] Token inválido"); return 1
    ig_id, ig_user = id_instagram()

    posts = [p for p in cargar_cola() if p.get("lote") == lote]
    if not posts:
        print(f"[ok] No hay posts del lote '{lote}' en la cola."); return 0
    # firma = primera línea del texto (bastante única por post)
    firmas = {p["id"]: _norm(p.get("texto", "").split("\n")[0])[:40] for p in posts}

    # --- Facebook: buscar posts que coincidan ---
    fb = api(f"{pagina_id}/posts", {"fields": "id,message", "limit": "100"})
    fb_hits = []  # (meta_post_id, id_local, snippet)
    for item in fb.get("data", []):
        msg = _norm(item.get("message", ""))
        if not msg:
            continue
        for pid, firma in firmas.items():
            if firma and firma in msg:
                fb_hits.append((item["id"], pid, msg[:50]))
                break

    # --- Instagram: solo listar (no se puede borrar por API) ---
    ig_hits = []  # (id_local, permalink)
    if ig_id:
        igm = api(f"{ig_id}/media", {"fields": "id,caption,permalink", "limit": "100"})
        for item in igm.get("data", []):
            cap = _norm(item.get("caption", ""))
            for pid, firma in firmas.items():
                if firma and firma in cap:
                    ig_hits.append((pid, item.get("permalink", "(sin link)")))
                    break

    print(f"[info] Página: {nombre} · lote '{lote}' · encontrados FB: {len(fb_hits)}, IG: {len(ig_hits)}")
    for mid, pid, snip in fb_hits:
        print(f"  FB  post {pid}: {mid}  «{snip}…»")
    for pid, link in ig_hits:
        print(f"  IG  post {pid}: {link}  (borrar a mano)")

    if not confirmar:
        print("[dry-run] Vista previa. Nada borrado. Corre en modo 'borrar-confirmar' para ejecutar.")
        return 0

    # --- Ejecutar borrado en FB ---
    borrados = []
    for mid, pid, _snip in fb_hits:
        r = api_delete(mid)
        if "error" in r:
            print(f"[error] FB post {pid} ({mid}): {r['error'].get('message')}")
        else:
            print(f"[ok] FB post {pid} borrado.")
            borrados.append(pid)

    # Quitar del estado los ids borrados en FB (para poder republicarlos)
    if borrados:
        est = cargar_estado()
        est["publicados"] = [i for i in est["publicados"] if i not in borrados]
        guardar_estado(est)
        print(f"[ok] Estado actualizado: quitados {sorted(borrados)} de 'publicados'.")

    if ig_hits:
        print("[accion-manual] Instagram NO se borra por API. Borra a mano estos:")
        for pid, link in ig_hits:
            print(f"    - post {pid}: {link}")
    return 0


def prueba():
    pid, _ = id_pagina()
    if not pid:
        print("[error] Token inválido"); return 1
    r = api(f"{pid}/feed", {"message": (
        "FacturaQR: tus clientes se facturan solos con una foto de su ticket. "
        "Prueba gratis con 10 facturas: https://facturaqr.app "
        "(publicación de prueba del sistema)")}, post=True)
    if "error" in r:
        print("[error]", r["error"].get("message")); return 1
    print(f"[ok] Post de prueba publicado (id {r.get('id')})."); return 0


def main():
    modo = sys.argv[1] if len(sys.argv) > 1 else "verificar"
    if modo == "verificar":
        return verificar()
    if modo == "prueba":
        return prueba()
    if modo == "borrar":
        return borrar("lanzamiento", confirmar=False)
    if modo == "borrar-confirmar":
        return borrar("lanzamiento", confirmar=True)
    posts = cargar_cola()
    if modo == "lanzamiento":
        return publicar_lista([p for p in posts if p.get("lote") == "lanzamiento"], "lanzamiento")
    if modo == "diario":
        pend = [p for p in posts if p.get("lote") == "diario"]
        est = cargar_estado()
        hechos = set(est["publicados"])
        siguiente = next((p for p in pend if p["id"] not in hechos), None)
        if not siguiente:
            print("[ok] No quedan posts diarios pendientes.")
            return 0
        return publicar_lista([siguiente], "diario")
    print(f"[error] Modo desconocido: {modo}")
    return 1


if __name__ == "__main__":
    sys.exit(main())
