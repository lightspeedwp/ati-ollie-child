# GitHub Copilot Instructions

This repository is an ATI Holidays WordPress block-theme retheme of a duplicated child theme. Treat `DESIGN.md` as the primary source of truth for design tokens, typography, metadata, and component styling. The main job is to replace inherited legacy values, labels, namespaces, text domains, and visual tokens with ATI-specific values.

Before suggesting changes, read `DESIGN.md`, `AGENTS.md`, and any matching files in `.github/instructions/`. Inspect the affected files first. Prefer small additive updates over broad rewrites.

The theme must remain aware of `lightspeedwp/tour-operator` block output. Preserve ATI’s charcoal card surfaces, white text, and sand accents for Tour Operator cards and related meta blocks unless `DESIGN.md` changes that guidance.

Prefer `theme.json`, `styles/**/*.json`, templates, parts, patterns, and source styling files over ad hoc overrides. If `src/scss/` exists, treat it as the styling source and avoid editing compiled CSS unless no source exists.

Always look for duplicated-project drift, especially in `style.css`, `theme.json`, `functions.php`, asset handles, pattern references, and header or template namespaces. Do not leave legacy slugs, legacy green palettes, `Mona Sans`, or `Poppins` behind when ATI evidence already provides a replacement.

When responding, summarize the relevant ATI design requirements, identify drift found in the repo, recommend concrete file updates, and draft PR text when useful. Flag uncertainty when spacing, widths, shadows, or other values are only provisional in `DESIGN.md`.

Known first-pass repo drift:

- `style.css` still contains legacy theme metadata and text domain
- `readme.txt` still uses the legacy slug and description
- `functions.php` still uses legacy function names and asset handles
- Tour Operator-facing styling should be checked against plugin patterns and templates, especially `tour-card`, `accommodation-card`, `review-card`, `archive-tour`, and `single-tour`
