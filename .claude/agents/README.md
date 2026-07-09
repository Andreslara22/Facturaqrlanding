# Sistema de Agentes de Marketing — FacturaQR

Subagentes de Claude Code que replican el *Claude AI Marketing System*, adaptados
al negocio de FacturaQR (autofacturación CFDI 4.0 por foto del ticket).

Cada agente vive en `.claude/agents/*.md` y Claude Code lo invoca automáticamente
según la tarea, o puedes pedirlo por nombre (p. ej. *"usa el agente de anuncios
para…"*).

## Capa de orquestación
| Agente | Rol |
|--------|-----|
| **orquestador-marketing** | Coordina a los demás. Úsalo para campañas o planes amplios; descompone, delega y consolida. |

## Agentes de marketing (por canal)
| Agente | Área del diagrama | Qué hace |
|--------|-------------------|----------|
| **redes-sociales** | Social Media (Meta, Instagram, TikTok, YouTube) | Contenido orgánico, reels, guiones, calendario, copies. |
| **seo-local** | Local SEO (Google Business Profile, Maps, Reseñas) | Optimiza GBP/Maps, reseñas y keywords locales. |
| **anuncios** | Ads (Meta Ads, Google Ads) | Campañas de pago, segmentación, copies, conversión. |
| **contenido** | Content (WordPress/CMS, AI Writing) | Artículos SEO, guías, FAQs, copy de la landing. |
| **operaciones** | Operations (Twilio SMS, SendGrid, CRM) | Nurture por SMS/email, onboarding, CRM. |
| **analitica** | CRM Database, Analytics Dashboard, Owner Reports | KPIs, dashboard y reporte para el dueño. |

## Cómo usarlos
- **Tarea amplia** ("plan de marketing del mes", "lanza campaña para restaurantes en
  CDMX") → llama a **orquestador-marketing**.
- **Tarea de un canal** ("3 reels para TikTok", "campaña de Google Ads", "artículo
  sobre CFDI 4.0") → llama directo al agente del canal.

Los agentes son **prompts especializados**; las integraciones de API del diagrama
(Meta, Google Ads, Twilio, etc.) se conectan aparte cuando se implemente la
ejecución real. Aquí queda la capa de estrategia y creatividad lista para operar.
