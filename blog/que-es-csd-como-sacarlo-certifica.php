<?php header("Cache-Control: public, max-age=3600"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Qué es el CSD y cómo sacarlo con Certifica del SAT (guía 2026) | FacturaQR</title>
<meta name="description" content="El Certificado de Sello Digital explicado fácil: qué es, en qué se diferencia de la e.firma y cómo generarlo gratis con Certifica y CertiSAT Web, paso a paso.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://facturaqr.app/blog/que-es-csd-como-sacarlo-certifica.php">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://facturaqr.app/"},
    {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://facturaqr.app/blog/"},
    {"@type": "ListItem", "position": 3, "name": "Qué es el CSD y cómo sacarlo con Certifica del SAT", "item": "https://facturaqr.app/blog/que-es-csd-como-sacarlo-certifica.php"}
  ]
}
</script>
<meta property="og:site_name" content="FacturaQR">
<meta property="og:type" content="article">
<meta property="og:title" content="Qué es el CSD y cómo sacarlo con Certifica del SAT (guía 2026)">
<meta property="og:description" content="El Certificado de Sello Digital explicado fácil: qué es, en qué se diferencia de la e.firma y cómo generarlo gratis, paso a paso.">
<meta property="og:url" content="https://facturaqr.app/blog/que-es-csd-como-sacarlo-certifica.php">
<meta property="og:locale" content="es_MX">
<meta property="og:image" content="https://facturaqr.app/og-image.png">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/blog/estilo.css">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Qué es el CSD y cómo sacarlo con Certifica del SAT (guía 2026)",
  "description": "El Certificado de Sello Digital explicado fácil: qué es, en qué se diferencia de la e.firma y cómo generarlo gratis con Certifica y CertiSAT Web, paso a paso.",
  "inLanguage": "es-MX",
  "datePublished": "2026-07-10",
  "author": {"@type": "Organization", "name": "FacturaQR", "url": "https://facturaqr.app"},
  "publisher": {"@type": "Organization", "name": "FacturaQR", "url": "https://facturaqr.app"},
  "mainEntityOfPage": {"@type": "WebPage", "@id": "https://facturaqr.app/blog/que-es-csd-como-sacarlo-certifica.php"}
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "¿El CSD es lo mismo que la e.firma (FIEL)?", "acceptedAnswer": {"@type": "Answer", "text": "No. Son dos pares de archivos .cer/.key distintos. La e.firma es tu identidad digital general ante el SAT y sirve para trámites; el CSD (Certificado de Sello Digital) sirve únicamente para firmar (sellar) tus facturas. Necesitas la e.firma para TRAMITAR el CSD, pero si subes los archivos de la e.firma a tu sistema de facturación, serán rechazados. El .cer del CSD normalmente empieza con 'CSD_'."}},
    {"@type": "Question", "name": "¿Cuánto cuesta sacar el CSD?", "acceptedAnswer": {"@type": "Answer", "text": "Nada. El trámite es gratuito: la aplicación Certifica del SAT genera la solicitud y CertiSAT Web te entrega el certificado sin costo. Solo necesitas tu e.firma vigente y una computadora."}},
    {"@type": "Question", "name": "¿Cuánto tarda en activarse el CSD después de sacarlo?", "acceptedAnswer": {"@type": "Answer", "text": "El certificado se descarga en minutos, pero el SAT tarda de 24 a 48 horas en reflejarlo en sus listas. Durante esa ventana, si intentas timbrar verás errores como 'certificado no válido' o 'fuera de vigencia' (error 305). Es normal: espera y vuelve a intentar."}},
    {"@type": "Question", "name": "¿Qué contraseña me van a pedir al usar mi CSD?", "acceptedAnswer": {"@type": "Answer", "text": "La contraseña de la llave privada del CSD es la que TÚ CREAS dentro de Certifica al generar el certificado, no la de tu e.firma ni la de tu portal del SAT. Anótala en un lugar seguro: es la que capturarás en tu sistema de facturación junto con el .cer y el .key."}}
  ]
}
</script>
<script>
  window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
  gtag('js',new Date());gtag('config','G-QY5N3VNCTR');
  var s=document.createElement('script');s.async=true;s.src='https://www.googletagmanager.com/gtag/js?id=G-QY5N3VNCTR';document.head.appendChild(s);
  document.addEventListener('click',function(ev){var a=ev.target.closest&&ev.target.closest('a[href*="registro.php"]');if(a)gtag('event','sign_up');},true);
