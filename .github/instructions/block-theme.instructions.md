---
applyTo: "theme.json,styles/**/*.json,templates/**/*.html,parts/**/*.html,patterns/**/*,functions.php,inc/**/*.php,src/scss/**/*,assets/css/**/*,blocks/**/*"
---

# WordPress Block Theme Instructions

This repository is an ATI Holidays retheme built on a duplicated WordPress block-theme child. Read `DESIGN.md`, `AGENTS.md`, and `.github/copilot-instructions.md` before making file recommendations.

Use `DESIGN.md` as the primary source of truth for:

- ATI color tokens
- ATI typography tokens
- ATI component styling
- shape and radius values
- copied-project values that must be replaced

Required behavior:

- inspect existing file ownership before proposing edits
- prefer `theme.json` and related JSON files for design-token ownership
- preserve ATI dark-card styling for `lightspeedwp/tour-operator` blocks
- replace inherited GoAfrica names, tokens, and typography
- keep changes small and additive
- treat spacing, widths, and shadows as provisional when `DESIGN.md` says they are provisional

Known repo targets to inspect early:

- `style.css`
- `readme.txt`
- `functions.php`
- theme patterns and parts that still reference copied project naming

Tour Operator files that deserve early attention:

- `patterns/accommodation-card.php`
- `patterns/destination-card.php`
- `patterns/review-card.php`
- `patterns/room-card.php`
- `patterns/section-header.php`
- `patterns/tour-card.php`
- `patterns/travel-information.php`
- `templates/archive-accommodation.html`
- `templates/archive-destination.html`
- `templates/archive-tour.html`
- `templates/single-accommodation.html`
- `templates/single-destination.html`
- `templates/single-tour.html`

If `src/scss/` exists, treat it as source and do not hand-edit compiled CSS unless no source file exists.

Do not:

- keep original-project placeholder names
- flatten modular JSON structures without proof
- invent new ATI token values when `DESIGN.md` does not support them
- hard-code menu behavior that belongs to `ollie-menu-designer`
