# FacturaQR — Landing (facturaqr.app)

Landing promocional de FacturaQR. Un solo `index.html` autocontenido
(HTML + CSS + JS inline; fuentes Google Fonts por CDN).

## Deploy

Se publica en **SiteGround** (mismo hosting que `portal.facturaqr.app`) por
FTPS automático al hacer `push` a `main`, vía GitHub Actions
(`.github/workflows/deploy.yml`).

### Secrets requeridos en el repo
En GitHub → Settings → Secrets and variables → Actions, agrega:

| Secret | Valor |
|--------|-------|
| `FTP_SERVER`   | `gcam1093.siteground.biz` |
| `FTP_USERNAME` | `deploy@facturaqr.app` (el mismo del repo Facturaqr) |
| `FTP_PASSWORD` | la contraseña de ese usuario FTP |

Son los mismos valores que ya usa el repo **Facturaqr** para el portal.

### server-dir
El workflow sube a `public_html/` (docroot del apex `facturaqr.app`).
**Confírmalo** en Site Tools → File Manager: el apex debe ser `public_html/`
y el portal es `portal.facturaqr.app/public_html/` (no se toca).
Si el docroot del apex fuera otro, ajusta `server-dir` en el workflow.

El apex ya apunta a SiteGround, así que **no hay que cambiar DNS**.
