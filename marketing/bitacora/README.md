# Bitácora de los agentes de marketing

Memoria persistente de los agentes de `.claude/agents/`. Los agentes por diseño
**no recuerdan nada entre sesiones**: cada vez que se invocan nacen solo con su
prompt. Esta bitácora es su memoria.

## Cómo funciona
- **Antes de trabajar**, cada agente lee su archivo aquí para retomar contexto.
- **Al terminar**, agrega una entrada al final con fecha, qué hizo y decisiones clave.
- El **orquestador** lee TODAS las bitácoras para saber qué ha hecho cada quien.

## Formato de entrada
```
## 2026-07-09 — <título corto>
- Qué se hizo / entregó
- Decisiones clave
- Pendientes que dejó
```

Un archivo por agente: `orquestador-marketing.md`, `redes-sociales.md`,
`seo-local.md`, `anuncios.md`, `contenido.md`, `operaciones.md`, `analitica.md`.

> Nota: esta carpeta está excluida del deploy a facturaqr.app (ver
> `.github/workflows/deploy.yml`); es interna del repo.
