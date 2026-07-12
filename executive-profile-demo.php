<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Executive Profile — Assessment for Manufacturing Leaders</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* ============ TOKENS ============ */
:root{
  --papel:#F4F6F5;
  --superficie:#FFFFFF;
  --tinta:#18242E;
  --tinta-2:#44545F;
  --tinta-suave:#6B7A84;
  --linea:#D5DCDF;
  --acento:#0A6C99;          /* petrol — brand & data */
  --acento-tinta:#085577;
  --acento-suave:#E3EEF4;
  --ambar:#C06A00;           /* industrial amber — timer / alerts */
  --ambar-suave:#F7ECDC;
  --ok:#1F7A4D;
  --ok-suave:#E2F0E8;
  --rojo:#A33B2E;
  --rojo-suave:#F5E4E1;
  --grafica:#0A6C99;
  --grafica-rejilla:#DCE3E6;
  --rejilla-hero:rgba(10,108,153,.055);
  --radio:6px;
  --sombra:0 1px 2px rgba(24,36,46,.06),0 8px 24px rgba(24,36,46,.07);
  --sombra-alta:0 2px 4px rgba(24,36,46,.08),0 14px 34px rgba(24,36,46,.12);
}
@media (prefers-color-scheme: dark){
  :root{
    --papel:#101820;
    --superficie:#18232D;
    --tinta:#E7EDF0;
    --tinta-2:#AEBDC6;
    --tinta-suave:#7E8F99;
    --linea:#2B3944;
    --acento:#2E9CCB;
    --acento-tinta:#5FB6DC;
    --acento-suave:#173042;
    --ambar:#C87F15;
    --ambar-suave:#33260F;
    --ok:#3E9E6E;
    --ok-suave:#152E22;
    --rojo:#CC6A5C;
    --rojo-suave:#39201C;
    --grafica:#2E9CCB;
    --grafica-rejilla:#2B3944;
    --rejilla-hero:rgba(46,156,203,.07);
    --sombra:0 1px 2px rgba(0,0,0,.3),0 8px 24px rgba(0,0,0,.25);
    --sombra-alta:0 2px 4px rgba(0,0,0,.35),0 14px 34px rgba(0,0,0,.35);
  }
}
:root[data-theme="light"]{
  --papel:#F4F6F5; --superficie:#FFFFFF; --tinta:#18242E; --tinta-2:#44545F;
  --tinta-suave:#6B7A84; --linea:#D5DCDF; --acento:#0A6C99; --acento-tinta:#085577;
  --acento-suave:#E3EEF4; --ambar:#C06A00; --ambar-suave:#F7ECDC; --ok:#1F7A4D;
  --ok-suave:#E2F0E8; --rojo:#A33B2E; --rojo-suave:#F5E4E1; --grafica:#0A6C99;
  --grafica-rejilla:#DCE3E6; --rejilla-hero:rgba(10,108,153,.055);
  --sombra:0 1px 2px rgba(24,36,46,.06),0 8px 24px rgba(24,36,46,.07);
  --sombra-alta:0 2px 4px rgba(24,36,46,.08),0 14px 34px rgba(24,36,46,.12);
}
:root[data-theme="dark"]{
  --papel:#101820; --superficie:#18232D; --tinta:#E7EDF0; --tinta-2:#AEBDC6;
  --tinta-suave:#7E8F99; --linea:#2B3944; --acento:#2E9CCB; --acento-tinta:#5FB6DC;
  --acento-suave:#173042; --ambar:#C87F15; --ambar-suave:#33260F; --ok:#3E9E6E;
  --ok-suave:#152E22; --rojo:#CC6A5C; --rojo-suave:#39201C; --grafica:#2E9CCB;
  --grafica-rejilla:#2B3944; --rejilla-hero:rgba(46,156,203,.07);
  --sombra:0 1px 2px rgba(0,0,0,.3),0 8px 24px rgba(0,0,0,.25);
  --sombra-alta:0 2px 4px rgba(0,0,0,.35),0 14px 34px rgba(0,0,0,.35);
}

/* ============ BASE ============ */
*{box-sizing:border-box}
html,body{margin:0;padding:0}
body{
  background:var(--papel);color:var(--tinta);
  font-family:"Segoe UI",system-ui,-apple-system,"Helvetica Neue",Arial,sans-serif;
  font-size:16px;line-height:1.55;
  -webkit-font-smoothing:antialiased;
}
h1,h2,h3{line-height:1.15;text-wrap:balance;margin:0 0 .5em}
h1{font-size:clamp(1.9rem,4.5vw,3rem);font-weight:750;letter-spacing:-.02em}
h2{font-size:clamp(1.35rem,3vw,1.8rem);font-weight:700;letter-spacing:-.015em}
h3{font-size:1.05rem;font-weight:650}
p{margin:0 0 1em}
.etiqueta{
  font-size:.72rem;font-weight:650;letter-spacing:.14em;text-transform:uppercase;
  color:var(--acento-tinta);
}
.num{font-variant-numeric:tabular-nums}
a{color:var(--acento-tinta)}
.envoltura{max-width:1020px;margin:0 auto;padding:0 20px}
.oculto{display:none !important}

button{font:inherit;cursor:pointer}
.btn{
  display:inline-flex;align-items:center;justify-content:center;gap:.5em;
  background:var(--acento);color:#fff;border:none;border-radius:var(--radio);
  padding:.8em 1.6em;font-weight:650;font-size:1rem;
  box-shadow:0 1px 2px rgba(10,60,90,.25);
  transition:filter .15s, transform .1s, box-shadow .15s;
}
.btn:hover{filter:brightness(1.1);box-shadow:0 3px 8px rgba(10,60,90,.3)}
.btn:active{transform:translateY(1px)}
.btn:focus-visible,.opcion:focus-visible,input:focus-visible,.btn-fantasma:focus-visible,.btn-tema:focus-visible{
  outline:3px solid var(--acento);outline-offset:2px;
}
.btn[disabled]{opacity:.45;cursor:not-allowed}
.btn-fantasma{
  background:transparent;color:var(--tinta-2);border:1.5px solid var(--linea);
  border-radius:var(--radio);padding:.8em 1.4em;font-weight:600;
  transition:border-color .15s,color .15s,background .15s;
}
.btn-fantasma:hover{border-color:var(--tinta-suave);color:var(--tinta);background:var(--superficie)}

/* ============ HEADER ============ */
.barra-marca{
  border-bottom:1px solid var(--linea);background:var(--superficie);
  position:sticky;top:0;z-index:30;
}
.barra-marca .envoltura{
  display:flex;align-items:center;justify-content:space-between;gap:10px;
  padding-top:12px;padding-bottom:12px;
}
.logo{display:flex;align-items:center;gap:10px;font-weight:750;letter-spacing:-.01em}
.logo-cuadro{
  width:32px;height:32px;border-radius:6px;background:var(--acento);
  display:grid;place-items:center;color:#fff;font-size:.78rem;font-weight:800;
  letter-spacing:0;flex:none;
  box-shadow:inset 0 -8px 12px rgba(0,0,0,.18);
}
.logo small{display:block;font-weight:500;color:var(--tinta-suave);font-size:.7rem;letter-spacing:.08em}
.acciones-header{display:flex;align-items:center;gap:10px}
.btn-tema{
  width:40px;height:40px;border-radius:50%;border:1.5px solid var(--linea);
  background:transparent;color:var(--tinta-2);display:grid;place-items:center;
  transition:border-color .15s,color .15s,transform .2s;
}
.btn-tema:hover{border-color:var(--tinta-suave);color:var(--tinta);transform:rotate(15deg)}
.btn-tema svg{width:18px;height:18px;fill:none;stroke:currentColor;stroke-width:1.8;stroke-linecap:round}

/* ============ LANDING ============ */
.hero{
  padding:68px 0 52px;
  background:
    linear-gradient(var(--rejilla-hero) 1px, transparent 1px),
    linear-gradient(90deg, var(--rejilla-hero) 1px, transparent 1px);
  background-size:36px 36px;
}
.hero .envoltura{display:grid;grid-template-columns:1.15fr .85fr;gap:48px;align-items:center}
.hero p.grande{font-size:1.12rem;color:var(--tinta-2);max-width:34em}
.especificaciones{
  display:flex;gap:26px;flex-wrap:wrap;margin:26px 0 30px;
  border-top:1px solid var(--linea);border-bottom:1px solid var(--linea);
  padding:16px 0;
}
.espec{min-width:110px}
.espec b{display:block;font-size:1.5rem;font-weight:750;letter-spacing:-.02em}
.espec span{font-size:.78rem;color:var(--tinta-suave);letter-spacing:.08em;text-transform:uppercase}

.panel-radar-demo{
  background:var(--superficie);border:1px solid var(--linea);border-radius:12px;
  box-shadow:var(--sombra-alta);padding:24px;
}
.panel-radar-demo .etiqueta{display:block;margin-bottom:6px}

.seccion{padding:48px 0}
.seccion-alt{background:var(--superficie);border-top:1px solid var(--linea);border-bottom:1px solid var(--linea)}
.rejilla-dim{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:22px}
.tarjeta-dim{
  background:var(--papel);border:1px solid var(--linea);border-radius:10px;padding:20px;
  transition:transform .15s, box-shadow .15s, border-color .15s;
}
.tarjeta-dim:hover{transform:translateY(-2px);box-shadow:var(--sombra);border-color:var(--acento)}
.seccion:not(.seccion-alt) .tarjeta-dim{background:var(--superficie)}
.tarjeta-dim .clave{
  font-size:.7rem;font-weight:750;letter-spacing:.12em;color:var(--acento-tinta);
  background:var(--acento-suave);border-radius:4px;padding:2px 8px;display:inline-block;
  margin-bottom:10px;
}
.tarjeta-dim h3{margin-bottom:.35em}
.tarjeta-dim p{margin:0;font-size:.92rem;color:var(--tinta-2)}

