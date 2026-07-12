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
  margin-top:16px;background:var(--ambar-suave);color:var(--ambar);
  border-radius:var(--radio);padding:.7em .9em;font-size:.88rem;font-weight:600;
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
        <div class="paso"><h3>30 real scenarios</h3><p>Each question presents a plant situation with four courses of action. Choose the one closest to what you would actually do. 25 minutes, with a visible timer and progress bar.</p></div>
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
   Option order is deliberately shuffled. */
const PREGUNTAS = [
 {d:"LID",t:"The supervisor of your most critical line has the highest employee turnover in the plant. What is your first move?",o:[
  {t:"I review the exit data and exit interviews with him, and talk to operators on his line before deciding anything.",v:4},
  {t:"I set him a target to reduce turnover this quarter and review it at the monthly meeting.",v:3},
  {t:"I ask HR to raise the attendance bonus for that line to slow down the departures.",v:2},
  {t:"I move him to another area before the problem contaminates the rest of the shift.",v:1}]},
 {d:"DEC",t:"Line stoppage at 10:00 and your main customer's shipment leaves today at 18:00. Maintenance estimates a 4-hour repair. What do you do?",o:[
  {t:"I go to the floor, confirm the diagnosis with maintenance and in parallel activate plan B: rebalance to another line and alert logistics to the risk.",v:4},
  {t:"I wait for maintenance's formal report so I don't decide on incomplete data.",v:1},
  {t:"I immediately authorize overtime for the next shift to catch up once the line restarts.",v:2},
  {t:"I call production, quality and logistics into a quick meeting to define the recovery plan.",v:3}]},
 {d:"EST",t:"A single customer accounts for 70% of your plant's revenue. The operation is profitable and stable. How do you handle it?",o:[
  {t:"I propose a gradual diversification strategy to corporate: a new line of business or a second anchor customer, without neglecting the current one.",v:4},
  {t:"I strengthen the relationship with that customer: if they are satisfied, the risk is theoretical.",v:2},
  {t:"I leave it alone: the plant hits its metrics and diversification is corporate's decision, not mine.",v:1},
  {t:"I build a risk analysis and present it to corporate so they can decide whether we diversify.",v:3}]},
 {d:"COM",t:"You must announce to the whole plant the elimination of a bonus the workforce considers an earned right. How do you communicate it?",o:[
  {t:"I ask HR to communicate it via bulletin board and payroll; it's an administrative matter.",v:1},
  {t:"I first prepare supervisors and middle managers with the why, then face every shift in person explaining the business reason and what comes next.",v:4},
  {t:"I make the announcement myself in a single all-hands meeting so everyone hears the same version.",v:3},
  {t:"I communicate the change together with a compensating improvement to soften the reaction.",v:2}]},
 {d:"OPE",t:"Your OTIF (on-time, in-full deliveries) dropped 4 points this month. What do you do first?",o:[
  {t:"I reinforce supervision in shipping, which is where the problem shows up.",v:2},
  {t:"I ask planning for a more detailed monthly report so I can monitor it better.",v:1},
  {t:"I go down to the detail: I segment the drop by customer, line and root cause before moving anything.",v:4},
  {t:"I bring production, planning and logistics together so each area presents its causes and commitments.",v:3}]},
 {d:"ADA",t:"Corporate orders a new ERP rollout. Your managers see it as a burden and are doing the bare minimum. What do you do?",o:[
  {t:"I escalate to corporate that the local team isn't ready and ask to postpone the go-live.",v:1},
  {t:"I appoint an internal project leader, tie ERP milestones to each manager's objectives and communicate why the change benefits the plant.",v:4},
  {t:"I instruct that the implementation is mandatory and set committed dates per area.",v:2},
  {t:"I identify the most receptive managers to start with them and build internal success stories.",v:3}]},
 {d:"LID",t:"Two of your managers (production and quality) have been in open conflict for weeks and decisions are stalling. How do you intervene?",o:[
  {t:"I sit them down together, make the cost of the conflict to the plant explicit and we agree on decision rules; I follow up personally over the following weeks.",v:4},
  {t:"I reassign processes so they interact with each other as little as possible.",v:1},
  {t:"I talk to each one separately to understand their side and ask them to behave like professionals.",v:3},
  {t:"I let them work it out: they are adults and executives; stepping in undermines them.",v:2}]},
 {d:"DEC",t:"Quality flags a questionable data point in the tests of a lot that is already palletized to ship today. Repeating the test takes 6 hours. What do you decide?",o:[
  {t:"I hold the shipment, order the test repeated and notify the customer of the delay with the cause and a new date.",v:4},
  {t:"I ship: a questionable data point is not a failed one, and OTIF is also a commitment to the customer.",v:1},
  {t:"I ask quality to bring me evidence within 1 hour so I can decide with data whether it ships or holds.",v:3},
  {t:"I ship the lot but open an internal investigation to assign responsibility.",v:2}]},
 {d:"EST",t:"The plant hits all its operational KPIs, but margin has been falling for three straight quarters. How do you approach it?",o:[
  {t:"I question the model: I analyze product mix, costs the KPIs don't capture, and pricing — because operating well is no longer enough.",v:4},
  {t:"I tighten the current KPIs: more productivity and less waste will recover margin.",v:2},
  {t:"I ask finance for a formal explanation of the decline before taking a position.",v:3},
  {t:"Margin depends on prices corporate negotiates; my responsibility is the plant's KPIs.",v:1}]},
 {d:"COM",t:"You must present quarterly results below commitment to corporate (abroad). How do you structure the message?",o:[
  {t:"I explain the quarter's adverse context so it's understood the causes were external.",v:2},
  {t:"I present the recovery actions first so the focus doesn't stay on the number.",v:3},
  {t:"I open with the unvarnished number, follow with causes separating what was controllable from what wasn't, and close with a recovery plan with dates and owners.",v:4},
  {t:"I send the report in writing before the session so the meeting is just for questions.",v:1}]},
 {d:"OPE",t:"Scrap has been above target for three months despite the team's actions. What is your role?",o:[
  {t:"I lead the review myself: I ask to see the root-cause analyses, verify whether the actions attack the cause or the symptom, and assign resources where they're missing.",v:4},
  {t:"I issue an ultimatum: if it doesn't drop next month, there will be consequences in the area's evaluation.",v:1},
  {t:"I bring in a specialized external consultant to attack the problem.",v:2},
  {t:"I ask the quality manager for a formal reduction plan with weekly milestones.",v:3}]},
 {d:"ADA",t:"In the middle of a new product ramp-up, the customer changes a key specification. Your team is stretched thin. What do you do?",o:[
  {t:"I accept the change immediately: in manufacturing the customer defines and we execute.",v:2},
  {t:"I assess the impact on cost, quality and dates with my team, renegotiate timing or price with the customer, and reorganize internal priorities to absorb it.",v:4},
  {t:"I ask the customer to freeze specifications until the ramp-up ends as agreed.",v:1},
  {t:"I create a dedicated team for the change and keep the rest focused on the original ramp-up.",v:3}]},
 {d:"LID",t:"Your best manager didn't get the promotion he expected (the position was frozen) and his performance is starting to slip. What do you do?",o:[
  {t:"I talk to him directly: I acknowledge the frustration, give him honest clarity about his career path and we build a plan with real challenges and visibility.",v:4},
  {t:"I give him space for a few weeks; pressuring him now could trigger his resignation.",v:2},
  {t:"I work with corporate on an extraordinary salary adjustment to retain him.",v:3},
  {t:"I quietly start preparing his replacement; a demotivated employee leaves sooner or later.",v:1}]},
 {d:"DEC",t:"Corporate demands you cut operating expenses by 10% and respond with the plan within 48 hours. How do you proceed?",o:[
  {t:"I apply a flat 10% cut across all areas: it's fast, fair and defensible.",v:2},
  {t:"I prioritize with my managers: I protect what sustains quality and deliveries, cut deep into what adds no value, and present the plan with the risks made explicit.",v:4},
  {t:"I request an extension: a decision this size isn't made in 48 hours.",v:1},
  {t:"I cut the reversible items first (travel, consultants, temps) and buy time to analyze the structural ones.",v:3}]},
 {d:"EST",t:"Nearshoring is bringing new players and potential customers to your region. What do you do with that trend?",o:[
  {t:"I prepare a business case for corporate: available capacity, differentiating capabilities and specific target customers to capture that demand.",v:4},
  {t:"I focus on the current operation: chasing trends is a distraction and new customers come on their own if the plant is good.",v:1},
  {t:"I reinforce retention of my people, because the new players will come for the region's talent.",v:3},
  {t:"I mention the opportunity at the next corporate review to see if they're interested.",v:2}]},
 {d:"COM",t:"A rumor is circulating on the floor that the plant is going to close. It's false, but it's already hurting morale and people are job-hunting. What do you do?",o:[
  {t:"I address it head-on the same day, shift by shift, with workload and project data; and I leave a channel open for questions.",v:4},
  {t:"I don't feed it: publicly denying a rumor gives it credibility. It will die on its own.",v:1},
  {t:"I ask supervisors to reassure their people in their shift start-up meetings.",v:3},
  {t:"I publish an official notice on bulletin boards and email denying the closure.",v:2}]},
 {d:"OPE",t:"One area has been running on chronic overtime for months. The manager says 'that's how we hit the schedule.' What do you do?",o:[
  {t:"I treat chronic overtime as a symptom: I request a real capacity, line-balancing and absenteeism analysis, and attack the cause even if it takes longer.",v:4},
  {t:"I accept it as long as the schedule is met: the extra cost is smaller than missing a customer commitment.",v:2},
  {t:"I put a cap on the area's overtime and let the manager adjust.",v:1},
  {t:"I compare the cost of overtime against hiring more people and decide by the numbers.",v:3}]},
 {d:"ADA",t:"Your corporate boss gives you hard feedback: your style is 'too operational' and you lack business vision. How do you react?",o:[
  {t:"I take it with openness: I ask for concrete examples, cross-check with my team and peers, and build a development plan with follow-up with my boss.",v:4},
  {t:"I explain why the operation demands that style; the plant delivers results and that backs me up.",v:1},
  {t:"I thank him for the feedback and make visible adjustments in how I present and prioritize.",v:3},
  {t:"I hire an executive coach on my own to work on it discreetly.",v:2}]},
 {d:"LID",t:"A critical audit from your main customer is approaching. How do you organize the preparation?",o:[
  {t:"I take direct control of the preparation myself: it's too important to delegate.",v:2},
  {t:"I delegate to an experienced owner, we define the plan and deliverables together, and I review progress at key checkpoints.",v:4},
  {t:"The agenda belongs to the quality manager; I trust his experience and get involved only if he asks.",v:1},
  {t:"I form a cross-functional committee to divide up the audit requirements.",v:3}]},
 {d:"DEC",t:"Your sole supplier of a critical component warns it will miss deliveries right before a product launch. What do you do first?",o:[
  {t:"I size the exact gap (how much, when) and in parallel open three fronts: pressure and a plan with the supplier, search for an alternate, and scenarios with the customer.",v:4},
  {t:"I escalate to corporate immediately: a sole supplier is a risk that was decided above me.",v:2},
  {t:"I travel or send someone to the supplier's plant to verify the real situation before moving anything.",v:3},
  {t:"I notify the customer right away that the launch is at risk to manage expectations.",v:1}]},
 {d:"EST",t:"Qualified technicians are getting harder to find in your region and competition for talent is driving wages up. What is your 3-year play?",o:[
  {t:"I build my own pipeline: agreements with local technical universities, an internal academy and growth paths that make the plant the employer of choice.",v:4},
  {t:"I raise wages above market; talent follows money and the rest is talk.",v:2},
  {t:"I automate aggressively to depend on fewer skilled people.",v:3},
  {t:"It's a regional labor-market problem; I manage it hire by hire.",v:1}]},
 {d:"COM",t:"You need corporate to approve a $2M investment in automation you consider impossible to postpone. How do you make the case?",o:[
  {t:"I present the case with calculated ROI, the risks of not investing, benchmarks against sister plants — and before the session I line up key allies on the committee.",v:4},
  {t:"I present a flawless technical case: if the numbers are good, it approves itself.",v:3},
  {t:"I first request a small pilot project to prove the concept before asking for the full amount.",v:2},
  {t:"I warn that without the investment I can't be held responsible for next year's capacity commitments.",v:1}]},
 {d:"OPE",t:"How do you follow up on the plant's monthly objectives?",o:[
  {t:"A monthly results meeting where each manager presents their numbers and we explain deviations.",v:2},
  {t:"A KPI board reviewed on a short cadence (daily/weekly by level), where deviations trigger actions with an owner and a date.",v:4},
  {t:"I review the reports that reach me and step in when something goes out of range.",v:1},
  {t:"Frequent floor walks: numbers matter, but reality is visible on the line.",v:3}]},
 {d:"ADA",t:"A labor reform forces you to restructure the shifts of the entire plant within 90 days. How do you lead it?",o:[
  {t:"I set up a project team (HR, production, legal), model shift scenarios, involve the workforce in the transition and communicate the why from day one.",v:4},
  {t:"I wait for corporate's guidelines for all plants before moving anything locally.",v:1},
  {t:"I hand the shift redesign to HR: it's their specialty and my role is to approve.",v:2},
  {t:"I implement the minimum change required to comply with the law with the least noise possible.",v:3}]},
 {d:"LID",t:"You notice your management team reports problems only after they've blown up, not when they start. How do you fix it?",o:[
  {t:"I first examine my own reaction to bad news, and create spaces where raising risks early is recognized instead of punished.",v:4},
  {t:"I make risk reporting a mandatory item in the weekly meeting to force the conversation.",v:3},
  {t:"I walk the floor more often myself, so I learn things directly without the management filter.",v:2},
  {t:"I make it clear that hiding problems will have consequences in their performance review.",v:1}]},
 {d:"DEC",t:"Sales brings you an urgent, highly profitable order that would saturate your capacity this month and put committed deliveries at risk. What do you decide?",o:[
  {t:"I turn it down: existing commitments come first and capacity is what it is.",v:2},
  {t:"I model the real impact with planning (what slips, by how much, for whom), negotiate dates with the affected customers and decide with that full picture.",v:4},
  {t:"I take it: you don't walk away from profitability like that; the team will find a way, as always.",v:1},
  {t:"I take it partially: I accept the volume that fits without compromising current deliveries.",v:3}]},
 {d:"EST",t:"You can close the year above budget, or invest that surplus in automating a bottleneck process. The team's bonus depends on the annual result. What do you do?",o:[
  {t:"I close the year strong: financial commitments are sacred and the investment can wait for the next budget.",v:2},
  {t:"I invest: sacrificing one year for future capacity is always the better business.",v:1},
  {t:"I present both scenarios to corporate with numbers and recommend the investment, negotiating to recognize it outside the bonus baseline.",v:4},
  {t:"I defer the investment to Q1 of next year and earmark it in the budget starting now.",v:3}]},
 {d:"COM",t:"A peer director (another plant in the group) systematically breaks the agreements made between plants, and it hurts your operation. What do you do?",o:[
  {t:"I talk to him directly, with data on the misses and their impact, and we agree on a follow-up mechanism between the two of us before escalating.",v:4},
  {t:"I escalate it to our common boss with the documented evidence; that's what the structure is for.",v:2},
  {t:"I document everything and raise it at the next group review so there's a formal record.",v:1},
  {t:"I adjust my operation to depend on his plant as little as possible.",v:3}]},
 {d:"OPE",t:"A key improvement project (changeover time reduction) has been stalled for two months. What do you do?",o:[
  {t:"I diagnose why it stalled (resources, priority, the leader's capacity), fix that cause and restore its cadence with short reviews with me.",v:4},
  {t:"I replace the project leader: two months without progress speak for themselves.",v:1},
  {t:"I formally pause it and reactivate it when the operation allows.",v:2},
  {t:"I step in personally to unblock it until it regains momentum.",v:3}]},
 {d:"ADA",t:"Corporate is pushing 'Industry 4.0' and your floor still runs on paper records. Where do you start?",o:[
  {t:"I wait for another plant in the group to implement it first and adopt what works for them.",v:2},
  {t:"I start with a high-impact pilot process, digitize with the people involved from the design stage, measure the benefit and scale with that proven case.",v:4},
  {t:"I hire a systems integrator to digitize the whole plant in a single project.",v:1},
  {t:"I first establish the baseline: what data we capture today, which of it matters and what decisions it would feed.",v:3}]}
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
  document.getElementById("aviso-faltan").classList.add("oculto");
}

document.getElementById("btn-anterior").addEventListener("click", ()=>{
  if(estado.idx>0){ estado.idx--; guardarEstado(); pintarPregunta(); }
});
document.getElementById("btn-siguiente").addEventListener("click", ()=>{
  if(estado.idx < PREGUNTAS.length-1){
    estado.idx++; guardarEstado(); pintarPregunta();
  } else {
    const faltan = estado.respuestas.map((r,k)=>r===null?k+1:null).filter(v=>v!==null);
    if(faltan.length){
      const aviso = document.getElementById("aviso-faltan");
      aviso.textContent = "You have "+faltan.length+" unanswered question(s): "+faltan.join(", ")+". Use “Previous” to go back, or press the button again to finish as is.";
      if(!aviso.classList.contains("oculto")){ finalizar(false); return; }
      aviso.classList.remove("oculto");
      return;
    }
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
</body>
</html>
