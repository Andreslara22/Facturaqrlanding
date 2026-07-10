# Contexto del producto — FacturaQR (facturaqr.app)
_Fuente de verdad sobre qué es y qué ofrece el producto. Todo agente lo lee
junto con el briefing. Si la landing cambia, actualiza este archivo._
_Actualizado: 2026-07-10 (precios a mercado: 499/999/2,999)._

## Qué es
Autofacturación CFDI 4.0 para negocios en México. El negocio pone un **QR en su
mostrador**; el cliente lo escanea, **toma foto de su ticket**, la IA lee folio,
fecha, subtotal, IVA y total, el cliente pone su RFC y correo, y recibe su
factura (**PDF + XML timbrados**) en **menos de un minuto**. Sin apps, sin
registro del cliente, sin que el cajero capture nada.

## Cómo funciona (3 pasos)
1. **Escanea el QR** — desde la cámara del celular; se abre el portal con el logo del negocio.
2. **Foto del ticket** — la IA lee folio, fecha y total al instante.
3. **Recibe su CFDI** — pone RFC y correo; le llega PDF y XML timbrados en segundos.

## Características
- Lectura de tickets con IA (si la foto sale borrosa, pide otra).
- CFDI 4.0 timbrado real vía **PAC autorizado**, válido ante el SAT.
- **Cada folio se factura una sola vez** (sin duplicados).
- Panel de control: buscar/filtrar por RFC, folio o fecha; descarga masiva CSV
  y ZIP (PDF+XML); reenviar; cancelar con motivo SAT; aviso cuando el CSD está
  por vencer.
- Portal con la marca del negocio (logo, nombre, colores) según plan.
- Cartel QR listo para imprimir; el mismo QR sirve también en ticket/WhatsApp.
- Multi-sucursal: cada negocio con su portal y QR, administrados desde una cuenta.
- Seguridad: HTTPS/TLS, CSD resguardado.

## Requisitos para el negocio
RFC, régimen fiscal y Certificado de Sello Digital (CSD) del SAT — se sube una
vez desde el panel.

## Planes y precios (MXN/mes, sin costo de instalación ni contratos forzosos)
| Plan | Precio | Incluye |
|------|--------|---------|
| **Local** | $499 | 1 comercio, hasta 100 facturas/mes, IA + timbrado + panel, cartel QR estándar (marca FacturaQR), soporte por correo (72 h) |
| **Comercio** ★ más popular | $999 | Hasta 3 sucursales, hasta 500 facturas/mes, todo Local + marca propia en portal/cartel/correos, descarga masiva CSV/ZIP, soporte prioritario WhatsApp (24 h), reportes mensuales |
| **Cadena** | $2,999 | Comercios y facturas ilimitados, todo Comercio + soporte dedicado el mismo día, onboarding y alta de CSD asistidos, panel multi-marca |
- **Prueba gratis: 10 facturas al registrarse, sin tarjeta y sin compromiso.**
- Planes a la medida disponibles ("hablemos y te armamos uno").

## Público objetivo (giros)
Restaurantes y cafeterías (se facturan desde la mesa), gasolineras (QR en la
bomba o el ticket), tiendas y farmacias (adiós fila de atención a clientes),
talleres y servicios (factura cuando quiera, hasta desde su casa). Regla
general: **si entregas ticket, FacturaQR es para ti.**

## Dolores que resuelve (para copys)
- El cajero captura RFC/correo/uso de CFDI a mano con la fila esperando.
- Errores de dedo → facturas rechazadas, refacturaciones, clientes molestos.
- "Mándenos su ticket por correo y mañana le enviamos su factura."
- Facturas regadas en correos y carpetas, sin control ni respaldo.

## Contacto y enlaces
- Landing: https://facturaqr.app
- Registro/portal: portal.facturaqr.app (registro.php = conversión `sign_up`)
- WhatsApp: **614 106 2426**
- Demo en vivo disponible desde la landing; formulario de contacto con campo
  "plan de interés".
- Legal: aviso-privacidad.html y terminos.html. © FacturaQR, hecho en México.

## Portal — capacidades internas (INFO INTERNA: úsala para entender el
producto, NO publiques detalles técnicos como proveedores o arquitectura)
- Multi-tenant: varios comercios desde un despliegue; cada comercio tiene su
  portal con su marca (`?c=CODIGO`), su QR y su cartel imprimible.
- Registro self-service de comercios y login del dueño (panel).
- Panel del comercio: ver facturas, descargar PDF/XML, reenviar, cancelar,
  subir su CSD, logo y editar datos.
- Super-admin: alta/baja de comercios y uso por comercio (facturas del mes /
  total) para cobrar.
- Aviso automático de vigencia del CSD (cron) por comercio.
- Timbrado vía cuenta multiemisor de un PAC; lectura de tickets con IA.
- Cobros/pagos con webhook de Mercado Pago.

## Medición
GA4 activo (G-QY5N3VNCTR). Conversiones: clic a registro = `sign_up`; lead de
formulario = `CONV_LEAD` (IDs de Google Ads aún pendientes en index.php).