.pasos{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:22px;counter-reset:paso}
.paso{
  background:var(--superficie);border:1px solid var(--linea);border-radius:10px;padding:20px;
  transition:transform .15s, box-shadow .15s;
}
.paso:hover{transform:translateY(-2px);box-shadow:var(--sombra)}
.paso::before{
  counter-increment:paso;content:counter(paso,decimal-leading-zero);
  font-size:.78rem;font-weight:750;letter-spacing:.1em;color:var(--ambar);
  display:block;margin-bottom:8px;
}
.paso p{margin:0;font-size:.92rem;color:var(--tinta-2)}
.cta-final{text-align:center;padding:56px 0 72px}

/* ============ ACCESS ============ */
.vista-centrada{min-height:70vh;display:grid;place-items:center;padding:48px 20px}
.tarjeta-acceso{
  width:100%;max-width:440px;background:var(--superficie);
  border:1px solid var(--linea);border-radius:12px;box-shadow:var(--sombra-alta);
  padding:32px;border-top:4px solid var(--acento);
}
.campo{margin-bottom:18px}
.campo label{display:block;font-size:.85rem;font-weight:650;margin-bottom:6px}
.campo input{
  width:100%;padding:.75em .9em;font:inherit;border:1.5px solid var(--linea);
  border-radius:var(--radio);background:var(--papel);color:var(--tinta);
  transition:border-color .15s;
}
.campo input:hover{border-color:var(--tinta-suave)}
.campo input::placeholder{color:var(--tinta-suave)}
.campo .pista{font-size:.8rem;color:var(--tinta-suave);margin-top:5px}
.error-acceso{
  background:var(--rojo-suave);color:var(--rojo);border-radius:var(--radio);
  padding:.7em .9em;font-size:.88rem;margin-bottom:16px;
}

/* ============ TEST ============ */
.barra-test{
  position:sticky;top:0;z-index:20;background:var(--superficie);
  border-bottom:1px solid var(--linea);
}
.barra-test-fila{
  max-width:760px;margin:0 auto;padding:10px 20px;
  display:flex;align-items:center;justify-content:space-between;gap:16px;
}
.contador-preg{font-size:.85rem;color:var(--tinta-2);font-weight:600}
.reloj{
  display:inline-flex;align-items:center;gap:7px;
  font-weight:700;font-size:1rem;color:var(--tinta);
  background:var(--papel);border:1px solid var(--linea);border-radius:999px;
  padding:4px 14px;
}
.reloj .punto{width:8px;height:8px;border-radius:50%;background:var(--ok)}
.reloj.alerta{color:var(--ambar);border-color:var(--ambar);background:var(--ambar-suave)}
.reloj.alerta .punto{background:var(--ambar);animation:parpadeo 1s infinite}
@keyframes parpadeo{50%{opacity:.25}}
@media (prefers-reduced-motion: reduce){
  .reloj.alerta .punto{animation:none}
  *{transition:none !important}
}
.pista-progreso{height:6px;background:var(--linea)}
.relleno-progreso{
  height:100%;background:linear-gradient(90deg,var(--acento),var(--acento-tinta));
  width:0%;border-radius:0 3px 3px 0;
  transition:width .25s ease;
}
.cuerpo-test{max-width:760px;margin:0 auto;padding:34px 20px 60px}
.dim-pregunta{margin-bottom:14px}
.texto-pregunta{font-size:1.25rem;font-weight:650;letter-spacing:-.01em;margin-bottom:22px}
.opciones{display:flex;flex-direction:column;gap:10px}
.opcion{
  text-align:left;background:var(--superficie);border:1.5px solid var(--linea);
  border-radius:10px;padding:14px 16px;font-size:.98rem;color:var(--tinta);
  display:flex;gap:12px;align-items:flex-start;line-height:1.45;
  transition:border-color .12s, background .12s, transform .12s, box-shadow .12s;
}
.opcion:hover{border-color:var(--acento);transform:translateX(3px);box-shadow:var(--sombra)}
.opcion .letra{
  flex:none;width:26px;height:26px;border-radius:50%;border:1.5px solid var(--linea);
  display:grid;place-items:center;font-size:.8rem;font-weight:700;color:var(--tinta-suave);
  margin-top:1px;transition:background .12s,border-color .12s,color .12s;
}
.opcion.elegida{border-color:var(--acento);background:var(--acento-suave);box-shadow:var(--sombra)}
.opcion.elegida .letra{background:var(--acento);border-color:var(--acento);color:#fff}
.nav-test{display:flex;justify-content:space-between;gap:12px;margin-top:28px}
.aviso-faltan{
  margin-top:14px;color:var(--tinta-suave);font-size:.85rem;
}

/* ============ RESULTS ============ */
.cuerpo-resultados{max-width:1020px;margin:0 auto;padding:40px 20px 80px}
.cabecera-reporte{
  display:flex;justify-content:space-between;align-items:flex-end;gap:20px;
  flex-wrap:wrap;border-bottom:2px solid var(--tinta);padding-bottom:18px;margin-bottom:28px;
}
.meta-reporte{font-size:.85rem;color:var(--tinta-2);text-align:right}
.meta-reporte b{color:var(--tinta)}
.fila-resumen{display:grid;grid-template-columns:1fr 1fr 1fr;gap:14px;margin-bottom:30px}
.tarjeta-stat{
  background:var(--superficie);border:1px solid var(--linea);border-radius:10px;
  padding:18px 20px;box-shadow:var(--sombra);
}
.tarjeta-stat .etiqueta{color:var(--tinta-suave)}
.tarjeta-stat b{
  display:block;font-size:2rem;font-weight:750;letter-spacing:-.02em;margin-top:2px;
}
.tarjeta-stat span.sub{font-size:.85rem;color:var(--tinta-2)}
.tarjeta-perfil{
  background:var(--acento-suave);border:1px solid var(--acento);
}
.tarjeta-perfil b{color:var(--acento-tinta);font-size:1.45rem;line-height:1.2}
.rejilla-graficas{display:grid;grid-template-columns:1fr 1.2fr;gap:14px;align-items:stretch;margin-bottom:30px}
.panel{
  background:var(--superficie);border:1px solid var(--linea);border-radius:10px;
  padding:22px;box-shadow:var(--sombra);
}
.panel h3{margin-bottom:4px}
.panel .subtitulo{font-size:.85rem;color:var(--tinta-suave);margin-bottom:16px}
.grafica-barras{display:flex;flex-direction:column;gap:14px;margin-top:6px}
.fila-barra{display:grid;grid-template-columns:150px 1fr 82px;gap:12px;align-items:center}
.fila-barra .nombre{font-size:.88rem;font-weight:600;color:var(--tinta-2)}
.pista-barra{height:12px;background:var(--papel);border-radius:4px;position:relative;cursor:default}
.relleno-barra{
  height:100%;background:var(--grafica);border-radius:0 4px 4px 0;min-width:3px;
}
.fila-barra .valor{font-size:.88rem;font-weight:700;text-align:right}
.fila-barra .valor small{display:block;font-weight:500;color:var(--tinta-suave)}
.chip{
  display:inline-block;font-size:.72rem;font-weight:700;letter-spacing:.05em;
  border-radius:4px;padding:2px 8px;text-transform:uppercase;
}
.chip-fortaleza{background:var(--ok-suave);color:var(--ok)}
.chip-solido{background:var(--acento-suave);color:var(--acento-tinta)}
.chip-desarrollo{background:var(--ambar-suave);color:var(--ambar)}
.chip-atencion{background:var(--rojo-suave);color:var(--rojo)}
.lista-cualitativa{display:flex;flex-direction:column;gap:12px}
.item-cualitativo{
  background:var(--superficie);border:1px solid var(--linea);border-radius:10px;
  padding:16px 18px;
}
.item-cualitativo .fila-titulo{
  display:flex;justify-content:space-between;align-items:center;gap:10px;margin-bottom:6px;
  flex-wrap:wrap;
}
.item-cualitativo h3{margin:0;font-size:.98rem}
.item-cualitativo p{margin:0;font-size:.92rem;color:var(--tinta-2)}
.sintesis{
  background:var(--superficie);border-left:4px solid var(--acento);
  border-radius:0 10px 10px 0;padding:20px 22px;margin:30px 0;
  box-shadow:var(--sombra);
}
.sintesis p:last-child{margin:0}
.acciones-reporte{display:flex;gap:12px;flex-wrap:wrap;margin-top:34px}
table.tabla-datos{
  width:100%;border-collapse:collapse;font-size:.9rem;margin-top:8px;
}
.tabla-datos th{
  text-align:left;font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;
  color:var(--tinta-suave);font-weight:650;padding:8px 10px;border-bottom:2px solid var(--linea);
}
.tabla-datos td{padding:9px 10px;border-bottom:1px solid var(--linea)}
.tabla-datos td.num,.tabla-datos th.num{text-align:right}
.contenedor-desborde{overflow-x:auto}

/* chart tooltip */
#tooltip{
  position:fixed;z-index:50;pointer-events:none;background:var(--tinta);color:var(--papel);
  font-size:.8rem;font-weight:600;padding:6px 10px;border-radius:5px;
  transform:translate(-50%,-130%);white-space:nowrap;display:none;
}

