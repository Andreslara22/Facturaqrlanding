// Genera campana.php (página pública, autocontenida) a partir de
// marketing/social/cola-posts.json + marketing/social/estado.json.
// marketing/ NO se sube por FTP, así que este script "hornea" los datos
// dentro de campana.php (que sí se sube) cada vez que la cola cambia.
// Uso: node scripts/generar-campana.mjs
import { readFileSync, writeFileSync } from 'fs';
import { fileURLToPath } from 'url';
import { dirname, join } from 'path';

const RAIZ = join(dirname(fileURLToPath(import.meta.url)), '..');
const posts = JSON.parse(readFileSync(join(RAIZ, 'marketing/social/cola-posts.json'), 'utf8'));
const estado = JSON.parse(readFileSync(join(RAIZ, 'marketing/social/estado.json'), 'utf8'));

const datos = JSON.stringify({ posts, publicados: estado.publicados }).replace(/'/g, "\\'");

const php = `<?php header("Cache-Control: no-cache, no-store, must-revalidate"); header("Pragma: no-cache"); ?>
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
  var DATA = JSON.parse('${datos}');
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
`;

writeFileSync(join(RAIZ, 'campana.php'), php, 'utf8');
console.log('OK: campana.php generado (' + posts.length + ' piezas, ' + estado.publicados.length + ' publicadas).');
