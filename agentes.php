<?php header("Cache-Control: no-cache, no-store, must-revalidate"); header("Pragma: no-cache"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FacturaQR — Sistema de Agentes de Marketing</title>
<meta name="description" content="Mapa del sistema de agentes de marketing IA de FacturaQR: orquestación, redes sociales, SEO local, anuncios, contenido, operaciones y analítica.">
<meta name="robots" content="noindex, nofollow">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
  :root{
    --bg:#FFFFFF; --ink:#0F172A; --mute:#64748B; --mute-2:#94A3B8;
    --line:#E2E8F0; --line-2:#CBD5E1; --soft:#F8FAFC;
    --blue:#2563EB; --blue-600:#1D4ED8; --rojo:#DC2626;
    --display:"Poppins",system-ui,sans-serif;
    --body:"Nunito",system-ui,-apple-system,"Segoe UI",sans-serif;
  }

  *{box-sizing:border-box}
  [hidden]{display:none !important}
  html,body{margin:0;padding:0}
  body{
    background:var(--bg); color:var(--ink);
    font-family:var(--body); line-height:1.5;
    padding:48px 16px 72px;
  }
  .board{max-width:960px;margin:0 auto}

  /* ── Encabezado ── */
  header{display:flex;flex-direction:column;align-items:center;gap:10px;margin-bottom:40px;text-align:center}
  .mark{width:34px;height:34px;color:var(--blue)}
  .eyebrow{
    font-family:var(--display);font-size:11px;font-weight:600;
    letter-spacing:.14em;text-transform:uppercase;color:var(--mute);
  }
  h1{
    font-family:var(--display);font-size:clamp(20px,3.6vw,27px);font-weight:700;
    margin:0;text-wrap:balance;letter-spacing:-.01em;
  }
  h1 span{color:var(--blue)}
  .sub{font-size:14px;color:var(--mute);margin:0}
  .sub code{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:12px;background:var(--soft);border:1px solid var(--line);border-radius:6px;padding:1px 6px}

  /* ── Capas (orquestación / datos) ── */
  .layer{
    border:1px solid var(--line);border-top:3px solid var(--blue);
    border-radius:14px;background:var(--bg);
    padding:20px 22px;position:relative;
    box-shadow:0 1px 2px rgba(15,23,42,.04);
    transition:box-shadow .15s ease,border-color .15s ease;
  }
  .layer.data{border-top-color:var(--ink)}
  .layer[data-agente]{cursor:pointer}
  .layer[data-agente]:hover{border-color:var(--line-2);box-shadow:0 8px 24px rgba(15,23,42,.07)}
  .layer[data-agente]:focus-visible{outline:2px solid var(--blue);outline-offset:3px}
  .layer-title{
    font-family:var(--display);font-size:12.5px;font-weight:600;text-align:center;
    text-transform:uppercase;letter-spacing:.1em;margin:0 0 16px;
  }
  .layer-items{display:flex;flex-wrap:wrap;justify-content:center;gap:12px 18px}
  .item{display:flex;flex-direction:column;align-items:center;gap:6px;min-width:104px}
  .item svg{width:26px;height:26px}
  .item small{font-size:11px;color:var(--mute);text-align:center;line-height:1.3}

  /* ── Tarjetas de agentes ── */
  .row{display:grid;gap:18px}
  .row-3{grid-template-columns:repeat(3,1fr)}
  .row-2{grid-template-columns:repeat(2,1fr);max-width:720px;margin:0 auto}
  .card{
    --accent:var(--blue);
    border:1px solid var(--line);border-top:3px solid var(--accent);
    border-radius:12px;background:var(--bg);
    padding:18px 14px 14px;
    display:flex;flex-direction:column;align-items:center;gap:10px;
    cursor:pointer;position:relative;
    box-shadow:0 1px 2px rgba(15,23,42,.04);
    transition:transform .15s ease,box-shadow .15s ease,border-color .15s ease;
  }
  .card:hover{transform:translateY(-2px);border-color:var(--line-2);box-shadow:0 10px 28px rgba(15,23,42,.08)}
  .card:focus-visible{outline:2px solid var(--blue);outline-offset:3px}
  .card h2{font-family:var(--display);font-size:15.5px;font-weight:600;margin:0;text-align:center;letter-spacing:-.01em}
  .agent-tag{
    font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:10.5px;
    color:var(--mute);background:var(--soft);border:1px solid var(--line);
    border-radius:20px;padding:2px 9px;
  }
  .chips{display:flex;flex-wrap:wrap;justify-content:center;gap:6px}
  .chip{
    font-size:11px;font-weight:700;color:#334155;background:var(--soft);
    border:1px solid var(--line);border-radius:6px;padding:3px 8px;
    display:inline-flex;align-items:center;gap:5px;
  }
  .chip svg{width:13px;height:13px;flex:none}
  .hint{font-size:10.5px;color:var(--mute-2)}
  .layer .hint{display:block;text-align:center;margin:12px 0 0}

  .c-rosa {--accent:#E11D48}
  .c-verde{--accent:#16A34A}
  .c-arena{--accent:#D97706}
  .c-azul {--accent:#2563EB}
  .c-lila {--accent:#7C3AED}

  /* ── Conectores ── */
  .conn{position:relative;height:52px}
  .conn i{position:absolute;display:block}
  .conn .v{border-left:1px solid var(--line-2);width:0}
  .conn .h{border-top:1px solid var(--line-2);height:0}
  .conn .a{
    width:0;height:0;border-left:4px solid transparent;border-right:4px solid transparent;
    border-top:6px solid var(--line-2);transform:translateX(-3.5px);
  }
  .conn1 .v.stub{left:50%;top:0;height:23px}
  .conn1 .h.bar{left:16%;right:16%;top:23px}
  .conn1 .v.d1{left:16%;top:23px;height:22px}
  .conn1 .v.d2{left:50%;top:23px;height:22px}
  .conn1 .v.d3{left:84%;top:23px;height:22px}
  .conn1 .a.a1{left:16%;top:45px}
  .conn1 .a.a2{left:50%;top:45px}
  .conn1 .a.a3{left:84%;top:45px}
  .conn2 .v.r1{left:16%;top:0;height:25px}
  .conn2 .v.r2{left:50%;top:0;height:25px}
  .conn2 .v.r3{left:84%;top:0;height:25px}
  .conn2 .h.bar{left:16%;right:16%;top:25px}
  .conn2 .v.d1{left:30.5%;top:25px;height:20px}
  .conn2 .v.d2{left:69.5%;top:25px;height:20px}
  .conn2 .a.a1{left:30.5%;top:45px}
  .conn2 .a.a2{left:69.5%;top:45px}
  .conn3{height:84px}
  .conn3 .v.r1{left:30.5%;top:0;height:21px}
  .conn3 .v.r2{left:69.5%;top:0;height:21px}
  .conn3 .h.bar{left:30.5%;right:30.5%;top:21px}
  .conn3 .v.d1{left:50%;top:21px;height:55px}
  .conn3 .a.a1{left:50%;top:76px}
  .pill{
    position:absolute;left:50%;top:42px;transform:translateX(-50%);
    background:var(--ink);color:#fff;
    font-family:var(--display);font-size:10.5px;font-weight:600;
    text-transform:uppercase;letter-spacing:.1em;
    padding:6px 14px;border-radius:999px;white-space:nowrap;z-index:2;
  }

  .data .layer-items{gap:14px 34px}

  footer{margin-top:40px;text-align:center;font-size:12.5px;color:var(--mute)}
  footer a{color:var(--blue);font-weight:700;text-decoration:none}
  footer a:hover{text-decoration:underline}

  /* ── Chat (command box) ── */
  .overlay{position:fixed;inset:0;background:rgba(15,23,42,.4);z-index:50;display:none}
  .overlay.on{display:block}
  .chat{
    position:fixed;z-index:60;left:50%;top:50%;transform:translate(-50%,-50%);
    width:min(600px,calc(100vw - 16px));height:min(700px,calc(100dvh - 20px));
    display:none;flex-direction:column;background:var(--bg);
    border:1px solid var(--line);border-radius:16px;overflow:hidden;
    box-shadow:0 24px 64px rgba(15,23,42,.22);
  }
  .chat.on{display:flex}
  .chat-head{
    --accent:var(--blue);
    display:flex;align-items:center;gap:9px;padding:13px 14px;
    border-bottom:1px solid var(--line);border-top:3px solid var(--accent);
    background:var(--bg);
  }
  .chat-head .who{flex:1;min-width:0}
  .chat-head h3{font-family:var(--display);margin:0;font-size:15px;font-weight:600;letter-spacing:-.01em;line-height:1.2}
  .chat-head .meta{display:flex;gap:6px;align-items:center;flex-wrap:wrap;margin-top:3px}
  .chat-head .meta span{
    font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:10px;
    color:var(--mute);background:var(--soft);border:1px solid var(--line);
    border-radius:14px;padding:1px 7px;
  }
  .icon-btn{
    width:32px;height:32px;flex:none;border:1px solid var(--line);border-radius:8px;
    background:var(--bg);color:var(--ink);cursor:pointer;
    display:inline-flex;align-items:center;justify-content:center;padding:0;
    transition:background .12s ease,border-color .12s ease;
  }
  .icon-btn svg{width:15px;height:15px}
  .icon-btn:hover{background:var(--soft);border-color:var(--line-2)}
  .icon-btn:focus-visible{outline:2px solid var(--blue);outline-offset:2px}
  .chat-body{flex:1;overflow-y:auto;padding:16px 14px;display:flex;flex-direction:column;gap:10px;background:var(--bg)}
  .msg{max-width:86%;padding:10px 13px;border-radius:14px;font-size:14px;overflow-wrap:break-word}
  .msg p{margin:0 0 8px}
  .msg p:last-child{margin:0}
  .msg.user{align-self:flex-end;background:var(--blue);color:#fff;border-bottom-right-radius:4px}
  .msg.bot{align-self:flex-start;background:var(--soft);border:1px solid var(--line);border-bottom-left-radius:4px}
  .msg.sub{border-left:3px solid var(--accent,var(--blue));max-width:92%}
  .sub-label{
    display:block;font-family:var(--display);font-size:10px;font-weight:600;
    text-transform:uppercase;letter-spacing:.09em;color:var(--mute);margin-bottom:6px;
  }
  .msg.err{align-self:center;background:#FEF2F2;border:1px solid #FECACA;color:var(--rojo);font-size:12.5px;text-align:center}
  .msg.note{align-self:center;background:transparent;border:none;color:var(--mute);font-size:12px;text-align:center;padding:2px}
  .msg code{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:12.5px;background:#fff;border:1px solid var(--line);border-radius:5px;padding:0 4px}
  .msg.user code{background:rgba(255,255,255,.15);border-color:rgba(255,255,255,.3);color:#fff}
  .typing{align-self:flex-start;display:flex;gap:4px;padding:12px 14px}
  .typing b{width:6px;height:6px;border-radius:50%;background:var(--mute-2);animation:tp 1s infinite}
  .typing b:nth-child(2){animation-delay:.18s}
  .typing b:nth-child(3){animation-delay:.36s}
  @keyframes tp{0%,60%,100%{opacity:.3;transform:translateY(0)}30%{opacity:1;transform:translateY(-3px)}}
  .chat-form{display:flex;gap:8px;padding:12px 14px;border-top:1px solid var(--line);align-items:flex-end;background:var(--bg)}
  .chat-form textarea{
    flex:1;resize:none;border:1px solid var(--line);border-radius:10px;
    background:var(--bg);color:var(--ink);font-family:var(--body);font-size:14px;
    padding:11px 12px;height:44px;max-height:130px;line-height:1.4;
  }
  .chat-form textarea:focus{outline:2px solid var(--blue);outline-offset:1px;border-color:var(--blue)}
  .send{
    height:44px;padding:0 18px;border:none;border-radius:10px;flex:none;
    background:var(--blue);color:#fff;font-family:var(--display);
    font-size:13.5px;font-weight:600;cursor:pointer;letter-spacing:.01em;
    transition:background .12s ease;
  }
  .send:hover{background:var(--blue-600)}
  .send:disabled{opacity:.5;cursor:default}
  .send:focus-visible{outline:2px solid var(--blue);outline-offset:2px}
  /* paneles de configuración */
  .setup{padding:24px;display:flex;flex-direction:column;gap:12px;overflow-y:auto}
  .setup h4{font-family:var(--display);margin:0;font-size:15.5px;font-weight:600}
  .setup p{margin:0;font-size:13.5px;color:var(--mute)}
  .setup input,.setup textarea{
    border:1px solid var(--line);border-radius:10px;background:var(--bg);
    color:var(--ink);font-size:13px;padding:11px 12px;font-family:var(--body);
  }
  .setup input{font-family:ui-monospace,SFMono-Regular,Menlo,monospace}
  .setup input:focus,.setup textarea:focus{outline:2px solid var(--blue);outline-offset:1px;border-color:var(--blue)}
  .setup .send{align-self:flex-start;padding:0 22px}
  .setup a{color:var(--blue);font-weight:700}
  .setup small{font-size:11.5px;color:var(--mute)}

  /* ── Móvil ── */
  @media (max-width:680px){
    body{padding:32px 14px 56px}
    .row-3,.row-2{grid-template-columns:1fr;max-width:420px;margin:0 auto}
    .conn{height:40px}
    .conn i{display:none}
    .conn::before{content:"";position:absolute;left:50%;top:0;height:32px;border-left:1px solid var(--line-2)}
    .conn::after{
      content:"";position:absolute;left:50%;top:32px;transform:translateX(-3.5px);
      width:0;height:0;border-left:4px solid transparent;border-right:4px solid transparent;
      border-top:6px solid var(--line-2);
    }
    .conn3{height:92px}
    .pill{top:auto;bottom:8px}
    .conn3::before{height:84px}
    .conn3::after{top:84px}
    .chat{width:100vw;height:100dvh;left:0;top:0;transform:none;border-radius:0;border-left:none;border-right:none}
  }
  @media (prefers-reduced-motion: reduce){
    .card,.layer,.icon-btn,.send{transition:none}
    .typing b{animation:none}
  }
</style>
</head>
<body>
<div class="board">

  <header>
    <svg class="mark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
      <rect x="3" y="3" width="7" height="7" rx="1.5"/>
      <rect x="14" y="3" width="7" height="7" rx="1.5"/>
      <rect x="3" y="14" width="7" height="7" rx="1.5"/>
      <path d="M14 14h3v3h-3zM18.5 14H21M14 18.5v2.5M17.5 17.5H21V21h-3.5z" stroke-linecap="round"/>
    </svg>
    <span class="eyebrow">FacturaQR · Marketing con IA</span>
    <h1>Sistema de <span>Agentes</span> de Marketing</h1>
    <p class="sub">7 agentes especializados · toca una tarjeta para <b>chatear o delegar</b> · el orquestador coordina al equipo</p>
  </header>

  <!-- ═══ Capa de orquestación ═══ -->
  <section class="layer" data-agente="orquestador-marketing" role="button" tabindex="0" aria-haspopup="dialog">
    <p class="layer-title">Capa de Orquestación</p>
    <div class="layer-items">
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="1.8" aria-hidden="true"><path d="M4 12c0-2.2 1.8-4 4-4 1.7 0 3.2 1.1 3.8 2.6M20 12c0-2.2-1.8-4-4-4-1.7 0-3.2 1.1-3.8 2.6M4 12c0 2.2 1.8 4 4 4 1.7 0 3.2-1.1 3.8-2.6M20 12c0 2.2-1.8 4-4 4-1.7 0-3.2-1.1-3.8-2.6"/></svg>
        <small>Orquestación<br>siempre activa</small>
      </div>
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#E8654F" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M12 4v16M5.1 8l13.8 8M18.9 8L5.1 16"/></svg>
        <small>Claude API</small>
      </div>
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="1.8" aria-hidden="true"><ellipse cx="12" cy="6" rx="7" ry="3"/><path d="M5 6v6c0 1.7 3.1 3 7 3s7-1.3 7-3V6M5 12v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6"/></svg>
        <small>Memoria de contexto<br>(bitácora)</small>
      </div>
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h11M4 17h13"/></svg>
        <small>Cola de tareas</small>
      </div>
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="2.4"/><circle cx="5" cy="6" r="1.7"/><circle cx="19" cy="6" r="1.7"/><circle cx="5" cy="18" r="1.7"/><circle cx="19" cy="18" r="1.7"/><path d="M10.3 10.6 6.4 7.2m7.3 3.4 3.9-3.4M10.3 13.4l-3.9 3.4m7.3-3.4 3.9 3.4"/></svg>
        <small>Router de webhooks</small>
      </div>
    </div>
    <span class="hint">toca para chatear con el orquestador</span>
  </section>

  <div class="conn conn1" aria-hidden="true">
    <i class="v stub"></i><i class="h bar"></i>
    <i class="v d1"></i><i class="v d2"></i><i class="v d3"></i>
    <i class="a a1"></i><i class="a a2"></i><i class="a a3"></i>
  </div>

  <!-- ═══ Canales ═══ -->
  <div class="row row-3">
    <div class="card c-rosa" data-agente="redes-sociales" role="button" tabindex="0" aria-haspopup="dialog">
      <h2>Redes Sociales</h2>
      <span class="agent-tag">redes-sociales</span>
      <div class="chips">
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#0866FF" stroke-width="2" aria-hidden="true"><path d="M2 12c0 3.2 2.1 5.8 5 5.8s5-2.6 5-5.8 2.1-5.8 5-5.8 5 2.6 5 5.8-2.1 5.8-5 5.8-5-2.6-5-5.8-2.1-5.8-5-5.8-5 2.6-5 5.8Z"/></svg>Meta Business</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#E1306C" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1" fill="#E1306C" stroke="none"/></svg>Instagram</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16.6 3c.4 2.2 1.8 3.9 4 4.3v3.1c-1.5 0-2.9-.5-4-1.3v6.3c0 3.6-2.5 6.1-5.9 6.1A5.8 5.8 0 0 1 5 15.7c0-3.3 2.6-5.9 6-5.7v3.2c-1.6-.3-2.9.8-2.9 2.4 0 1.5 1.1 2.6 2.6 2.6 1.7 0 2.8-1.2 2.8-3.1V3h3.1Z"/></svg>TikTok</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="#FF0000" aria-hidden="true"><rect x="2.5" y="6" width="19" height="12.5" rx="3.5"/><path d="M10.4 9.4v5.7l5-2.85-5-2.85Z" fill="#fff"/></svg>YouTube</span>
      </div>
      <span class="hint">toca para chatear</span>
    </div>

    <div class="card c-verde" data-agente="seo-local" role="button" tabindex="0" aria-haspopup="dialog">
      <h2>SEO Local</h2>
      <span class="agent-tag">seo-local</span>
      <div class="chips">
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#4285F4" stroke-width="2" aria-hidden="true"><path d="M4 9.5 12 4l8 5.5V20H4V9.5Z"/><path d="M9.5 20v-6h5v6"/></svg>Google Business Profile</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#34A853" stroke-width="2" aria-hidden="true"><path d="M12 21s-6.5-6.2-6.5-11a6.5 6.5 0 0 1 13 0c0 4.8-6.5 11-6.5 11Z"/><circle cx="12" cy="9.8" r="2.2"/></svg>Google Maps</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="#F4B400" aria-hidden="true"><path d="m12 3 2.5 5.6 6 .6-4.5 4.1 1.3 5.9L12 16.1l-5.3 3.1 1.3-5.9L3.5 9.2l6-.6L12 3Z"/></svg>Reseñas</span>
      </div>
      <span class="hint">toca para chatear</span>
    </div>

    <div class="card c-arena" data-agente="anuncios" role="button" tabindex="0" aria-haspopup="dialog">
      <h2>Anuncios</h2>
      <span class="agent-tag">anuncios</span>
      <div class="chips">
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#0866FF" stroke-width="2" aria-hidden="true"><path d="M2 12c0 3.2 2.1 5.8 5 5.8s5-2.6 5-5.8 2.1-5.8 5-5.8 5 2.6 5 5.8-2.1 5.8-5 5.8-5-2.6-5-5.8-2.1-5.8-5-5.8-5 2.6-5 5.8Z"/></svg>Meta Ads</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m14.2 4.5 5.4 15" stroke="#4285F4" stroke-width="3.4" stroke-linecap="round"/><path d="m9.8 4.5-5.4 15" stroke="#34A853" stroke-width="3.4" stroke-linecap="round"/><circle cx="4.6" cy="19.2" r="1.9" fill="#FBBC05"/></svg>Google Ads</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-8M21 20H3"/></svg>Conversión</span>
      </div>
      <span class="hint">toca para chatear</span>
    </div>
  </div>

  <div class="conn conn2" aria-hidden="true">
    <i class="v r1"></i><i class="v r2"></i><i class="v r3"></i>
    <i class="h bar"></i>
    <i class="v d1"></i><i class="v d2"></i>
    <i class="a a1"></i><i class="a a2"></i>
  </div>

  <!-- ═══ Contenido + Operaciones ═══ -->
  <div class="row row-2">
    <div class="card c-azul" data-agente="contenido" role="button" tabindex="0" aria-haspopup="dialog">
      <h2>Contenido</h2>
      <span class="agent-tag">contenido</span>
      <div class="chips">
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#E8654F" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M12 5v14M6.9 8.5l10.2 7M17.1 8.5l-10.2 7"/></svg>Redacción IA</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#21759B" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="m6.5 8.5 3 8.5 2.5-6.5 2.5 6.5 3-8.5"/></svg>Blog / CMS</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M6 4h9l4 4v12H6V4Z"/><path d="M9 12h7M9 15.5h7M9 8.5h3"/></svg>Copy de landing</span>
      </div>
      <span class="hint">toca para chatear</span>
    </div>

    <div class="card c-lila" data-agente="operaciones" role="button" tabindex="0" aria-haspopup="dialog">
      <h2>Operaciones</h2>
      <span class="agent-tag">operaciones</span>
      <div class="chips">
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#F22F46" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="9.3" cy="9.3" r="1.6" fill="#F22F46" stroke="none"/><circle cx="14.7" cy="9.3" r="1.6" fill="#F22F46" stroke="none"/><circle cx="9.3" cy="14.7" r="1.6" fill="#F22F46" stroke="none"/><circle cx="14.7" cy="14.7" r="1.6" fill="#F22F46" stroke="none"/></svg>Twilio SMS</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="#1A82E2" stroke-width="2" aria-hidden="true"><path d="M3 7h18v11H3V7Z"/><path d="m3 7 9 6.5L21 7"/></svg>SendGrid Email</span>
        <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="9" cy="8.5" r="3"/><path d="M3.5 19c.6-3 2.9-4.7 5.5-4.7s4.9 1.7 5.5 4.7"/><circle cx="17" cy="9.5" r="2.3"/><path d="M15.6 14.6c2.5-.4 4.5 1 5 4"/></svg>CRM</span>
      </div>
      <span class="hint">toca para chatear</span>
    </div>
  </div>

  <div class="conn conn3" aria-hidden="true">
    <i class="v r1"></i><i class="v r2"></i>
    <i class="h bar"></i>
    <i class="v d1"></i>
    <i class="a a1"></i>
    <span class="pill">agentes de marketing</span>
  </div>

  <!-- ═══ Capa de datos y reportes ═══ -->
  <section class="layer data" data-agente="analitica" role="button" tabindex="0" aria-haspopup="dialog">
    <p class="layer-title">Datos y Reportes</p>
    <div class="layer-items">
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#D4A017" stroke-width="1.8" aria-hidden="true"><ellipse cx="12" cy="6" rx="7" ry="3"/><path d="M5 6v6c0 1.7 3.1 3 7 3s7-1.3 7-3V6M5 12v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6"/></svg>
        <small>Base de datos CRM</small>
      </div>
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M7 13v-3M11 13V7M15 13V8"/></svg>
        <small>Dashboard analítico<br>(GA4 + Ads)</small>
      </div>
      <div class="item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#E8654F" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M6 3h9l4 4v14H6V3Z"/><path d="M9.5 12h6M9.5 15.5h6M9.5 8.5h3"/></svg>
        <small>Reporte del dueño<br>(semanal / mensual)</small>
      </div>
    </div>
    <span class="hint">toca para chatear con analítica</span>
  </section>

  <footer>
    Sistema de agentes de <a href="https://facturaqr.app/">facturaqr.app</a> · autofacturación CFDI 4.0 con una foto del ticket
  </footer>
</div>

<!-- ═══ Command box (chat) ═══ -->
<div class="overlay" id="ov"></div>
<div class="chat" id="chat" role="dialog" aria-modal="true" aria-labelledby="chatTitle">
  <div class="chat-head" id="chatHead">
    <div class="who">
      <h3 id="chatTitle">Agente</h3>
      <div class="meta"><span id="chatTag"></span><span id="chatModelo"></span></div>
    </div>
    <button class="icon-btn" id="btnGuardar" title="Guardar en memoria y empezar conversación nueva" aria-label="Guardar en memoria y empezar conversación nueva">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M5 4h11l3 3v13H5V4Z"/><path d="M8 4v5h7V4M8 20v-6h8v6"/></svg>
    </button>
    <button class="icon-btn" id="btnExportar" title="Descargar toda la memoria (JSON)" aria-label="Descargar toda la memoria">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M12 4v11M7.5 11 12 15.5 16.5 11M4 19.5h16"/></svg>
    </button>
    <button class="icon-btn" id="btnCtx" title="Contexto del negocio (lo ven todos los agentes)" aria-label="Editar contexto del negocio">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M6 3h9l4 4v14H6V3Z"/><path d="M9.5 12h6M9.5 15.5h6M9.5 8.5h3"/></svg>
    </button>
    <button class="icon-btn" id="btnKey" title="Cambiar API key" aria-label="Cambiar API key">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="8" cy="14" r="4"/><path d="M11 11 20 4M16 8l2.5 2.5M13.5 6.5 16 9"/></svg>
    </button>
    <button class="icon-btn" id="btnCerrar" title="Cerrar" aria-label="Cerrar chat">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
    </button>
  </div>

  <!-- setup de API key -->
  <div class="setup" id="setup" hidden>
    <h4>Conecta tu API key de Anthropic</h4>
    <p>Para chatear con los agentes se usa la API de Claude con <b>tu</b> llave.
       Créala en <a href="https://console.anthropic.com/settings/keys" target="_blank" rel="noopener">console.anthropic.com</a>
       y pégala aquí.</p>
    <input type="password" id="keyInput" placeholder="sk-ant-..." autocomplete="off">
    <button class="send" id="keyGuardar">Guardar</button>
    <small>La llave se guarda <b>solo en este navegador</b> (localStorage). Nunca se sube al servidor de FacturaQR ni al repo. Puedes cambiarla o borrarla con el botón de la llave.</small>
  </div>

  <!-- editor de contexto del negocio -->
  <div class="setup" id="ctxPanel" hidden>
    <h4>Contexto de tu negocio</h4>
    <p>Los agentes ya conocen todo lo que dice facturaqr.app (producto, planes,
       precios, FAQs). Escribe aquí lo que <b>no</b> está en la página y quieras
       que todos recuerden siempre: promociones vigentes, ciudades objetivo,
       clientes actuales, presupuesto de marketing, tono preferido, etc.</p>
    <textarea id="ctxInput" rows="8" placeholder="Ej. Estamos enfocados en Chihuahua y Ciudad Juárez. Ya tenemos 3 restaurantes clientes. Presupuesto de ads: $10,000/mes. Promo de lanzamiento: primer mes al 2x1..." style="border:1.5px solid var(--chip-line);border-radius:10px;background:var(--paper);color:var(--ink);font-family:var(--body);font-size:13.5px;padding:11px 12px;resize:vertical"></textarea>
    <button class="send" id="ctxGuardar">Guardar contexto</button>
    <small>Se guarda en este navegador y se inyecta en el prompt de <b>todos</b> los agentes, en cada mensaje.</small>
  </div>

  <div class="chat-body" id="chatBody" hidden></div>

  <form class="chat-form" id="chatForm" hidden>
    <textarea id="chatInput" placeholder="Escríbele al agente… (Enter envía, Shift+Enter salto de línea)" rows="1"></textarea>
    <button class="send" id="chatSend" type="submit">Enviar</button>
  </form>
</div>

<script>
(function(){
  'use strict';

  /* ══ Definición de agentes (mismos prompts que .claude/agents/) ══ */
  var BASE = 'CONTEXTO DEL PRODUCTO (fuente de verdad, extraído de facturaqr.app):\n' +
    'FacturaQR es autofacturación CFDI 4.0 para negocios en México. El negocio pone un QR en su mostrador; el cliente lo escanea (sin app ni registro), toma foto de su ticket, la IA lee folio/fecha/subtotal/IVA/total, pone su RFC y correo, y recibe PDF + XML timbrados en menos de un minuto.\n' +
    'Características: timbrado real vía PAC autorizado (válido ante el SAT); cada folio se factura UNA sola vez (sin duplicados); si la foto sale borrosa la IA pide otra; panel de control (buscar/filtrar por RFC/folio/fecha, descarga masiva CSV/ZIP, reenviar, cancelar con motivo SAT, aviso de CSD por vencer); portal y cartel con la marca del negocio según plan; multi-sucursal desde una cuenta; HTTPS/TLS y CSD resguardado. Requisitos del negocio: RFC, régimen fiscal y CSD del SAT (se sube una vez desde el panel).\n' +
    'Planes (MXN/mes, sin costo de instalación ni contratos forzosos): Local $5,000 (1 comercio, hasta 1,000 facturas/mes, cartel QR estándar, soporte por correo 72h) · Comercio $8,000 — el más popular (varias cajas/sucursales, hasta 3,000 facturas/mes, marca propia en portal/cartel/correos, descarga masiva CSV/ZIP, soporte prioritario WhatsApp 24h, reportes mensuales) · Cadena $15,000 (comercios y facturas ilimitados, soporte dedicado el mismo día, onboarding y alta de CSD asistidos, panel multi-marca). PRUEBA GRATIS: 10 facturas al registrarse, sin tarjeta y sin compromiso. Hay planes a la medida.\n' +
    'Público (giros): restaurantes y cafeterías (el comensal se factura desde su mesa), gasolineras (QR en la bomba o el ticket), tiendas y farmacias, talleres y servicios. Regla: si entregas ticket, FacturaQR es para ti.\n' +
    'Dolores que resuelve: el cajero capturando RFC/correo a mano con la fila esperando; errores de dedo, facturas rechazadas y refacturaciones; el clásico "mándenos su ticket y mañana le enviamos su factura"; facturas regadas en correos sin control.\n' +
    'Contacto y enlaces: facturaqr.app · registro en portal.facturaqr.app (la conversión principal es el clic a registro = sign_up) · WhatsApp 614 106 2426 · demo en vivo y formulario de contacto en la landing.\n' +
    'ESTILO: español de México, cercano y profesional. No prometas funciones que el producto no tiene ni des asesoría fiscal formal. CTA hacia acciones medibles (registro, demo, WhatsApp, formulario).';

  var AGENTES = {
    'orquestador-marketing': {
      titulo:'Orquestador de Marketing', clase:'', modelo:'claude-opus-4-8',
      sistema: 'Eres el orquestador de marketing de FacturaQR. Piensas como Head of Growth: aclaras el objetivo (awareness, leads, activación o retención), descompones en tareas por canal (redes sociales, SEO local, anuncios, contenido, operaciones, analítica), y entregas planes accionables: qué se hace, en qué canal, con qué mensaje y cómo se mide. Mantienes coherencia de marca en todos los canales. ' + BASE
    },
    'redes-sociales': {
      titulo:'Redes Sociales', clase:'c-rosa', modelo:'claude-sonnet-5',
      sistema: 'Eres el agente de redes sociales orgánicas de FacturaQR (Facebook, Instagram, TikTok, YouTube). Produces reels, guiones con gancho en los primeros 2 segundos, carruseles, calendarios y copies. Ganchos que funcionan: la fila para facturar a fin de mes, RFCs mal capturados, el flujo real foto-a-factura en menos de un minuto. Para cada pieza entrega: plataforma, gancho, guion o copy completo, CTA, hashtags MX y nota de producción. ' + BASE
    },
    'seo-local': {
      titulo:'SEO Local', clase:'c-verde', modelo:'claude-sonnet-5',
      sistema: 'Eres el agente de SEO local de FacturaQR. Optimizas Google Business Profile (categoría, descripción, servicios, publicaciones, Q&A), Google Maps (consistencia NAP), estrategia de reseñas (guiones para pedirlas y plantillas de respuesta) y keywords locales: autofacturación + ciudad, facturación electrónica + ciudad, cómo facturar en + negocio. Entregas textos listos para pegar, con título, meta description y encabezados cuando aplique. ' + BASE
    },
    'anuncios': {
      titulo:'Anuncios', clase:'c-arena', modelo:'claude-sonnet-5',
      sistema: 'Eres el agente de publicidad de pago de FacturaQR (Meta Ads y Google Ads). Diseñas campañas hacia leads y registros: estructura campaña-conjunto-anuncio, segmentación por giro, copies completos (primario, titular, descripción), keywords de alta intención para Search, negativas, y plan de optimización. La conversión principal es el registro en el portal (evento sign_up) o el lead por formulario. ' + BASE
    },
    'contenido': {
      titulo:'Contenido', clase:'c-azul', modelo:'claude-sonnet-5',
      sistema: 'Eres el agente de contenido de FacturaQR. Escribes artículos de blog optimizados para SEO (H1, intro con el dolor, H2/H3 escaneables, CTA, meta title y meta description), guías como "cómo facturar un ticket con foto", FAQs que rompen objeciones (validez SAT, precio, instalación) y copy de landing. Beneficio antes que característica; frases cortas; una idea central y un CTA por pieza. Entregas texto final listo para publicar. ' + BASE
    },
    'operaciones': {
      titulo:'Operaciones', clase:'c-lila', modelo:'claude-sonnet-5',
      sistema: 'Eres el agente de operaciones y nurture de FacturaQR (SMS con Twilio, email con SendGrid, CRM). Diseñas flujos con trigger, canal, timing y copy completo: nurture de lead nuevo, onboarding del QR, recuperación de registros incompletos y reactivación. SMS cortos con un CTA y opt-out; emails con asunto, preheader y cuerpo escaneable. Defines estados de CRM (nuevo, contactado, demo, registrado, activo, churn). ' + BASE
    },
    'analitica': {
      titulo:'Analítica y Reportes', clase:'', modelo:'claude-sonnet-5',
      sistema: 'Eres el agente de analítica de FacturaQR. La landing tiene GA4 (G-QY5N3VNCTR) y conversiones de Google Ads: clics a registro.php cuentan como sign_up. Sigues KPIs de adquisición (sesiones, fuente, costo por lead), conversión (leads, sign_up, tasa), activación y retención. Entregas definiciones de dashboard, reportes ejecutivos de una página (qué pasó, qué funcionó, 3 recomendaciones) y diagnósticos con hipótesis. Nunca inventes números: si falta un dato, dilo y propón cómo capturarlo. ' + BASE
    }
  };

  /* ══ Estado y memoria (localStorage) ══ */
  var ACENTOS = {
    'orquestador-marketing': '#2563EB', 'redes-sociales': '#E11D48',
    'seo-local': '#16A34A', 'anuncios': '#D97706',
    'contenido': '#2563EB', 'operaciones': '#7C3AED', 'analitica': '#0F172A'
  };

  var LS_KEY = 'fq_agentes_key', LS_MEM = 'fq_agentes_mem';
  var mem; try { mem = JSON.parse(localStorage.getItem(LS_MEM) || '{}'); } catch(e){ mem = {}; }
  // migra recuerdos viejos (sin tipo) al formato tipado
  Object.keys(mem).forEach(function(k){
    (mem[k].bitacora || []).forEach(function(b){ if (!b.tipo) b.tipo = 'resumen'; });
  });
  var actual = null, ocupado = false;

  function M(id){ if(!mem[id]) mem[id] = { msgs:[], bitacora:[] }; return mem[id]; }
  function guardarMem(){ try { localStorage.setItem(LS_MEM, JSON.stringify(mem)); } catch(e){} }
  function fecha(){ return new Date().toLocaleDateString('es-MX', { day:'numeric', month:'short', year:'numeric' }); }

  /* ══ Recuperación por relevancia (estilo code-recall, sin embeddings) ══ */
  var STOP = ['para','como','este','esta','estas','estos','porque','donde','cuando','sobre','entre','hacer','quiero','necesito','dame','hazme','tambien','pero','todo','toda','desde','hasta','solo','algo','tiene','tienen','puede','pueden'];
  function tokens(s){
    return (s || '').toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '')
      .split(/[^a-z0-9ñ]+/)
      .filter(function(w){ return w.length > 3 && STOP.indexOf(w) === -1; });
  }
  var PESO_TIPO = { warning:1.2, aprendizaje:0.9, resultado:0.9, decision:0.6, patron:0.6, resumen:0.3 };
  function recuerdosDe(id){
    var pool = [];
    if (id === 'orquestador-marketing') {
      Object.keys(AGENTES).forEach(function(k){
        (mem[k] && mem[k].bitacora || []).forEach(function(b){ pool.push({ agente:k, r:b }); });
      });
    } else {
      M(id).bitacora.forEach(function(b){ pool.push({ agente:id, r:b }); });
    }
    return pool;
  }
  function recuerdosRelevantes(id, consulta, n){
    var pool = recuerdosDe(id);
    if (!pool.length) return [];
    var tq = tokens(consulta);
    return pool.map(function(x, i){
      var tr = tokens(x.r.t), s = 0;
      tq.forEach(function(q){ if (tr.indexOf(q) > -1) s += 2; });
      s += PESO_TIPO[x.r.tipo] || 0.5;          // warnings y fracasos primero
      if (x.r.tipo === 'resultado' && /fracaso/i.test(x.r.t)) s += 1;
      s += (i / pool.length) * 0.4;             // leve bono de recencia
      return { x:x, s:s };
    }).sort(function(a, b){ return b.s - a.s; }).slice(0, n).map(function(v){ return v.x; });
  }

  /* ══ Referencias de UI ══ */
  var $ = function(id){ return document.getElementById(id); };
  var ov=$('ov'), chat=$('chat'), head=$('chatHead'), titulo=$('chatTitle'), tag=$('chatTag'),
      modelo=$('chatModelo'), setup=$('setup'), keyInput=$('keyInput'), body=$('chatBody'),
      form=$('chatForm'), input=$('chatInput'), send=$('chatSend'),
      ctxPanel=$('ctxPanel'), ctxInput=$('ctxInput');
  var LS_CTX = 'fq_agentes_ctx';

  /* cambios recientes del sitio (los genera el vigilante en GitHub Actions) */
  var cambiosSitio = [];
  fetch('cambios-sitio.json', { cache: 'no-store' })
    .then(function(r){ return r.ok ? r.json() : []; })
    .then(function(j){ if (Array.isArray(j)) cambiosSitio = j; })
    .catch(function(){});
  function vista(cual){  // 'setup' | 'ctx' | 'chat'
    setup.hidden = cual !== 'setup';
    ctxPanel.hidden = cual !== 'ctx';
    body.hidden = form.hidden = cual !== 'chat';
  }

  /* ══ Render de mensajes (markdown mínimo, HTML escapado) ══ */
  function esc(s){ return s.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }
  function md(s){
    var h = esc(s);
    h = h.replace(/\*\*([^*]+)\*\*/g, '<b>$1</b>');
    h = h.replace(/`([^`]+)`/g, '<code>$1</code>');
    var lineas = h.split('\n').map(function(l){
      var m = l.match(/^\s*[-*•]\s+(.*)/);
      return m ? '• ' + m[1] : l;
    });
    return '<p>' + lineas.join('\n').replace(/\n{2,}/g, '</p><p>').replace(/\n/g, '<br>') + '</p>';
  }
  function burbuja(rol, texto){
    var d = document.createElement('div');
    d.className = 'msg ' + rol;
    d.innerHTML = (rol === 'note' || rol === 'err') ? esc(texto) : md(texto);
    body.appendChild(d);
    body.scrollTop = body.scrollHeight;
    return d;
  }
  function pintarHistorial(){
    body.innerHTML = '';
    var m = M(actual);
    if (location.hostname.indexOf('claude') > -1) {
      burbuja('err', 'Estás viendo el Artifact (solo demo visual): su seguridad bloquea llamadas a la API. Abre facturaqr.app/agentes.php para chatear de verdad.');
    }
    var nRec = recuerdosDe(actual).length;
    if (nRec) {
      var nota = burbuja('note', 'Este agente tiene ' + nRec + ' recuerdo(s) en su memoria — toca aquí para verlos.');
      nota.style.cursor = 'pointer';
      nota.addEventListener('click', function(){
        recuerdosDe(actual).forEach(function(x){
          burbuja('note', '[' + x.r.tipo + ' · ' + x.r.f + (x.agente !== actual ? ' · ' + x.agente : '') + '] ' + x.r.t);
        });
      });
    }
    if (!m.msgs.length) {
      burbuja('note', 'Conversación nueva con ' + AGENTES[actual].titulo + '. Todo lo que hablen se guarda en este navegador.');
    }
    m.msgs.forEach(function(x){ burbuja(x.role === 'user' ? 'user' : 'bot', x.content); });
  }

  /* ══ Abrir / cerrar ══ */
  function abrir(id){
    actual = id;
    var a = AGENTES[id];
    titulo.textContent = a.titulo;
    tag.textContent = id;
    modelo.textContent = a.modelo;
    head.className = 'chat-head ' + a.clase;
    head.style.setProperty('--accent', ACENTOS[id] || 'var(--blue)');
    ov.classList.add('on'); chat.classList.add('on');
    var hayKey = !!localStorage.getItem(LS_KEY);
    vista(hayKey ? 'chat' : 'setup');
    if (hayKey) { pintarHistorial(); input.focus(); } else { keyInput.focus(); }
  }
  function cerrar(){
    ov.classList.remove('on'); chat.classList.remove('on'); actual = null;
  }
  document.querySelectorAll('[data-agente]').forEach(function(el){
    el.addEventListener('click', function(){ abrir(el.getAttribute('data-agente')); });
    el.addEventListener('keydown', function(ev){
      if (ev.key === 'Enter' || ev.key === ' '){ ev.preventDefault(); abrir(el.getAttribute('data-agente')); }
    });
  });
  ov.addEventListener('click', cerrar);
  $('btnCerrar').addEventListener('click', cerrar);
  document.addEventListener('keydown', function(ev){ if (ev.key === 'Escape' && chat.classList.contains('on')) cerrar(); });

  /* ══ API key ══ */
  $('keyGuardar').addEventListener('click', function(){
    var k = keyInput.value.trim();
    if (!k) { keyInput.focus(); return; }
    localStorage.setItem(LS_KEY, k);
    keyInput.value = '';
    vista('chat');
    pintarHistorial(); input.focus();
  });
  $('btnKey').addEventListener('click', function(){
    vista('setup'); keyInput.focus();
  });

  /* ══ Contexto del negocio (compartido por todos los agentes) ══ */
  $('btnCtx').addEventListener('click', function(){
    ctxInput.value = localStorage.getItem(LS_CTX) || '';
    vista('ctx'); ctxInput.focus();
  });
  $('ctxGuardar').addEventListener('click', function(){
    var v = ctxInput.value.trim();
    if (v) localStorage.setItem(LS_CTX, v); else localStorage.removeItem(LS_CTX);
    vista('chat');
    pintarHistorial();
    burbuja('note', v ? 'Contexto del negocio guardado: todos los agentes lo verán en cada mensaje.' : 'Contexto del negocio vacío (borrado).');
  });

  /* ══ Llamada a la API de Claude ══ */
  /* ══ Equipo y delegación (comunicación entre agentes) ══ */
  var HERRAMIENTAS = [{
    name: 'delegar',
    description: 'Delega una subtarea a otro agente especializado del equipo de marketing de FacturaQR y recibe su entregable terminado. Úsala cuando parte del trabajo pertenece a otra especialidad. Nunca te delegues a ti mismo.',
    input_schema: {
      type: 'object',
      properties: {
        agente: { type: 'string', enum: Object.keys(AGENTES), description: 'Agente al que delegas' },
        tarea:  { type: 'string', description: 'Instrucción completa y autocontenida, con todo el contexto necesario para que entregue trabajo terminado' }
      },
      required: ['agente', 'tarea']
    }
  }];
  function descripcionEquipo(id){
    var roles = {
      'orquestador-marketing': 'planea y coordina campañas',
      'redes-sociales': 'contenido orgánico: reels, guiones, calendarios, copies',
      'seo-local': 'Google Business Profile, Maps, reseñas, keywords locales',
      'anuncios': 'campañas de pago en Meta Ads y Google Ads',
      'contenido': 'artículos SEO, guías, FAQs, copy de landing',
      'operaciones': 'nurture por SMS/email, onboarding, CRM',
      'analitica': 'KPIs, dashboards, reportes ejecutivos'
    };
    return Object.keys(roles).filter(function(k){ return k !== id; })
      .map(function(k){ return '- ' + k + ': ' + roles[k]; }).join('\n');
  }

  function sistemaDe(id, consulta, conEquipo){
    var s = AGENTES[id].sistema;
    if (conEquipo) {
      s += '\n\n## Equipo y delegación\nPuedes delegar subtareas con la herramienta "delegar" (máximo 3 por turno). Delega cuando el trabajo pertenece a otra especialidad; al final consolida todas las entregas en UNA respuesta clara para el dueño. Tu equipo:\n' + descripcionEquipo(id);
    }
    var ctx = localStorage.getItem(LS_CTX);
    if (ctx) s += '\n\n## Contexto adicional del negocio (escrito por el dueño; siempre vigente)\n' + ctx;
    if (cambiosSitio.length) {
      var cs = cambiosSitio.slice(0, 10).map(function(c){
        var lineas = (c.agregado || []).map(function(l){ return '+ ' + l; })
          .concat((c.quitado || []).map(function(l){ return '- ' + l; }));
        return '- ' + c.fecha + ' · ' + c.pagina + ' (' + (c.resumen || '').split(' · ')[0] + ')' +
               (lineas.length ? ': ' + lineas.slice(0, 4).join(' | ') : '');
      });
      s += '\n\n## Cambios recientes detectados en facturaqr.app y portal.facturaqr.app\nDetectados automáticamente comparando el contenido publicado. Tenlos en cuenta: reflejan el estado más nuevo del producto y pueden actualizar lo dicho arriba.\n' + cs.join('\n');
    }
    var recs = recuerdosRelevantes(id, consulta || '', 8);
    if (recs.length) {
      var lineas = recs.map(function(x){
        return '- [' + x.r.tipo + ' · ' + x.r.f + (x.agente !== id ? ' · ' + x.agente : '') + '] ' + x.r.t;
      });
      s += '\n\n## Memoria: recuerdos relevantes recuperados\nRetoma este contexto; no repitas trabajo ya hecho, constrúyele encima. Los [warning] y los [resultado] fracaso son prioritarios: no repitas enfoques fallidos.\n' + lineas.join('\n');
    }
    return s;
  }
  function llamarAPIraw(id, mensajes, sistema, maxTokens, conTools){
    var cuerpo = {
      model: AGENTES[id].modelo,
      max_tokens: maxTokens || 2000,
      system: sistema,
      messages: mensajes
    };
    if (conTools) cuerpo.tools = HERRAMIENTAS;
    return fetch('https://api.anthropic.com/v1/messages', {
      method: 'POST',
      headers: {
        'content-type': 'application/json',
        'x-api-key': localStorage.getItem(LS_KEY) || '',
        'anthropic-version': '2023-06-01',
        'anthropic-dangerous-direct-browser-access': 'true'
      },
      body: JSON.stringify(cuerpo)
    }).then(function(r){
      if (!r.ok) return r.json().catch(function(){ return {}; }).then(function(e){
        var msg = (e.error && e.error.message) || ('HTTP ' + r.status);
        if (r.status === 401) msg = 'API key inválida o vencida — cámbiala con el botón de la llave.';
        if (r.status === 429) msg = 'Límite de uso alcanzado, espera un momento.';
        if (r.status === 529) msg = 'La API está saturada, reintenta en unos segundos.';
        throw new Error(msg);
      });
      return r.json();
    });
  }
  function textoDe(d){
    return (d.content || []).filter(function(c){ return c.type === 'text'; })
                            .map(function(c){ return c.text; }).join('\n');
  }
  function llamarAPI(id, mensajes, sistema, maxTokens){
    return llamarAPIraw(id, mensajes, sistema, maxTokens, false).then(textoDe);
  }

  /* ══ Turno con delegación: el agente puede invocar a sus colegas ══ */
  function turnoAgente(id, consulta, ui){
    var registro = [];
    function paso(mensajes, restantes){
      var conTools = restantes > 0;
      return llamarAPIraw(id, mensajes, sistemaDe(id, consulta, conTools), 2200, conTools)
        .then(function(d){
          var texto = textoDe(d).trim();
          var usos = (d.content || []).filter(function(c){ return c.type === 'tool_use'; });
          if (d.stop_reason !== 'tool_use' || !usos.length) {
            if (texto) { ui.alTexto(texto); registro.push(texto); }
            return registro.join('\n\n');
          }
          if (texto) { ui.alTexto(texto); registro.push(texto); }
          var resultados = [];
          var cadena = Promise.resolve();
          usos.forEach(function(u){
            cadena = cadena.then(function(){
              var sub = (u.input || {}).agente, tarea = (u.input || {}).tarea || '';
              if (!AGENTES[sub] || sub === id || !tarea) {
                resultados.push({ id: u.id, texto: 'Delegación inválida; resuelve esta parte tú mismo.' });
                return;
              }
              ui.alNota(AGENTES[id].titulo + ' → delega a ' + AGENTES[sub].titulo + ': ' + tarea.slice(0, 140) + (tarea.length > 140 ? '…' : ''));
              var sisSub = sistemaDe(sub, tarea, false) +
                '\n\nTe delegó el ' + AGENTES[id].titulo + ' del equipo. Entrega trabajo terminado y accionable; no hagas preguntas de vuelta.';
              return llamarAPI(sub, [{ role: 'user', content: tarea }], sisSub, 1800)
                .then(function(resp){
                  ui.alSub(sub, resp);
                  registro.push('── Entrega de ' + AGENTES[sub].titulo + ' ──\n' + resp);
                  M(sub).bitacora.push({ f: fecha(), tipo: 'resumen', t: '[delegado por ' + id + '] ' + tarea.slice(0, 140) });
                  guardarMem();
                  resultados.push({ id: u.id, texto: resp });
                })
                .catch(function(e){
                  resultados.push({ id: u.id, texto: 'El agente ' + sub + ' falló (' + e.message + '); resuelve esta parte tú mismo.' });
                });
            });
          });
          return cadena.then(function(){
            var siguientes = mensajes.concat([
              { role: 'assistant', content: d.content },
              { role: 'user', content: resultados.map(function(r){
                  return { type: 'tool_result', tool_use_id: r.id, content: r.texto };
                }) }
            ]);
            return paso(siguientes, restantes - usos.length);
          });
        });
    }
    var historial = M(id).msgs.slice(-16).map(function(x){ return { role: x.role, content: x.content }; });
    return paso(historial, 3);
  }

  /* ══ Enviar mensaje ══ */
  form.addEventListener('submit', function(ev){
    ev.preventDefault();
    var texto = input.value.trim();
    if (!texto || ocupado || !actual) return;
    var id = actual, m = M(id);
    m.msgs.push({ role:'user', content: texto });
    guardarMem();
    burbuja('user', texto);
    input.value = ''; input.style.height = '44px';
    ocupado = true; send.disabled = true;
    var tp = document.createElement('div');
    tp.className = 'typing'; tp.innerHTML = '<b></b><b></b><b></b>';
    body.appendChild(tp); body.scrollTop = body.scrollHeight;

    function conTyping(fn){
      return function(){
        fn.apply(null, arguments);
        body.appendChild(tp); body.scrollTop = body.scrollHeight;
      };
    }
    var ui = {
      alTexto: conTyping(function(t){ burbuja('bot', t); }),
      alNota:  conTyping(function(t){ burbuja('note', t); }),
      alSub:   conTyping(function(sub, t){
        var d = burbuja('bot', t);
        d.classList.add('sub');
        d.style.setProperty('--accent', ACENTOS[sub] || 'var(--blue)');
        var etiqueta = document.createElement('span');
        etiqueta.className = 'sub-label';
        etiqueta.textContent = 'Entrega · ' + AGENTES[sub].titulo;
        d.insertBefore(etiqueta, d.firstChild);
      })
    };

    turnoAgente(id, texto, ui)
      .then(function(final){
        m.msgs.push({ role:'assistant', content: final || '(sin respuesta)' });
        guardarMem();
        tp.remove();
      })
      .catch(function(e){
        tp.remove();
        burbuja('err', 'Error: ' + e.message);
      })
      .finally(function(){ ocupado = false; send.disabled = false; if (actual === id) input.focus(); });
  });
  input.addEventListener('keydown', function(ev){
    if (ev.key === 'Enter' && !ev.shiftKey) { ev.preventDefault(); form.requestSubmit(); }
  });
  input.addEventListener('input', function(){
    input.style.height = '44px';
    input.style.height = Math.min(input.scrollHeight, 130) + 'px';
  });

  /* ══ Guardar en bitácora y abrir conversación nueva ══ */
  $('btnGuardar').addEventListener('click', function(){
    if (!actual || ocupado) return;
    var id = actual, m = M(id);
    if (!m.msgs.length) { burbuja('note', 'No hay conversación que guardar todavía.'); return; }
    ocupado = true; send.disabled = true;
    burbuja('note', 'Extrayendo recuerdos de la conversación…');
    var conv = m.msgs.slice(-30);
    conv.push({ role:'user', content:'Extrae de esta conversación hasta 6 recuerdos que valga la pena guardar en tu memoria de largo plazo. Tipos: "decision" (qué se eligió y por qué), "patron" (convención que funcionó), "warning" (qué NO hacer), "aprendizaje" (error y su solución), "resultado" (éxito o fracaso de algo lanzado), "resumen" (qué se entregó). Responde SOLO con un arreglo JSON válido, sin markdown ni texto extra: [{"tipo":"...","texto":"una línea con palabras clave"}]' });
    llamarAPI(id, conv, 'Eres ' + AGENTES[id].titulo + ' de FacturaQR extrayendo recuerdos de tu propio trabajo. Respondes únicamente JSON válido.', 600)
      .then(function(raw){
        var arr = null;
        try {
          var limpio = raw.replace(/```json|```/g, '').trim();
          var ini = limpio.indexOf('['), fin = limpio.lastIndexOf(']');
          if (ini > -1 && fin > ini) arr = JSON.parse(limpio.slice(ini, fin + 1));
        } catch(e){}
        var TIPOS = ['decision','patron','warning','aprendizaje','resultado','resumen'];
        if (Array.isArray(arr) && arr.length) {
          arr.slice(0, 6).forEach(function(r){
            if (r && r.texto) m.bitacora.push({
              f: fecha(),
              tipo: TIPOS.indexOf(r.tipo) > -1 ? r.tipo : 'resumen',
              t: String(r.texto)
            });
          });
        } else {
          m.bitacora.push({ f: fecha(), tipo: 'resumen', t: raw.slice(0, 500) });
        }
        m.msgs = [];
        guardarMem();
        pintarHistorial();
        burbuja('note', 'Recuerdos guardados. Se recuperarán por relevancia en futuras conversaciones.');
      })
      .catch(function(e){ burbuja('err', 'No se pudo guardar: ' + e.message); })
      .finally(function(){ ocupado = false; send.disabled = false; });
  });

  /* ══ Exportar memoria ══ */
  $('btnExportar').addEventListener('click', function(){
    var blob = new Blob([JSON.stringify(mem, null, 2)], { type:'application/json' });
    var a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'memoria-agentes-facturaqr.json';
    a.click();
    URL.revokeObjectURL(a.href);
  });
})();
</script>
</body>
</html>
