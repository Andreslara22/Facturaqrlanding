// Genera imágenes cuadradas 1080x1080 de marca para cada post de la cola.
// Lee marketing/social/cola-posts.json y escribe social/post-<id>.png
// Uso: node scripts/generar-imagenes-social.mjs
import { chromium } from 'playwright-core';
import { readFileSync, mkdirSync } from 'fs';
import { fileURLToPath } from 'url';
import { dirname, join } from 'path';

const RAIZ = join(dirname(fileURLToPath(import.meta.url)), '..');
const posts = JSON.parse(readFileSync(join(RAIZ, 'marketing/social/cola-posts.json'), 'utf8'));
mkdirSync(join(RAIZ, 'social'), { recursive: true });

// glifo QR de marca (mismo del sitio), en blanco
const QR = `<g fill="none" stroke="#fff" stroke-width="6">
  <rect x="21" y="21" width="21" height="21" rx="4"/><rect x="58" y="21" width="21" height="21" rx="4"/><rect x="21" y="58" width="21" height="21" rx="4"/></g>
  <g fill="#fff"><rect x="28" y="28" width="7" height="7" rx="1.5"/><rect x="65" y="28" width="7" height="7" rx="1.5"/><rect x="28" y="65" width="7" height="7" rx="1.5"/>
  <rect x="58" y="58" width="8" height="8" rx="1.5"/><rect x="71" y="58" width="8" height="8" rx="1.5"/><rect x="58" y="71" width="8" height="8" rx="1.5"/><rect x="71" y="71" width="8" height="8" rx="1.5"/></g>`;

function esc(s){ return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

function plantilla(titular){
  return `<!doctype html><html><head><meta charset="utf-8">
  <style>
    @font-face{font-family:P;src:local("Poppins");}
    *{margin:0;box-sizing:border-box}
    body{width:1080px;height:1080px;overflow:hidden;
      font-family:"Poppins","Segoe UI",system-ui,sans-serif;
      background:#fff;position:relative}
    /* banda diagonal sutil de marca */
    .bg{position:absolute;inset:0;background:
      radial-gradient(1200px 700px at 100% -10%, #EFF4FF 0%, #fff 55%)}
    .frame{position:absolute;inset:36px;border:2px solid #E2E8F0;border-radius:36px}
    .wrap{position:absolute;inset:0;padding:96px 92px;display:flex;flex-direction:column;justify-content:space-between}
    .top{display:flex;align-items:center;gap:20px}
    .badge{width:76px;height:76px;border-radius:20px;background:linear-gradient(135deg,#3B82F6,#2563EB);display:grid;place-items:center}
    .badge svg{width:46px;height:46px}
    .wm{font-weight:800;font-size:34px;letter-spacing:-1px;color:#0F172A}
    .wm b{color:#2563EB}
    .eyebrow{margin-top:96px;font-weight:700;font-size:23px;letter-spacing:.22em;text-transform:uppercase;color:#2563EB}
    h1{font-weight:800;font-size:${titular.length>44?70:titular.length>28?86:104}px;line-height:1.06;letter-spacing:-2px;color:#0F172A;margin-top:22px;max-width:900px}
    .foot{display:flex;align-items:center;justify-content:space-between}
    .cta{background:#2563EB;color:#fff;font-weight:700;font-size:30px;padding:22px 40px;border-radius:18px}
    .url{font-weight:800;font-size:30px;color:#0F172A}
    .dot{color:#2563EB}
  </style></head><body>
    <div class="bg"></div><div class="frame"></div>
    <div class="wrap">
      <div>
        <div class="top">
          <div class="badge"><svg viewBox="0 0 100 100">${QR}</svg></div>
          <div class="wm">Factura<b>QR</b></div>
        </div>
        <div class="eyebrow">Autofacturación · CFDI 4.0</div>
        <h1>${esc(titular)}</h1>
      </div>
      <div class="foot">
        <div class="cta">Prueba gratis</div>
        <div class="url">facturaqr<span class="dot">.app</span></div>
      </div>
    </div>
  </body></html>`;
}

const b = await chromium.launch({ executablePath: '/opt/pw-browsers/chromium' });
const p = await b.newPage({ viewport: { width: 1080, height: 1080 }, deviceScaleFactor: 1 });
for (const post of posts) {
  const id = String(post.id).padStart(2, '0');
  await p.setContent(plantilla(post.imagen_titular || post.tema || 'FacturaQR'), { waitUntil: 'load' });
  await p.waitForTimeout(120);
  await p.screenshot({ path: join(RAIZ, `social/post-${id}.png`) });
  console.log(`social/post-${id}.png ← "${post.imagen_titular}"`);
}
await b.close();
console.log('listo:', posts.length, 'imágenes');
