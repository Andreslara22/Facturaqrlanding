#!/usr/bin/env python3
"""Publicador de Meta (Facebook/Instagram) para FacturaQR.

Usa el secret META_TOKEN (token de página, no caduca) desde GitHub Actions.
Modos:
  verificar  — comprueba el token: nombre/id de la página y si hay Instagram
               vinculado. No publica nada.
  prueba     — publica un post de prueba en la página de Facebook.

Uso: META_TOKEN=... python3 scripts/meta-publicar.py verificar
"""
import json
import os
import sys
import urllib.error
import urllib.parse
import urllib.request

TOKEN = os.environ.get("META_TOKEN", "")
GRAPH = "https://graph.facebook.com/v25.0"


def api(ruta: str, params: dict | None = None, post: bool = False) -> dict:
    params = dict(params or {})
    params["access_token"] = TOKEN
    datos = urllib.parse.urlencode(params)
    try:
        if post:
            req = urllib.request.Request(f"{GRAPH}/{ruta}", data=datos.encode())
        else:
            req = urllib.request.Request(f"{GRAPH}/{ruta}?{datos}")
        with urllib.request.urlopen(req, timeout=30) as r:
            return json.load(r)
    except urllib.error.HTTPError as e:
        try:
            err = json.loads(e.read()).get("error", {})
        except Exception:
            err = {"message": f"HTTP {e.code}"}
        return {"error": err}
    except Exception as e:
        return {"error": {"message": str(e)}}


def verificar() -> int:
    if not TOKEN:
        print("[error] Falta META_TOKEN (¿está el secret en GitHub?)")
        return 1
    yo = api("me", {"fields": "id,name"})
    if "error" in yo:
        print("[error] El token no funciona:", yo["error"].get("message"))
        return 1
    print(f"[ok] Página conectada: {yo['name']} (id {yo['id']})")

    ig = api("me", {"fields": "instagram_business_account{id,username}"})
    cuenta = ig.get("instagram_business_account") or {}
    if cuenta.get("id"):
        print(f"[ok] Instagram vinculado: @{cuenta.get('username', '?')} (id {cuenta['id']})")
    else:
        print("[warn] La página NO tiene Instagram vinculado todavía — para publicar")
        print("       en IG, vincúlalo en Meta Business Suite → Configuración →")
        print("       Cuentas vinculadas → Instagram. Facebook sí está listo.")
    return 0


def prueba() -> int:
    r = api("me/feed", {
        "message": ("FacturaQR ya está aquí: tus clientes se facturan solos con "
                    "una foto de su ticket, sin filas y sin capturar datos. "
                    "CFDI 4.0 válido ante el SAT en menos de un minuto.\n\n"
                    "Prueba gratis con 10 facturas (sin tarjeta): "
                    "https://facturaqr.app\n\n(publicación de prueba del sistema)"),
    }, post=True)
    if "error" in r:
        print("[error] No se pudo publicar:", r["error"].get("message"))
        return 1
    print(f"[ok] Post de prueba publicado en Facebook (id {r.get('id')}).")
    print("     Revísalo en tu página; puedes borrarlo cuando quieras.")
    return 0


if __name__ == "__main__":
    modo = sys.argv[1] if len(sys.argv) > 1 else "verificar"
    sys.exit({"verificar": verificar, "prueba": prueba}.get(modo, verificar)())
