<?php header("Cache-Control: no-cache, no-store, must-revalidate"); header("Pragma: no-cache"); if (session_status() !== PHP_SESSION_ACTIVE) @session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FacturaQR — Tus clientes se facturan solos con una foto de su ticket</title>
<meta name="description" content="Autofacturación CFDI 4.0 para tu negocio. Pon un QR en tu mostrador: tu cliente toma foto de su ticket, pone su RFC y recibe su factura por correo en menos de un minuto. Sin filas, sin capturar datos.">
<meta name="theme-color" content="#0F172A">
<meta name="robots" content="index, follow, max-image-preview:large">
<meta name="keywords" content="autofacturación, facturación electrónica, factura con QR, CFDI 4.0, portal de autofacturación, facturación SAT, factura por foto del ticket, facturación restaurantes, facturación automática negocios">
<meta name="author" content="FacturaQR">
<meta property="og:site_name" content="FacturaQR">
<meta property="og:title" content="FacturaQR — Autofacturación con una foto del ticket">
<meta property="og:description" content="Pon un QR en tu mostrador y deja que tus clientes se facturen solos. CFDI 4.0 válido ante el SAT, en menos de un minuto.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://facturaqr.app/">
<meta property="og:locale" content="es_MX">
<meta property="og:image" content="https://facturaqr.app/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="FacturaQR — tus clientes se facturan solos con una foto de su ticket">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="FacturaQR — Autofacturación con una foto del ticket">
<meta name="twitter:description" content="Pon un QR en tu mostrador y tus clientes se facturan solos. CFDI 4.0 válido ante el SAT, en menos de un minuto.">
<meta name="twitter:image" content="https://facturaqr.app/og-image.png">
<link rel="canonical" href="https://facturaqr.app/">

<!-- ═══ Google Analytics 4 + Google Ads (conversiones) ═══
     Pega aquí tus IDs. Mientras contengan "XXXX" no se carga nada (no rompe la página).
     · GA4_ID:      Analytics → Administrar → Flujos de datos → "ID de medición" (G-XXXXXXXXXX)
     · ADS_ID:      Google Ads → Herramientas → Conversiones → "Etiqueta de Google" (AW-XXXXXXXXXX)
     · CONV_LEAD:   etiqueta de la conversión "Envío de formulario"  (AW-XXXXXXXXXX/aaaaaaaa)
     · CONV_SIGNUP: etiqueta de la conversión "Clic a registro"      (AW-XXXXXXXXXX/bbbbbbbb) -->
