#!/usr/bin/env python3
"""Vigilante de sitios — memoria automática de cambios para los agentes.

Descarga las páginas públicas de facturaqr.app y portal.facturaqr.app,
extrae su texto visible y lo compara contra la última "foto" guardada en
marketing/memoria/snapshots/. Si algo cambió:

  1. Actualiza el snapshot.
  2. Agrega recuerdos `[cambio]` a marketing/memoria/cambios.md
     (lo leen los agentes de Claude Code).
  3. Regenera cambios-sitio.json en la raíz (se despliega al sitio y lo
     leen los agentes del chat web en agentes.php).

Sin dependencias externas (usa curl). Lo corre GitHub Actions diario, y
también puede correrse a mano: python3 scripts/vigilar-sitios.py
"""
import html
import json
import pathlib
import re
import subprocess
import sys
from datetime import date

RAIZ = pathlib.Path(__file__).resolve().parent.parent
SNAPSHOTS = RAIZ / "marketing" / "memoria" / "snapshots"
CAMBIOS_MD = RAIZ / "marketing" / "memoria" / "cambios.md"
CAMBIOS_JSON = RAIZ / "cambios-sitio.json"
MAX_JSON = 30          # entradas que ve el chat web
MAX_EJEMPLOS = 6       # líneas de ejemplo por cambio

PAGINAS = {
    "landing":            "https://facturaqr.app/",
    "terminos":           "https://facturaqr.app/terminos.html",
    "aviso-privacidad":   "https://facturaqr.app/aviso-privacidad.html",
    "portal":             "https://portal.facturaqr.app/",
    "portal-registro":    "https://portal.facturaqr.app/registro.php",
}


def descargar(url: str) -> str | None:
    try:
        r = subprocess.run(
            ["curl", "-sS", "-L", "--max-time", "30", url],
            capture_output=True, text=True, timeout=60,
        )
        return r.stdout if r.returncode == 0 and r.stdout.strip() else None
    except Exception:
        return None


def extraer_texto(html_crudo: str) -> str:
    t = re.sub(r"<script.*?</script>", " ", html_crudo, flags=re.S | re.I)
    t = re.sub(r"<style.*?</style>", " ", t, flags=re.S | re.I)
    t = re.sub(r"<!--.*?-->", " ", t, flags=re.S)
    t = re.sub(r"<[^>]+>", "\n", t)
    t = html.unescape(t)
    lineas = [" ".join(l.split()) for l in t.split("\n")]
    # líneas con contenido real, sin duplicados consecutivos
    limpio, previa = [], None
    for l in lineas:
        if len(l) > 2 and l != previa:
            limpio.append(l)
            previa = l
    return "\n".join(limpio)


def diff_lineas(viejo: str, nuevo: str):
    sv, sn = set(viejo.split("\n")), set(nuevo.split("\n"))
    agregadas = [l for l in nuevo.split("\n") if l not in sv]
    quitadas = [l for l in viejo.split("\n") if l not in sn]
    return agregadas, quitadas


def main() -> int:
    SNAPSHOTS.mkdir(parents=True, exist_ok=True)
    hoy = date.today().isoformat()
    detectados = []

    for nombre, url in PAGINAS.items():
        crudo = descargar(url)
        if crudo is None:
            print(f"[warn] no se pudo descargar {url}", file=sys.stderr)
            continue
        texto = extraer_texto(crudo)
        snap = SNAPSHOTS / f"{nombre}.txt"

        if not snap.exists():
            snap.write_text(texto)
            print(f"[ok] primera captura de {nombre}")
            continue

        viejo = snap.read_text()
        if viejo == texto:
            print(f"[ok] sin cambios en {nombre}")
            continue

        agregadas, quitadas = diff_lineas(viejo, texto)
        snap.write_text(texto)
        resumen = f"+{len(agregadas)}/-{len(quitadas)} líneas"
        ejemplos = [f"+ {l}" for l in agregadas[:MAX_EJEMPLOS]] + \
                   [f"- {l}" for l in quitadas[:MAX_EJEMPLOS]]
        detectados.append({
            "fecha": hoy, "pagina": nombre, "url": url,
            "resumen": resumen + (" · " + " | ".join(ejemplos[:4]) if ejemplos else ""),
            "agregado": agregadas[:MAX_EJEMPLOS],
            "quitado": quitadas[:MAX_EJEMPLOS],
        })
        print(f"[CAMBIO] {nombre}: {resumen}")

    if detectados:
        # 1) cambios.md — memoria para los agentes de Claude Code
        if not CAMBIOS_MD.exists():
            CAMBIOS_MD.write_text(
                "# Cambios detectados en los sitios (automático)\n"
                "_Lo escribe scripts/vigilar-sitios.py vía GitHub Actions. Un\n"
                "recuerdo por cambio; los agentes lo leen en su protocolo._\n"
            )
        with CAMBIOS_MD.open("a") as f:
            for c in detectados:
                f.write(f"\n## {c['fecha']} — {c['pagina']} ({c['url']})\n")
                f.write(f"- {c['fecha']} [cambio] {c['pagina']}: {c['resumen'].split(' · ')[0]}\n")
                for l in c["agregado"]:
                    f.write(f"  + {l}\n")
                for l in c["quitado"]:
                    f.write(f"  - {l}\n")

    # 2) cambios-sitio.json — memoria para el chat web (siempre regenerado)
    previos = []
    if CAMBIOS_JSON.exists():
        try:
            previos = json.loads(CAMBIOS_JSON.read_text())
        except Exception:
            previos = []
    todos = (detectados + previos)[:MAX_JSON]
    CAMBIOS_JSON.write_text(json.dumps(todos, ensure_ascii=False, indent=1))

    print(f"[fin] {len(detectados)} cambio(s) detectado(s)")
    return 0


if __name__ == "__main__":
    sys.exit(main())
