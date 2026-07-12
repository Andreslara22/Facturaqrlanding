<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Perfil Directivo — Assessment para Directivos de Manufactura</title>
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
  --acento:#0A6C99;          /* petróleo — marca y datos */
  --acento-tinta:#085577;
  --acento-suave:#E3EEF4;
  --ambar:#C06A00;           /* ámbar industrial — timer / alertas */
  --ambar-suave:#F7ECDC;
  --ok:#1F7A4D;
  --ok-suave:#E2F0E8;
  --rojo:#A33B2E;
  --rojo-suave:#F5E4E1;
  --grafica:#0A6C99;
  --grafica-rejilla:#DCE3E6;
  --radio:6px;
  --sombra:0 1px 2px rgba(24,36,46,.06),0 8px 24px rgba(24,36,46,.07);
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
    --sombra:0 1px 2px rgba(0,0,0,.3),0 8px 24px rgba(0,0,0,.25);
  }
}
:root[data-theme="light"]{
  --papel:#F4F6F5; --superficie:#FFFFFF; --tinta:#18242E; --tinta-2:#44545F;
  --tinta-suave:#6B7A84; --linea:#D5DCDF; --acento:#0A6C99; --acento-tinta:#085577;
  --acento-suave:#E3EEF4; --ambar:#C06A00; --ambar-suave:#F7ECDC; --ok:#1F7A4D;
  --ok-suave:#E2F0E8; --rojo:#A33B2E; --rojo-suave:#F5E4E1; --grafica:#0A6C99;
  --grafica-rejilla:#DCE3E6;
  --sombra:0 1px 2px rgba(24,36,46,.06),0 8px 24px rgba(24,36,46,.07);
}
:root[data-theme="dark"]{
  --papel:#101820; --superficie:#18232D; --tinta:#E7EDF0; --tinta-2:#AEBDC6;
  --tinta-suave:#7E8F99; --linea:#2B3944; --acento:#2E9CCB; --acento-tinta:#5FB6DC;
  --acento-suave:#173042; --ambar:#C87F15; --ambar-suave:#33260F; --ok:#3E9E6E;
  --ok-suave:#152E22; --rojo:#CC6A5C; --rojo-suave:#39201C; --grafica:#2E9CCB;
  --grafica-rejilla:#2B3944;
  --sombra:0 1px 2px rgba(0,0,0,.3),0 8px 24px rgba(0,0,0,.25);
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
  transition:filter .15s;
}
.btn:hover{filter:brightness(1.1)}
.btn:focus-visible,.opcion:focus-visible,input:focus-visible,.btn-fantasma:focus-visible{
  outline:3px solid var(--acento);outline-offset:2px;
}
.btn[disabled]{opacity:.45;cursor:not-allowed}
.btn-fantasma{
  background:transparent;color:var(--tinta-2);border:1.5px solid var(--linea);
  border-radius:var(--radio);padding:.8em 1.4em;font-weight:600;
}
.btn-fantasma:hover{border-color:var(--tinta-suave);color:var(--tinta)}

/* ============ CABECERA ============ */
.barra-marca{
  border-bottom:1px solid var(--linea);background:var(--superficie);
}
.barra-marca .envoltura{
  display:flex;align-items:center;justify-content:space-between;
  padding-top:14px;padding-bottom:14px;
}
.logo{display:flex;align-items:center;gap:10px;font-weight:750;letter-spacing:-.01em}
.logo-cuadro{
  width:30px;height:30px;border-radius:5px;background:var(--acento);
  display:grid;place-items:center;color:#fff;font-size:.8rem;font-weight:800;
  letter-spacing:0;
}
.logo small{display:block;font-weight:500;color:var(--tinta-suave);font-size:.72rem;letter-spacing:.06em}

/* ============ LANDING ============ */
.hero{padding:64px 0 48px}
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
  background:var(--superficie);border:1px solid var(--linea);border-radius:10px;
  box-shadow:var(--sombra);padding:22px;
}
.panel-radar-demo .etiqueta{display:block;margin-bottom:6px}

.seccion{padding:44px 0}
.seccion-alt{background:var(--superficie);border-top:1px solid var(--linea);border-bottom:1px solid var(--linea)}
.rejilla-dim{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:22px}
.tarjeta-dim{
  background:var(--papel);border:1px solid var(--linea);border-radius:8px;padding:18px;
}
.seccion:not(.seccion-alt) .tarjeta-dim{background:var(--superficie)}
.tarjeta-dim .clave{
  font-size:.7rem;font-weight:750;letter-spacing:.12em;color:var(--acento-tinta);
  background:var(--acento-suave);border-radius:4px;padding:2px 8px;display:inline-block;
  margin-bottom:10px;
}
.tarjeta-dim h3{margin-bottom:.35em}
.tarjeta-dim p{margin:0;font-size:.92rem;color:var(--tinta-2)}

.pasos{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:22px;counter-reset:paso}
.paso{background:var(--superficie);border:1px solid var(--linea);border-radius:8px;padding:18px}
.paso::before{
  counter-increment:paso;content:counter(paso,decimal-leading-zero);
  font-size:.78rem;font-weight:750;letter-spacing:.1em;color:var(--ambar);
  display:block;margin-bottom:8px;
}
.paso p{margin:0;font-size:.92rem;color:var(--tinta-2)}
.cta-final{text-align:center;padding:56px 0 72px}