/* radar */
.radar-svg text{fill:var(--tinta-2);font-size:11px;font-weight:600}
.radar-svg .rejilla{stroke:var(--grafica-rejilla);fill:none}
.radar-svg .eje{stroke:var(--grafica-rejilla)}
.radar-svg .poligono{fill:var(--grafica);fill-opacity:.16;stroke:var(--grafica);stroke-width:2}
.radar-svg circle.punto{fill:var(--grafica);stroke:var(--superficie);stroke-width:2}

/* footer */
.pie{border-top:1px solid var(--linea);padding:26px 0;margin-top:20px}
.pie p{margin:0;font-size:.82rem;color:var(--tinta-suave)}

/* ============ RESPONSIVE ============ */
@media (max-width:820px){
  .hero .envoltura{grid-template-columns:1fr;gap:30px}
  .rejilla-dim,.pasos{grid-template-columns:1fr 1fr}
  .fila-resumen{grid-template-columns:1fr}
  .rejilla-graficas{grid-template-columns:1fr}
}
@media (max-width:540px){
  .rejilla-dim,.pasos{grid-template-columns:1fr}
  .hero{padding:40px 0 28px}
  .texto-pregunta{font-size:1.1rem}
  .fila-barra{grid-template-columns:104px 1fr 74px;gap:8px}
  .fila-barra .nombre{font-size:.78rem}
  .barra-test-fila{padding:8px 14px}
  .cabecera-reporte{flex-direction:column;align-items:flex-start}
  .meta-reporte{text-align:left}
}