</script>
</head>
<body>
<nav class="nav"><div class="nav-in">
  <a class="logo" href="/">Factura<b>QR</b></a>
  <div class="nav-links">
    <a href="/blog/">Blog</a>
    <a href="/#como">Cómo funciona</a>
    <a href="/#precio">Precio</a>
    <a class="nav-cta" href="https://portal.facturaqr.app/registro.php">Prueba gratis</a>
  </div>
</div></nav>
<main class="wrap">
<article>
  <p class="crumbs"><a href="/">Inicio</a> › <a href="/blog/">Blog</a> › Qué es el CSD y cómo sacarlo</p>
  <h1>Qué es el CSD y cómo sacarlo con Certifica del SAT (guía 2026)</h1>
  <p class="meta">FacturaQR · Julio 2026 · Lectura de 8 min</p>
  <figure class="hero"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 300" role="img" aria-label="Certificado de Sello Digital con archivos cer y key"><rect width="640" height="300" fill="#EFF4FF"/><circle cx="80" cy="60" r="90" fill="#DBEAFE" opacity=".6"/><circle cx="580" cy="260" r="110" fill="#DBEAFE" opacity=".5"/><rect x="200" y="55" width="240" height="190" rx="14" fill="#fff" stroke="#0F172A" stroke-width="3"/><circle cx="320" cy="115" r="34" fill="#EFF4FF" stroke="#2563EB" stroke-width="3"/><path d="M320 98 v20 M320 118 l12 12" stroke="#2563EB" stroke-width="5" stroke-linecap="round" fill="none"/><rect x="238" y="168" width="70" height="24" rx="12" fill="#EFF4FF" stroke="#2563EB" stroke-width="2"/><text x="273" y="185" font-family="Arial" font-size="13" font-weight="bold" fill="#2563EB" text-anchor="middle">.cer</text><rect x="330" y="168" width="70" height="24" rx="12" fill="#EFF4FF" stroke="#2563EB" stroke-width="2"/><text x="365" y="185" font-family="Arial" font-size="13" font-weight="bold" fill="#2563EB" text-anchor="middle">.key</text><rect x="255" y="205" width="130" height="18" rx="9" fill="#DCFCE7"/><text x="320" y="218" font-family="Arial" font-size="11" font-weight="bold" fill="#16A34A" text-anchor="middle">SELLO DIGITAL</text><text x="320" y="285" font-family="Arial" font-size="16" font-weight="bold" fill="#0F172A" text-anchor="middle">El "sello" que firma tus facturas</text></svg></figure>
  <div class="tldr"><strong>Respuesta rápida:</strong> El CSD (Certificado de Sello Digital) es el par de archivos <strong>.cer y .key</strong> con el que se firman tus facturas ante el SAT. <strong>No es tu e.firma</strong>: se genera aparte, gratis, con la aplicación <strong>Certifica</strong> y se recoge en <strong>CertiSAT Web</strong>. Tarda de 24 a 48 horas en activarse.</div>

  <p>Si vas a emitir facturas de tu negocio —tú mismo o con un portal de autofacturación— tarde o temprano alguien te va a pedir "tu CSD". Y aquí es donde el 90% de los dueños de negocio se atora, porque el SAT no lo explica en cristiano.</p>
  <p>Esta guía te lleva de cero a tener tu CSD listo, sin contador de por medio (aunque tu contador siempre puede ayudarte).</p>

  <h2>CSD vs e.firma: la confusión que rechaza facturas</h2>
  <p>Los dos son pares de archivos .cer/.key, y por eso se confunden. Pero:</p>
  <ul>
    <li>La <strong>e.firma (antes FIEL)</strong> es tu identidad digital ante el SAT. Sirve para entrar a trámites, firmar declaraciones, etc.</li>
    <li>El <strong>CSD</strong> sirve para UNA sola cosa: sellar (firmar) los CFDI que emites. Sin CSD no hay factura.</li>
  </ul>
  <p>La regla de oro: <strong>necesitas la e.firma para tramitar el CSD, pero no son intercambiables.</strong> Si subes tu e.firma a un sistema de facturación, será rechazada. Un truco para distinguirlos: el .cer del CSD casi siempre empieza con <code>CSD_</code>.</p>

  <h2>Lo que necesitas antes de empezar</h2>
  <ul>
    <li>Una <strong>computadora</strong> (Windows o Mac) — la aplicación del SAT no funciona en celular.</li>
    <li>Tu <strong>e.firma vigente</strong> (los .cer y .key de la FIEL más su contraseña).</li>
    <li><strong>Java</strong> instalado (java.com/es/download) — Certifica lo requiere.</li>
  </ul>

  <h2>Paso 1: genera la solicitud con Certifica</h2>
  <ol>
    <li>Descarga <strong>Certifica</strong> desde el portal del SAT: <em>portalsat.plataforma.sat.gob.mx/Certifica/</em> (elige la versión de 64 bits en la mayoría de los equipos).</li>
    <li>Ábrela y elige <strong>"Solicitud de Certificados de Sello Digital (CSD)"</strong>. Te pedirá cargar tu e.firma.</li>
    <li>Ponle un nombre a tu sucursal (por ejemplo "MATRIZ") y, cuando te pida <strong>crear la contraseña de la clave privada, anótala</strong>: esa contraseña —la que tú creas aquí, no la de tu e.firma— es la que usarás después en tu sistema de facturación.</li>
    <li>Certifica genera dos archivos: tu <strong>.key</strong> (la llave privada del CSD, guárdala bien) y una solicitud <strong>.sdg</strong>.</li>
  </ol>

  <h2>Paso 2: envía la solicitud y descarga tu .cer en CertiSAT Web</h2>
  <ol>
    <li>Entra a <strong>CertiSAT Web</strong> con tu e.firma: <em>aplicacionesc.mat.sat.gob.mx/certisat/</em></li>
    <li>Elige <strong>"Envío de solicitud de certificados de sello digital"</strong> y sube el archivo .sdg.</li>
    <li>En <strong>"Recuperación de certificados"</strong>, busca por tu RFC y descarga tu <strong>.cer</strong> (suele estar listo en minutos).</li>
  </ol>
  <p>Al terminar tendrás las tres piezas: el <strong>.cer</strong>, el <strong>.key</strong> y la <strong>contraseña que creaste</strong>. Eso es tu CSD completo.</p>

  <h2>El detalle que nadie te dice: tarda 24–48 horas en activarse</h2>
  <p>Aunque ya tengas los archivos en tu compu, el SAT tarda de <strong>24 a 48 horas</strong> en reflejar el certificado en sus listas. Si intentas timbrar antes, verás errores tipo <em>"certificado no válido"</em> o <em>"la fecha de emisión no está dentro de la vigencia del CSD"</em> (el famoso error 305). No es que hayas hecho algo mal: solo espera y reintenta.</p>

  <div class="cta">
    <h3>¿Y después del CSD, qué sigue?</h3>
    <p>Lo subes una sola vez a FacturaQR (viaja directo al PAC, nuestro servidor no lo guarda), pegas tu cartel QR en el mostrador y tus clientes se facturan solos. Si el trámite se te complica, nuestro equipo lo configura por ti.</p>
    <a href="https://portal.facturaqr.app/registro.php">Crear mi cuenta gratis</a>
    <small>Incluye 10 facturas reales de regalo</small>
  </div>

  <h2>¿Prefieres la guía con capturas de pantalla?</h2>
  <p>Publicamos un <a href="https://portal.facturaqr.app/guia-facturaqr.pdf" target="_blank" rel="noopener"><strong>Manual del comercio en PDF</strong></a> con este mismo proceso ilustrado paso a paso —capturas incluidas—, más la configuración completa del portal: datos fiscales, modo En vivo y tu QR. Descárgalo gratis.</p>

  <h2>Errores comunes (y su solución en una línea)</h2>
  <ul>
    <li><strong>"Certificado no válido"</strong> → subiste la e.firma en lugar del CSD, o el CSD aún no activa (espera 24–48 h).</li>
    <li><strong>"Contraseña incorrecta"</strong> → estás usando la de la e.firma; usa la que creaste en Certifica.</li>
    <li><strong>Error 305 al timbrar</strong> → CSD muy nuevo; el SAT aún no lo refleja. Reintenta más tarde.</li>
    <li><strong>Certifica no abre</strong> → falta Java o descargaste la versión de 32 bits en un equipo de 64.</li>
  </ul>

  <section class="faq">
    <h2>Preguntas frecuentes</h2>
    <details><summary>¿El CSD es lo mismo que la e.firma (FIEL)?</summary><p>No. Son dos pares de archivos .cer/.key distintos. La e.firma es tu identidad digital general ante el SAT; el CSD sirve únicamente para sellar tus facturas. Necesitas la e.firma para tramitar el CSD, pero si subes la e.firma a tu sistema de facturación será rechazada. El .cer del CSD normalmente empieza con "CSD_".</p></details>
    <details><summary>¿Cuánto cuesta sacar el CSD?</summary><p>Nada: el trámite es gratuito. Certifica genera la solicitud y CertiSAT Web te entrega el certificado sin costo. Solo necesitas tu e.firma vigente y una computadora.</p></details>
    <details><summary>¿Cuánto tarda en activarse el CSD?</summary><p>El certificado se descarga en minutos, pero el SAT tarda de 24 a 48 horas en reflejarlo en sus listas. Durante esa ventana verás errores de "certificado no válido" si intentas timbrar. Es normal: espera y reintenta.</p></details>
    <details><summary>¿Qué contraseña me van a pedir al usar mi CSD?</summary><p>La que TÚ CREAS dentro de Certifica al generar el certificado — no la de tu e.firma ni la del portal del SAT. Anótala: es la que capturas en tu sistema de facturación junto con el .cer y el .key.</p></details>
  </section>

  <div class="cta">
    <h3>CSD listo = clientes facturándose solos</h3>
    <p>Crea tu cuenta, sube tu CSD y estrena 10 facturas reales gratis. Tu cajero no vuelve a capturar un RFC.</p>
    <a href="https://portal.facturaqr.app/registro.php">Empezar gratis — 10 facturas</a>
    <small>Sin tarjeta y sin compromiso</small>
  </div>

  <nav class="rel"><h2>Sigue leyendo</h2><ul>
    <li><a href="/blog/que-es-cfdi-4-0-explicado-facil.php">Qué es el CFDI 4.0 explicado fácil</a></li>
    <li><a href="/blog/cuanto-cuesta-portal-autofacturacion.php">Cuánto cuesta un portal de autofacturación en México</a></li>
    <li><a href="/blog/como-facturar-un-ticket-con-foto.php">Cómo facturar un ticket con una foto en 1 minuto</a></li>
  </ul></nav>
</article>
</main>
<footer class="pie"><div class="pie-in">
  <span>© 2026 FacturaQR · Autofacturación CFDI 4.0</span>
  <a href="/">Inicio</a><a href="/blog/">Blog</a>
  <a href="/aviso-privacidad.html">Privacidad</a><a href="/terminos.html">Términos</a>
</div></footer>
</body>
</html>