/* ============ ACCESO ============ */
.vista-centrada{min-height:70vh;display:grid;place-items:center;padding:48px 20px}
.tarjeta-acceso{
  width:100%;max-width:440px;background:var(--superficie);
  border:1px solid var(--linea);border-radius:10px;box-shadow:var(--sombra);
  padding:32px;
}
.campo{margin-bottom:18px}
.campo label{display:block;font-size:.85rem;font-weight:650;margin-bottom:6px}
.campo input{
  width:100%;padding:.75em .9em;font:inherit;border:1.5px solid var(--linea);
  border-radius:var(--radio);background:var(--papel);color:var(--tinta);
}
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
.reloj.alerta{color:var(--ambar);border-color:var(--ambar)}
.reloj.alerta .punto{background:var(--ambar);animation:parpadeo 1s infinite}
@keyframes parpadeo{50%{opacity:.25}}
@media (prefers-reduced-motion: reduce){
  .reloj.alerta .punto{animation:none}
  *{transition:none !important}
}
.pista-progreso{height:5px;background:var(--linea)}
.relleno-progreso{
  height:100%;background:var(--acento);width:0%;
  transition:width .25s ease;
}
.cuerpo-test{max-width:760px;margin:0 auto;padding:34px 20px 60px}
.dim-pregunta{margin-bottom:14px}
.texto-pregunta{font-size:1.25rem;font-weight:650;letter-spacing:-.01em;margin-bottom:22px}
.opciones{display:flex;flex-direction:column;gap:10px}
.opcion{
  text-align:left;background:var(--superficie);border:1.5px solid var(--linea);
  border-radius:8px;padding:14px 16px;font-size:.98rem;color:var(--tinta);
  display:flex;gap:12px;align-items:flex-start;line-height:1.45;
  transition:border-color .12s, background .12s;
}
.opcion:hover{border-color:var(--acento)}
.opcion .letra{
  flex:none;width:26px;height:26px;border-radius:50%;border:1.5px solid var(--linea);
  display:grid;place-items:center;font-size:.8rem;font-weight:700;color:var(--tinta-suave);
  margin-top:1px;
}
.opcion.elegida{border-color:var(--acento);background:var(--acento-suave)}
.opcion.elegida .letra{background:var(--acento);border-color:var(--acento);color:#fff}
.nav-test{display:flex;justify-content:space-between;gap:12px;margin-top:28px}
.aviso-faltan{
  margin-top:16px;background:var(--ambar-suave);color:var(--ambar);
  border-radius:var(--radio);padding:.7em .9em;font-size:.88rem;font-weight:600;
}

/* ============ RESULTADOS ============ */
.cuerpo-resultados{max-width:1020px;margin:0 auto;padding:40px 20px 80px}
.cabecera-reporte{
  display:flex;justify-content:space-between;align-items:flex-end;gap:20px;
  flex-wrap:wrap;border-bottom:2px solid var(--tinta);padding-bottom:18px;margin-bottom:28px;
}
.meta-reporte{font-size:.85rem;color:var(--tinta-2);text-align:right}
.meta-reporte b{color:var(--tinta)}
.fila-resumen{display:grid;grid-template-columns:1fr 1fr 1fr;gap:14px;margin-bottom:30px}
.tarjeta-stat{
  background:var(--superficie);border:1px solid var(--linea);border-radius:8px;
  padding:18px 20px;
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
  background:var(--superficie);border:1px solid var(--linea);border-radius:8px;
  padding:22px;
}
.panel h3{margin-bottom:4px}
.panel .subtitulo{font-size:.85rem;color:var(--tinta-suave);margin-bottom:16px}
.grafica-barras{display:flex;flex-direction:column;gap:14px;margin-top:6px}
.fila-barra{display:grid;grid-template-columns:150px 1fr 82px;gap:12px;align-items:center}
.fila-barra .nombre{font-size:.88rem;font-weight:600;color:var(--tinta-2)}
.pista-barra{height:12px;background:var(--papel);border-radius:4px;position:relative;cursor:default}
.relleno-barra{
  height:100%;background:var(--grafica);border-radius:0 4px 4px 0;min-width:3px;
  border-left:none;
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
  background:var(--superficie);border:1px solid var(--linea);border-radius:8px;
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
  border-radius:0 8px 8px 0;padding:20px 22px;margin:30px 0;
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

/* tooltip de gráficas */
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

/* pie */
.pie{border-top:1px solid var(--linea);padding:26px 0;margin-top:20px}
.pie p{margin:0;font-size:.82rem;color:var(--tinta-suave)}

/* ============ RESPONSIVO ============ */
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

/* ============ IMPRESIÓN ============ */
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
      <div class="logo-cuadro">PD</div>
      <div>Perfil Directivo<small>ASSESSMENT · MANUFACTURA</small></div>
    </div>
    <button class="btn-fantasma" id="btn-acceso-header" type="button">Iniciar evaluación</button>
  </div>
</header>

<!-- ==================== VISTA: LANDING ==================== -->
<main id="vista-landing">
  <section class="hero">
    <div class="envoltura">
      <div>
        <span class="etiqueta">Evaluación psicométrica situacional</span>
        <h1>¿Qué tipo de directivo opera su planta?</h1>
        <p class="grande">
          Assessment diseñado para directores y gerentes de plantas maquiladoras y de
          manufactura. Treinta escenarios reales de piso, corporativo y cliente que miden
          cómo decide, lidera y ejecuta — no lo que dice su currículum.
        </p>
        <div class="especificaciones">
          <div class="espec"><b class="num">30</b><span>Reactivos</span></div>
          <div class="espec"><b class="num">25 min</b><span>Tiempo límite</span></div>
          <div class="espec"><b class="num">6</b><span>Dimensiones</span></div>
          <div class="espec"><b>Inmediato</b><span>Reporte</span></div>
        </div>
        <button class="btn" id="btn-acceso-hero" type="button">Iniciar con mi código de acceso</button>
      </div>
      <div class="panel-radar-demo">
        <span class="etiqueta">Ejemplo de reporte</span>
        <h3 style="margin-bottom:10px">Radar de competencias directivas</h3>
        <div id="radar-demo"></div>
      </div>
    </div>
  </section>

  <section class="seccion seccion-alt">
    <div class="envoltura">
      <span class="etiqueta">Qué se mide</span>
      <h2>Seis dimensiones del desempeño directivo</h2>
      <div class="rejilla-dim">
        <div class="tarjeta-dim"><span class="clave">LID</span><h3>Liderazgo de equipos</h3><p>Desarrollo de mandos medios, manejo de conflicto entre gerencias, retención de talento clave.</p></div>
        <div class="tarjeta-dim"><span class="clave">DEC</span><h3>Decisión bajo presión</h3><p>Paros de línea, embarques comprometidos y decisiones con información incompleta.</p></div>
        <div class="tarjeta-dim"><span class="clave">EST</span><h3>Pensamiento estratégico</h3><p>Concentración de clientes, inversión vs. resultado trimestral, nearshoring y talento a 3 años.</p></div>
        <div class="tarjeta-dim"><span class="clave">COM</span><h3>Comunicación e influencia</h3><p>Mensajes difíciles a planta, defensa de proyectos ante corporativo, manejo de rumores.</p></div>
        <div class="tarjeta-dim"><span class="clave">OPE</span><h3>Orientación a resultados</h3><p>OTIF, scrap, horas extra crónicas y disciplina de seguimiento a indicadores.</p></div>
        <div class="tarjeta-dim"><span class="clave">ADA</span><h3>Adaptabilidad al cambio</h3><p>Implementación de sistemas, cambios de especificación del cliente y transformación digital.</p></div>
      </div>
    </div>
  </section>

  <section class="seccion">
    <div class="envoltura">
      <span class="etiqueta">Cómo funciona</span>
      <h2>Tres pasos, resultados el mismo día</h2>
      <div class="pasos">
        <div class="paso"><h3>Acceso controlado</h3><p>Ingrese con su correo corporativo y el código de acceso que recibió de su organización.</p></div>
        <div class="paso"><h3>30 escenarios reales</h3><p>Cada reactivo plantea una situación de planta con cuatro cursos de acción. Elija el que más se acerque a lo que usted haría. 25 minutos, con cronómetro y avance visibles.</p></div>
        <div class="paso"><h3>Reporte inmediato</h3><p>Perfil directivo, puntuación por dimensión con gráficas, interpretación cualitativa y recomendaciones de desarrollo. Imprimible en PDF.</p></div>
      </div>
    </div>
  </section>

  <section class="cta-final">
    <div class="envoltura">
      <h2>La evaluación toma 25 minutos.<br>El diagnóstico sirve para todo el año.</h2>
      <p style="color:var(--tinta-2)">Responda pensando en lo que realmente haría — no hay respuestas "de manual".</p>
      <button class="btn" id="btn-acceso-cta" type="button">Iniciar evaluación</button>
    </div>
  </section>

  <footer class="pie">
    <div class="envoltura">
      <p>Perfil Directivo · Assessment situacional para dirección de manufactura. Instrumento de orientación para desarrollo gerencial; no sustituye una evaluación clínica ni constituye por sí solo un criterio de contratación.</p>
    </div>
  </footer>
</main>

<!-- ==================== VISTA: ACCESO ==================== -->
<main id="vista-acceso" class="oculto">
  <div class="vista-centrada">
    <form class="tarjeta-acceso" id="form-acceso" novalidate>
      <span class="etiqueta">Acceso a la evaluación</span>
      <h2 style="margin-top:4px">Identifíquese para comenzar</h2>
      <p style="font-size:.92rem;color:var(--tinta-2)">Use el correo con el que fue registrado y el código de acceso que le compartió su organización.</p>
      <div class="error-acceso oculto" id="error-acceso"></div>
      <div class="campo">
        <label for="campo-email">Correo corporativo</label>
        <input id="campo-email" type="email" autocomplete="email" placeholder="nombre@empresa.com" required>
      </div>
      <div class="campo">
        <label for="campo-codigo">Código de acceso</label>
        <input id="campo-codigo" type="text" autocomplete="one-time-code" placeholder="MAQ-DIR-0000" style="text-transform:uppercase;letter-spacing:.08em" required>
        <div class="pista">Se lo entregó Recursos Humanos o el consultor responsable del proceso.</div>
      </div>
      <button class="btn" type="submit" style="width:100%">Comenzar — inicia el cronómetro</button>
      <div class="pista" style="margin-top:12px;text-align:center">Al comenzar corre el tiempo límite de 25:00. Asegúrese de contar con ese espacio sin interrupciones.</div>
    </form>
  </div>
</main>

<!-- ==================== VISTA: TEST ==================== -->
<main id="vista-test" class="oculto">
  <div class="barra-test">
    <div class="barra-test-fila">
      <span class="contador-preg num" id="contador-preg">Pregunta 1 de 30</span>
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
      <button class="btn-fantasma" id="btn-anterior" type="button">← Anterior</button>
      <button class="btn" id="btn-siguiente" type="button">Siguiente →</button>
    </div>
  </div>
</main>

<!-- ==================== VISTA: RESULTADOS ==================== -->
<main id="vista-resultados" class="oculto">
  <div class="cuerpo-resultados">
    <div class="cabecera-reporte">
      <div>
        <span class="etiqueta">Reporte de resultados</span>
        <h1 style="font-size:clamp(1.6rem,3.5vw,2.3rem)">Perfil directivo</h1>
      </div>
      <div class="meta-reporte" id="meta-reporte"></div>
    </div>

    <div class="fila-resumen">
      <div class="tarjeta-stat tarjeta-perfil">
        <span class="etiqueta">Tipo de perfil</span>
        <b id="res-perfil">—</b>
        <span class="sub" id="res-perfil-sub"></span>
      </div>
      <div class="tarjeta-stat">
        <span class="etiqueta">Puntuación global</span>
        <b class="num" id="res-global">—</b>
        <span class="sub" id="res-global-sub"></span>
      </div>
      <div class="tarjeta-stat">
        <span class="etiqueta">Tiempo utilizado</span>
        <b class="num" id="res-tiempo">—</b>
        <span class="sub" id="res-tiempo-sub"></span>
      </div>
    </div>

    <div class="rejilla-graficas">
      <div class="panel">
        <h3>Radar de competencias</h3>
        <div class="subtitulo">Porcentaje alcanzado por dimensión (0–100)</div>
        <div id="radar-resultado"></div>
      </div>
      <div class="panel">
        <h3>Puntuación por dimensión</h3>
        <div class="subtitulo">Puntos obtenidos sobre 20 posibles por dimensión</div>
        <div class="grafica-barras" id="grafica-barras"></div>
      </div>
    </div>

    <div class="sintesis" id="sintesis"></div>

    <span class="etiqueta">Lectura cualitativa</span>
    <h2 style="margin-top:6px">Interpretación por dimensión</h2>
    <div class="lista-cualitativa" id="lista-cualitativa"></div>

    <div class="panel" style="margin-top:30px">
      <h3>Tabla de resultados cuantitativos</h3>
      <div class="subtitulo">Detalle numérico para archivo del evaluador</div>
      <div class="contenedor-desborde">
        <table class="tabla-datos" id="tabla-datos">
          <thead><tr><th>Dimensión</th><th class="num">Puntos</th><th class="num">Máximo</th><th class="num">%</th><th>Banda</th></tr></thead>
          <tbody></tbody>
        </table>
      </div>
    </div>

    <div class="acciones-reporte">
      <button class="btn" type="button" onclick="window.print()">Imprimir / guardar PDF</button>
      <button class="btn-fantasma" type="button" id="btn-reiniciar">Terminar sesión</button>
    </div>
  </div>
</main>

<script>
"use strict";
/* =====================================================================
   CONFIGURACIÓN — edite aquí los códigos de acceso válidos.
   Nota: esta validación es del lado del cliente (control de acceso ligero
   para filtrar participantes, no seguridad criptográfica).
===================================================================== */
const CODIGOS_ACCESO = [
  "MAQ-DIR-2601","MAQ-DIR-2602","MAQ-DIR-2603","MAQ-DIR-2604","MAQ-DIR-2605",
  "MAQ-DIR-2606","MAQ-DIR-2607","MAQ-DIR-2608","MAQ-DIR-2609","MAQ-DIR-2610",
  "DEMO-DIRECTIVO"
];
const MINUTOS_LIMITE = 25;

const DIMENSIONES = {
  LID:{nombre:"Liderazgo de equipos"},
  DEC:{nombre:"Decisión bajo presión"},
  EST:{nombre:"Pensamiento estratégico"},
  COM:{nombre:"Comunicación e influencia"},
  OPE:{nombre:"Orientación a resultados"},
  ADA:{nombre:"Adaptabilidad al cambio"}
};

/* Cada opción tiene un valor 1–4 (4 = mejor práctica directiva).
   El orden de las opciones está mezclado a propósito. */
const PREGUNTAS = [
 {d:"LID",t:"El supervisor de su línea más crítica tiene la rotación de personal más alta de la planta. ¿Cuál es su primer movimiento?",o:[
  {t:"Reviso con él los datos de salidas y entrevistas de renuncia, y hablo con operadores de su línea antes de decidir nada.",v:4},
  {t:"Le fijo como objetivo bajar la rotación este trimestre y lo reviso en la junta mensual.",v:3},
  {t:"Pido a RH subir el bono de asistencia de esa línea para frenar las salidas.",v:2},
  {t:"Lo muevo a otra área antes de que el problema contamine al resto del turno.",v:1}]},
 {d:"DEC",t:"Paro de línea a las 10:00 y el embarque del cliente principal sale hoy a las 18:00. Mantenimiento estima 4 horas de reparación. ¿Qué hace?",o:[
  {t:"Voy al piso, confirmo el diagnóstico con mantenimiento y en paralelo activo plan B: rebalancear a otra línea y avisar a logística del riesgo.",v:4},
  {t:"Espero el reporte formal de mantenimiento para no decidir con datos incompletos.",v:1},
  {t:"Autorizo de inmediato tiempo extra del turno siguiente para recuperar cuando arranque la línea.",v:2},
  {t:"Convoco a producción, calidad y logística a una junta rápida para definir el plan de recuperación.",v:3}]},
 {d:"EST",t:"Un solo cliente representa el 70% de la facturación de su planta. La operación es rentable y estable. ¿Cómo lo maneja?",o:[
  {t:"Propongo al corporativo una estrategia de diversificación gradual: nueva línea de negocio o segundo cliente ancla, sin descuidar al actual.",v:4},
  {t:"Fortalezco la relación con ese cliente: si está satisfecho, el riesgo es teórico.",v:2},
  {t:"No lo toco: la planta cumple sus métricas y diversificar es decisión del corporativo, no mía.",v:1},
  {t:"Levanto un análisis de riesgo y lo presento al corporativo para que decidan si diversificamos.",v:3}]},
 {d:"COM",t:"Debe anunciar a toda la planta la eliminación de un bono que el personal considera un derecho ganado. ¿Cómo lo comunica?",o:[
  {t:"Pido a RH que lo comunique por tablero y nómina; es un tema administrativo.",v:1},
  {t:"Primero preparo a supervisores y mandos medios con el porqué, y luego doy la cara en pláticas por turno explicando la razón de negocio y qué sigue.",v:4},
  {t:"Doy el anuncio yo mismo en una reunión general única para que todos escuchen la misma versión.",v:3},
  {t:"Comunico el cambio junto con una mejora compensatoria para amortiguar la reacción.",v:2}]},
 {d:"OPE",t:"Su OTIF (entregas completas y a tiempo) cayó 4 puntos en el mes. ¿Qué hace primero?",o:[
  {t:"Refuerzo la supervisión en embarques, que es donde se refleja el problema.",v:2},
  {t:"Solicito a planeación un reporte mensual más detallado para monitorearlo mejor.",v:1},
  {t:"Bajo al detalle: segmento la caída por cliente, línea y causa raíz antes de mover cualquier cosa.",v:4},
  {t:"Reúno a producción, planeación y logística para que cada área presente sus causas y compromisos.",v:3}]},
 {d:"ADA",t:"El corporativo ordena implementar un nuevo ERP. Sus gerentes lo ven como una carga y avanzan lo mínimo. ¿Qué hace?",o:[
  {t:"Escalo al corporativo que el equipo local no está listo y pido posponer el arranque.",v:1},
  {t:"Nombro a un líder de proyecto interno, ligo hitos del ERP a los objetivos de cada gerencia y comunico por qué el cambio conviene a la planta.",v:4},
  {t:"Instruyo que la implementación es obligatoria y pongo fechas compromiso por área.",v:2},
  {t:"Identifico a los gerentes más receptivos para arrancar con ellos y generar casos de éxito internos.",v:3}]},
 {d:"LID",t:"Dos de sus gerentes (producción y calidad) llevan semanas en conflicto abierto y las decisiones se traban. ¿Cómo interviene?",o:[
  {t:"Los siento juntos, hago explícito el costo del conflicto para la planta y acordamos reglas de decisión; doy seguimiento personal las semanas siguientes.",v:4},
  {t:"Reasigno procesos para que interactúen lo menos posible entre ellos.",v:1},
  {t:"Hablo con cada uno por separado para entender su versión y les pido operar como profesionales.",v:3},
  {t:"Dejo que lo resuelvan entre ellos: son adultos y directivos; intervenir los debilita.",v:2}]},
 {d:"DEC",t:"Calidad detecta un dato dudoso en las pruebas de un lote que ya está tarimado para embarcar hoy. Repetir la prueba toma 6 horas. ¿Qué decide?",o:[
  {t:"Detengo el embarque, ordeno repetir la prueba y aviso al cliente del retraso con causa y nueva fecha.",v:4},
  {t:"Embarco: un dato dudoso no es un dato reprobado y el OTIF también es compromiso con el cliente.",v:1},
  {t:"Pido a calidad que me presente evidencia en 1 hora para decidir con datos si se embarca o se retiene.",v:3},
  {t:"Embarco el lote pero abro una investigación interna para deslindar responsabilidades.",v:2}]},
 {d:"EST",t:"La planta cumple todos sus indicadores operativos, pero el margen lleva tres trimestres cayendo. ¿Cómo lo aborda?",o:[
  {t:"Cuestiono el modelo: analizo mezcla de productos, costos que los indicadores no capturan y precios, porque operar bien ya no está alcanzando.",v:4},
  {t:"Aprieto los indicadores actuales: más productividad y menos desperdicio recuperarán margen.",v:2},
  {t:"Pido a finanzas una explicación formal de la caída antes de tomar postura.",v:3},
  {t:"El margen depende de precios que negocia el corporativo; mi responsabilidad son los indicadores de planta.",v:1}]},
 {d:"COM",t:"Debe presentar al corporativo (en el extranjero) resultados trimestrales por debajo del compromiso. ¿Cómo estructura el mensaje?",o:[
  {t:"Explico el contexto adverso del trimestre para que se entienda que las causas fueron externas.",v:2},
  {t:"Presento primero las acciones de recuperación para que el foco no se quede en el número.",v:3},
  {t:"Abro con el dato sin maquillar, sigo con causas separando lo controlable de lo externo, y cierro con plan de recuperación con fechas y responsables.",v:4},
  {t:"Envío el reporte por escrito antes de la sesión para que la reunión sea solo de preguntas.",v:1}]},
 {d:"OPE",t:"El scrap lleva tres meses arriba del objetivo pese a las acciones del equipo. ¿Cuál es su papel?",o:[
  {t:"Encabezo yo la revisión: pido ver los análisis de causa raíz, verifico si las acciones atacan la causa o el síntoma y asigno recursos donde falten.",v:4},
  {t:"Doy un ultimátum: si el próximo mes no baja, habrá consecuencias en la evaluación del área.",v:1},
  {t:"Contrato un consultor externo especializado para que ataque el problema.",v:2},
  {t:"Pido al gerente de calidad un plan formal de reducción con hitos semanales.",v:3}]},
 {d:"ADA",t:"En pleno ramp-up de un producto nuevo, el cliente cambia una especificación clave. Su equipo está al límite. ¿Qué hace?",o:[
  {t:"Acepto el cambio de inmediato: en manufactura el cliente define y nosotros ejecutamos.",v:2},
  {t:"Evalúo impacto en costo, calidad y fecha con mi equipo, renegocio tiempos o precio con el cliente, y reorganizo prioridades internas para absorberlo.",v:4},
  {t:"Pido al cliente congelar especificaciones hasta terminar el ramp-up como estaba acordado.",v:1},
  {t:"Formo un equipo específico para el cambio y dejo al resto concentrado en el ramp-up original.",v:3}]},
 {d:"LID",t:"Su mejor gerente no obtuvo la promoción que esperaba (la plaza se congeló) y su desempeño empieza a caer. ¿Qué hace?",o:[
  {t:"Hablo con él directo: reconozco la frustración, le doy claridad honesta de su ruta de carrera y armamos un plan con retos y visibilidad reales.",v:4},
  {t:"Le doy espacio unas semanas; presionarlo ahora puede precipitar su renuncia.",v:2},
  {t:"Gestiono con el corporativo un ajuste salarial extraordinario para retenerlo.",v:3},
  {t:"Empiezo a preparar a su reemplazo discretamente; un colaborador desmotivado tarde o temprano se va.",v:1}]},
 {d:"DEC",t:"El corporativo le exige recortar 10% del gasto operativo y responder en 48 horas con el plan. ¿Cómo procede?",o:[
  {t:"Aplico un recorte parejo de 10% a todas las áreas: es rápido, equitativo y defendible.",v:2},
  {t:"Priorizo con mis gerentes: protejo lo que sostiene calidad y entregas, recorto profundo en lo que no agrega valor, y presento el plan con riesgos explícitos.",v:4},
  {t:"Pido una extensión del plazo: una decisión de este tamaño no se toma en 48 horas.",v:1},
  {t:"Recorto primero lo reversible (viajes, consultores, temporales) y gano tiempo para analizar lo estructural.",v:3}]},
 {d:"EST",t:"El nearshoring está trayendo nuevos jugadores y clientes potenciales a su región. ¿Qué hace con esa tendencia?",o:[
  {t:"Preparo un caso de negocio para el corporativo: capacidad disponible, capacidades diferenciales y clientes objetivo concretos para capturar esa demanda.",v:4},
  {t:"Me concentro en la operación actual: perseguir tendencias distrae y los clientes nuevos llegan solos si la planta es buena.",v:1},
  {t:"Refuerzo la retención de mi gente, porque los nuevos jugadores vendrán por el talento de la región.",v:3},
  {t:"Comento la oportunidad en la siguiente revisión con el corporativo para ver si les interesa.",v:2}]},
 {d:"COM",t:"Circula en el piso el rumor de que la planta va a cerrar. Es falso, pero ya afecta el ambiente y hay gente buscando trabajo. ¿Qué hace?",o:[
  {t:"Salgo a desmentirlo el mismo día, de frente, por turnos, con datos de carga de trabajo y proyectos; y dejo canal abierto para preguntas.",v:4},
  {t:"No lo alimento: salir a desmentir un rumor le da credibilidad. Se apagará solo.",v:1},
  {t:"Pido a los supervisores que tranquilicen a su gente en sus juntas de arranque de turno.",v:3},
  {t:"Publico un comunicado oficial en tableros y correo negando el cierre.",v:2}]},
 {d:"OPE",t:"Un área opera con horas extra de forma crónica desde hace meses. El gerente dice que 'así se cumple el programa'. ¿Usted qué hace?",o:[
  {t:"Trato el tiempo extra crónico como síntoma: pido análisis de capacidad real, balanceo y ausentismo, y ataco la causa aunque tome más tiempo.",v:4},
  {t:"Lo acepto mientras se cumpla el programa: el costo extra es menor que un incumplimiento al cliente.",v:2},
  {t:"Pongo un tope de horas extra al área y que el gerente se ajuste.",v:1},
  {t:"Comparo el costo del tiempo extra contra contratar más personal y decido por número.",v:3}]},
 {d:"ADA",t:"Su jefe corporativo le da retroalimentación dura: su estilo es 'demasiado operativo' y le falta visión de negocio. ¿Cómo reacciona?",o:[
  {t:"La tomo con apertura: pido ejemplos concretos, contrasto con mi equipo y pares, y armo un plan de desarrollo con seguimiento con mi jefe.",v:4},
  {t:"Le explico por qué la operación exige ese estilo; la planta da resultados y eso me respalda.",v:1},
  {t:"Agradezco la retroalimentación y hago ajustes visibles en cómo presento y priorizo.",v:3},
  {t:"Busco un coach ejecutivo por mi cuenta para trabajar el tema con discreción.",v:2}]},
 {d:"LID",t:"Se acerca una auditoría crítica de su cliente principal. ¿Cómo organiza la preparación?",o:[
  {t:"Asumo yo el control directo de la preparación: es demasiado importante para delegarla.",v:2},
  {t:"Delego en un responsable con experiencia, definimos juntos el plan y los entregables, y yo reviso avances en puntos de control claves.",v:4},
  {t:"La agenda es del gerente de calidad; confío en su experiencia y me involucro solo si me lo pide.",v:1},
  {t:"Formo un comité multiárea que se reparta los requisitos de la auditoría.",v:3}]},
 {d:"DEC",t:"Su proveedor único de un componente crítico avisa que incumplirá entregas justo antes del lanzamiento de un producto. ¿Qué hace primero?",o:[
  {t:"Dimensiono el hueco exacto (cuánto, cuándo) y en paralelo activo tres frentes: presión y plan con el proveedor, búsqueda de alterno y escenarios con el cliente.",v:4},
  {t:"Escalo de inmediato al corporativo: un proveedor único es un riesgo que se decidió arriba.",v:2},
  {t:"Viajo o mando a alguien a la planta del proveedor para verificar la situación real antes de mover nada.",v:3},
  {t:"Notifico al cliente desde ya que el lanzamiento está en riesgo para administrar expectativas.",v:1}]},
 {d:"EST",t:"En su región cada vez es más difícil conseguir técnicos calificados y la competencia por talento sube salarios. ¿Cuál es su jugada a 3 años?",o:[
  {t:"Construyo cantera propia: convenios con universidades técnicas locales, academia interna y rutas de crecimiento que hagan a la planta el empleador preferido.",v:4},
  {t:"Subo salarios por arriba del mercado; el talento sigue al dinero y lo demás es discurso.",v:2},
  {t:"Automatizo agresivamente para depender de menos gente calificada.",v:3},
  {t:"Es un problema del mercado laboral regional; lo gestiono contratación por contratación.",v:1}]},
 {d:"COM",t:"Necesita que el corporativo apruebe una inversión de 2 MDD en automatización que usted considera impostergable. ¿Cómo la defiende?",o:[
  {t:"Presento el caso con retorno calculado, riesgos de no invertir, comparativa con plantas hermanas, y antes de la sesión construyo aliados clave del comité.",v:4},
  {t:"Presento un caso técnico impecable: si los números son buenos, se aprueba solo.",v:3},
  {t:"Pido primero un proyecto piloto pequeño para demostrar el concepto antes de pedir el monto completo.",v:2},
  {t:"Advierto que sin la inversión no me hago responsable de los compromisos de capacidad del próximo año.",v:1}]},
 {d:"OPE",t:"¿Cómo da seguimiento a los objetivos mensuales de la planta?",o:[
  {t:"Junta mensual de resultados donde cada gerente presenta sus números y explicamos desviaciones.",v:2},
  {t:"Tablero de indicadores clave revisado en cadencia corta (diaria/semanal por nivel), con desviaciones que disparan acciones con responsable y fecha.",v:4},
  {t:"Reviso los reportes que me llegan y intervengo cuando algo se sale de rango.",v:1},
  {t:"Recorridos frecuentes por el piso: los números importan, pero la realidad se ve en la línea.",v:3}]},
 {d:"ADA",t:"Una reforma laboral obliga a reestructurar los turnos de toda la planta en 90 días. ¿Cómo lo conduce?",o:[
  {t:"Armo un equipo de proyecto (RH, producción, legal), modelo escenarios de turnos, involucro al personal en la transición y comunico el porqué desde el día uno.",v:4},
  {t:"Espero los lineamientos del corporativo para todas las plantas antes de mover algo local.",v:1},
  {t:"Encargo a RH el rediseño de turnos: es su especialidad y mi papel es aprobar.",v:2},
  {t:"Implemento el cambio mínimo indispensable para cumplir la ley con el menor ruido posible.",v:3}]},
 {d:"LID",t:"Detecta que su equipo gerencial le reporta los problemas cuando ya explotaron, no cuando empiezan. ¿Cómo lo corrige?",o:[
  {t:"Reviso primero mi propia reacción a las malas noticias, y establezco espacios donde levantar riesgos temprano se reconoce en lugar de castigarse.",v:4},
  {t:"Instalo reportes obligatorios de riesgos en la junta semanal para forzar la conversación.",v:3},
  {t:"Bajo yo más seguido al piso para enterarme directo, sin depender del filtro gerencial.",v:2},
  {t:"Dejo claro que ocultar problemas tendrá consecuencias en su evaluación de desempeño.",v:1}]},
 {d:"DEC",t:"Ventas le trae un pedido urgente y muy rentable que saturaría su capacidad este mes y arriesga las entregas comprometidas. ¿Qué decide?",o:[
  {t:"Lo rechazo: los compromisos existentes son primero y la capacidad es la que es.",v:2},
  {t:"Modelo el impacto real con planeación (qué se retrasa, cuánto, para quién), negocio fechas con los clientes afectados y decido con ese cuadro completo.",v:4},
  {t:"Lo acepto: rentabilidad así no se deja ir; el equipo encontrará la forma como siempre.",v:1},
  {t:"Lo acepto parcialmente: tomo el volumen que cabe sin comprometer las entregas actuales.",v:3}]},
 {d:"EST",t:"Puede cerrar el año arriba del presupuesto o invertir ese excedente en automatizar un proceso cuello de botella. El bono del equipo depende del resultado anual. ¿Qué hace?",o:[
  {t:"Cierro el año fuerte: los compromisos financieros son sagrados y la inversión puede esperar al siguiente presupuesto.",v:2},
  {t:"Invierto: sacrificar un año por capacidad futura siempre es mejor negocio.",v:1},
  {t:"Presento ambos escenarios al corporativo con números y recomiendo la inversión, negociando reconocerla fuera de la base del bono.",v:4},
  {t:"Difiero la inversión al primer trimestre del año siguiente y la etiqueto desde ahora en el presupuesto.",v:3}]},
 {d:"COM",t:"Un director par (otra planta del grupo) incumple sistemáticamente los acuerdos que hacen entre plantas y eso le pega a su operación. ¿Qué hace?",o:[
  {t:"Hablo directo con él, con datos de los incumplimientos y su impacto, y acordamos un mecanismo de seguimiento entre ambos antes de escalar.",v:4},
  {t:"Lo escalo a su jefe común con la evidencia documentada; para eso está la estructura.",v:2},
  {t:"Documento todo y lo expongo en la siguiente revisión grupal para que quede registro formal.",v:1},
  {t:"Ajusto mi operación para depender lo menos posible de su planta.",v:3}]},
 {d:"OPE",t:"Un proyecto de mejora clave (reducción de tiempo de cambio de modelo) lleva dos meses estancado. ¿Qué hace?",o:[
  {t:"Diagnostico por qué se estancó (recursos, prioridad, capacidad del líder), corrijo esa causa y le devuelvo cadencia con revisiones cortas conmigo.",v:4},
  {t:"Cambio al líder del proyecto: dos meses sin avance hablan por sí solos.",v:1},
  {t:"Lo pauso formalmente y lo reactivo cuando la operación dé espacio.",v:2},
  {t:"Me meto yo a destrabarlo personalmente hasta que retome ritmo.",v:3}]},
 {d:"ADA",t:"El corporativo empuja 'industria 4.0' y su piso aún opera con registros en papel. ¿Por dónde empieza?",o:[
  {t:"Espero a que otra planta del grupo lo implemente primero y adopto lo que les funcione.",v:2},
  {t:"Empiezo por un proceso piloto de alto impacto, digitalizo con la gente involucrada desde el diseño, mido el beneficio y escalo con ese caso probado.",v:4},
  {t:"Contrato una firma integradora para digitalizar toda la planta en un solo proyecto.",v:1},
  {t:"Primero levanto la línea base: qué datos capturamos hoy, cuáles importan y qué decisiones alimentarían.",v:3}]}
];

const NOMBRE_BANDA = [
  {min:80, id:"fortaleza",  chip:"chip-fortaleza",  nombre:"Fortaleza"},
  {min:60, id:"solido",     chip:"chip-solido",     nombre:"Sólido"},
  {min:40, id:"desarrollo", chip:"chip-desarrollo", nombre:"En desarrollo"},
  {min:0,  id:"atencion",   chip:"chip-atencion",   nombre:"Área de atención"}
];

const TEXTOS = {
 LID:{
  fortaleza:"Construye equipos que funcionan sin su presencia constante: diagnostica antes de actuar, delega con puntos de control y enfrenta los conflictos entre gerencias en lugar de administrarlos. Es un multiplicador de talento.",
  solido:"Gestiona bien a su equipo directo y atiende los problemas de gente cuando aparecen. El siguiente nivel está en anticiparse: desarrollar mandos medios de forma deliberada y atacar las causas de la rotación antes de que se reflejen en el indicador.",
  desarrollo:"Tiende a resolver los temas de gente con medidas rápidas (mover, compensar, presionar) más que con diagnóstico. Invertir tiempo en entender causas y en conversaciones directas y honestas elevaría el desempeño de todo su equipo.",
  atencion:"Los resultados de esta dimensión sugieren que el liderazgo de personas es hoy su mayor riesgo: decisiones reactivas ante conflicto, rotación y desmotivación. Es el área donde un plan de desarrollo tendría el mayor retorno inmediato."
 },
 DEC:{
  fortaleza:"Decide rápido sin decidir a ciegas: dimensiona el problema, activa frentes en paralelo y asume el costo de las decisiones difíciles (detener un embarque, priorizar un recorte). Perfil confiable en crisis.",
  solido:"Maneja bien la presión operativa y busca datos antes de actuar. Puede ganar velocidad delegando la recolección de información y decidiendo con el 80% del cuadro, en lugar de esperar certeza completa.",
  desarrollo:"Bajo presión tiende a uno de dos extremos: decidir de inmediato sin dimensionar, o esperar información completa que nunca llega. Practicar protocolos de crisis (dimensionar → paralelo → decidir) le daría consistencia.",
  atencion:"Las decisiones bajo presión son hoy un punto vulnerable: las respuestas sugieren que la urgencia o la parálisis pueden más que el método. Antes de la siguiente crisis conviene definir protocolos claros de escalamiento y decisión."
 },
 EST:{
  fortaleza:"Piensa más allá del indicador del mes: cuestiona el modelo de negocio de la planta, detecta riesgos estructurales (concentración de clientes, talento, margen) y convierte tendencias como el nearshoring en casos de negocio concretos.",
  solido:"Identifica los riesgos estratégicos y los analiza correctamente, aunque tiende a trasladarlos al corporativo en lugar de llegar con la propuesta armada. Pasar de señalar el riesgo a proponer la jugada es su siguiente paso.",
  desarrollo:"Su foco está en la operación presente; los temas de horizonte largo (diversificación, talento a 3 años, inversión) tienden a posponerse o delegarse hacia arriba. Reservar espacio de agenda para estrategia cambiaría su perfil.",
  atencion:"El pensamiento estratégico aparece como el área menos desarrollada: la planta puede estar operando bien hoy mientras se acumulan riesgos de mañana. Es la brecha típica del perfil operativo fuerte que aspira a dirección general."
 },
 COM:{
  fortaleza:"Comunica con método: da la cara en los mensajes difíciles, estructura las malas noticias sin maquillarlas y construye aliados antes de pedir decisiones al corporativo. Su palabra mueve a la organización.",
  solido:"Comunica con honestidad y estructura razonable. Puede subir de nivel preparando el terreno: alinear mandos medios antes de anuncios masivos y trabajar a los tomadores de decisión antes de las juntas clave.",
  desarrollo:"Tiende a delegar o despersonalizar la comunicación difícil (comunicados, tableros, RH) cuando el momento exige presencia directa. Los equipos leen esa distancia. Dar la cara más seguido fortalecería su autoridad moral.",
  atencion:"La comunicación es hoy un freno para su efectividad directiva: mensajes difíciles evitados o mal canalizados terminan costando clima, rumores y credibilidad ante el corporativo. Es un área prioritaria de coaching."
 },
 OPE:{
  fortaleza:"Opera con disciplina de sistema: cadencia corta de indicadores, desviaciones con responsable y fecha, y olfato para distinguir síntoma de causa (tiempo extra crónico, scrap persistente). Entrega resultados sostenibles, no solo mensuales.",
  solido:"Da seguimiento consistente a los resultados y se involucra cuando hay desviaciones. Afinar la cadencia (de mensual a semanal/diaria por nivel) y profundizar en causa raíz antes de actuar elevaría su control de la operación.",
  desarrollo:"El seguimiento tiende a ser reactivo o de baja frecuencia: los problemas se atienden cuando el indicador mensual ya cayó. Instalar rutinas de gestión visual y revisión corta cambiaría resultados en pocos meses.",
  atencion:"La gestión de resultados muestra huecos importantes: seguimiento a distancia, metas sin mecanismo y tendencia a soluciones de presión (ultimátums, topes) sobre soluciones de proceso. Es la base a reconstruir primero."
 },
 ADA:{
  fortaleza:"Conduce el cambio en lugar de padecerlo: pilotos con casos de éxito, gente involucrada desde el diseño y apertura genuina a la retroalimentación sobre su propio estilo. Perfil idóneo para transformaciones grandes.",
  solido:"Acepta el cambio y lo implementa con orden, buscando primero entender la línea base. Su oportunidad está en pasar de implementador a promotor: generar los casos de éxito que arrastren a los escépticos.",
  desarrollo:"Frente al cambio tiende a la obediencia formal (cumplir el mínimo, esperar lineamientos) o a la resistencia razonada. Funciona, pero lo deja fuera de las transformaciones que definen carreras directivas.",
  atencion:"La adaptabilidad aparece como área crítica: las respuestas sugieren resistencia o pasividad ante cambios de sistema, de especificación o de su propio estilo. En un entorno de nearshoring y digitalización, es la brecha más costosa."
 }
};

const PERFILES = {
 personas:{nombre:"Líder de Personas", sub:"Su palanca principal es el equipo",
  texto:"Su patrón de respuestas indica que sus palancas más fuertes están en la gente: lidera, comunica y moviliza. Los directivos con este perfil sostienen plantas con buen clima y baja rotación; su riesgo típico es descuidar el rigor de sistema (indicadores, causa raíz) confiando en que el equipo lo resuelve."},
 ejecucion:{nombre:"Líder Operativo", sub:"Su palanca principal es la ejecución",
  texto:"Su patrón de respuestas indica un perfil de ejecución: decide bajo presión y controla la operación con disciplina. Los directivos con este perfil entregan resultados consistentes; su riesgo típico es quedarse en la operación del presente y ceder la agenda estratégica al corporativo."},
 estrategia:{nombre:"Estratega del Cambio", sub:"Su palanca principal es la visión",
  texto:"Su patrón de respuestas indica un perfil orientado al futuro: lee tendencias, cuestiona el modelo y conduce transformaciones. Los directivos con este perfil posicionan a sus plantas para crecer; su riesgo típico es perder tracción en el día a día si el equipo operativo no es fuerte."},
 integral:{nombre:"Directivo Integral", sub:"Perfil balanceado en las seis dimensiones",
  texto:"Sus resultados son consistentemente altos y balanceados entre gente, ejecución y estrategia — el perfil que los corporativos buscan para direcciones generales y plantas nuevas. El reto de este perfil no es una brecha, sino elegir dónde profundizar para diferenciarse."}
};
const GRUPO_DIM = {LID:"personas",COM:"personas",DEC:"ejecucion",OPE:"ejecucion",EST:"estrategia",ADA:"estrategia"};
const CALIFICADOR = [
  {min:75, texto:"consolidado"},
  {min:50, texto:"en consolidación"},
  {min:0,  texto:"en desarrollo"}
];

/* ===================== ESTADO ===================== */
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

/* ===================== ACCESO ===================== */
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
    err.textContent = "Escriba un correo válido (ej. nombre@empresa.com).";
    err.classList.remove("oculto"); return;
  }
  if(!CODIGOS_ACCESO.includes(codigo)){
    err.textContent = "El código de acceso no es válido. Verifíquelo con quien coordina su proceso de evaluación.";
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
  document.getElementById("contador-preg").textContent = "Pregunta "+(i+1)+" de "+PREGUNTAS.length;
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
  btnSig.textContent = (i===PREGUNTAS.length-1) ? "Ver mis resultados" : "Siguiente →";
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
      aviso.textContent = "Le faltan "+faltan.length+" pregunta(s) por responder: "+faltan.join(", ")+". Use «Anterior» para regresar, o vuelva a presionar el botón para finalizar así.";
      if(!aviso.classList.contains("oculto")){ finalizar(false); return; }
      aviso.classList.remove("oculto");
      return;
    }
    finalizar(false);
  }
});

