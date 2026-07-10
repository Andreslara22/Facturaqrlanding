<?php header("Cache-Control: no-cache, no-store, must-revalidate"); header("Pragma: no-cache"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Campaña de Redes Sociales — FacturaQR</title>
<meta name="description" content="Campaña de lanzamiento y calendario diario de FacturaQR en Facebook e Instagram: piezas, imágenes, copys y estado de publicación.">
<meta name="robots" content="noindex, nofollow">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
  :root{
    --bg:#FFFFFF; --ink:#0F172A; --mute:#64748B; --mute-2:#94A3B8;
    --line:#E2E8F0; --line-2:#CBD5E1; --soft:#F8FAFC;
    --blue:#2563EB; --blue-600:#1D4ED8; --verde:#16A34A; --arena:#D97706;
    --display:"Poppins",system-ui,sans-serif;
    --body:"Nunito",system-ui,-apple-system,"Segoe UI",sans-serif;
  }
  *{box-sizing:border-box}
  html,body{margin:0;padding:0}
  body{background:var(--bg);color:var(--ink);font-family:var(--body);line-height:1.5;padding:48px 16px 72px}
  .wrap{max-width:1040px;margin:0 auto}
  header{display:flex;flex-direction:column;align-items:center;gap:10px;margin-bottom:12px;text-align:center}
  .eyebrow{font-family:var(--display);font-size:11px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--mute)}
  h1{font-family:var(--display);font-size:clamp(22px,4vw,30px);font-weight:700;margin:0;letter-spacing:-.01em}
  h1 span{color:var(--blue)}
  .sub{font-size:14px;color:var(--mute);margin:0;max-width:560px}
  .resumen{display:flex;justify-content:center;gap:10px;flex-wrap:wrap;margin:22px 0 34px}
  .stat{border:1px solid var(--line);border-radius:12px;padding:10px 18px;text-align:center;background:var(--soft)}
  .stat b{display:block;font-family:var(--display);font-size:20px;color:var(--ink)}
  .stat small{font-size:11px;color:var(--mute);text-transform:uppercase;letter-spacing:.06em}
  .grupo-title{font-family:var(--display);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--mute);margin:34px 2px 14px;display:flex;align-items:center;gap:10px}
  .grupo-title::after{content:"";flex:1;height:1px;background:var(--line)}
  .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));gap:18px}
  .card{border:1px solid var(--line);border-radius:14px;overflow:hidden;background:var(--bg);box-shadow:0 1px 2px rgba(15,23,42,.04);display:flex;flex-direction:column}
  .card img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block;background:var(--soft)}
  .card-body{padding:14px 16px 16px;display:flex;flex-direction:column;gap:8px;flex:1}
  .badges{display:flex;gap:6px;flex-wrap:wrap}
  .badge{font-size:10.5px;font-weight:700;border-radius:20px;padding:3px 10px;letter-spacing:.02em}
  .b-lanzamiento{background:#FEF3C7;color:#92400E}
  .b-diario{background:#DBEAFE;color:#1D4ED8}
  .b-ok{background:#DCFCE7;color:#166534}
  .b-pend{background:var(--soft);color:var(--mute);border:1px solid var(--line)}
  .tema{font-family:var(--display);font-size:14.5px;font-weight:700;margin:0}
  .texto{font-size:13px;color:#334155;white-space:pre-line;margin:0}
  .hashtags{font-size:11.5px;color:var(--blue);word-break:break-word}
  footer{margin-top:44px;text-align:center;font-size:12.5px;color:var(--mute)}
  footer a{color:var(--blue);font-weight:700;text-decoration:none}
  footer a:hover{text-decoration:underline}
  @media (max-width:560px){ body{padding:28px 14px 48px} .grid{grid-template-columns:1fr} }
</style>
</head>
<body>
<div class="wrap">
  <header>
    <span class="eyebrow">FacturaQR · Marketing</span>
    <h1>Campaña de <span>Redes Sociales</span></h1>
    <p class="sub">Lanzamiento (5 piezas) + calendario diario, publicadas automáticamente en Facebook e Instagram por el agente <code>redes-sociales</code>.</p>
  </header>

  <div class="resumen" id="resumen"></div>

  <div id="contenido"></div>

  <footer>
    Campaña generada por el sistema de agentes de <a href="/agentes.php">facturaqr.app/agentes.php</a>
  </footer>
</div>
<script>
(function(){
  'use strict';
  var DATA = JSON.parse('{"posts":[{"id":1,"lote":"lanzamiento","tema":"Presentación","texto":"Le decimos adiós a la fila de \\"quiero mi factura\\" a fin de mes.\\n\\nFacturaQR pone un código QR en tu mostrador. Tu cliente lo escanea, toma foto de su ticket, pone su RFC y correo, y en menos de un minuto tiene su factura CFDI 4.0 (PDF + XML) en su correo.\\n\\nSin que tu cajero capture nada. Sin apps que instalar. Válida ante el SAT.\\n\\nEmpieza gratis con 10 facturas, sin tarjeta.\\n👉 Regístrate en facturaqr.app","hashtags":"#FacturaQR #CFDI40 #AutofacturaciónMéxico #FacturaciónElectrónica #PymesMéxico #NegociosMexicanos #TicketAFactura","imagen_concepto":"Fondo blanco/azul de marca con el wordmark FacturaQR arriba, un ticket de papel transformándose (flecha) en una factura PDF con sello, y un ícono de QR pequeño al lado. Estilo limpio, minimalista.","imagen_titular":"Tu ticket se vuelve tu factura"},{"id":2,"lote":"lanzamiento","tema":"Demo del flujo foto→factura","texto":"Así de fácil es facturar con FacturaQR:\\n\\n1️⃣ Tu cliente escanea el QR de tu mostrador\\n2️⃣ Toma foto de su ticket — la IA lee folio, fecha y total\\n3️⃣ Pone su RFC y correo\\n\\nY listo: factura CFDI 4.0 (PDF + XML) en su correo en menos de un minuto. Nada de formularios largos, nada de \\"mándame tus datos por WhatsApp\\".\\n\\n👉 Ve cómo funciona en facturaqr.app","hashtags":"#FacturaQR #CFDI40 #FacturaciónElectrónica #AutofacturaciónMéxico #TicketAFactura #PymesMéxico","imagen_concepto":"Imagen dividida en 3 pasos numerados con íconos: 1) celular escaneando un QR, 2) foto de un ticket, 3) sobre de correo con ícono de factura y check verde.","imagen_titular":"3 pasos: foto y listo"},{"id":3,"lote":"lanzamiento","tema":"Dolor de la fila en caja","texto":"Fin de mes. Fila de clientes pidiendo su factura. Tu cajero capturando RFC uno por uno mientras la fila crece.\\n\\nCon FacturaQR, esa fila desaparece: el cliente escanea un QR, toma foto de su ticket y se factura solo, sin que nadie en tu mostrador toque una tecla.\\n\\nMenos estrés para tu equipo, menos clientes molestos.\\n\\n👉 Conoce cómo en facturaqr.app","hashtags":"#FacturaQR #FacturaciónElectrónica #AutofacturaciónMéxico #Restaurantes #TiendasMéxico #PymesMéxico #CFDI40","imagen_concepto":"Ilustración de una fila de personas frente a una caja tachada con una X roja, y al lado una sola persona feliz escaneando un QR con su celular. Contraste claro entre \'antes\' y \'después\'.","imagen_titular":"Adiós fila de fin de mes"},{"id":4,"lote":"lanzamiento","tema":"Prueba gratis","texto":"¿Quieres ver cómo funciona antes de decidir? Prueba FacturaQR gratis con 10 facturas, sin tarjeta y sin compromiso.\\n\\nSube tu Certificado de Sello Digital (CSD), te damos tu QR listo para imprimir, y en minutos tus clientes ya se pueden facturar solos con una foto de su ticket.\\n\\n👉 Regístrate en facturaqr.app o escríbenos por WhatsApp: 614 106 2426","hashtags":"#FacturaQR #PruebaGratis #CFDI40 #AutofacturaciónMéxico #PymesMéxico #NegociosMexicanos","imagen_concepto":"Imagen con un sello o badge tipo \'GRATIS\' en la esquina, el número \'10\' grande junto a la palabra \'facturas\', y un ícono de tarjeta de crédito tachada (sin tarjeta).","imagen_titular":"10 facturas gratis, sin tarjeta"},{"id":5,"lote":"lanzamiento","tema":"Por giro: a quién le sirve","texto":"¿Tu negocio entrega ticket? Entonces FacturaQR es para ti:\\n\\n🍽️ Restaurantes y cafeterías — se facturan desde la mesa\\n⛽ Gasolineras — QR en la bomba o el ticket\\n🛒 Tiendas y farmacias — adiós fila de atención\\n🔧 Talleres y servicios — factura cuando quiera, hasta desde su casa\\n\\nUn QR, una foto, una factura. Así de simple.\\n\\n👉 facturaqr.app","hashtags":"#FacturaQR #Restaurantes #Gasolineras #Farmacias #Talleres #PymesMéxico #CFDI40","imagen_concepto":"Cuadrícula de 4 íconos (plato, surtidor de gasolina, carrito de tienda, llave de mecánico) alrededor de un QR central, con la marca FacturaQR.","imagen_titular":"Si entregas ticket, esto es para ti"},{"id":7,"lote":"diario","tema":"Por giro: restaurantes","texto":"El fin de mes en un restaurante no debería significar meseros anotando RFCs en servilletas ni clientes esperando su factura parados junto a la caja.\\n\\nCon FacturaQR pones un QR en la mesa o impreso en el ticket. Tu comensal lo escanea, toma foto de su cuenta, pone su RFC y correo, y recibe su factura CFDI 4.0 (PDF + XML) en menos de un minuto — desde su lugar o de salida.\\n\\nTu equipo no captura nada: siguen atendiendo mesas. Menos filas, menos errores de dedo, menos \\"mándame los datos por WhatsApp\\".\\n\\n👉 Míralo funcionar en facturaqr.app","hashtags":"#FacturaQR #Restaurantes #CFDI40 #FacturaciónElectrónica #Gastronomía #AutofacturaciónMéxico #PymesMéxico","imagen_concepto":"Mesa de restaurante con un tarjetero de QR junto a la cuenta, plato y taza de café de fondo, estilo fotografía cálida.","imagen_titular":"Factura desde la mesa"},{"id":6,"lote":"diario","tema":"Educativo: qué es el CFDI 4.0","texto":"¿Qué es exactamente un CFDI 4.0? Es la factura electrónica que exige el SAT desde 2022: un archivo con PDF (para leer) y XML (el que vale fiscalmente), timbrado por un PAC autorizado.\\n\\nCon FacturaQR, tu cliente lo recibe completo — PDF + XML — en su correo, en menos de un minuto, después de tomar foto de su ticket.\\n\\n¿Tienes dudas sobre cómo se ve una factura CFDI 4.0? Escríbenos.\\n\\n👉 Más info en facturaqr.app","hashtags":"#CFDI40 #FacturaciónElectrónica #SAT #FacturaQR #TipsFiscales #PymesMéxico","imagen_concepto":"Ilustración simple de un documento con dos capas etiquetadas \'PDF\' y \'XML\' unidas por un sello de \'timbrado\', fondo azul de marca.","imagen_titular":"¿Qué es un CFDI 4.0?"},{"id":8,"lote":"diario","tema":"Comparativa: a mano vs autofacturación","texto":"Facturar a mano: el cliente dicta su RFC, tu cajero lo escribe (a veces mal), buscas el correo, envías, y a veces hay que corregir y reenviar.\\n\\nFacturar con FacturaQR: el cliente escanea el QR, toma foto de su ticket, pone su propio RFC y correo, y recibe su CFDI 4.0 en menos de un minuto. Sin intermediarios, sin errores de dedo de un tercero.\\n\\n👉 Compruébalo en facturaqr.app","hashtags":"#FacturaQR #AutofacturaciónMéxico #CFDI40 #FacturaciónElectrónica #PymesMéxico #Emprendedores","imagen_concepto":"Imagen dividida en dos mitades: izquierda \'A MANO\' con un formulario tachoneado y borrones; derecha \'CON QR\' con un celular limpio mostrando la pantalla de factura lista.","imagen_titular":"A mano vs. con un QR"},{"id":9,"lote":"diario","tema":"Testimonial-hipotético","texto":"Imagina que eres dueño de una tienda de abarrotes. Es día 30, y en vez de una fila de clientes pidiendo factura, tus cajas siguen su ritmo normal: cada quien escanea el QR, toma foto de su ticket y se factura solo, sin que tu personal se detenga a capturar nada.\\n\\nEso es lo que buscamos que vivas con FacturaQR.\\n\\n👉 Pruébalo gratis en facturaqr.app","hashtags":"#FacturaQR #PymesMéxico #NegociosMexicanos #CFDI40 #AutofacturaciónMéxico #TiendasMéxico","imagen_concepto":"Escena ilustrada de una tienda de abarrotes tranquila, cliente escaneando QR en el mostrador sin fila, ambiente cotidiano (ilustración, no foto de persona real).","imagen_titular":"Imagina tu fin de mes sin fila"},{"id":10,"lote":"diario","tema":"FAQ: validez ante el SAT","texto":"Nos preguntan seguido: ¿la factura que genera FacturaQR es válida ante el SAT?\\n\\nSí. Es un CFDI 4.0 real, timbrado por un PAC autorizado por el SAT, con su PDF y su XML. No es una copia ni un comprobante genérico: es la factura completa que tu cliente necesita.\\n\\n¿Tienes otra duda? Escríbenos por WhatsApp: 614 106 2426\\n\\n👉 facturaqr.app","hashtags":"#FacturaQR #CFDI40 #SAT #FacturaciónElectrónica #PymesMéxico #TipsFiscales","imagen_concepto":"Documento de factura con un sello/check verde grande de \'Válida ante el SAT\', fondo limpio azul/blanco.","imagen_titular":"¿Es válida ante el SAT? Sí"},{"id":11,"lote":"diario","tema":"Por giro: gasolineras","texto":"En la gasolinera, nadie quiere perder tiempo pidiendo factura después de cargar gasolina.\\n\\nCon un QR en la bomba o en el ticket, tu cliente factura su carga desde el celular en el momento, sin bajarse de fila ni volver después. Tu despachador sigue despachando.\\n\\n👉 Conoce FacturaQR en facturaqr.app","hashtags":"#FacturaQR #Gasolineras #CFDI40 #FacturaciónElectrónica #PymesMéxico #Automotriz","imagen_concepto":"Bomba de gasolina con una calcomanía de QR pegada, celular en primer plano mostrando la pantalla de escaneo, ambiente de gasolinera.","imagen_titular":"Factura tu carga en segundos"},{"id":12,"lote":"diario","tema":"Dolor: errores de RFC","texto":"Un RFC mal capturado significa: factura rechazada, cliente molesto, y tu equipo teniendo que refacturar todo de nuevo.\\n\\nCuando el cliente escribe su propio RFC y correo directo en su celular, ese error casi desaparece. Menos refacturaciones, menos quejas.\\n\\n👉 Descúbrelo en facturaqr.app","hashtags":"#FacturaQR #CFDI40 #FacturaciónElectrónica #AutofacturaciónMéxico #PymesMéxico #Emprendedores","imagen_concepto":"Formulario en papel con un RFC tachado y corregido varias veces en rojo, junto a un celular mostrando el mismo campo limpio y correcto en pantalla.","imagen_titular":"Menos errores, menos refacturas"},{"id":13,"lote":"diario","tema":"Demo: el tiempo real","texto":"¿Cuánto tarda tu cliente en facturarse con FacturaQR? Escanea el QR, toma foto de su ticket, pone RFC y correo, y recibe su CFDI 4.0 en su bandeja de entrada en menos de un minuto.\\n\\nSin esperar a que alguien más lo capture. Sin ir y venir de correos.\\n\\n👉 Míralo en facturaqr.app","hashtags":"#FacturaQR #CFDI40 #FacturaciónElectrónica #AutofacturaciónMéxico #TicketAFactura #PymesMéxico","imagen_concepto":"Cronómetro o reloj marcando \'menos de 1 minuto\' junto a la secuencia QR → foto → factura en la pantalla de un celular.","imagen_titular":"Factura en menos de 1 minuto"},{"id":14,"lote":"diario","tema":"Educativo: sin duplicados","texto":"Un dolor común: dos personas facturan el mismo ticket y terminas con duplicados o problemas de conciliación.\\n\\nEn FacturaQR, cada folio se factura una sola vez: si alguien más ya facturó ese ticket, el sistema no permite duplicarlo. Menos dolores de cabeza para tu contabilidad.\\n\\n👉 Conoce más en facturaqr.app","hashtags":"#FacturaQR #CFDI40 #FacturaciónElectrónica #PymesMéxico #TipsFiscales #Contabilidad","imagen_concepto":"Ticket con un folio resaltado y un ícono de candado o check, junto a un segundo ticket idéntico tachado con la leyenda \'ya facturado\'.","imagen_titular":"Cada ticket se factura una vez"},{"id":15,"lote":"diario","tema":"Por giro: tiendas y farmacias","texto":"En una farmacia o tienda, la fila de la caja ya es suficiente. No hace falta otra fila para pedir factura.\\n\\nCon el QR de FacturaQR en el mostrador, tu cliente se factura solo desde su celular — antes o después de pagar, sin detener la atención en caja.\\n\\n👉 Pruébalo en facturaqr.app","hashtags":"#FacturaQR #Farmacias #TiendasMéxico #CFDI40 #FacturaciónElectrónica #PymesMéxico","imagen_concepto":"Mostrador de farmacia o tienda con un tarjetero de QR junto a la caja registradora, cliente escaneando con su celular, ambiente de tienda.","imagen_titular":"Una fila menos en tu caja"},{"id":16,"lote":"diario","tema":"FAQ: ¿necesito instalar app?","texto":"¿Tu cliente necesita instalar una app para facturarse con FacturaQR? No.\\n\\nSolo escanea el QR con la cámara de su celular, se abre el portal en el navegador, toma foto de su ticket, pone su RFC y correo, y listo. Nada que descargar, nada que registrar de antemano.\\n\\n👉 facturaqr.app","hashtags":"#FacturaQR #CFDI40 #FacturaciónElectrónica #AutofacturaciónMéxico #PymesMéxico #TipsFiscales","imagen_concepto":"Ícono grande de un celular con la cámara escaneando un QR, y un ícono de \'app\' tachado con una X roja al lado para reforzar \'sin apps\'.","imagen_titular":"Sin apps que instalar"},{"id":17,"lote":"diario","tema":"Comparativa: tiempo del negocio","texto":"Capturar una factura a mano le puede tomar a tu cajero varios minutos por cliente: pedir RFC, dictarlo, escribirlo, verificar, corregir. Multiplícalo por toda la fila de fin de mes.\\n\\nCon FacturaQR, ese tiempo baja a cero para tu equipo: el cliente hace todo desde su celular mientras tu cajero sigue cobrando.\\n\\n👉 Conoce cómo en facturaqr.app","hashtags":"#FacturaQR #AutofacturaciónMéxico #CFDI40 #PymesMéxico #Productividad #FacturaciónElectrónica","imagen_concepto":"Gráfico simple tipo balanza o barras comparando \'minutos por factura a mano\' vs \'segundos con FacturaQR\', estilo minimalista con azul de marca.","imagen_titular":"Tu equipo ahorra minutos por cliente"},{"id":18,"lote":"diario","tema":"Testimonial-hipotético: taller","texto":"Imagina que tienes un taller mecánico. Tu cliente recoge su coche, paga, y en vez de pedirte que le mandes la factura \\"en un rato\\", escanea el QR del mostrador, toma foto de su ticket y la recibe en su correo antes de llegar a su casa.\\n\\nTú ya no tienes pendiente esa factura en la lista del día.\\n\\n👉 Descubre FacturaQR en facturaqr.app","hashtags":"#FacturaQR #Talleres #CFDI40 #FacturaciónElectrónica #PymesMéxico #Automotriz","imagen_concepto":"Escena ilustrada de un taller mecánico, mostrador con QR, cliente con llaves de coche escaneando desde su celular.","imagen_titular":"Imagina cerrar el día sin pendientes"},{"id":19,"lote":"diario","tema":"Por giro: talleres y servicios","texto":"Talleres, estéticas, servicios a domicilio: si entregas ticket, puedes dar factura sin perseguir al cliente después.\\n\\nCon el QR de FacturaQR, tu cliente factura cuando quiera — incluso desde su casa, con la foto de su ticket ya guardada. Tú no tienes que llevar el control de quién falta por facturar.\\n\\n👉 facturaqr.app","hashtags":"#FacturaQR #Talleres #ServiciosMéxico #CFDI40 #FacturaciónElectrónica #PymesMéxico","imagen_concepto":"Collage de íconos de distintos servicios (llave inglesa, tijeras de estética, caja de entrega) alrededor de un QR central.","imagen_titular":"Factura cuando el cliente quiera"},{"id":20,"lote":"diario","tema":"Planes y precios","texto":"¿Cuánto cuesta FacturaQR? Tenemos 3 planes según el tamaño de tu negocio:\\n\\n🔹 Local — $499/mes, hasta 100 facturas\\n🔹 Comercio — $999/mes, hasta 500 facturas\\n🔹 Cadena — $2,999/mes, facturas ilimitadas\\n\\nTodos incluyen IA de lectura de tickets, timbrado CFDI 4.0 y panel de control. Empieza con una prueba gratis de 10 facturas, sin tarjeta.\\n\\n👉 Elige tu plan en facturaqr.app o escríbenos por WhatsApp: 614 106 2426","hashtags":"#FacturaQR #CFDI40 #FacturaciónElectrónica #PymesMéxico #AutofacturaciónMéxico #NegociosMexicanos","imagen_concepto":"Tres tarjetas o columnas simples mostrando los nombres de los planes (Local, Comercio, Cadena) con su precio destacado en azul de marca, diseño limpio tipo tabla de precios.","imagen_titular":"Planes desde $499/mes"}],"publicados":[1,2,3,4,5]}');
  var posts = DATA.posts, publicados = DATA.publicados;

  var resumen = document.getElementById('resumen');
  var total = posts.length, ok = posts.filter(function(p){ return publicados.indexOf(p.id) > -1; }).length;
  resumen.innerHTML =
    '<div class="stat"><b>' + total + '</b><small>piezas totales</small></div>' +
    '<div class="stat"><b>' + ok + '</b><small>publicadas</small></div>' +
    '<div class="stat"><b>' + (total - ok) + '</b><small>pendientes</small></div>';

  function esc(s){ return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

  function tarjeta(p){
    var pub = publicados.indexOf(p.id) > -1;
    var img = '/social/post-' + String(p.id).padStart(2,'0') + '.png';
    return '<div class="card">' +
      '<img src="' + img + '" alt="' + esc(p.imagen_titular || p.tema) + '" loading="lazy">' +
      '<div class="card-body">' +
        '<div class="badges">' +
          '<span class="badge b-' + p.lote + '">' + p.lote + '</span>' +
          '<span class="badge ' + (pub ? 'b-ok' : 'b-pend') + '">' + (pub ? 'publicado' : 'pendiente') + '</span>' +
        '</div>' +
        '<p class="tema">' + esc(p.tema) + '</p>' +
        '<p class="texto">' + esc(p.texto) + '</p>' +
        '<p class="hashtags">' + esc(p.hashtags || '') + '</p>' +
      '</div></div>';
  }

  var lanzamiento = posts.filter(function(p){ return p.lote === 'lanzamiento'; });
  var diario = posts.filter(function(p){ return p.lote === 'diario'; });
  var html = '';
  if (lanzamiento.length) html += '<p class="grupo-title">Lanzamiento</p><div class="grid">' + lanzamiento.map(tarjeta).join('') + '</div>';
  if (diario.length) html += '<p class="grupo-title">Calendario diario (en orden de publicación)</p><div class="grid">' + diario.map(tarjeta).join('') + '</div>';
  document.getElementById('contenido').innerHTML = html;
})();
</script>
</body>
</html>