<script>
  window.FQ_ANALYTICS = {
    GA4_ID:      'G-QY5N3VNCTR',
    ADS_ID:      'AW-XXXXXXXXXX',
    CONV_LEAD:   'AW-XXXXXXXXXX/aaaaaaaa',
    CONV_SIGNUP: 'AW-XXXXXXXXXX/bbbbbbbb'
  };
  (function(){
    var A = window.FQ_ANALYTICS, ids = [];
    if (A.GA4_ID.indexOf('XXXX') < 0) ids.push(A.GA4_ID);
    if (A.ADS_ID.indexOf('XXXX') < 0) ids.push(A.ADS_ID);
    window.dataLayer = window.dataLayer || [];
    window.gtag = function(){ dataLayer.push(arguments); };
    gtag('js', new Date());
    if (ids.length){
      var s = document.createElement('script'); s.async = true;
      s.src = 'https://www.googletagmanager.com/gtag/js?id=' + ids[0];
      document.head.appendChild(s);
      ids.forEach(function(id){ gtag('config', id); });
    }
  })();
  // Dispara una conversión (Ads) y, opcionalmente, un evento GA4. Seguro si faltan IDs.
  window.fqConv = function(adsLabel, ga4Event){
    var A = window.FQ_ANALYTICS || {};
    if (ga4Event && (A.GA4_ID||'').indexOf('XXXX') < 0) gtag('event', ga4Event);
    if (adsLabel && adsLabel.indexOf('XXXX') < 0) gtag('event', 'conversion', { send_to: adsLabel });
  };
  // Cuenta como conversión cualquier clic hacia el registro del portal.
  document.addEventListener('click', function(ev){
    var a = ev.target.closest && ev.target.closest('a[href*="registro.php"]');
    if (a) fqConv((window.FQ_ANALYTICS||{}).CONV_SIGNUP, 'sign_up');
  }, true);
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800;900&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<script>document.documentElement.classList.add('js')</script>
<style>
  :root{
    --ink:#0F172A; --ink-2:#1E293B; --mute:#64748B; --mute-2:#94A3B8;
    --blue:#2563EB; --blue-600:#1D4ED8; --blue-soft:#EFF4FF;
    --paper:#F8FAFC; --paper-2:#F1F5F9; --line:#E2E8F0; --white:#FFFFFF;
    --ok:#16A34A; --ok-soft:#DCFCE7;
    --shadow:0 18px 44px rgba(15,23,42,.12);
    --max:1120px;
  }
  *{box-sizing:border-box;margin:0;padding:0}
  html{-webkit-text-size-adjust:100%;scroll-behavior:smooth}
  body{font-family:'Nunito',system-ui,-apple-system,'Segoe UI',sans-serif;color:var(--ink);background:var(--white);line-height:1.6;overflow-x:hidden}
  h1,h2,h3,.wm,.eyebrow,.btn,.stat b,.step b,.label{font-family:'Poppins',system-ui,'Segoe UI',sans-serif}
  a{color:inherit;text-decoration:none}
  img{max-width:100%;display:block}
  .wrap{max-width:var(--max);margin:0 auto;padding:0 22px}
  .eyebrow{font-weight:700;font-size:11px;letter-spacing:.24em;text-transform:uppercase;color:var(--blue)}
  h2{font-weight:900;font-size:clamp(26px,4.2vw,40px);letter-spacing:-.02em;line-height:1.1;text-wrap:balance}
  .lead{font-size:clamp(16px,2vw,18px);color:var(--mute);font-weight:600;max-width:58ch}
  .btn{display:inline-flex;align-items:center;gap:9px;border:0;border-radius:100px;padding:15px 26px;font-weight:800;font-size:15.5px;cursor:pointer;transition:transform .08s ease,filter .18s ease,box-shadow .18s ease;white-space:nowrap}
  .btn:active{transform:translateY(1px)}
  .btn-blue{background:var(--blue);color:#fff;box-shadow:0 10px 24px rgba(37,99,235,.32)}
  .btn-blue:hover{filter:brightness(1.07);box-shadow:0 14px 30px rgba(37,99,235,.4)}
  .btn-dark{background:var(--ink);color:#fff}
  .btn-dark:hover{filter:brightness(1.18)}
  .btn-ghost{background:transparent;color:var(--ink);border:1.6px solid var(--line)}
  .btn-ghost:hover{border-color:var(--blue);color:var(--blue)}
  .btn-white{background:#fff;color:var(--ink)}
  .btn-white:hover{filter:brightness(.96)}
  :focus-visible{outline:3px solid var(--blue);outline-offset:2px;border-radius:6px}

  /* ── wordmark ── */
  .wm{display:inline-flex;align-items:center;gap:9px;font-weight:900;font-size:20px;letter-spacing:-.02em}
  .wm .qmark{display:inline-grid;place-items:center;width:26px;height:26px;background:var(--blue);color:#fff;border-radius:7px;font-size:13px;transform:rotate(-4deg)}
  .wm .qmark svg{width:15px;height:15px}
  .wm .t2{color:var(--blue)}
  .on-dark .wm{color:#fff}.on-dark .wm .qmark{background:#fff;color:var(--blue)}.on-dark .wm .t2{color:#93B4FF}

  /* ── nav ── */
  header.nav{position:sticky;top:0;z-index:50;background:rgba(255,255,255,.82);backdrop-filter:saturate(180%) blur(12px);border-bottom:1px solid var(--line)}
  .nav .row{display:flex;align-items:center;gap:20px;height:66px}
  .nav nav{margin-left:auto;display:flex;align-items:center;gap:26px}
  .nav nav a{font-family:'Poppins';font-weight:700;font-size:14px;color:var(--ink-2)}
  .nav nav a:hover{color:var(--blue)}
  .nav .cta{margin-left:2px;color:#fff}
  .nav .cta:hover{color:#fff}
  .nav .burger{display:none;margin-left:auto;background:none;border:0;font-size:26px;cursor:pointer;color:var(--ink)}
  @media(max-width:820px){.nav nav{display:none}.nav .burger{display:block}}

  /* ── hero ── */
  .hero{position:relative;background:
      radial-gradient(1100px 460px at 82% -8%,rgba(37,99,235,.10),transparent 60%),
      linear-gradient(180deg,#fff, var(--paper));overflow:hidden}
  .hero .wrap{display:grid;grid-template-columns:1.05fr .95fr;gap:46px;align-items:center;padding-top:64px;padding-bottom:72px}
  .hero h1{font-weight:900;font-size:clamp(32px,5.4vw,58px);line-height:1.04;letter-spacing:-.03em;text-wrap:balance;margin:16px 0 18px}
  .hero h1 .hl{color:var(--blue);position:relative;white-space:nowrap}
  .hero h1 .hl::after{content:"";position:absolute;left:0;right:0;bottom:.06em;height:.16em;background:rgba(37,99,235,.22);border-radius:3px;z-index:-1;transform:scaleX(0);transform-origin:left;animation:draw .55s .6s cubic-bezier(.4,0,.2,1) forwards}
  @keyframes draw{to{transform:scaleX(1)}}
  .regalo{display:inline-flex;align-items:center;justify-content:center;gap:8px;margin-top:22px;background:#FEF3C7;color:#92400E;border:1px solid #FDE68A;border-radius:100px;padding:8px 16px;font-family:'Poppins';font-weight:700;font-size:13px;line-height:1.4;text-align:center}
  .regalo b{font-weight:800}
  .hero .cta-row{display:flex;flex-wrap:wrap;gap:12px;margin-top:26px}
  .regalo + .cta-row{margin-top:14px}
  .trust{display:flex;flex-wrap:wrap;gap:8px 22px;margin-top:26px;color:var(--mute);font-weight:700;font-size:13.5px}
  .trust span{display:inline-flex;align-items:center;gap:7px}
  .trust svg{width:16px;height:16px;color:var(--ok);flex:none}

  /* ── phone mock ── */
  .mock{position:relative;justify-self:center;width:100%;max-width:330px}
  .mock::before{content:"";position:absolute;inset:-6% -12% -12% -12%;background:radial-gradient(closest-side,rgba(37,99,235,.28),transparent 72%);filter:blur(8px);z-index:-1;animation:glow 4.5s ease-in-out infinite}
  @keyframes glow{0%,100%{opacity:.55;transform:scale(.96)}50%{opacity:1;transform:scale(1.04)}}
  .phone{position:relative;background:#0B1220;border-radius:38px;padding:12px;box-shadow:0 30px 70px rgba(15,23,42,.32);border:1px solid #24304A;animation:floaty 6s ease-in-out infinite}
  @keyframes floaty{0%,100%{transform:translateY(0) rotate(0)}50%{transform:translateY(-12px) rotate(-.6deg)}}
  .phone::before{content:"";position:absolute;top:14px;left:50%;transform:translateX(-50%);width:96px;height:6px;background:#24304A;border-radius:100px;z-index:3}
  .screen{background:var(--paper);border-radius:28px;padding:22px 16px 20px;overflow:hidden}
  .screen .brand{display:flex;justify-content:center;margin:6px 0 12px}
  .screen .brand .wm{font-size:15px}
  .prog{display:flex;gap:6px;margin-bottom:14px}
  .prog i{flex:1;height:3px;border-radius:2px;background:var(--line)}
  .prog i.on{background:var(--blue)}
  .ticket{position:relative;background:#fff;border-radius:14px 14px 0 0;padding:16px 16px 30px;box-shadow:0 10px 24px rgba(27,36,64,.1);
    --z:9px;clip-path:polygon(0 0,100% 0,100% calc(100% - var(--z)),95% 100%,90% calc(100% - var(--z)),85% 100%,80% calc(100% - var(--z)),75% 100%,70% calc(100% - var(--z)),65% 100%,60% calc(100% - var(--z)),55% 100%,50% calc(100% - var(--z)),45% 100%,40% calc(100% - var(--z)),35% 100%,30% calc(100% - var(--z)),25% 100%,20% calc(100% - var(--z)),15% 100%,10% calc(100% - var(--z)),5% 100%,0 calc(100% - var(--z)))}
  .ticket .bar{height:5px;border-radius:100px;background:linear-gradient(90deg,var(--ink),var(--blue));margin:-2px 0 12px}
  .trow{display:flex;justify-content:space-between;font-size:12px;padding:4px 0;font-weight:700}
  .trow b{color:var(--mute);font-family:'Poppins';font-weight:700;font-size:9.5px;text-transform:uppercase;letter-spacing:.05em}
  .trow.big span{font-weight:800;font-size:14px}
  .stamp{position:absolute;left:50%;bottom:-20px;width:58px;height:58px;border-radius:50%;border:3px solid var(--ok);color:var(--ok);display:grid;place-items:center;text-align:center;font-family:'Poppins';font-weight:800;font-size:8px;letter-spacing:.12em;line-height:1.2;transform:translateX(-50%) rotate(-9deg);background:#EAFBF0;box-shadow:0 6px 16px rgba(22,163,74,.22)}
  .stamp em{font-style:normal;font-size:17px;display:block}
  @keyframes sello{0%{opacity:0;transform:translateX(-50%) rotate(-9deg) scale(2.2)}60%{opacity:1}100%{opacity:1;transform:translateX(-50%) rotate(-9deg) scale(1)}}
  .screen .done{margin-top:24px;background:var(--blue-soft);border-radius:12px;padding:12px;text-align:center;font-family:'Poppins';font-weight:800;font-size:12px;color:var(--blue)}
  .float{position:absolute;background:#fff;border:1px solid var(--line);border-radius:14px;box-shadow:var(--shadow);padding:11px 14px;display:flex;align-items:center;gap:10px;font-weight:800;font-size:13px}
  .float .ic{width:30px;height:30px;border-radius:9px;display:grid;place-items:center;flex:none;font-size:15px}
  .float small{display:block;color:var(--mute);font-weight:700;font-size:11px}
  .float.f1{top:4%;left:-14px;animation:bob 5s ease-in-out infinite}
  .float.f2{bottom:6%;right:-14px;animation:bob 5.6s ease-in-out .6s infinite}
  @keyframes bob{0%,100%{transform:translateY(0)}50%{transform:translateY(-9px)}}

  /* ── entrada del hero (con JS; sin JS el contenido siempre queda visible) ── */
  .js .hero .eyebrow,.js .hero h1,.js .hero .lead,.js .hero .regalo,.js .hero .cta-row,.js .hero .trust,.js .hero .mock{opacity:0;transform:translateY(20px)}
  .js .hero.in .eyebrow,.js .hero.in h1,.js .hero.in .lead,.js .hero.in .regalo,.js .hero.in .cta-row,.js .hero.in .trust,.js .hero.in .mock{opacity:1;transform:none;transition:opacity .6s cubic-bezier(.2,.8,.2,1),transform .6s cubic-bezier(.2,.8,.2,1)}
  .js .hero.in h1{transition-delay:.07s}.js .hero.in .lead{transition-delay:.14s}.js .hero.in .cta-row{transition-delay:.21s}.js .hero.in .trust{transition-delay:.28s}.js .hero.in .mock{transition-delay:.12s}
  .stamp{animation:sello .5s .9s cubic-bezier(.2,1.6,.4,1) both}

  /* ── hero en móvil: apilar, quitar empalmes, separar CTAs ── */
  @media(max-width:860px){
    .hero .wrap{grid-template-columns:1fr;gap:22px;padding-top:26px;padding-bottom:38px}
    .hero h1{margin:12px 0 14px}
    .hero .cta-row{flex-direction:column;gap:14px;margin-top:24px}
    .hero .cta-row .btn{width:100%;justify-content:center}
    .regalo{display:flex;width:100%}
    .trust{margin-top:22px;gap:10px 20px}
    .mock{max-width:280px;margin-top:12px}
    .float{display:none}
  }

  /* ── logos / stat strip ── */
  .strip{border-top:1px solid var(--line);border-bottom:1px solid var(--line);background:var(--paper)}
  .strip .wrap{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;padding:26px 22px}
  .stat{text-align:center}
  .stat b{display:block;font-weight:900;font-size:clamp(22px,3.4vw,32px);color:var(--ink);letter-spacing:-.02em;font-variant-numeric:tabular-nums}
  .stat span{font-size:12.5px;color:var(--mute);font-weight:700}
  @media(max-width:620px){.strip .wrap{grid-template-columns:1fr 1fr;gap:22px}}

  /* ── sections ── */
  section{padding:clamp(46px,6.5vw,80px) 0;position:relative}
  .sec-head{max-width:640px;margin-bottom:36px}
  .sec-head h2{margin:12px 0 14px}

  /* how it works */
  .steps{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;counter-reset:s}
  .step{position:relative;background:#fff;border:1px solid var(--line);border-radius:18px;padding:26px 22px 24px;box-shadow:0 6px 18px rgba(15,23,42,.05)}
  .step .num{counter-increment:s;font-family:'Poppins';font-weight:900;font-size:14px;color:var(--blue);background:var(--blue-soft);width:38px;height:38px;border-radius:11px;display:grid;place-items:center;margin-bottom:16px}
  .step .num::before{content:counter(s,decimal-leading-zero)}
  .step b{display:block;font-weight:800;font-size:17px;margin-bottom:7px}
  .step p{color:var(--mute);font-weight:600;font-size:14.5px}
  .step .arrow{position:absolute;top:44px;right:-13px;width:26px;height:26px;color:var(--mute-2);z-index:2}
  @media(max-width:780px){.steps{grid-template-columns:1fr}.step .arrow{display:none}}

  /* compare: sin / con FacturaQR */
  .vs{display:grid;grid-template-columns:1fr 1fr;gap:18px;align-items:stretch}
  .vs-col{border-radius:20px;padding:28px 26px;border:1px solid var(--line);background:#fff;display:flex;flex-direction:column}
  .vs-col h3{font-family:'Poppins';font-weight:900;font-size:19px;letter-spacing:-.01em;display:flex;align-items:center;gap:10px}
  .vs-col .tag{font-family:'Poppins';font-weight:800;font-size:10.5px;letter-spacing:.09em;text-transform:uppercase;padding:5px 12px;border-radius:100px}
  .vs-col.bad .tag{background:var(--paper-2);color:var(--mute)}
  .vs-col.bad h3{color:var(--ink-2)}
  .vs-col ul{list-style:none;display:flex;flex-direction:column;gap:14px;margin-top:20px;flex:1}
  .vs-col li{display:flex;gap:11px;font-weight:700;font-size:14.5px;line-height:1.5}
  .vs-col li svg{width:19px;height:19px;flex:none;margin-top:2px}
  .vs-col.bad li{color:var(--mute)}
  .vs-col.bad li svg{color:#F87171}
  .vs-col.good{background:radial-gradient(420px 260px at 100% 0%,rgba(37,99,235,.30),transparent 60%),var(--ink);color:#fff;border-color:var(--ink);box-shadow:var(--shadow)}
  .vs-col.good .tag{background:rgba(37,99,235,.28);color:#B9CEFF}
  .vs-col.good li{color:#DCE3F1}
  .vs-col.good li svg{color:#5B8CFF}
  @media(max-width:780px){.vs{grid-template-columns:1fr}}

  /* giros / verticales */
  .giros{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
  .giro{background:#fff;border:1px solid var(--line);border-radius:16px;padding:24px 20px;text-align:center;transition:transform .16s ease,box-shadow .16s ease}
  .giro:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
  .giro .em{display:grid;place-items:center;width:52px;height:52px;margin:0 auto 13px;border-radius:14px;background:var(--blue-soft);font-size:26px}
  .giro b{display:block;font-family:'Poppins';font-weight:800;font-size:15.5px;margin-bottom:7px}
  .giro p{color:var(--mute);font-weight:600;font-size:13.5px}
  @media(max-width:820px){.giros{grid-template-columns:1fr 1fr}}
  @media(max-width:460px){.giros{grid-template-columns:1fr}}

  /* seguridad / confianza */
  .safe{border-top:1px solid var(--line);border-bottom:1px solid var(--line);background:var(--paper)}
  .safe .wrap{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;padding:30px 22px}
  .safe-item{display:flex;gap:12px;align-items:flex-start}
  .safe-item .sic{width:38px;height:38px;border-radius:11px;background:var(--blue-soft);color:var(--blue);display:grid;place-items:center;flex:none}
  .safe-item .sic svg{width:20px;height:20px}
  .safe-item b{display:block;font-family:'Poppins';font-weight:800;font-size:14px;margin-bottom:2px}
  .safe-item span{font-size:12.5px;color:var(--mute);font-weight:600;line-height:1.45}
  @media(max-width:820px){.safe .wrap{grid-template-columns:1fr 1fr}}
  @media(max-width:460px){.safe .wrap{grid-template-columns:1fr}}

  /* botón flotante de WhatsApp */
  .wa-fab{position:fixed;right:18px;bottom:18px;z-index:55;width:56px;height:56px;border-radius:50%;background:#25D366;color:#fff;display:grid;place-items:center;box-shadow:0 12px 30px rgba(37,211,102,.45);transition:transform .15s ease,box-shadow .15s ease}
  .wa-fab:hover{transform:scale(1.07);box-shadow:0 16px 36px rgba(37,211,102,.55)}
  .wa-fab svg{width:30px;height:30px}
  @media(max-width:520px){.wa-fab{width:52px;height:52px;right:14px;bottom:14px}}

  /* benefits */
  .bg-paper{background:var(--paper-2)}
  /* variación de fondos para romper el blanco */
  .bg-tint{background:linear-gradient(180deg,#EDF3FC,#F8FAFC);overflow:hidden}
  .clip{overflow:hidden}
  .dots{background-image:radial-gradient(rgba(37,99,235,.08) 1.1px,transparent 1.1px);background-size:22px 22px}
  .blob{position:absolute;border-radius:50%;filter:blur(60px);z-index:0;pointer-events:none}
  .blob.b1{width:340px;height:340px;background:rgba(37,99,235,.10);top:-80px;right:-60px}
  .blob.b2{width:300px;height:300px;background:rgba(37,99,235,.08);bottom:-90px;left:-70px}
  section>.wrap{position:relative;z-index:1}
  .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
  .feat{background:#fff;border:1px solid var(--line);border-radius:16px;padding:24px 22px;transition:transform .16s ease,box-shadow .16s ease}
  .feat:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
  .feat .ic{width:46px;height:46px;border-radius:13px;background:var(--blue-soft);color:var(--blue);display:grid;place-items:center;margin-bottom:15px}
  .feat .ic svg{width:24px;height:24px}
  .feat b{display:block;font-family:'Poppins';font-weight:800;font-size:16px;margin-bottom:7px}
  .feat p{color:var(--mute);font-weight:600;font-size:14px}
  @media(max-width:820px){.cards{grid-template-columns:1fr 1fr}}
  @media(max-width:540px){.cards{grid-template-columns:1fr}}

  /* QR counter (dark) */
  .dark{background:radial-gradient(900px 500px at 15% 0%,rgba(37,99,235,.22),transparent 55%),var(--ink);color:#fff}
  .dark .wrap{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
  .dark h2{color:#fff}.dark .lead{color:#B6C2D9}
  .dark .eyebrow{color:#93B4FF}
  .dark ul{list-style:none;margin-top:22px;display:flex;flex-direction:column;gap:13px}
  .dark li{display:flex;gap:12px;font-weight:700;font-size:15px;color:#DCE3F1}
  .dark li svg{width:21px;height:21px;color:#5B8CFF;flex:none;margin-top:1px}
  .cartel{background:#fff;color:var(--ink);border-radius:22px;padding:30px 26px;box-shadow:0 30px 70px rgba(0,0,0,.4);max-width:340px;justify-self:center;text-align:center}
  .cartel .k{font-family:'Poppins';font-weight:800;font-size:13px;letter-spacing:.12em;text-transform:uppercase;color:var(--blue)}
  .cartel h3{font-family:'Poppins';font-weight:900;font-size:23px;margin:6px 0 4px;letter-spacing:-.01em}
  .cartel p{color:var(--mute);font-weight:600;font-size:13.5px;margin-bottom:18px}
  .qr{width:172px;height:172px;margin:0 auto;border-radius:16px;padding:12px;background:#fff;border:2px solid var(--ink)}
  .qr svg{width:100%;height:100%}
  .cartel .foot{margin-top:16px;font-family:'Poppins';font-weight:800;font-size:12px;color:var(--ink)}
  @media(max-width:820px){.dark .wrap{grid-template-columns:1fr;gap:34px}}

  /* panel showcase */
  .split{display:grid;grid-template-columns:.9fr 1.1fr;gap:44px;align-items:center}
  .split ul{list-style:none;margin-top:20px;display:flex;flex-direction:column;gap:12px}
  .split li{display:flex;gap:11px;font-weight:700;font-size:15px}
  .split li svg{width:20px;height:20px;color:var(--blue);flex:none;margin-top:2px}
  .dash{background:#fff;border:1px solid var(--line);border-radius:18px;box-shadow:var(--shadow);overflow:hidden}
  .dash .top{height:34px;background:var(--paper-2);border-bottom:1px solid var(--line);display:flex;align-items:center;gap:6px;padding:0 14px}
  .dash .top i{width:10px;height:10px;border-radius:50%;background:#CBD5E1}
  .dash .body{padding:18px}
  .kpis{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:14px}
  .kpi{background:var(--paper);border:1px solid var(--line);border-radius:12px;padding:12px}
  .kpi b{font-family:'Poppins';font-weight:900;font-size:20px;display:block;letter-spacing:-.02em}
  .kpi span{font-size:10.5px;color:var(--mute);font-weight:700;text-transform:uppercase;letter-spacing:.05em}
  .chart{display:flex;align-items:flex-end;gap:6px;height:104px;padding:12px;background:var(--paper);border:1px solid var(--line);border-radius:12px}
  .chart i{flex:1;background:var(--blue);border-radius:3px 3px 0 0;opacity:.9;transform:scaleY(0);transform-origin:bottom;transition:transform .75s cubic-bezier(.2,.8,.2,1)}
  .chart.in i{transform:scaleY(1)}
  .chart i:nth-child(2){transition-delay:.05s}.chart i:nth-child(3){transition-delay:.1s}.chart i:nth-child(4){transition-delay:.15s}.chart i:nth-child(5){transition-delay:.2s}.chart i:nth-child(6){transition-delay:.25s}.chart i:nth-child(7){transition-delay:.3s}.chart i:nth-child(8){transition-delay:.35s}.chart i:nth-child(9){transition-delay:.4s}.chart i:nth-child(10){transition-delay:.45s}.chart i:nth-child(11){transition-delay:.5s}.chart i:nth-child(12){transition-delay:.55s}
  @media(max-width:820px){.split{grid-template-columns:1fr;gap:30px}}

  /* pricing */
  .tiers{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;align-items:stretch}
  .tier{background:#fff;border:1px solid var(--line);border-radius:20px;padding:30px 26px;display:flex;flex-direction:column;position:relative}
  .tier.featured{background:var(--ink);color:#fff;border-color:var(--ink);box-shadow:var(--shadow);transform:translateY(-8px)}
  .tier.featured::after{content:"";position:absolute;inset:auto -30px -50px auto;width:190px;height:190px;background:radial-gradient(circle,rgba(37,99,235,.38),transparent 70%);border-radius:50%;pointer-events:none}
  .tier .badge{position:absolute;top:-12px;left:50%;transform:translateX(-50%);background:var(--blue);color:#fff;font-family:'Poppins';font-weight:800;font-size:10.5px;letter-spacing:.09em;text-transform:uppercase;padding:6px 14px;border-radius:100px;white-space:nowrap;box-shadow:0 8px 18px rgba(37,99,235,.4)}
  .tier .tk{font-family:'Poppins';font-weight:800;font-size:13px;letter-spacing:.12em;text-transform:uppercase;color:var(--blue);position:relative}
  .tier.featured .tk{color:#93B4FF}
  .tier .amt{display:flex;align-items:baseline;gap:6px;margin:12px 0 4px;position:relative}
  .tier .amt b{font-family:'Poppins';font-weight:900;font-size:36px;letter-spacing:-.03em;font-variant-numeric:tabular-nums}
  .tier .amt span{color:var(--mute);font-weight:700;font-size:14px}
  .tier.featured .amt span{color:#B6C2D9}
  .tier .tsub{color:var(--mute);font-weight:600;font-size:13.5px;margin-bottom:18px;min-height:40px;position:relative}
  .tier.featured .tsub{color:#B6C2D9}
  .tier ul{list-style:none;display:flex;flex-direction:column;gap:11px;margin-bottom:24px;flex:1;position:relative}
  .tier li{display:flex;gap:10px;font-weight:700;font-size:13.8px}
  .tier li svg{width:18px;height:18px;color:var(--blue);flex:none;margin-top:2px}
  .tier li b{font-weight:800}
  .tier.featured li{color:#E6ECF7}.tier.featured li svg{color:#5B8CFF}
  .tier .btn{width:100%;justify-content:center;margin-top:auto;position:relative}
  .price-foot{text-align:center;color:var(--mute);font-weight:600;font-size:13px;margin-top:28px;max-width:60ch;margin-inline:auto}
  @media(max-width:860px){.tiers{grid-template-columns:1fr;max-width:420px;margin:0 auto}.tier.featured{transform:none}.tier .tsub{min-height:0}}

  /* faq */
  .faq{max-width:780px;margin:0 auto}
  details{border:1px solid var(--line);border-radius:14px;padding:2px 20px;margin-bottom:12px;background:#fff;transition:box-shadow .18s ease}
  details[open]{box-shadow:0 8px 22px rgba(15,23,42,.06)}
  summary{list-style:none;cursor:pointer;font-family:'Poppins';font-weight:800;font-size:16px;padding:18px 0;display:flex;justify-content:space-between;align-items:center;gap:14px}
  summary::-webkit-details-marker{display:none}
  summary .pl{width:26px;height:26px;border-radius:8px;background:var(--blue-soft);color:var(--blue);display:grid;place-items:center;font-size:18px;flex:none;transition:transform .2s ease}
  details[open] summary .pl{transform:rotate(45deg)}
  details p{color:var(--mute);font-weight:600;font-size:14.5px;padding:0 0 18px}

  /* final cta + form */
  .final{background:radial-gradient(800px 400px at 80% 120%,rgba(37,99,235,.25),transparent 60%),var(--ink);color:#fff}
  .final h2{color:#fff;margin:12px 0 14px}
  .final .lead{color:#B6C2D9}
  .fgrid{display:grid;grid-template-columns:1fr 1fr;gap:44px;align-items:start}
  .fcopy .eyebrow{color:#93B4FF}
  .wapp{display:inline-flex;align-items:center;gap:10px;margin-top:24px;color:#DCE3F1;font-weight:700;font-size:14.5px}
  .wapp svg{width:26px;height:26px;color:#25D366;flex:none}
  .wapp b{color:#fff}
  .fcard{background:#fff;border-radius:20px;padding:26px 24px;box-shadow:0 24px 60px rgba(0,0,0,.32);display:flex;flex-direction:column;gap:12px}
  .fcard label{display:flex;flex-direction:column;gap:6px;font-family:'Poppins';font-weight:700;font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:var(--mute)}
  .fcard input,.fcard select,.fcard textarea{font-family:'Nunito';font-weight:700;font-size:15px;color:var(--ink);border:1.6px solid var(--line);border-radius:11px;padding:12px 13px;background:#fff;width:100%}
  .fcard textarea{resize:vertical;min-height:64px}
  .fcard input:focus,.fcard select:focus,.fcard textarea:focus{outline:none;border-color:var(--blue)}
  .frow{display:grid;grid-template-columns:1fr 1fr;gap:12px}
  .fcard .btn{width:100%;justify-content:center;margin-top:4px}
  .fnote{font-size:11.5px;color:var(--mute);font-weight:600;text-align:center}
  .fnote a{color:var(--blue);font-weight:800}
  .fcard .ok{background:var(--ok-soft);color:#0f7a34;border-radius:12px;padding:14px;font-weight:800;font-size:14px;text-align:center;font-family:'Poppins'}
  @media(max-width:820px){.fgrid{grid-template-columns:1fr;gap:26px}.frow{grid-template-columns:1fr}}

  /* footer */
  footer.ft{background:#0B1220;color:#8FA0BC;padding:58px 0 26px}
  .ft-grid{display:grid;grid-template-columns:1.7fr 1fr 1fr 1.2fr;gap:34px}
  .ft-brand .wm{color:#fff;margin-bottom:14px}
  .ft-brand p{font-size:13.5px;line-height:1.65;color:#8FA0BC;font-weight:600;max-width:34ch;margin-bottom:18px}
  .ft-wapp{display:inline-flex;align-items:center;gap:9px;background:rgba(37,99,235,.16);border:1px solid rgba(37,99,235,.32);color:#cfe0ff;font-family:'Poppins';font-weight:800;font-size:13.5px;padding:9px 15px;border-radius:100px}
  .ft-wapp svg{width:17px;height:17px;color:#25D366}
  .ft-wapp:hover{background:rgba(37,99,235,.26);color:#fff}
  .ft-col h4{font-family:'Poppins';font-weight:800;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#5f6f8c;margin-bottom:15px}
  .ft-col a{display:block;font-weight:700;font-size:13.5px;color:#B6C2D9;margin-bottom:11px}
  .ft-col a:hover{color:#fff}
  .ft-bottom{display:flex;flex-wrap:wrap;gap:12px 22px;align-items:center;justify-content:space-between;border-top:1px solid #1E293B;margin-top:42px;padding-top:22px}
  .ft-bottom p{font-size:12.5px;color:#64748B;font-weight:600}
  .ft-bottom .mini{display:flex;gap:18px}.ft-bottom .mini a{font-size:12.5px;color:#8FA0BC;font-weight:700}.ft-bottom .mini a:hover{color:#fff}
  @media(max-width:820px){.ft-grid{grid-template-columns:1fr 1fr;gap:26px}.ft-brand{grid-column:1/-1}}
  @media(max-width:520px){.ft-grid{grid-template-columns:1fr}.ft-bottom{flex-direction:column;align-items:flex-start;gap:10px}}

  /* mobile menu */
  .mmenu{display:none;position:fixed;inset:0;z-index:60;background:rgba(15,23,42,.5)}
  .mmenu.on{display:block}
  .mmenu .panel{position:absolute;top:0;right:0;width:min(82vw,320px);height:100%;background:#fff;padding:26px 24px;display:flex;flex-direction:column;gap:6px;box-shadow:-10px 0 40px rgba(0,0,0,.2)}
  .mmenu a{font-family:'Poppins';font-weight:700;font-size:16px;padding:13px 0;border-bottom:1px solid var(--line)}
  .mmenu .btn{margin-top:16px;justify-content:center}
  .mmenu .x{align-self:flex-end;background:none;border:0;font-size:28px;cursor:pointer;color:var(--ink);margin-bottom:8px}

  .reveal{opacity:0;transform:translateY(20px);transition:opacity .6s ease,transform .6s ease}
  .reveal.in{opacity:1;transform:none}

  /* ── afinar márgenes en pantallas chicas ── */
  @media(max-width:520px){
    .wrap{padding:0 18px}
    section{padding:42px 0}
    .sec-head{margin-bottom:28px}
    .hero h1{font-size:clamp(28px,8.4vw,40px)}
    .cards{gap:14px}.steps{gap:14px}.tiers{gap:16px}
    .fcard{padding:22px 18px}.cartel{padding:26px 20px}
    .final .fgrid{gap:22px}
    footer.ft nav{gap:14px 18px}
  }
  @media(prefers-reduced-motion:reduce){*{animation:none!important}.reveal{opacity:1;transform:none;transition:none}.hero h1 .hl::after{transform:none}
    .js .hero .eyebrow,.js .hero h1,.js .hero .lead,.js .hero .regalo,.js .hero .cta-row,.js .hero .trust,.js .hero .mock{opacity:1!important;transform:none!important;transition:none!important}
    html{scroll-behavior:auto}}
</style>
</head>
<body>

<!-- reusable QR glyph -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true"><defs>
  <symbol id="qr" viewBox="0 0 100 100">
    <rect x="6" y="6" width="26" height="26" rx="3" fill="none" stroke="currentColor" stroke-width="7"/>
    <rect x="15" y="15" width="8" height="8" fill="currentColor"/>
    <rect x="68" y="6" width="26" height="26" rx="3" fill="none" stroke="currentColor" stroke-width="7"/>
    <rect x="77" y="15" width="8" height="8" fill="currentColor"/>
    <rect x="6" y="68" width="26" height="26" rx="3" fill="none" stroke="currentColor" stroke-width="7"/>
    <rect x="15" y="77" width="8" height="8" fill="currentColor"/>
    <g fill="currentColor">
      <rect x="42" y="6" width="7" height="7"/><rect x="54" y="6" width="7" height="7"/>
      <rect x="42" y="18" width="7" height="7"/><rect x="42" y="30" width="7" height="7"/>
      <rect x="54" y="30" width="7" height="7"/><rect x="42" y="42" width="7" height="7"/>
      <rect x="6" y="42" width="7" height="7"/><rect x="18" y="42" width="7" height="7"/>
      <rect x="30" y="42" width="7" height="7"/><rect x="54" y="42" width="7" height="7"/>
      <rect x="66" y="42" width="7" height="7"/><rect x="78" y="42" width="7" height="7"/>
      <rect x="90" y="42" width="4" height="7"/>
      <rect x="66" y="54" width="7" height="7"/><rect x="78" y="66" width="7" height="7"/>
      <rect x="66" y="78" width="7" height="7"/><rect x="90" y="66" width="4" height="7"/>
      <rect x="54" y="66" width="7" height="7"/><rect x="42" y="66" width="7" height="7"/>
      <rect x="42" y="78" width="7" height="7"/><rect x="54" y="90" width="7" height="4"/>
      <rect x="78" y="90" width="7" height="4"/><rect x="90" y="90" width="4" height="4"/>
    </g>
  </symbol>
</defs></svg>

<header class="nav">
  <div class="wrap row">
    <a class="wm" href="#top" aria-label="FacturaQR inicio">
      <span class="qmark"><svg viewBox="0 0 100 100" aria-hidden="true"><use href="#qr"/></svg></span>
      Factura<span class="t2">QR</span>
    </a>
    <nav>
      <a class="navlink" href="#como">Cómo funciona</a>
      <a class="navlink" href="#beneficios">Beneficios</a>
      <a class="navlink" href="#panel">Panel</a>
      <a class="navlink" href="#precio">Precio</a>
      <a class="btn btn-blue cta" href="https://portal.facturaqr.app/registro.php" target="_blank" rel="noopener">Prueba gratis</a>
    </nav>
    <button class="burger" aria-label="Abrir menú" onclick="document.getElementById('mm').classList.add('on')">☰</button>
  </div>
</header>

<div class="mmenu" id="mm" onclick="if(event.target===this)this.classList.remove('on')">
  <div class="panel">
    <button class="x" aria-label="Cerrar" onclick="document.getElementById('mm').classList.remove('on')">×</button>
    <a href="#como" onclick="document.getElementById('mm').classList.remove('on')">Cómo funciona</a>
    <a href="#beneficios" onclick="document.getElementById('mm').classList.remove('on')">Beneficios</a>
    <a href="#panel" onclick="document.getElementById('mm').classList.remove('on')">Panel</a>
    <a href="#precio" onclick="document.getElementById('mm').classList.remove('on')">Precio</a>
    <a href="#faq" onclick="document.getElementById('mm').classList.remove('on')">Preguntas</a>
    <a href="https://portal.facturaqr.app/?c=ejemplo&amp;demo=1" target="_blank" rel="noopener">Ver demo en vivo</a>
    <a class="btn btn-blue" href="https://portal.facturaqr.app/registro.php" target="_blank" rel="noopener">Probar gratis — 10 facturas</a>
  </div>
</div>

<main id="top">
  <!-- HERO -->
  <section class="hero">
    <div class="wrap">
      <div>
        <span class="eyebrow">Autofacturación · CFDI 4.0</span>
        <h1>Tus clientes se facturan solos con una <span class="hl">foto de su ticket</span>.</h1>
        <p class="lead">Pon un QR en tu mostrador. Tu cliente toma la foto, escribe su RFC y recibe su factura por correo en menos de un minuto. Sin filas, sin capturar datos, sin que tu personal pierda el turno.</p>
        <div class="regalo">🎁<span><b>10 facturas gratis</b> al registrarte · sin tarjeta</span></div>
        <div class="cta-row">
          <a class="btn btn-blue" href="https://portal.facturaqr.app/registro.php" target="_blank" rel="noopener">Registro gratis →</a>
          <a class="btn btn-dark" href="https://portal.facturaqr.app/?c=ejemplo&amp;demo=1" target="_blank" rel="noopener">Ver demo en vivo</a>
        </div>
        <div class="trust">
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> CFDI 4.0 timbrado ante el SAT</span>
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Tu cliente no instala nada</span>
          <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Listo en minutos</span>
        </div>
      </div>

      <div class="mock">
        <div class="float f1"><span class="ic" style="background:var(--blue-soft);color:var(--blue)">📷</span><div>Foto del ticket<small>La IA lo lee sola</small></div></div>
        <div class="float f2"><span class="ic" style="background:var(--ok-soft);color:var(--ok)">✓</span><div>Factura enviada<small>PDF + XML al correo</small></div></div>
        <div class="phone">
          <div class="screen">
            <div class="brand"><span class="wm"><span class="qmark"><svg viewBox="0 0 100 100" aria-hidden="true"><use href="#qr"/></svg></span>Factura<span class="t2">QR</span></span></div>
            <div class="prog"><i class="on"></i><i class="on"></i><i class="on"></i><i class="on"></i></div>
            <div class="ticket">
              <div class="bar"></div>
              <div class="trow"><b>Comercio</b><span>Tu Negocio</span></div>
              <div class="trow"><b>Folio</b><span>A-6634</span></div>
              <div class="trow"><b>Fecha</b><span>Hoy</span></div>
              <div class="trow big"><b>Total</b><span>$500.00</span></div>
              <div class="stamp"><em>✓</em>TIMBRADO</div>
            </div>
            <div class="done">Enviamos tu factura por correo ✓</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STAT STRIP -->
  <div class="strip">
    <div class="wrap">
      <div class="stat"><b>&lt; 1 min</b><span>de la foto a la factura</span></div>
      <div class="stat"><b>0</b><span>datos que captura tu cajero</span></div>
      <div class="stat"><b>CFDI 4.0</b><span>válido ante el SAT</span></div>
      <div class="stat"><b>PDF + XML</b><span>directo al correo del cliente</span></div>
    </div>
  </div>

  <!-- HOW -->
  <section id="como" class="bg-tint">
    <div class="blob b1"></div>
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">Cómo funciona</span>
        <h2>Tres pasos. Cero fricción en tu mostrador.</h2>
        <p class="lead">Tu cliente hace todo desde su celular. Tú solo pones el QR una vez.</p>
      </div>
      <div class="steps">
        <div class="step reveal">
          <div class="num"></div>
          <b>Escanea el QR</b>
          <p>Desde la cámara de su celular, sin apps ni registro. Se abre el portal con tu logo.</p>
          <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </div>
        <div class="step reveal">
          <div class="num"></div>
          <b>Toma foto del ticket</b>
          <p>La inteligencia artificial lee el folio, la fecha y el total al instante. Nadie teclea cantidades.</p>
          <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </div>
        <div class="step reveal">
          <div class="num"></div>
          <b>Recibe su CFDI</b>
          <p>Pone su RFC y correo, y le llega el PDF y el XML timbrados. En segundos, no al día siguiente.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARE: SIN / CON -->
  <section id="compara">
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">Antes y después</span>
        <h2>Deja atrás la facturación de mostrador.</h2>
        <p class="lead">El cambio se nota el mismo día que pegas tu QR en la caja.</p>
      </div>
      <div class="vs">
        <div class="vs-col bad reveal">
          <h3><span class="tag">Sin FacturaQR</span></h3>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12"/></svg> Tu cajero captura RFC, correo y uso de CFDI a mano, con la fila esperando.</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12"/></svg> Errores de dedo: facturas rechazadas, refacturaciones y clientes molestos.</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12"/></svg> «Mándenos su ticket por correo y mañana le enviamos su factura.»</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12"/></svg> Facturas regadas en correos y carpetas, sin control ni respaldo.</li>
          </ul>
        </div>
        <div class="vs-col good reveal">
          <h3><span class="tag">Con FacturaQR</span></h3>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Tu cliente escanea el QR y se factura solo, desde su mesa o desde su casa.</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> La IA lee el ticket sin errores y cada folio se factura una sola vez.</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> CFDI 4.0 timbrado y enviado por correo en menos de un minuto.</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Todo queda en tu panel: busca, filtra, descarga en CSV/ZIP y cancela.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- BENEFITS -->
  <section id="beneficios" class="bg-paper clip">
    <div class="blob b2"></div>
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">Por qué los negocios lo eligen</span>
        <h2>Menos trabajo en caja, clientes más contentos.</h2>
      </div>
      <div class="cards">
        <div class="feat reveal"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div><b>Se acaba la fila del mostrador</b><p>Tus cajeros dejan de capturar RFCs uno por uno. El cliente se factura solo, incluso desde su casa.</p></div>
        <div class="feat reveal"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"/></svg></div><b>Lectura con inteligencia artificial</b><p>La IA interpreta el ticket: folio, fecha, subtotal, IVA y total. Sin errores de dedo, sin re-teclear.</p></div>
        <div class="feat reveal"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c1.66 0 3.22.45 4.56 1.24"/></svg></div><b>CFDI 4.0 válido ante el SAT</b><p>Timbrado real vía PAC autorizado. El cliente recibe PDF y XML listos para su contabilidad.</p></div>
        <div class="feat reveal"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg></div><b>Cero instalación para el cliente</b><p>Es una página web. Abre el link, factura y listo. Funciona en cualquier celular.</p></div>
        <div class="feat reveal"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><rect x="7" y="12" width="3" height="6"/><rect x="12" y="8" width="3" height="10"/><rect x="17" y="4" width="3" height="14"/></svg></div><b>Tu panel de control</b><p>Todas tus facturas en un lugar: busca, filtra, descarga en CSV o ZIP y cancela con un clic.</p></div>
        <div class="feat reveal"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="13.5" cy="6.5" r="2.5"/><circle cx="6.5" cy="12" r="2.5"/><circle cx="15" cy="16.5" r="2.5"/><path d="M12 2a10 10 0 1 0 10 10"/></svg></div><b>Con tu marca</b><p>Tu logo, tu nombre y tus colores en el portal y en el cartel. El cliente ve tu negocio, no el nuestro.</p></div>
      </div>
    </div>
  </section>

  <!-- QR COUNTER (dark) -->
  <section class="dark">
    <div class="wrap">
      <div>
        <span class="eyebrow">Un QR que trabaja por ti</span>
        <h2>Imprímelo, pégalo en tu caja y olvídate.</h2>
        <p class="lead">Generamos tu cartel listo para imprimir con tu logo y tu QR. El mismo código sirve para todos tus clientes, todos los días.</p>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Un solo QR para todo tu negocio</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Cartel con tu marca, listo para imprimir</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> También va en tu ticket, recibo o WhatsApp</li>
        </ul>
      </div>
      <div class="cartel">
        <div class="k">Factura tu ticket</div>
        <h3>Escanea y listo</h3>
        <p>Toma foto de tu ticket y recibe tu factura CFDI en tu correo.</p>
        <div class="qr"><svg viewBox="0 0 100 100" style="color:var(--ink)" aria-label="Código QR de ejemplo"><use href="#qr"/></svg></div>
        <div class="foot">Tu Negocio · CFDI 4.0</div>
      </div>
    </div>
  </section>

  <!-- PANEL -->
  <section id="panel" class="dots">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Tu panel de control</span>
        <h2>Toda tu facturación, en una sola pantalla.</h2>
        <p class="lead">Entra con tu correo y tu llave. Sin instalar programas, desde cualquier dispositivo.</p>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Busca y filtra por RFC, folio o fecha</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Descarga masiva en CSV y ZIP (PDF + XML)</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Reenvía o cancela con motivo SAT en un clic</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Aviso automático cuando tu CSD está por vencer</li>
        </ul>
        <a class="btn btn-dark" href="https://portal.facturaqr.app/?c=ejemplo&amp;demo=1" target="_blank" rel="noopener" style="margin-top:26px">Probar el flujo completo →</a>
      </div>
      <div class="dash reveal">
        <div class="top"><i></i><i></i><i></i></div>
        <div class="body">
          <div class="kpis">
            <div class="kpi"><b class="count" data-to="1284">1,284</b><span>Facturas</span></div>
            <div class="kpi"><b class="count" data-to="642" data-prefix="$" data-suffix="k">$642k</b><span>Facturado</span></div>
            <div class="kpi"><b class="count" data-to="3">3</b><span>Canceladas</span></div>
          </div>
          <div class="chart" id="chart" aria-hidden="true">
            <i style="height:38%"></i><i style="height:54%"></i><i style="height:47%"></i><i style="height:70%"></i><i style="height:60%"></i><i style="height:82%"></i><i style="height:74%"></i><i style="height:95%"></i><i style="height:66%"></i><i style="height:88%"></i><i style="height:78%"></i><i style="height:100%"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GIROS -->
  <section id="giros" class="bg-tint clip">
    <div class="blob b1"></div>
    <div class="wrap">
      <div class="sec-head" style="margin-inline:auto;text-align:center">
        <span class="eyebrow">Para tu giro</span>
        <h2>Si entregas ticket, FacturaQR es para ti.</h2>
        <p class="lead" style="margin-inline:auto">El mismo QR funciona igual de bien en un restaurante que en una gasolinera o una tienda.</p>
      </div>
      <div class="giros">
        <div class="giro reveal"><span class="em">🍽️</span><b>Restaurantes y cafeterías</b><p>El comensal se factura desde su mesa, sin detener al mesero ni hacer fila en caja.</p></div>
        <div class="giro reveal"><span class="em">⛽</span><b>Gasolineras</b><p>El QR va en la bomba o en el ticket: el cliente factura sin bajarse del coche.</p></div>
        <div class="giro reveal"><span class="em">🛍️</span><b>Tiendas y farmacias</b><p>Se acaba la fila de atención a clientes y las capturas de RFC en el mostrador.</p></div>
        <div class="giro reveal"><span class="em">🔧</span><b>Talleres y servicios</b><p>Entregas el ticket y listo: tu cliente se factura cuando quiera, hasta desde su casa.</p></div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section id="precio" class="bg-paper">
    <div class="wrap">
      <div class="sec-head" style="margin-inline:auto;text-align:center">
        <span class="eyebrow">Precio</span>
        <h2>Planes claros, sin sorpresas.</h2>
        <p class="lead" style="margin-inline:auto">Elige según el tamaño de tu operación. Sin costo de instalación y sin contratos forzosos.</p>
      </div>
      <div class="tiers">

        <div class="tier reveal">
          <div class="tk">Local</div>
          <div class="amt"><b>$5,000</b><span>/ mes</span></div>
          <p class="tsub">Lo esencial para dejar de facturar a mano en el mostrador.</p>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <span><b>1</b> comercio / punto de venta</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <span>Hasta <b>500</b> facturas al mes</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Lectura de tickets con IA</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Timbrado CFDI 4.0 + envío por correo</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Panel de facturas (consulta y cancelación)</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Cartel QR estándar (marca FacturaQR)</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Soporte por correo (72 h)</li>
          </ul>
          <a class="btn btn-ghost" href="https://portal.facturaqr.app/registro.php?plan=local" target="_blank" rel="noopener">Empezar con Local →</a>
        </div>

        <div class="tier featured reveal">
          <div class="badge">★ Más popular</div>
          <div class="tk">Comercio</div>
          <div class="amt"><b>$8,000</b><span>/ mes</span></div>
          <p class="tsub">Para negocios con varias cajas o sucursales y más volumen.</p>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <span>Hasta <b>3</b> comercios / sucursales</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <span>Hasta <b>1,000</b> facturas al mes</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <b>Todo lo de Local</b>, más:</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <span><b>Tu marca</b> en portal, cartel y correos (logo y colores)</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Descarga masiva en CSV y ZIP (PDF + XML)</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Soporte prioritario por WhatsApp (24 h)</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Reportes de facturación mensuales</li>
          </ul>
          <a class="btn btn-blue" href="https://portal.facturaqr.app/registro.php?plan=comercio" target="_blank" rel="noopener">Empezar con Comercio →</a>
        </div>

        <div class="tier reveal">
          <div class="tk">Cadena</div>
          <div class="amt"><b>$15,000</b><span>/ mes</span></div>
          <p class="tsub">Para cadenas y franquicias que operan muchos puntos de venta.</p>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <span>Comercios <b>ilimitados</b> (multi-sucursal)</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <span>Facturas <b>ilimitadas</b></span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> <b>Todo lo de Comercio</b>, más:</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Soporte dedicado el mismo día</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Onboarding y alta de CSD asistidos</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg> Panel multi-marca desde una sola cuenta</li>
          </ul>
          <a class="btn btn-dark" href="https://portal.facturaqr.app/registro.php?plan=cadena" target="_blank" rel="noopener">Empezar con Cadena →</a>
        </div>

      </div>
      <p class="price-foot"><a href="https://portal.facturaqr.app/registro.php" target="_blank" rel="noopener" style="color:var(--blue);font-weight:800">Pruébalo gratis con 10 facturas antes de elegir plan →</a><br>Precios en pesos mexicanos (MXN), facturables mensualmente. ¿Tu operación no cabe en un plan? <a href="https://wa.me/526141062426" target="_blank" rel="noopener" style="color:var(--blue);font-weight:800">Hablemos y te armamos uno a tu medida.</a></p>
    </div>
  </section>

  <!-- SEGURIDAD / CONFIANZA -->
  <div class="safe">
    <div class="wrap">
      <div class="safe-item reveal">
        <span class="sic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></span>
        <div><b>Timbrado con PAC autorizado</b><span>CFDI 4.0 real, con validez ante el SAT.</span></div>
      </div>
      <div class="safe-item reveal">
        <span class="sic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
        <div><b>Conexión cifrada</b><span>Tus datos y los de tus clientes viajan protegidos (HTTPS/TLS).</span></div>
      </div>
      <div class="safe-item reveal">
        <span class="sic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 2l-2 2m-7.6 7.6a5.5 5.5 0 1 1-7.78 7.78 5.5 5.5 0 0 1 7.78-7.78zm0 0L19 3m-3 3 2 2"/></svg></span>
        <div><b>Tu CSD, resguardado</b><span>Tu Certificado de Sello Digital se guarda de forma segura.</span></div>
      </div>
      <div class="safe-item reveal">
        <span class="sic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><rect x="4" y="3" width="16" height="18" rx="2"/></svg></span>
        <div><b>Cada folio, una sola vez</b><span>Sin duplicados: un ticket no se puede facturar dos veces.</span></div>
      </div>
    </div>
  </div>

  <!-- FAQ -->
  <section id="faq" class="bg-tint">
    <div class="blob b2"></div>
    <div class="wrap">
      <div class="sec-head" style="margin-inline:auto;text-align:center">
        <span class="eyebrow">Preguntas frecuentes</span>
        <h2>Lo que todo negocio pregunta.</h2>
      </div>
      <div class="faq">
        <details open><summary>¿Mis clientes tienen que registrarse o bajar una app? <span class="pl">+</span></summary><p>No. Escanean el QR, se abre una página web, toman la foto de su ticket y ponen su RFC. Nada de cuentas ni instalaciones.</p></details>
        <details><summary>¿Las facturas son válidas ante el SAT? <span class="pl">+</span></summary><p>Sí. Emitimos CFDI 4.0 timbrado a través de un PAC autorizado. El cliente recibe el PDF y el XML, igual que cualquier factura formal.</p></details>
        <details><summary>¿Qué necesito para empezar? <span class="pl">+</span></summary><p>Tu RFC, tu régimen fiscal y tu Certificado de Sello Digital (CSD) del SAT. Lo subes una vez desde tu panel y quedas listo para timbrar.</p></details>
        <details><summary>¿Y si la foto del ticket sale borrosa? <span class="pl">+</span></summary><p>La IA avisa cuando no puede leer el folio o el total y le pide al cliente otra foto. Además, cada folio solo se puede facturar una vez, para evitar duplicados.</p></details>
        <details><summary>¿Puedo cancelar una factura? <span class="pl">+</span></summary><p>Sí, desde tu panel, eligiendo el motivo de cancelación del SAT. También puedes reenviar la factura al correo del cliente cuando lo necesites.</p></details>
        <details><summary>¿Funciona para varias sucursales? <span class="pl">+</span></summary><p>Sí. Cada negocio tiene su propio portal, su QR y su marca, y tú los administras todos desde una sola cuenta.</p></details>
      </div>
    </div>
  </section>

  <!-- FINAL CTA + FORM -->
  <section class="final" id="contacto">
    <div class="wrap fgrid">
      <div class="fcopy">
        <span class="eyebrow">Empieza hoy</span>
        <h2>Pon a tus clientes a facturar solos.</h2>
        <p class="lead">Crea tu cuenta en 2 minutos y estrena tu portal hoy mismo con <b style="color:#fff">10 facturas de prueba gratis</b> — sin tarjeta y sin compromiso. ¿Prefieres que te contactemos? Déjanos tus datos.</p>
        <div style="margin-top:22px"><a class="btn btn-white" href="https://portal.facturaqr.app/registro.php" target="_blank" rel="noopener">Crear mi cuenta gratis →</a></div>
        <a class="wapp" href="https://wa.me/526141062426?text=Quiero%20FacturaQR%20para%20mi%20negocio" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.5 15.3L2 22l4.8-1.5A10 10 0 1 0 12 2zm0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.9.9.9-2.8-.2-.3A8 8 0 1 1 12 20zm4.4-6c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.8 1-.1.1-.3.1-.5 0-.7-.3-1.3-.6-1.9-1.4-.4-.5-.7-1.1-.8-1.3-.1-.2 0-.4.1-.5l.4-.4.2-.4v-.4c0-.1-.5-1.3-.7-1.7-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.4.1-.6.3-.7.7-.9 1.6-.6 2.6.3 1 .9 2 .9 2.1.1.1 1.7 2.7 4.2 3.7 2.1.9 2.5.7 3 .7.5-.1 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1z"/></svg>
          o escríbenos por WhatsApp <b>614 106 2426</b>
        </a>
      </div>

      <form class="fcard" id="leadForm" method="post" action="contacto.php">
        <div class="ok" id="formOk" hidden>✓ ¡Gracias! Recibimos tus datos y te contactamos muy pronto.</div>
        <input type="text" name="empresa_web" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true">
        <label>Nombre<input type="text" name="nombre" required autocomplete="name" placeholder="Tu nombre"></label>
        <label>Negocio<input type="text" name="negocio" required placeholder="Nombre de tu comercio"></label>
        <div class="frow">
          <label>WhatsApp / teléfono<input type="tel" name="telefono" required inputmode="tel" placeholder="10 dígitos"></label>
          <label>Correo<input type="email" name="correo" required autocomplete="email" placeholder="tucorreo@ejemplo.com"></label>
        </div>
        <label>Plan de interés
          <select name="plan">
            <option value="No estoy seguro">No estoy seguro / recomiéndenme</option>
            <option value="Local ($5,000)">Local — $5,000/mes</option>
            <option value="Comercio ($8,000)">Comercio — $8,000/mes</option>
            <option value="Cadena ($15,000)">Cadena — $15,000/mes</option>
          </select>
        </label>
        <label>Mensaje (opcional)<textarea name="mensaje" rows="3" placeholder="Cuéntanos de tu negocio: giro, cuántas sucursales, etc."></textarea></label>
        <button class="btn btn-blue" type="submit">Solicitar mi demo →</button>
        <p class="fnote">Al enviar aceptas nuestro <a href="aviso-privacidad.html">Aviso de Privacidad</a>.</p>
      </form>
    </div>
  </section>
</main>

<footer class="ft on-dark">
  <div class="wrap">
    <div class="ft-grid">
      <div class="ft-brand">
        <a class="wm" href="#top"><span class="qmark"><svg viewBox="0 0 100 100" aria-hidden="true"><use href="#qr"/></svg></span>Factura<span class="t2">QR</span></a>
        <p>Autofacturación con una foto del ticket. Tus clientes se facturan solos y tú dejas de perder el mostrador.</p>
        <a class="ft-wapp" href="https://wa.me/526141062426" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.5 15.3L2 22l4.8-1.5A10 10 0 1 0 12 2zm0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.9.9.9-2.8-.2-.3A8 8 0 1 1 12 20zm4.4-6c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.8 1-.1.1-.3.1-.5 0-.7-.3-1.3-.6-1.9-1.4-.4-.5-.7-1.1-.8-1.3-.1-.2 0-.4.1-.5l.4-.4.2-.4v-.4c0-.1-.5-1.3-.7-1.7-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.4.1-.6.3-.7.7-.9 1.6-.6 2.6.3 1 .9 2 .9 2.1.1.1 1.7 2.7 4.2 3.7 2.1.9 2.5.7 3 .7.5-.1 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1z"/></svg>
          614 106 2426
        </a>
      </div>
      <div class="ft-col">
        <h4>Producto</h4>
        <a href="#como">Cómo funciona</a>
        <a href="#beneficios">Beneficios</a>
        <a href="#panel">Panel de control</a>
        <a href="#precio">Precio</a>
      </div>
      <div class="ft-col">
        <h4>Recursos</h4>
        <a href="https://portal.facturaqr.app/?c=ejemplo&amp;demo=1" target="_blank" rel="noopener">Ver demo</a>
        <a href="#faq">Preguntas frecuentes</a>
        <a href="https://portal.facturaqr.app/" target="_blank" rel="noopener">Entrar al portal</a>
      </div>
      <div class="ft-col">
        <h4>Contacto y legal</h4>
        <a href="#contacto">Solicitar demo</a>
        <a href="https://wa.me/526141062426" target="_blank" rel="noopener">WhatsApp 614 106 2426</a>
        <a href="aviso-privacidad.html">Aviso de Privacidad</a>
        <a href="terminos.html">Términos y Condiciones</a>
      </div>
    </div>
    <div class="ft-bottom">
      <p>© 2026 FacturaQR · Autofacturación CFDI 4.0 · Hecho en México 🇲🇽</p>
      <div class="mini">
        <a href="aviso-privacidad.html">Privacidad</a>
        <a href="terminos.html">Términos</a>
      </div>
    </div>
  </div>
</footer>

<a class="wa-fab" href="https://wa.me/526141062426?text=Quiero%20FacturaQR%20para%20mi%20negocio" target="_blank" rel="noopener" aria-label="Escríbenos por WhatsApp">
  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.5 15.3L2 22l4.8-1.5A10 10 0 1 0 12 2zm0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.9.9.9-2.8-.2-.3A8 8 0 1 1 12 20zm4.4-6c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.8 1-.1.1-.3.1-.5 0-.7-.3-1.3-.6-1.9-1.4-.4-.5-.7-1.1-.8-1.3-.1-.2 0-.4.1-.5l.4-.4.2-.4v-.4c0-.1-.5-1.3-.7-1.7-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.4.1-.6.3-.7.7-.9 1.6-.6 2.6.3 1 .9 2 .9 2.1.1.1 1.7 2.7 4.2 3.7 2.1.9 2.5.7 3 .7.5-.1 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1z"/></svg>
</a>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "FacturaQR",
  "url": "https://facturaqr.app/",
  "logo": "https://facturaqr.app/og-image.png",
  "description": "Portal de autofacturación CFDI 4.0 para negocios en México. Tus clientes escanean un QR, toman foto de su ticket y reciben su factura por correo.",
  "areaServed": "MX"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "FacturaQR",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "description": "Autofacturación por QR: tus clientes toman foto de su ticket, ponen su RFC y reciben su CFDI 4.0 por correo en menos de un minuto. Lectura de tickets con IA y timbrado con PAC autorizado.",
  "url": "https://facturaqr.app/",
  "offers": [
    {"@type": "Offer", "name": "Local", "price": "5000", "priceCurrency": "MXN", "description": "1 comercio · hasta 500 facturas/mes"},
    {"@type": "Offer", "name": "Comercio", "price": "8000", "priceCurrency": "MXN", "description": "Hasta 3 sucursales · 1,000 facturas/mes · marca propia"},
    {"@type": "Offer", "name": "Cadena", "price": "15000", "priceCurrency": "MXN", "description": "Sucursales y facturas ilimitadas"}
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "¿Mis clientes tienen que registrarse o bajar una app?", "acceptedAnswer": {"@type": "Answer", "text": "No. Escanean el QR, se abre una página web, toman la foto de su ticket y ponen su RFC. Nada de cuentas ni instalaciones."}},
    {"@type": "Question", "name": "¿Las facturas son válidas ante el SAT?", "acceptedAnswer": {"@type": "Answer", "text": "Sí. Emitimos CFDI 4.0 timbrado a través de un PAC autorizado. El cliente recibe el PDF y el XML, igual que cualquier factura formal."}},
    {"@type": "Question", "name": "¿Qué necesito para empezar?", "acceptedAnswer": {"@type": "Answer", "text": "Tu RFC, tu régimen fiscal y tu Certificado de Sello Digital (CSD) del SAT. Lo subes una vez desde tu panel y quedas listo para timbrar."}},
    {"@type": "Question", "name": "¿Y si la foto del ticket sale borrosa?", "acceptedAnswer": {"@type": "Answer", "text": "La IA avisa cuando no puede leer el folio o el total y le pide al cliente otra foto. Además, cada folio solo se puede facturar una vez, para evitar duplicados."}},
    {"@type": "Question", "name": "¿Puedo cancelar una factura?", "acceptedAnswer": {"@type": "Answer", "text": "Sí, desde tu panel, eligiendo el motivo de cancelación del SAT. También puedes reenviar la factura al correo del cliente cuando lo necesites."}},
    {"@type": "Question", "name": "¿Funciona para varias sucursales?", "acceptedAnswer": {"@type": "Answer", "text": "Sí. Cada negocio tiene su propio portal, su QR y su marca, y tú los administras todos desde una sola cuenta."}}
  ]
}
</script>

<script>
  var reduce = matchMedia('(prefers-reduced-motion:reduce)').matches || !('IntersectionObserver' in window);

  // entrada del hero (siempre termina visible)
  (function(){ var h=document.querySelector('.hero'); if(!h)return;
    if(reduce){h.classList.add('in');return;}
    requestAnimationFrame(function(){requestAnimationFrame(function(){h.classList.add('in');});});
  })();

  // scroll reveal
  (function(){
    var els=document.querySelectorAll('.reveal');
    if(reduce){els.forEach(function(e){e.classList.add('in')});return;}
    var io=new IntersectionObserver(function(en){en.forEach(function(x){if(x.isIntersecting){x.target.classList.add('in');io.unobserve(x.target);}})},{threshold:.14});
    els.forEach(function(e){io.observe(e)});
  })();

  // conteo de números (KPIs) + animación de la gráfica
  (function(){
    function fmt(n){ return n.toLocaleString('es-MX'); }
    function countUp(el){
      var to=parseFloat(el.dataset.to||'0'), pre=el.dataset.prefix||'', suf=el.dataset.suffix||'', dur=1200, t0=null;
      function step(ts){ if(!t0)t0=ts; var p=Math.min((ts-t0)/dur,1); var e=1-Math.pow(1-p,3);
        el.textContent=pre+fmt(Math.round(to*e))+suf; if(p<1)requestAnimationFrame(step); }
      requestAnimationFrame(step);
    }
    var chart=document.getElementById('chart'), counters=document.querySelectorAll('.count');
    if(reduce){ if(chart)chart.classList.add('in'); return; }
    var target=document.querySelector('.dash')||chart;
    if(!target){counters.forEach(countUp);return;}
    var io=new IntersectionObserver(function(en){en.forEach(function(x){ if(x.isIntersecting){
      if(chart)chart.classList.add('in'); counters.forEach(countUp); io.disconnect(); } })},{threshold:.3});
    io.observe(target);
  })();

  // formulario de contacto (envío sin recargar; fallback a POST normal)
  (function(){
    var f=document.getElementById('leadForm'); if(!f)return;
    if(location.search.indexOf('enviado=1')>-1){ var ok=document.getElementById('formOk'); if(ok){ok.hidden=false; f.reset();} if(window.fqConv)fqConv((window.FQ_ANALYTICS||{}).CONV_LEAD,'generate_lead'); }
    f.addEventListener('submit',function(ev){
      if(f.empresa_web && f.empresa_web.value){ ev.preventDefault(); return; } // honeypot
      if(!window.fetch)return; // deja el POST normal
      ev.preventDefault();
      var btn=f.querySelector('button[type=submit]'), txt=btn.textContent; btn.disabled=true; btn.textContent='Enviando…';
      fetch('contacto.php',{method:'POST',body:new FormData(f),headers:{'X-Requested-With':'fetch'}})
        .then(function(r){return r.json().catch(function(){return{ok:r.ok};});})
        .then(function(d){ if(d&&d.ok!==false){ document.getElementById('formOk').hidden=false; f.reset(); document.getElementById('formOk').scrollIntoView({behavior:'smooth',block:'center'}); if(window.fqConv)fqConv((window.FQ_ANALYTICS||{}).CONV_LEAD,'generate_lead'); }
          else { alert((d&&d.error)||'No se pudo enviar. Escríbenos por WhatsApp.'); } })
        .catch(function(){ alert('No se pudo enviar. Escríbenos por WhatsApp al 614 106 2426.'); })
        .finally(function(){ btn.disabled=false; btn.textContent=txt; });
    });
  })();
</script>
</body>
</html>
