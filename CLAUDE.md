# FacturaQR — landing + sistema de agentes de marketing

Autofacturación CFDI 4.0 en México (facturaqr.app). El dueño es Andrés; suele
escribir desde el celular, en español casual. Responde en español.

## ARRANQUE OBLIGATORIO (contexto)
Antes de cualquier tarea de marketing/contenido, lee:
1. `marketing/memoria/briefing.md` — estado actual y decisiones vigentes
2. `marketing/memoria/contexto.md` — fuente de verdad del producto (precios, planes, tono)
3. `marketing/memoria/cambios.md` — últimos cambios detectados en el sitio/portal

Al terminar una tarea relevante, registra una línea en la bitácora del agente
correspondiente (`marketing/memoria/bitacora/<agente>.md`) con el formato
`- AAAA-MM-DD [decisión|patrón|warning|aprendizaje|resultado] texto`.

## Los 7 agentes (.claude/agents/)
orquestador-marketing (coordina), redes-sociales (FB/IG orgánico),
seo-local (GBP/Maps), anuncios (Meta/Google Ads), contenido (blog/copys),
operaciones (email/SMS/CRM), analitica (KPIs/reportes). Peticiones amplias →
orquestador; él delega.

## Publicar en Facebook + Instagram (petición típica: "publica X")
El pipeline ya existe — NO lo reinventes:
1. Agregar el post a `marketing/social/cola-posts.json` (campos: id, lote,
   tema, texto, hashtags, imagen_concepto, imagen_titular).
2. Generar la imagen: `node scripts/generar-imagenes-social.mjs` produce
   `social/post-NN.png` (1080×1080, marca encima; si hay foto en
   `social/base/post-NN.*` la usa de fondo). En el sandbox: symlink del
   node_modules del scratchpad (tiene playwright-core) a la raíz del repo,
   correr, quitar symlink. Chromium: `/opt/pw-browsers/chromium`.
3. Merge a main (las imágenes deben estar EN VIVO en
   facturaqr.app/social/post-NN.png antes de publicar — Meta las descarga por URL).
4. Disparar `.github/workflows/meta-publicador.yml` por workflow_dispatch
   (modos: verificar/prueba/lanzamiento/diario). El cron diario (16:00 UTC)
   publica solo el siguiente de la cola; estado en `marketing/social/estado.json`.

El token de Meta vive SOLO en el secret `META_TOKEN` del repo. Nunca en el
navegador, nunca en el chat, nunca en archivos.

## Deploy (SiteGround por FTPS)
- Push a `main` = deploy automático a facturaqr.app (deploy.yml). Excluidos del
  FTP: `.claude/`, `.github/`, `marketing/`, `scripts/`, README.md, CLAUDE.md.
- Flujo acordado: trabajar en rama → push → pedir aprobación al dueño
  (AskUserQuestion) → merge a main → verificar en vivo.
- SiteGround cachea `.html` 180 días ignorando .htaccess → páginas dinámicas
  van en `.php` con headers no-cache. SiteGround BLOQUEA IPs de GitHub Actions
  (no se puede scrapear el sitio desde CI sin las guardas de vigilar-sitios.py).

## Otras piezas
- `agentes.php` — página pública con chat hacia los agentes (API key del dueño
  en localStorage; ahí NO se publica a Meta, solo se idea/redacta).
- `.github/workflows/vigilante.yml` — cron diario que detecta cambios en
  facturaqr.app y el repo del portal y los escribe a la memoria. Entradas del
  repo privado llevan `"privado": true` y JAMÁS van al JSON público.
- `blog/` — 5 posts SEO/AEO; sitemap.xml al agregar posts nuevos.
- Precios vigentes: Local $499, Comercio $999, Cadena $2,999 MXN/mes; prueba
  gratis 10 facturas. WhatsApp 614 106 2426. Verifica contra contexto.md antes
  de citar precios en contenido.

## Seguridad
- Nunca pedir/aceptar tokens o contraseñas en el chat; secrets solo en GitHub
  Secrets. Si el dueño pega un token, decirle que lo revoque.
- No publicar detalles internos del portal (proveedores, arquitectura) en
  contenido público.
