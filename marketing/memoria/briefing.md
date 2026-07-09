# Briefing del sistema de marketing — FacturaQR
_Lo mantiene el orquestador. Todo agente lo lee ANTES de cualquier tarea._
_Actualizado: 2026-07-09 (plan editorial del blog listo)_

## Contexto del producto
- Qué es FacturaQR, planes, precios y FAQs: ver `contexto.md` (fuente de verdad).

## Estado actual
- Sistema de 7 agentes operando: definiciones en `.claude/agents/`, chat en
  facturaqr.app/agentes.php (diseño minimalista blanco, marca FacturaQR).
- El chat soporta **delegación**: cualquier agente (sobre todo el orquestador)
  puede invocar a sus colegas con la herramienta `delegar` y consolidar sus
  entregas. Memoria tipada en el navegador con recuperación por relevancia.
- Memoria estilo code-recall en `marketing/memoria/` (contexto, reglas,
  bitácoras por agente, cambios).
- Vigilante diario (GitHub Actions, 7am Chihuahua): detecta commits del repo
  privado del portal vía API (activo con VIGILANTE_TOKEN). El scraping de
  páginas públicas está bloqueado desde CI (SiteGround filtra las IPs de
  GitHub); hay guardas anti-basura para fallar seguro.
- Landing en producción con GA4 (G-QY5N3VNCTR); IDs de conversión de Google
  Ads pendientes (AW-XXXX en index.php).
- Planes vigentes: Local $5,000 (1,000 fact/mes) · Comercio $8,000 (3,000) ·
  Cadena $15,000 (ilimitado). Prueba gratis: 10 facturas sin tarjeta.

## Decisiones vigentes
- Mensaje central: "tus clientes se facturan solos con una foto del ticket".
- CTA principal: registro en el portal (clic a registro.php = evento sign_up).
- Tono: español de México, cercano y profesional, sin jerga fiscal.
- Identidad visual interna: blanco minimalista, Poppins/Nunito, azul #2563EB.

## Pendientes (del dueño — pedir estado cuando pregunte)
- EJECUTAR entregables listos en marketing/entregables/: crear Google
  Business Profile (google-business-profile.md, checklist incluido) y
  grabar los reels del calendario (calendario-redes-agosto.md, 16 piezas).
- Crear correo contacto@facturaqr.app en SiteGround y avisar para
  conectar el formulario (hoy los leads llegan a andres.guru@gmail.com).
- Enviar sitemap a Google Search Console.
- Logos en marketing/entregables/logos/ (wordmark 1840px y avatar redes
  1024px con margen seguro para recorte circular).
- **Blog:** plan editorial de 5 posts SEO+AEO aprobado (guía cliente final,
  restaurantes, gasolineras, CFDI 4.0 educativo, autofacturación vs a mano).
  Pendiente: el agente `contenido` redacta los posts; crear sección de blog en
  facturaqr.app; todos con CTA a registro gratis (10 facturas sin tarjeta) y
  schema FAQPage.
- Definir primera campaña: segmento inicial (giro y ciudad) y presupuesto.
- Completar IDs de conversión de Google Ads en index.php.
- Sin campañas activas todavía; no hay resultados que registrar aún.