/* ===================== CÁLCULO ===================== */
function calcular(){
  const porDim = {};
  CLAVES_DIM.forEach(k=> porDim[k]={puntos:0,max:0});
  PREGUNTAS.forEach((p,i)=>{
    porDim[p.d].max += 4;
    const r = estado.respuestas[i];
    if(r!==null) porDim[p.d].puntos += p.o[r].v;
  });
  const dims = CLAVES_DIM.map(k=>({
    clave:k, nombre:DIMENSIONES[k].nombre,
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
  else {
    const g1 = GRUPO_DIM[orden[0].clave], g2 = GRUPO_DIM[orden[1].clave];
    perfil = PERFILES[(g1===g2)? g1 : g1];
  }
  const calif = CALIFICADOR.find(c=>global>=c.min).texto;
  return {dims, orden, global, perfil, calif, totalPts, totalMax};
}

function banda(pct){ return NOMBRE_BANDA.find(b=>pct>=b.min); }

/* ===================== RESULTADOS ===================== */
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
  const fecha = new Date(estado.fin).toLocaleDateString("es-MX",{year:"numeric",month:"long",day:"numeric"});

  document.getElementById("meta-reporte").innerHTML =
    "<b></b><br>Fecha: <span class='num'>"+fecha+"</span><br>Reactivos respondidos: <span class='num'>"+contestadas+" de "+PREGUNTAS.length+"</span>";
  document.getElementById("meta-reporte").querySelector("b").textContent = estado.email;

  document.getElementById("res-perfil").textContent = r.perfil.nombre;
  document.getElementById("res-perfil-sub").textContent = r.perfil.sub + " · perfil " + r.calif;
  document.getElementById("res-global").textContent = r.global + "%";
  document.getElementById("res-global-sub").textContent = r.totalPts + " de " + r.totalMax + " puntos posibles";
  document.getElementById("res-tiempo").textContent = String(mm).padStart(2,"0")+":"+String(ss).padStart(2,"0");
  document.getElementById("res-tiempo-sub").textContent = porTiempo ? "Cierre automático por límite de tiempo" : "de un máximo de "+MINUTOS_LIMITE+":00";

  // síntesis cualitativa global
  const fuerte = r.orden[0], debil = r.orden[r.orden.length-1];
  document.getElementById("sintesis").innerHTML =
    "<span class='etiqueta'>Síntesis del evaluador</span><p style='margin-top:8px'></p><p></p>";
  const ps = document.getElementById("sintesis").querySelectorAll("p");
  ps[0].textContent = r.perfil.texto;
  ps[1].textContent = "Su dimensión más fuerte es " + fuerte.nombre.toLowerCase() + " (" + fuerte.pct +
    "%) y su mayor oportunidad de desarrollo es " + debil.nombre.toLowerCase() + " (" + debil.pct +
    "%). " + (porTiempo ? "El instrumento se cerró por tiempo; los reactivos sin responder puntúan en cero y pueden subestimar el perfil real. " : "") +
    "Se recomienda contrastar este resultado con una entrevista por competencias y con los resultados operativos de los últimos 12 meses.";

  // barras
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
    crearRadar(r.dims.map(d=>({etiqueta:d.clave, nombre:d.nombre, pct:d.pct})), true)
  );

  // cualitativo por dimensión
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

  // tabla
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
  trTot.innerHTML = "<td><b>Global</b></td><td class='num'><b>"+r.totalPts+"</b></td><td class='num'><b>"+r.totalMax+"</b></td><td class='num'><b>"+r.global+"%</b></td><td></td>";
  tbody.appendChild(trTot);
}

document.getElementById("btn-reiniciar").addEventListener("click", ()=>{
  if(confirm("¿Cerrar la sesión de este participante? El reporte en pantalla se perderá (imprímalo antes si lo necesita).")){
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
  svg.setAttribute("aria-label","Gráfica de radar con el porcentaje por dimensión: "+datos.map(d=>d.nombre+" "+d.pct+"%").join(", "));
  svg.style.width="100%"; svg.style.height="auto";

  const punto = (i, r)=> {
    const ang = -Math.PI/2 + i*2*Math.PI/n;
    return [cx + r*Math.cos(ang), cy + r*Math.sin(ang)];
  };
  // rejilla
  [25,50,75,100].forEach(nivel=>{
    const poly = document.createElementNS(NS,"polygon");
    poly.setAttribute("points", datos.map((_,i)=>punto(i, radio*nivel/100).join(",")).join(" "));
    poly.setAttribute("class","rejilla");
    svg.appendChild(poly);
  });
  // ejes + etiquetas
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
  // polígono de datos
  const poly = document.createElementNS(NS,"polygon");
  poly.setAttribute("points", datos.map((d,i)=>punto(i, radio*d.pct/100).join(",")).join(" "));
  poly.setAttribute("class","poligono");
  svg.appendChild(poly);
  // puntos
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

/* ===================== ARRANQUE ===================== */
// radar de ejemplo en la landing
document.getElementById("radar-demo").appendChild(crearRadar([
  {etiqueta:"LID",nombre:"Liderazgo de equipos",pct:82},
  {etiqueta:"DEC",nombre:"Decisión bajo presión",pct:74},
  {etiqueta:"EST",nombre:"Pensamiento estratégico",pct:58},
  {etiqueta:"COM",nombre:"Comunicación e influencia",pct:69},
  {etiqueta:"OPE",nombre:"Orientación a resultados",pct:88},
  {etiqueta:"ADA",nombre:"Adaptabilidad al cambio",pct:63}
], false));

// restaurar sesión en curso (recarga accidental durante el test)
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
