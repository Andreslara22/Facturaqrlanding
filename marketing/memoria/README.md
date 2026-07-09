# Memoria de los agentes de marketing (estilo code-recall)

Los agentes no recuerdan nada entre sesiones. Esta carpeta es su memoria de
largo plazo, inspirada en [code-recall](https://github.com/AbianS/code-recall):
briefing → buscar recuerdos → revisar reglas → guardar observaciones →
registrar resultados.

## Estructura
| Archivo | Rol (equivalente en code-recall) |
|---------|----------------------------------|
| `contexto.md` | Fuente de verdad del producto: qué es, planes, precios, FAQs |
| `cambios.md` | Cambios detectados automáticamente en facturaqr.app y portal (vigilante diario) |
| `snapshots/` | Última foto del texto de cada página pública (para detectar los cambios) |
| `briefing.md` | Estado compacto del sistema; se lee SIEMPRE primero (`get_briefing`) |
| `reglas.md` | Guardrails: Debe / No debe / Preguntar antes (`check_rules`) |
| `bitacora/<agente>.md` | Recuerdos tipados, una línea por recuerdo (`store_observation` / `record_outcome`) |

## Formato de recuerdo (una línea, buscable con Grep)
```
- AAAA-MM-DD [decisión|patrón|warning|aprendizaje|resultado] texto con palabras clave
```
Tipos:
- **decisión** — qué se eligió y por qué (canal, mensaje, segmento)
- **patrón** — convención que funcionó y debe repetirse
- **warning** — algo frágil o que NO se debe hacer
- **aprendizaje** — error cometido y su solución
- **resultado** — `éxito:` o `fracaso:` de algo lanzado; los fracasos pesan más

## Búsqueda semántica real (opcional)
Para memoria con embeddings locales (SQLite + sqlite-vec + MiniLM), instala el
MCP de code-recall en tu máquina:
```bash
bun install -g code-recall        # requiere Bun: https://bun.sh
claude mcp add code-recall -- bunx code-recall
```
El repo ya trae `.mcp.json` que lo activa por proyecto (Claude Code pedirá
aprobarlo; si no tienes Bun, simplemente no conecta y los agentes usan estos
archivos). Con el MCP conectado, los agentes usan `get_briefing`,
`search_memory`, `check_rules`, `store_observation` y `record_outcome`, y esta
carpeta queda como respaldo legible por humanos.