/* ============ PRINT ============ */
@media print{
  body{background:#fff;color:#111}
  .barra-marca,.acciones-reporte,.pie{display:none !important}
  .panel,.tarjeta-stat,.item-cualitativo{box-shadow:none;border-color:#bbb}
  .cuerpo-resultados{padding:0}
}
</style>
</head>
<body>

<div id="tooltip" role="presentation"></div>

<header class="barra-marca">
  <div class="envoltura">
    <div class="logo">
      <div class="logo-cuadro">EP</div>
      <div>Executive Profile<small>ASSESSMENT · MANUFACTURING</small></div>
    </div>
    <div class="acciones-header">
      <button class="btn-tema" id="btn-tema" type="button" aria-label="Toggle light / dark mode" title="Light / dark mode">
        <svg id="icono-luna" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 14.5A8.5 8.5 0 0 1 9.5 4 8.5 8.5 0 1 0 20 14.5z"/></svg>
        <svg id="icono-sol" viewBox="0 0 24 24" aria-hidden="true" style="display:none"><circle cx="12" cy="12" r="4.2"/><path d="M12 2.5v2.4M12 19.1v2.4M2.5 12h2.4M19.1 12h2.4M5 5l1.7 1.7M17.3 17.3 19 19M19 5l-1.7 1.7M6.7 17.3 5 19"/></svg>
      </button>
      <button class="btn-fantasma" id="btn-acceso-header" type="button">Start assessment</button>
    </div>
  </div>
</header>

<!-- ==================== VIEW: LANDING ==================== -->
<main id="vista-landing">
  <section class="hero">
    <div class="envoltura">
      <div>
        <span class="etiqueta">Situational psychometric assessment</span>
        <h1>What kind of executive runs your plant?</h1>
        <p class="grande">
          An assessment built for directors and plant managers in maquiladora and
          manufacturing operations. Thirty real scenarios — shop floor, corporate and
          customer — that measure how you decide, lead and execute. Not what your
          résumé says.
        </p>
        <div class="especificaciones">
          <div class="espec"><b class="num">30</b><span>Questions</span></div>
          <div class="espec"><b class="num">25 min</b><span>Time limit</span></div>
          <div class="espec"><b class="num">6</b><span>Dimensions</span></div>
          <div class="espec"><b>Instant</b><span>Report</span></div>
        </div>
        <button class="btn" id="btn-acceso-hero" type="button">Start with my access code</button>
      </div>
      <div class="panel-radar-demo">
        <span class="etiqueta">Sample report</span>
        <h3 style="margin-bottom:10px">Executive competency radar</h3>
        <div id="radar-demo"></div>
      </div>
    </div>
  </section>

  <section class="seccion seccion-alt">
    <div class="envoltura">
      <span class="etiqueta">What it measures</span>
      <h2>Six dimensions of executive performance</h2>
      <div class="rejilla-dim">
        <div class="tarjeta-dim"><span class="clave">LEAD</span><h3>Team leadership</h3><p>Developing middle management, resolving conflict between managers, retaining key talent.</p></div>
        <div class="tarjeta-dim"><span class="clave">DEC</span><h3>Decision-making under pressure</h3><p>Line stoppages, committed shipments and decisions with incomplete information.</p></div>
        <div class="tarjeta-dim"><span class="clave">STR</span><h3>Strategic thinking</h3><p>Customer concentration, investment vs. quarterly results, nearshoring and the 3-year talent play.</p></div>
        <div class="tarjeta-dim"><span class="clave">COM</span><h3>Communication &amp; influence</h3><p>Hard messages to the plant, defending projects before corporate, managing rumors.</p></div>
        <div class="tarjeta-dim"><span class="clave">RES</span><h3>Results orientation</h3><p>OTIF, scrap, chronic overtime and the discipline of KPI follow-up.</p></div>
        <div class="tarjeta-dim"><span class="clave">ADA</span><h3>Adaptability to change</h3><p>System rollouts, customer specification changes and digital transformation.</p></div>
      </div>
    </div>
  </section>

  <section class="seccion">
    <div class="envoltura">
      <span class="etiqueta">How it works</span>
      <h2>Three steps, results the same day</h2>
      <div class="pasos">
        <div class="paso"><h3>Controlled access</h3><p>Sign in with your corporate email and the access code provided by your organization.</p></div>
        <div class="paso"><h3>30 real scenarios</h3><p>Each question presents a plant situation with four defensible courses of action — the assessment measures your judgment between them. Every question must be answered to advance. 25 minutes, with a visible timer and progress bar.</p></div>
        <div class="paso"><h3>Instant report</h3><p>Executive profile, scores by dimension with charts, qualitative interpretation and development recommendations. Printable as PDF.</p></div>
      </div>
    </div>
  </section>

  <section class="cta-final">
    <div class="envoltura">
      <h2>The assessment takes 25 minutes.<br>The diagnosis is useful all year.</h2>
      <p style="color:var(--tinta-2)">Answer with what you would really do — there are no "textbook" answers.</p>
      <button class="btn" id="btn-acceso-cta" type="button">Start assessment</button>
    </div>
  </section>

  <footer class="pie">
    <div class="envoltura">
      <p>Executive Profile · Situational assessment for manufacturing leadership. A development-oriented instrument; it does not replace a clinical evaluation and should not be the sole criterion for hiring decisions.</p>
    </div>
  </footer>
</main>

<!-- ==================== VIEW: ACCESS ==================== -->
<main id="vista-acceso" class="oculto">
  <div class="vista-centrada">
    <form class="tarjeta-acceso" id="form-acceso" novalidate>
      <span class="etiqueta">Assessment access</span>
      <h2 style="margin-top:4px">Identify yourself to begin</h2>
      <p style="font-size:.92rem;color:var(--tinta-2)">Use the email you were registered with and the access code your organization shared with you.</p>
      <div class="error-acceso oculto" id="error-acceso"></div>
      <div class="campo">
        <label for="campo-email">Corporate email</label>
        <input id="campo-email" type="email" autocomplete="email" placeholder="name@company.com" required>
      </div>
      <div class="campo">
        <label for="campo-codigo">Access code</label>
        <input id="campo-codigo" type="text" autocomplete="one-time-code" placeholder="MAQ-DIR-0000" style="text-transform:uppercase;letter-spacing:.08em" required>
        <div class="pista">Provided by Human Resources or the consultant running your assessment process.</div>
      </div>
      <button class="btn" type="submit" style="width:100%">Begin — the timer starts now</button>
      <div class="pista" style="margin-top:12px;text-align:center">The 25:00 time limit starts as soon as you begin. Make sure you have that time without interruptions.</div>
    </form>
  </div>
</main>

<!-- ==================== VIEW: TEST ==================== -->
<main id="vista-test" class="oculto">
  <div class="barra-test">
    <div class="barra-test-fila">
      <span class="contador-preg num" id="contador-preg">Question 1 of 30</span>
      <span class="reloj" id="reloj"><span class="punto"></span><span class="num" id="reloj-texto">25:00</span></span>
    </div>
    <div class="pista-progreso"><div class="relleno-progreso" id="relleno-progreso"></div></div>
  </div>
  <div class="cuerpo-test">
    <div class="dim-pregunta"><span class="etiqueta" id="dim-pregunta"></span></div>
    <div class="texto-pregunta" id="texto-pregunta"></div>
    <div class="opciones" id="opciones" role="radiogroup"></div>
    <div class="aviso-faltan oculto" id="aviso-faltan"></div>
    <div class="nav-test">
      <button class="btn-fantasma" id="btn-anterior" type="button">← Previous</button>
      <button class="btn" id="btn-siguiente" type="button">Next →</button>
    </div>
  </div>
</main>

<!-- ==================== VIEW: RESULTS ==================== -->
<main id="vista-resultados" class="oculto">
  <div class="cuerpo-resultados">
    <div class="cabecera-reporte">
      <div>
        <span class="etiqueta">Results report</span>
        <h1 style="font-size:clamp(1.6rem,3.5vw,2.3rem)">Executive profile</h1>
      </div>
      <div class="meta-reporte" id="meta-reporte"></div>
    </div>

    <div class="fila-resumen">
      <div class="tarjeta-stat tarjeta-perfil">
        <span class="etiqueta">Profile type</span>
        <b id="res-perfil">—</b>
        <span class="sub" id="res-perfil-sub"></span>
      </div>
      <div class="tarjeta-stat">
        <span class="etiqueta">Overall score</span>
        <b class="num" id="res-global">—</b>
        <span class="sub" id="res-global-sub"></span>
      </div>
      <div class="tarjeta-stat">
        <span class="etiqueta">Time used</span>
        <b class="num" id="res-tiempo">—</b>
        <span class="sub" id="res-tiempo-sub"></span>
      </div>
    </div>

    <div class="rejilla-graficas">
      <div class="panel">
        <h3>Competency radar</h3>
        <div class="subtitulo">Percentage achieved by dimension (0–100)</div>
        <div id="radar-resultado"></div>
      </div>
      <div class="panel">
        <h3>Score by dimension</h3>
        <div class="subtitulo">Points earned out of 20 possible per dimension</div>
        <div class="grafica-barras" id="grafica-barras"></div>
      </div>
    </div>

    <div class="sintesis" id="sintesis"></div>

    <span class="etiqueta">Qualitative reading</span>
    <h2 style="margin-top:6px">Interpretation by dimension</h2>
    <div class="lista-cualitativa" id="lista-cualitativa"></div>

    <div class="panel" style="margin-top:30px">
      <h3>Quantitative results table</h3>
      <div class="subtitulo">Numeric detail for the assessor's records</div>
      <div class="contenedor-desborde">
        <table class="tabla-datos" id="tabla-datos">
          <thead><tr><th>Dimension</th><th class="num">Points</th><th class="num">Max</th><th class="num">%</th><th>Band</th></tr></thead>
          <tbody></tbody>
        </table>
      </div>
    </div>

    <div class="acciones-reporte">
      <button class="btn" type="button" onclick="window.print()">Print / save as PDF</button>
      <button class="btn-fantasma" type="button" id="btn-reiniciar">End session</button>
    </div>
  </div>
</main>

<script>
"use strict";
/* =====================================================================
   CONFIGURATION — edit the valid access codes here.
   Note: this validation runs client-side (a lightweight gate to filter
   participants, not cryptographic security).
===================================================================== */
const CODIGOS_ACCESO = [
  "MAQ-DIR-2601","MAQ-DIR-2602","MAQ-DIR-2603","MAQ-DIR-2604","MAQ-DIR-2605",
  "MAQ-DIR-2606","MAQ-DIR-2607","MAQ-DIR-2608","MAQ-DIR-2609","MAQ-DIR-2610",
  "DEMO-DIRECTIVO"
];
const MINUTOS_LIMITE = 25;

const DIMENSIONES = {
  LID:{nombre:"Team leadership", clave:"LEAD"},
  DEC:{nombre:"Decision-making under pressure", clave:"DEC"},
  EST:{nombre:"Strategic thinking", clave:"STR"},
  COM:{nombre:"Communication & influence", clave:"COM"},
  OPE:{nombre:"Results orientation", clave:"RES"},
  ADA:{nombre:"Adaptability to change", clave:"ADA"}
};

/* Each option carries a value 1–4 (4 = best executive practice).
   All four options are defensible; the assessment measures judgment
   between plausible courses of action. Option order is shuffled. */
const PREGUNTAS = [
 {d:"LID",t:"The supervisor of your most critical line has the highest employee turnover in the plant. His line still hits its output numbers. What is your first move?",o:[
  {t:"I raise it with him one-on-one, ask for his read on the causes, and agree on a retention plan I'll track monthly.",v:3},
  {t:"Since output is holding, I give him a defined quarter to turn the number around with HR's support before intervening directly.",v:1},
  {t:"I pull the exit-interview data and talk to a few of his operators myself before I raise anything with him.",v:4},
  {t:"I benchmark that line's pay, workload and shift pattern against the plant average and correct whatever gap explains the exits.",v:2}]},
 {d:"DEC",t:"Line stoppage at 10:00 and your main customer's shipment leaves today at 18:00. Maintenance estimates a 4-hour repair, but their estimates have slipped before. What do you do?",o:[
  {t:"I stay on the floor with maintenance to compress the repair; with the right pressure and parts, 4 hours can become 2.",v:2},
  {t:"I set a decision gate: maintenance confirms repair viability by 12:00 while planning preps a partial-shipment option — at 12:00 we commit to one path.",v:4},
  {t:"I call the customer now to open the delivery window before deciding internally — managing their expectations early is cheaper than surprising them at 17:00.",v:1},
  {t:"I rebalance what I can to other lines now and schedule overtime recovery for the rest, keeping logistics informed of both moves.",v:3}]},
 {d:"EST",t:"A single customer accounts for 70% of your plant's revenue. The operation is profitable and stable, and that customer is growing. How do you handle it?",o:[
  {t:"I build quiet optionality — broad certifications, flexible capacity — so we can pivot fast if the relationship sours, without distracting the operation today.",v:1},
  {t:"I quantify the exposure with scenarios (volume cut, price squeeze, program exit) and get it formally onto the group's risk agenda.",v:3},
  {t:"I deepen the moat: multi-year agreements, engineering integration and joint roadmaps that make switching away from us expensive.",v:2},
  {t:"I take corporate a diversification thesis: named target customers, the capacity plan to serve them, and what it costs to be credible in their supply base.",v:4}]},
 {d:"COM",t:"You must announce to the whole plant the elimination of a bonus the workforce considers an earned right. How do you communicate it?",o:[
  {t:"I brief supervisors and middle managers first with the full why, then face each shift myself with the business reason and what stays protected.",v:4},
  {t:"I package it with the new variable-pay scheme so the message is a restructuring of compensation, not a removal.",v:2},
  {t:"I make the announcement myself at a single all-hands with open Q&A the same week, so everyone hears one version from me.",v:3},
  {t:"I have each manager deliver it to their own team — people absorb hard news better from the boss they see every day than from a podium.",v:1}]},
 {d:"OPE",t:"Your OTIF (on-time, in-full deliveries) dropped 4 points in one month after a stable year. What do you do first?",o:[
  {t:"I stand up a daily OTIF recovery meeting with planning, production and logistics until the number is back where it was.",v:3},
  {t:"I segment the misses by customer, line and cause before moving anything — one bad program and a systemic slide need different responses.",v:4},
  {t:"I ask each area head for a recovery commitment with dates and consolidate them into the plan I report upward.",v:1},
  {t:"I check the two usual suspects first — material shortages and the newest product ramp — and fix what I find there.",v:2}]},
 {d:"ADA",t:"Corporate orders a new ERP rollout. Your managers see it as a burden and are doing the bare minimum. What do you do?",o:[
  {t:"I bring in the integrator's change-management package — structured training and certification for every key user — so adoption doesn't depend on enthusiasm.",v:2},
  {t:"I negotiate scope with corporate: a phased rollout that respects the operation's real absorption capacity instead of the standard timeline.",v:1},
  {t:"I make it theirs: an internal project lead, ERP milestones written into each manager's objectives, and the case for why the plant needs it.",v:4},
  {t:"I start with the two most receptive managers, get their areas live first, and let their results pull the skeptics along.",v:3}]},
 {d:"LID",t:"Two of your managers (production and quality) have been in open conflict for weeks and decisions are stalling. Both are strong performers. How do you intervene?",o:[
  {t:"I give them a shared KPI both are measured on this quarter — nothing aligns two managers faster than a number they can only hit together.",v:1},
  {t:"I sit them down together, put the cost of the conflict on the table and have them agree decision rules — which I then personally enforce for weeks.",v:4},
  {t:"I meet each one separately first to locate the real issue, then decide whether this needs mediation or a structural fix.",v:3},
  {t:"I redraw the decision rights between production and quality so the process stops depending on their relationship.",v:2}]},
 {d:"DEC",t:"Quality flags a questionable data point in the tests of a lot that is already palletized to ship today. Repeating the test takes 6 hours. What do you decide?",o:[
  {t:"I give quality one hour to determine if the doubt is in the measurement or the product; if it's the product — or still unclear — the lot holds.",v:4},
  {t:"I check whether the parameter is critical to function; if it isn't, I release with a documented engineering rationale and retest in parallel.",v:1},
  {t:"I ship with a formal quality alert to the customer's receiving inspection and full traceability on the lot — transparency instead of delay.",v:2},
  {t:"I hold the lot and repeat the test, full stop. I'd rather explain one late truck than one escaped defect.",v:3}]},
 {d:"EST",t:"The plant hits all its operational KPIs, but margin has been falling for three straight quarters. How do you approach it?",o:[
  {t:"I sit with finance to decompose the margin fall quarter by quarter before touching anything in the operation.",v:3},
  {t:"I document that the erosion is in pricing and mix — both negotiated above me — and keep the plant focused on what it controls.",v:1},
  {t:"I rebuild the bridge from KPIs to P&L — mix, pricing, cost drift the indicators don't capture — and reset what we measure based on what I find.",v:4},
  {t:"I launch a structured cost-out program: a mature operation always carries waste its own KPIs have gone blind to.",v:2}]},
 {d:"COM",t:"You must present quarterly results below commitment to corporate (abroad). How do you structure the message?",o:[
  {t:"I open with the operating context every plant faced this quarter, then our gap against it, then the plan — numbers without context invite the wrong conclusions.",v:2},
  {t:"The number first, unvarnished; causes split into controllable and external; recovery plan with dates and owners.",v:4},
  {t:"I lead with the recovery actions already underway and put the detailed variance analysis in the appendix for questions.",v:1},
  {t:"I pre-wire the key committee members individually before the session so nobody is surprised in the room, then walk the full group through the plan.",v:3}]},
 {d:"OPE",t:"Scrap has been above target for three months despite the team's actions. What is your role?",o:[
  {t:"I tie the area's variable compensation to the scrap target — well-designed incentives find root causes faster than management reviews do.",v:1},
  {t:"I assign a senior engineer to it full-time with authority across shifts, reporting progress to me weekly.",v:3},
  {t:"I concentrate the effort: the top three scrap SKUs get dedicated kaizen events; dispersion is why three months of actions haven't landed.",v:2},
  {t:"I review the root-cause analyses myself: whether the actions attack cause or symptom, and what resources or authority the team is missing.",v:4}]},
 {d:"ADA",t:"In the middle of a new product ramp-up, the customer changes a key specification. Your team is stretched thin. What do you do?",o:[
  {t:"I quantify the impact on cost, quality and dates with my team, renegotiate timing or price with the customer, and reprioritize to absorb it.",v:4},
  {t:"I accept it and fast-track engineering — flexibility in moments like this is how a supplier earns the next program.",v:2},
  {t:"I carve out a dedicated team for the change and keep everyone else locked on the original ramp-up plan.",v:3},
  {t:"I invoke the change-control clause: the spec freezes until the engineering change is signed and priced, as the contract provides.",v:1}]},
 {d:"LID",t:"Your best manager didn't get the promotion he expected (the position was frozen) and his performance is starting to slip. What do you do?",o:[
  {t:"I put him on a high-visibility project with corporate exposure while the position unfreezes, so the path stays tangible.",v:3},
  {t:"I have the honest career conversation: what is realistic here, on what timeline, and what he'd need to demonstrate — even if the answer disappoints him.",v:4},
  {t:"I stay close but give him room to process the disappointment; forcing the conversation while it's raw usually backfires.",v:1},
  {t:"I work with HR on a retention package ready before he starts interviewing — losing him costs more than any adjustment.",v:2}]},
 {d:"DEC",t:"Corporate demands you cut operating expenses by 10% and respond with the plan within 48 hours. How do you proceed?",o:[
  {t:"I commit to 6% immediately with a credible path to 10%, protecting the lines that feed our top customers — and defend that math.",v:2},
  {t:"I cascade it: each manager finds 10% in their own area within 24 hours — they know where the fat is better than I do.",v:1},
  {t:"I rank spend by its impact on quality and delivery, cut asymmetrically — deep where value is low — and present the plan with its risks made explicit.",v:4},
  {t:"I deliver the 10% with reversible cuts now (travel, consultants, temps) and a 30-day plan to replace them with structural ones.",v:3}]},
 {d:"EST",t:"Nearshoring is bringing new players and potential customers to your region. What do you do with that trend?",o:[
  {t:"I feed the signals to corporate development and let them lead; plant-level selling creates commitments we can't price properly.",v:1},
  {t:"I take corporate a business case: available capacity, differentiating capabilities and named prospects to capture the demand.",v:4},
  {t:"I get the plant into the deal flow now — regional clusters, site selectors, the people relocating supply chains — before we need anything from them.",v:3},
  {t:"I prepare defensively: lock in my key people and suppliers with agreements before the newcomers bid them up.",v:2}]},
 {d:"COM",t:"A rumor is circulating on the floor that the plant is going to close. It's false, but it's already hurting morale and people are job-hunting. What do you do?",o:[
  {t:"I address it head-on the same day, shift by shift, with the order book and project pipeline as evidence — and leave a channel open for questions.",v:4},
  {t:"I counter-program: I accelerate the announcement of the new program we had in the pipeline, so facts displace the rumor without dignifying it.",v:1},
  {t:"I trace the source first — a rumor this specific usually has one, and answering it wrong amplifies it.",v:2},
  {t:"I arm the supervisors with talking points today and hold a town hall within the week.",v:3}]},
 {d:"OPE",t:"One area has been running on chronic overtime for months. The manager says 'that's how we hit the schedule.' The crew likes the extra pay. What do you do?",o:[
  {t:"I run the numbers: if sustained overtime beats the fully loaded cost of hiring, it stays; if not, we hire. Emotion out, math in.",v:3},
  {t:"The schedule ships, the crew wants the hours, and the premium is budgeted — I don't fix what the numbers say isn't broken.",v:1},
  {t:"I treat it as a symptom: capacity, line-balancing and absenteeism analysis before any decision — the overtime is hiding something.",v:4},
  {t:"I cap it on a declining schedule quarter by quarter, forcing the area to engineer the need out of the process.",v:2}]},
 {d:"ADA",t:"Your corporate boss gives you hard feedback: your style is 'too operational' and you lack business vision. How do you react?",o:[
  {t:"I engage an executive coach privately; feedback like that is a career signal you work on seriously and discreetly.",v:2},
  {t:"I ask for concrete examples, cross-check the perception with my team and peers, and build a development plan I review with him.",v:4},
  {t:"I walk him through how this plant's results are built — the style he's questioning is exactly what produces the numbers he approves.",v:1},
  {t:"I change what he sees: how I present, what I prioritize in reviews, the altitude of my questions — perception is part of the job.",v:3}]},
 {d:"LID",t:"A critical audit from your main customer is approaching. How do you organize the preparation?",o:[
  {t:"Audits are the quality manager's core process; I resource whatever he asks for and join at the closing meeting where my presence matters.",v:1},
  {t:"I stand up a cross-functional war room with weekly cadence that I chair until the audit.",v:3},
  {t:"I contract a mock audit with an external auditor a month ahead and drive the preparation off its findings.",v:2},
  {t:"I name an owner with experience, agree the plan and deliverables with him, and review progress at defined checkpoints.",v:4}]},
 {d:"DEC",t:"Your sole supplier of a critical component warns it will miss deliveries right before a product launch. What do you do first?",o:[
  {t:"I quantify the exact gap — how many parts, which weeks — and split my team onto three fronts: supplier recovery, alternate source, customer scenarios.",v:4},
  {t:"I pull the launch team into re-scoping: which configurations can launch without that component while supply recovers.",v:2},
  {t:"I put someone in the supplier's plant today with authority to commit expediting money and report the real situation back to me.",v:3},
  {t:"I align with corporate purchasing before acting — sole-source decisions were made at group level and uncoordinated pressure on the supplier can backfire.",v:1}]},
 {d:"EST",t:"Qualified technicians are getting harder to find in your region and competition for talent is driving wages up. What is your 3-year play?",o:[
  {t:"I redesign the work so fewer scarce skills are critical: automate the bottleneck stations and deskill what can be deskilled.",v:3},
  {t:"I build the pipeline: dual-education agreements with technical schools, an internal academy, and growth paths that make us the employer people aim for.",v:4},
  {t:"I evaluate a satellite operation in a city where the talent pool is deeper, and let the labor market drive the footprint.",v:1},
  {t:"I build a technician retention ladder — certifications tied to pay steps, deliberately ahead of market.",v:2}]},
 {d:"COM",t:"You need corporate to approve a $2M investment in automation you consider impossible to postpone. How do you make the case?",o:[
  {t:"I make the technical case airtight — payback, capacity, quality — and let the numbers carry the decision; lobbying cheapens a solid case.",v:2},
  {t:"I tie it to accountability: without this investment I cannot commit to next year's capacity plan, and I put that in writing.",v:1},
  {t:"ROI plus the quantified cost of NOT investing, benchmarked against sister plants — and the key committee members aligned before the meeting starts.",v:4},
  {t:"I propose a pilot first: a smaller ask, proof on our own floor, then the full request backed by our own data.",v:3}]},
 {d:"OPE",t:"How do you follow up on the plant's monthly objectives?",o:[
  {t:"Management by exception: thresholds are set, alerts reach me when something breaches, and I go deep only where they fire.",v:1},
  {t:"Tiered cadence: daily and weekly boards by level where deviations trigger actions with an owner and a date; the monthly review is for trends.",v:4},
  {t:"Weekly one-on-ones with each manager built around their three critical numbers.",v:3},
  {t:"A disciplined monthly business review: pre-reads with real analysis, hard questions in the room, minuted commitments.",v:2}]},
 {d:"ADA",t:"A labor reform forces you to restructure the shifts of the entire plant within 90 days. How do you lead it?",o:[
  {t:"A project team (HR, production, legal), shift scenarios modeled, the workforce involved in the transition, and the why communicated from day one.",v:4},
  {t:"I hold for the group's guideline — diverging locally on labor structure is a liability that outlives any deadline.",v:1},
  {t:"Legal-first: the minimum compliant change now, and the deeper shift redesign later without a regulatory gun to our head.",v:2},
  {t:"I benchmark how the strongest plants in the region are solving it and adapt the best design — 90 days is no time to invent.",v:3}]},
 {d:"LID",t:"You notice your management team reports problems only after they've blown up, not when they start. How do you fix it?",o:[
  {t:"I add a standing 'top three risks' item to the weekly meeting, owned by a rotating manager so it never becomes a formality.",v:3},
  {t:"I institute regular skip-level meetings — the level below my managers always knows what's brewing before it escalates.",v:1},
  {t:"I start with how I receive bad news, then build routines where raising a risk early is visibly recognized instead of punished.",v:4},
  {t:"I build a leading-indicator dashboard so problems surface in the data before they depend on anyone's willingness to speak.",v:2}]},
 {d:"DEC",t:"Sales brings you an urgent, highly profitable order that would saturate your capacity this month and put committed deliveries at risk. What do you decide?",o:[
  {t:"I take it and protect the commitments with premium freight and weekend shifts — the margin covers those costs several times over.",v:2},
  {t:"I price the disruption with planning — what slips, by how much, for whom — and only take it if the affected customers agree to new dates.",v:4},
  {t:"I send sales back for the customer's real flexibility on dates and volume before I spend any planning effort on scenarios.",v:1},
  {t:"I take the portion that fits without touching commitments and offer the balance next month; margin doesn't justify burning promises.",v:3}]},
 {d:"EST",t:"You can close the year above budget, or invest that surplus in automating a bottleneck process. The team's bonus depends on the annual result. What do you do?",o:[
  {t:"I bank the year. Credibility with corporate is the asset that funds every future investment — you don't spend it voluntarily.",v:1},
  {t:"I secure pre-approval now to execute the investment in Q1: the year closes strong, the bonus stands, and the automation slips only one quarter.",v:3},
  {t:"I split it: a partial investment that keeps us above budget this year, and the full automation case in next year's plan.",v:2},
  {t:"I present both scenarios to corporate with numbers and recommend the investment — negotiating to recognize it outside the bonus baseline.",v:4}]},
 {d:"COM",t:"A peer director (another plant in the group) systematically breaks the agreements made between plants, and it hurts your operation. What do you do?",o:[
  {t:"I go to him directly with the data on the misses and their cost, and we agree a follow-up mechanism between the two of us — escalation stays in reserve.",v:4},
  {t:"I set up a shared tracker with his planning chief where every commitment and miss is visible — transparency does the confronting for me.",v:2},
  {t:"I propose a formal inter-plant service agreement at the next group review, so compliance stops depending on goodwill.",v:3},
  {t:"I build buffers and reduce my dependence on his plant; some peers only move when you stop needing them.",v:1}]},
 {d:"OPE",t:"A key improvement project (changeover time reduction) has been stalled for two months. What do you do?",o:[
  {t:"I re-scope it smaller: one line, one visible win in 30 days, and rebuild momentum from there.",v:3},
  {t:"I diagnose why it stalled — priority, resources, the leader's capacity — fix that specific cause and restore short-cycle reviews with me.",v:4},
  {t:"I make it the plant's metric of the quarter — visibility on every dashboard will do what routine follow-up hasn't.",v:1},
  {t:"I bring the changeover specialists from our sister plant for a focused week to re-energize it with outside expertise.",v:2}]},
 {d:"ADA",t:"Corporate is pushing 'Industry 4.0' and your floor still runs on paper records. Where do you start?",o:[
  {t:"I commission a plant digitalization roadmap from a firm that has done this before; this is not a journey to learn by trial and error.",v:2},
  {t:"I standardize and stabilize the processes on paper first — digitizing an undisciplined process just gives you faster chaos.",v:1},
  {t:"A high-impact pilot process, digitized with the operators involved from the design stage; measure the benefit, then scale with a proven case.",v:4},
  {t:"Baseline first: what data we capture today, which of it matters, and what decisions it would feed — then choose where digital actually pays.",v:3}]}
];

const NOMBRE_BANDA = [
  {min:80, id:"fortaleza",  chip:"chip-fortaleza",  nombre:"Strength"},
  {min:60, id:"solido",     chip:"chip-solido",     nombre:"Solid"},
  {min:40, id:"desarrollo", chip:"chip-desarrollo", nombre:"Developing"},
  {min:0,  id:"atencion",   chip:"chip-atencion",   nombre:"Needs attention"}
];

const TEXTOS = {
 LID:{
  fortaleza:"Builds teams that work without his or her constant presence: diagnoses before acting, delegates with checkpoints and confronts conflict between managers instead of managing around it. A talent multiplier.",
  solido:"Manages the direct team well and addresses people issues as they appear. The next level is anticipation: developing middle management deliberately and attacking the causes of turnover before they show up in the KPI.",
  desarrollo:"Tends to solve people issues with quick fixes (moving, compensating, pressuring) rather than diagnosis. Investing time in understanding causes and in direct, honest conversations would raise the whole team's performance.",
  atencion:"The results in this dimension suggest people leadership is currently the biggest risk: reactive decisions around conflict, turnover and demotivation. It is the area where a development plan would deliver the highest immediate return."
 },
 DEC:{
  fortaleza:"Decides fast without deciding blind: sizes the problem, opens parallel fronts and owns the cost of hard calls (holding a shipment, prioritizing a cut). A reliable profile in a crisis.",
  solido:"Handles operational pressure well and looks for data before acting. Can gain speed by delegating data-gathering and deciding with 80% of the picture, instead of waiting for a certainty that never comes.",
  desarrollo:"Under pressure, tends toward one of two extremes: deciding instantly without sizing the problem, or waiting for complete information that never arrives. Practicing crisis protocols (size → parallel fronts → decide) would build consistency.",
  atencion:"Decision-making under pressure is currently a vulnerability: the answers suggest urgency or paralysis wins over method. Before the next crisis, it is worth defining clear escalation and decision protocols."
 },
 EST:{
  fortaleza:"Thinks beyond the month's KPI: questions the plant's business model, spots structural risks (customer concentration, talent, margin) and turns trends like nearshoring into concrete business cases.",
  solido:"Identifies strategic risks and analyzes them correctly, but tends to hand them up to corporate rather than arriving with the proposal built. Moving from flagging the risk to proposing the play is the next step.",
  desarrollo:"The focus is on the present operation; long-horizon issues (diversification, 3-year talent, investment) tend to be postponed or delegated upward. Reserving agenda time for strategy would change this profile.",
  atencion:"Strategic thinking shows as the least developed area: the plant may be running well today while tomorrow's risks accumulate. This is the classic gap of the strong operational profile aspiring to general management."
 },
 COM:{
  fortaleza:"Communicates with method: shows up in person for the hard messages, structures bad news without dressing it up and builds allies before asking corporate for decisions. His or her word moves the organization.",
  solido:"Communicates honestly and with reasonable structure. Can level up by preparing the ground: aligning middle management before mass announcements and working the decision-makers before key meetings.",
  desarrollo:"Tends to delegate or depersonalize difficult communication (memos, bulletin boards, HR) when the moment calls for direct presence. Teams read that distance. Showing up in person more often would strengthen moral authority.",
  atencion:"Communication is currently a brake on executive effectiveness: hard messages avoided or misrouted end up costing morale, rumors and credibility with corporate. A priority area for coaching."
 },
 OPE:{
  fortaleza:"Runs the operation with system discipline: short KPI cadence, deviations with an owner and a date, and a nose for separating symptom from cause (chronic overtime, persistent scrap). Delivers sustainable results, not just monthly ones.",
  solido:"Follows up on results consistently and gets involved when there are deviations. Tightening the cadence (from monthly to weekly/daily by level) and digging into root cause before acting would raise control of the operation.",
  desarrollo:"Follow-up tends to be reactive or low-frequency: problems get attention once the monthly KPI has already fallen. Installing visual management routines and short reviews would change results within months.",
  atencion:"Results management shows significant gaps: distant follow-up, targets without a mechanism, and a tendency toward pressure-based fixes (ultimatums, caps) over process-based ones. This is the foundation to rebuild first."
 },
 ADA:{
  fortaleza:"Leads change instead of enduring it: pilots with success stories, people involved from the design stage and genuine openness to feedback about his or her own style. The right profile for major transformations.",
  solido:"Accepts change and implements it in an orderly way, seeking to understand the baseline first. The opportunity is to move from implementer to champion: generating the success stories that pull the skeptics along.",
  desarrollo:"Faced with change, tends toward formal compliance (doing the minimum, waiting for guidelines) or reasoned resistance. It works, but it leaves him or her out of the transformations that define executive careers.",
  atencion:"Adaptability shows as a critical area: the answers suggest resistance or passivity toward changes in systems, specifications or personal style. In an environment of nearshoring and digitalization, it is the most expensive gap."
 }
};

const PERFILES = {
 personas:{nombre:"People Leader", sub:"Your main lever is the team",
  texto:"Your response pattern indicates your strongest levers are with people: you lead, communicate and mobilize. Executives with this profile sustain plants with a healthy climate and low turnover; their typical risk is neglecting system rigor (KPIs, root cause) trusting the team to solve it."},
 ejecucion:{nombre:"Operational Leader", sub:"Your main lever is execution",
  texto:"Your response pattern indicates an execution profile: you decide under pressure and control the operation with discipline. Executives with this profile deliver consistent results; their typical risk is staying in the present-day operation and ceding the strategic agenda to corporate."},
 estrategia:{nombre:"Change Strategist", sub:"Your main lever is vision",
  texto:"Your response pattern indicates a future-oriented profile: you read trends, question the model and lead transformations. Executives with this profile position their plants to grow; their typical risk is losing day-to-day traction if the operational team isn't strong."},
 integral:{nombre:"Well-Rounded Executive", sub:"Balanced across all six dimensions",
  texto:"Your results are consistently high and balanced across people, execution and strategy — the profile corporates look for in general management and new plants. This profile's challenge isn't a gap, but choosing where to go deeper in order to stand out."}
};
const GRUPO_DIM = {LID:"personas",COM:"personas",DEC:"ejecucion",OPE:"ejecucion",EST:"estrategia",ADA:"estrategia"};
const CALIFICADOR = [
  {min:75, texto:"established"},
  {min:50, texto:"consolidating"},
  {min:0,  texto:"developing"}
];

/* ===================== THEME ===================== */
(function(){
  let guardado = null;
  try{ guardado = localStorage.getItem("pd_tema"); }catch(e){}
  if(guardado==="light"||guardado==="dark") document.documentElement.dataset.theme = guardado;
})();
function temaEfectivo(){
  const t = document.documentElement.dataset.theme;
  if(t==="light"||t==="dark") return t;
  return (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) ? "dark":"light";
}
function pintarIconoTema(){
  const oscuro = temaEfectivo()==="dark";
  document.getElementById("icono-sol").style.display = oscuro ? "block":"none";
  document.getElementById("icono-luna").style.display = oscuro ? "none":"block";
}
document.getElementById("btn-tema").addEventListener("click", ()=>{
  const nuevo = temaEfectivo()==="dark" ? "light":"dark";
  document.documentElement.dataset.theme = nuevo;
  try{ localStorage.setItem("pd_tema", nuevo); }catch(e){}
  pintarIconoTema();
});
if(window.matchMedia){
  window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", pintarIconoTema);
}
pintarIconoTema();

/* ===================== STATE ===================== */
const CLAVES_DIM = Object.keys(DIMENSIONES);
let estado = null;
let intervaloReloj = null;

function guardarEstado(){ try{ sessionStorage.setItem("pd_estado", JSON.stringify(estado)); }catch(e){} }
function cargarEstado(){ try{ return JSON.parse(sessionStorage.getItem("pd_estado")); }catch(e){ return null; } }
function limpiarEstado(){ try{ sessionStorage.removeItem("pd_estado"); }catch(e){} }

function mostrarVista(id){
  ["vista-landing","vista-acceso","vista-test","vista-resultados"].forEach(v=>{
    document.getElementById(v).classList.toggle("oculto", v!==id);
  });
  window.scrollTo(0,0);
}

/* ===================== ACCESS ===================== */
function irAcceso(){ mostrarVista("vista-acceso"); document.getElementById("campo-email").focus(); }
document.getElementById("btn-acceso-header").addEventListener("click", irAcceso);
document.getElementById("btn-acceso-hero").addEventListener("click", irAcceso);
document.getElementById("btn-acceso-cta").addEventListener("click", irAcceso);

document.getElementById("form-acceso").addEventListener("submit", function(ev){
  ev.preventDefault();
  const email = document.getElementById("campo-email").value.trim().toLowerCase();
  const codigo = document.getElementById("campo-codigo").value.trim().toUpperCase();
  const err = document.getElementById("error-acceso");
  const emailValido = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email);
  if(!emailValido){
    err.textContent = "Enter a valid email address (e.g. name@company.com).";
    err.classList.remove("oculto"); return;
  }
  if(!CODIGOS_ACCESO.includes(codigo)){
    err.textContent = "That access code isn't valid. Check it with whoever is coordinating your assessment process.";
    err.classList.remove("oculto"); return;
  }
  err.classList.add("oculto");
  estado = {
    email, codigo,
    idx:0,
    respuestas: new Array(PREGUNTAS.length).fill(null),
    inicio: Date.now(),
    limite: Date.now() + MINUTOS_LIMITE*60*1000,
    terminado:false
  };
  guardarEstado();
  iniciarTest();
});

/* ===================== TEST ===================== */
function iniciarTest(){
  mostrarVista("vista-test");
  pintarPregunta();
  if(intervaloReloj) clearInterval(intervaloReloj);
  intervaloReloj = setInterval(tic, 1000);
  tic();
}

function tic(){
  const restante = Math.max(0, estado.limite - Date.now());
  const m = Math.floor(restante/60000), s = Math.floor((restante%60000)/1000);
  document.getElementById("reloj-texto").textContent = String(m).padStart(2,"0")+":"+String(s).padStart(2,"0");
  document.getElementById("reloj").classList.toggle("alerta", restante <= 5*60*1000);
  if(restante <= 0){ finalizar(true); }
}

function pintarPregunta(){
  const i = estado.idx, p = PREGUNTAS[i];
  document.getElementById("contador-preg").textContent = "Question "+(i+1)+" of "+PREGUNTAS.length;
  document.getElementById("dim-pregunta").textContent = DIMENSIONES[p.d].nombre;
  document.getElementById("texto-pregunta").textContent = p.t;
  const contestadas = estado.respuestas.filter(r=>r!==null).length;
  document.getElementById("relleno-progreso").style.width = (contestadas/PREGUNTAS.length*100)+"%";

  const cont = document.getElementById("opciones");
  cont.innerHTML = "";
  const letras = ["A","B","C","D"];
  p.o.forEach((op,j)=>{
    const b = document.createElement("button");
    b.type = "button";
    b.className = "opcion" + (estado.respuestas[i]===j ? " elegida":"");
    b.setAttribute("role","radio");
    b.setAttribute("aria-checked", estado.respuestas[i]===j ? "true":"false");
    b.innerHTML = '<span class="letra">'+letras[j]+'</span><span></span>';
    b.querySelector("span:last-child").textContent = op.t;
    b.addEventListener("click", ()=>{
      estado.respuestas[i]=j; guardarEstado(); pintarPregunta();
    });
    cont.appendChild(b);
  });

  document.getElementById("btn-anterior").disabled = (i===0);
  const btnSig = document.getElementById("btn-siguiente");
  btnSig.textContent = (i===PREGUNTAS.length-1) ? "See my results" : "Next →";
  // no advancing without an answer
  btnSig.disabled = (estado.respuestas[i]===null);
  const aviso = document.getElementById("aviso-faltan");
  aviso.textContent = "Select the option closest to what you would actually do to continue.";
  aviso.classList.toggle("oculto", estado.respuestas[i]!==null);
}

document.getElementById("btn-anterior").addEventListener("click", ()=>{
  if(estado.idx>0){ estado.idx--; guardarEstado(); pintarPregunta(); }
});
document.getElementById("btn-siguiente").addEventListener("click", ()=>{
  if(estado.respuestas[estado.idx]===null) return;
  if(estado.idx < PREGUNTAS.length-1){
    estado.idx++; guardarEstado(); pintarPregunta();
  } else {
    finalizar(false);
  }
});

/* ===================== SCORING ===================== */
function calcular(){
  const porDim = {};
  CLAVES_DIM.forEach(k=> porDim[k]={puntos:0,max:0});
  PREGUNTAS.forEach((p,i)=>{
    porDim[p.d].max += 4;
    const r = estado.respuestas[i];
    if(r!==null) porDim[p.d].puntos += p.o[r].v;
  });
  const dims = CLAVES_DIM.map(k=>({
    clave:k, etiqueta:DIMENSIONES[k].clave, nombre:DIMENSIONES[k].nombre,
    puntos:porDim[k].puntos, max:porDim[k].max,
    pct: Math.round(porDim[k].puntos/porDim[k].max*100)
  }));
  const totalPts = dims.reduce((a,d)=>a+d.puntos,0);
  const totalMax = dims.reduce((a,d)=>a+d.max,0);
  const global = Math.round(totalPts/totalMax*100);

  const orden = [...dims].sort((a,b)=>b.pct-a.pct);
  const dispersion = orden[0].pct - orden[orden.length-1].pct;
  let perfil;
  if(global>=70 && dispersion<=12){ perfil = PERFILES.integral; }
  else { perfil = PERFILES[GRUPO_DIM[orden[0].clave]]; }
  const calif = CALIFICADOR.find(c=>global>=c.min).texto;
  return {dims, orden, global, perfil, calif, totalPts, totalMax};
}

function banda(pct){ return NOMBRE_BANDA.find(b=>pct>=b.min); }

/* ===================== RESULTS ===================== */
function finalizar(porTiempo){
  if(estado.terminado) return;
  estado.terminado = true;
  estado.fin = Date.now();
  guardarEstado();
  clearInterval(intervaloReloj);
  const r = calcular();
  pintarResultados(r, porTiempo);
  mostrarVista("vista-resultados");
}

function pintarResultados(r, porTiempo){
  const contestadas = estado.respuestas.filter(x=>x!==null).length;
  const seg = Math.min(MINUTOS_LIMITE*60, Math.round((estado.fin-estado.inicio)/1000));
  const mm = Math.floor(seg/60), ss = seg%60;
  const fecha = new Date(estado.fin).toLocaleDateString("en-US",{year:"numeric",month:"long",day:"numeric"});

  document.getElementById("meta-reporte").innerHTML =
    "<b></b><br>Date: <span class='num'>"+fecha+"</span><br>Questions answered: <span class='num'>"+contestadas+" of "+PREGUNTAS.length+"</span>";
  document.getElementById("meta-reporte").querySelector("b").textContent = estado.email;

  document.getElementById("res-perfil").textContent = r.perfil.nombre;
  document.getElementById("res-perfil-sub").textContent = r.perfil.sub + " · " + r.calif + " profile";
  document.getElementById("res-global").textContent = r.global + "%";
  document.getElementById("res-global-sub").textContent = r.totalPts + " of " + r.totalMax + " possible points";
  document.getElementById("res-tiempo").textContent = String(mm).padStart(2,"0")+":"+String(ss).padStart(2,"0");
  document.getElementById("res-tiempo-sub").textContent = porTiempo ? "Closed automatically at the time limit" : "of a maximum of "+MINUTOS_LIMITE+":00";

  // overall qualitative synthesis
  const fuerte = r.orden[0], debil = r.orden[r.orden.length-1];
  document.getElementById("sintesis").innerHTML =
    "<span class='etiqueta'>Assessor's synthesis</span><p style='margin-top:8px'></p><p></p>";
  const ps = document.getElementById("sintesis").querySelectorAll("p");
  ps[0].textContent = r.perfil.texto;
  ps[1].textContent = "Your strongest dimension is " + fuerte.nombre.toLowerCase() + " (" + fuerte.pct +
    "%) and your biggest development opportunity is " + debil.nombre.toLowerCase() + " (" + debil.pct +
    "%). " + (porTiempo ? "The instrument closed at the time limit; unanswered questions score zero and may understate the real profile. " : "") +
    "We recommend contrasting this result with a competency-based interview and with the operation's results over the last 12 months.";

  // bars
  const cont = document.getElementById("grafica-barras");
  cont.innerHTML = "";
  r.dims.forEach(d=>{
    const fila = document.createElement("div");
    fila.className = "fila-barra";
    fila.innerHTML = '<div class="nombre"></div>'+
      '<div class="pista-barra"><div class="relleno-barra" style="width:'+d.pct+'%"></div></div>'+
      '<div class="valor num">'+d.puntos+' / '+d.max+'<small>'+d.pct+'%</small></div>';
    fila.querySelector(".nombre").textContent = d.nombre;
    const pista = fila.querySelector(".pista-barra");
    pista.addEventListener("mousemove", ev=>mostrarTooltip(ev, d.nombre+": "+d.puntos+"/"+d.max+" pts ("+d.pct+"% · "+banda(d.pct).nombre+")"));
    pista.addEventListener("mouseleave", ocultarTooltip);
    cont.appendChild(fila);
  });

  // radar
  document.getElementById("radar-resultado").innerHTML = "";
  document.getElementById("radar-resultado").appendChild(
    crearRadar(r.dims.map(d=>({etiqueta:d.etiqueta, nombre:d.nombre, pct:d.pct})), true)
  );

  // qualitative reading per dimension
  const lista = document.getElementById("lista-cualitativa");
  lista.innerHTML = "";
  r.orden.forEach(d=>{
    const b = banda(d.pct);
    const item = document.createElement("div");
    item.className = "item-cualitativo";
    item.innerHTML = '<div class="fila-titulo"><h3></h3><span class="chip '+b.chip+'"></span></div><p></p>';
    item.querySelector("h3").textContent = d.nombre + " — " + d.pct + "%";
    item.querySelector(".chip").textContent = b.nombre;
    item.querySelector("p").textContent = TEXTOS[d.clave][b.id];
    lista.appendChild(item);
  });

  // table
  const tbody = document.querySelector("#tabla-datos tbody");
  tbody.innerHTML = "";
  r.dims.forEach(d=>{
    const tr = document.createElement("tr");
    tr.innerHTML = "<td></td><td class='num'>"+d.puntos+"</td><td class='num'>"+d.max+"</td><td class='num'>"+d.pct+"%</td><td></td>";
    tr.children[0].textContent = d.nombre;
    tr.children[4].innerHTML = '<span class="chip '+banda(d.pct).chip+'">'+banda(d.pct).nombre+'</span>';
    tbody.appendChild(tr);
  });
  const trTot = document.createElement("tr");
  trTot.innerHTML = "<td><b>Overall</b></td><td class='num'><b>"+r.totalPts+"</b></td><td class='num'><b>"+r.totalMax+"</b></td><td class='num'><b>"+r.global+"%</b></td><td></td>";
  tbody.appendChild(trTot);
}

document.getElementById("btn-reiniciar").addEventListener("click", ()=>{
  if(confirm("End this participant's session? The on-screen report will be lost (print it first if you need it).")){
    limpiarEstado(); estado=null; location.reload();
  }
});

/* ===================== RADAR SVG ===================== */
function crearRadar(datos, conTooltip){
  const NS = "http://www.w3.org/2000/svg";
  const tam = 340, cx = tam/2, cy = tam/2 + 4, radio = 112;
  const n = datos.length;
  const svg = document.createElementNS(NS,"svg");
  svg.setAttribute("viewBox","0 0 "+tam+" "+tam);
  svg.setAttribute("class","radar-svg");
  svg.setAttribute("role","img");
  svg.setAttribute("aria-label","Radar chart with the percentage per dimension: "+datos.map(d=>d.nombre+" "+d.pct+"%").join(", "));
  svg.style.width="100%"; svg.style.height="auto";

  const punto = (i, r)=> {
    const ang = -Math.PI/2 + i*2*Math.PI/n;
    return [cx + r*Math.cos(ang), cy + r*Math.sin(ang)];
  };
  // grid
  [25,50,75,100].forEach(nivel=>{
    const poly = document.createElementNS(NS,"polygon");
    poly.setAttribute("points", datos.map((_,i)=>punto(i, radio*nivel/100).join(",")).join(" "));
    poly.setAttribute("class","rejilla");
    svg.appendChild(poly);
  });
  // axes + labels
  datos.forEach((d,i)=>{
    const [x,y] = punto(i, radio);
    const linea = document.createElementNS(NS,"line");
    linea.setAttribute("x1",cx); linea.setAttribute("y1",cy);
    linea.setAttribute("x2",x); linea.setAttribute("y2",y);
    linea.setAttribute("class","eje");
    svg.appendChild(linea);
    const [tx,ty] = punto(i, radio+24);
    const txt = document.createElementNS(NS,"text");
    txt.setAttribute("x",tx); txt.setAttribute("y",ty+4);
    txt.setAttribute("text-anchor","middle");
    txt.textContent = d.etiqueta;
    svg.appendChild(txt);
    const val = document.createElementNS(NS,"text");
    const [vx,vy] = punto(i, radio+24);
    val.setAttribute("x",vx); val.setAttribute("y",vy+18);
    val.setAttribute("text-anchor","middle");
    val.setAttribute("style","font-weight:750");
    val.textContent = d.pct+"%";
    svg.appendChild(val);
  });
  // data polygon
  const poly = document.createElementNS(NS,"polygon");
  poly.setAttribute("points", datos.map((d,i)=>punto(i, radio*d.pct/100).join(",")).join(" "));
  poly.setAttribute("class","poligono");
  svg.appendChild(poly);
  // points
  datos.forEach((d,i)=>{
    const [x,y] = punto(i, radio*d.pct/100);
    const c = document.createElementNS(NS,"circle");
    c.setAttribute("cx",x); c.setAttribute("cy",y); c.setAttribute("r",4.5);
    c.setAttribute("class","punto");
    if(conTooltip){
      c.style.cursor="default";
      c.addEventListener("mousemove", ev=>mostrarTooltip(ev, d.nombre+": "+d.pct+"%"));
      c.addEventListener("mouseleave", ocultarTooltip);
    }
    svg.appendChild(c);
  });
  return svg;
}

/* ===================== TOOLTIP ===================== */
const tooltip = document.getElementById("tooltip");
function mostrarTooltip(ev, texto){
  tooltip.textContent = texto;
  tooltip.style.display = "block";
  tooltip.style.left = ev.clientX+"px";
  tooltip.style.top = ev.clientY+"px";
}
function ocultarTooltip(){ tooltip.style.display="none"; }

/* ===================== STARTUP ===================== */
// sample radar on the landing
document.getElementById("radar-demo").appendChild(crearRadar([
  {etiqueta:"LEAD",nombre:"Team leadership",pct:82},
  {etiqueta:"DEC",nombre:"Decision-making under pressure",pct:74},
  {etiqueta:"STR",nombre:"Strategic thinking",pct:58},
  {etiqueta:"COM",nombre:"Communication & influence",pct:69},
  {etiqueta:"RES",nombre:"Results orientation",pct:88},
  {etiqueta:"ADA",nombre:"Adaptability to change",pct:63}
], false));

// restore an in-progress session (accidental reload during the test)
(function(){
  const previo = cargarEstado();
  if(previo && !previo.terminado && previo.limite > Date.now()){
    estado = previo;
    iniciarTest();
  } else if(previo && previo.terminado){
    limpiarEstado();
  }
})();
</script>
<script>
/* Sample solved run — auto-opens the results view */
(function(){
  const objetivoDim = {LID:3, DEC:4, EST:2, COM:3, OPE:4, ADA:3};
  const variacion = [0,0,-1,0,1,0,0,-1,0,0,1,0,0,0,-1,0,0,0,1,0,0,-1,0,0,0,1,0,0,-1,0];
  estado = {
    email:"j.hernandez@demoplant.com",
    codigo:"DEMO-DIRECTIVO",
    idx:29,
    respuestas: PREGUNTAS.map((p,i)=>{
      const objetivo = Math.min(4, Math.max(1, objetivoDim[p.d] + variacion[i]));
      let mejor=0, dist=9;
      p.o.forEach((o,j)=>{ const d=Math.abs(o.v-objetivo); if(d<dist){dist=d; mejor=j;} });
      return mejor;
    }),
    inicio: Date.now()-1174000,
    limite: Date.now()+326000,
    terminado:false
  };
  finalizar(false);
})();
</script>
</body>
</html>
