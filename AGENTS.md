# AGENTS.md

Follow the user's request and this file's guidance when working in this repository.

## Project Overview

- This repository is the ATI Holidays WordPress block-theme child project at `lightspeedwp/ati-ollie-child`.
- Verified repo state: the default branch is `develop`.
- Verified implementation direction: this is an Ollie child theme (`Template: ollie`) being rebuilt as a block theme for ATI Holidays.
- Verified design source in-repo: `DESIGN.md` defines ATI tokens, typography, component intent, and Tour Operator compatibility rules.
- Verified current migration state: the repo still contains copied legacy identifiers and content in active theme files, while an open PR (`#1`) is already addressing part of that retheme.
- Inferred product context from supplied sources: the original ATI site predates this rebuild, the redesign was completed in 2022, and the current dev site is the block-theme rebuild target while the live site remains the production content reference.

## Repository Structure

- `theme.json`: primary source for shared palette, spacing, radius, typography, and block-level defaults.
- `styles/blocks/**/*.json`: block style variations for buttons, cover blocks, navigation, paragraph styles, and Yoast FAQ styling.
- `styles/sections/**/*.json`: section-level style variations such as the top header and page-section variants.
- `templates/*.html`: block-theme templates for front page, archives, taxonomy views, search, single content types, and tag/category views.
- `parts/*.html`: template-part entry points for header, footer, and fast-facts fragments.
- `patterns/*.php`: reusable block patterns, including header/footer and ATI/Tour Operator-oriented card patterns.
- `functions.php`: front-end enqueue logic and render filters that rewrite paragraph output for button-link pills and rating stars.
- `style.css`: theme header metadata plus custom CSS for sliders, header search, and navigation behaviors.
- `readme.txt`: theme readme metadata; currently still carries legacy source-project naming.
- `.github/copilot-instructions.md` and `.github/instructions/*.instructions.md`: repo-specific guidance that reinforces the ATI retheme and token policy.

## Dev Environment Tips

- Read these sources in this order before changing design or template behavior:
  1. direct user instructions
  2. `DESIGN.md`
  3. this `AGENTS.md`
  4. `.github/copilot-instructions.md`
  5. `.github/instructions/*.instructions.md`
  6. current repository files
  7. related PR context
- No repo-local package manager files or scripted build/test commands were found in the inspected repo files. Do not invent `npm`, `composer`, or task-runner workflows here.
- Inferred from the repo structure: validate changes inside a WordPress install with the Ollie parent theme available and the `lightspeedwp/tour-operator` plugin active where relevant.
- Use the live site as the content and IA reference, and use the dev site as the rebuild reference when checking whether a block-theme change matches the intended ATI experience.
- Review open PR `#1` before starting overlapping retheme cleanup so you do not duplicate or reintroduce migration work already in progress.

## WordPress Block Theme Rules

- Prefer `theme.json` for global tokens, typography, spacing, radius, and shared block styling.
- Prefer `styles/**/*.json` for named style variations instead of hard-coding per-template styling.
- Use `templates/*.html` for template structure, archive/single behavior, and block composition.
- Use `parts/*.html` only as template-part entry points; the real header/footer composition currently lives in `patterns/header.php` and `patterns/footer.php`.
- Use `patterns/*.php` for reusable ATI card layouts, destination/tour sections, and shared header/footer block markup.
- Keep block markup editor-compatible. Do not replace block markup with ad hoc PHP or raw HTML unless the file already requires that pattern.
- Preserve the `render_block` filters in `functions.php` unless you are deliberately changing the GA-style paragraph button/rating behavior and have checked the affected paragraph style names.
- Current repo reality: several files still use legacy short-prefix classnames and legacy child-theme references. Treat those as migration drift, not as stable ATI conventions.

## Styling and Token Sources

- `DESIGN.md` is the primary ATI design contract in this repo.
- `theme.json` is the primary implementation source for palette slugs, spacing presets, border radii, typography presets, and block defaults.
- `.github/instructions/design-token-policy.instructions.md` confirms the current ATI defaults:
  - sand primary `#DBBD8D`
  - rust accent `#AA653C`
  - charcoal main `#231F20`
  - white base `#FFFFFF`
  - Forum as the primary type family
  - `15px` as the working ATI radius
- Keep compatibility slugs that the repo and Tour Operator blocks already depend on, including `primary`, `primary-accent`, `primary-alt`, `primary-alt-accent`, `primary-200`, `primary-700`, `main`, `contrast`, `base`, `border-light`, and `border-dark`.
- Keep the numeric spacing preset ladder in `theme.json` (`10` through `80`). `DESIGN.md` explicitly treats those as compatibility tokens.
- Review `styles/sections/top-header.json` and related navigation/button variations before changing hover states; this repo already has tension between variation-level styles and custom CSS overrides.
- Inferred from the supplied Figma and project doc: use the ATI design system and the block-theme project document to resolve visual questions when the live site and current repo disagree.

## Testing and Validation

- No verified automated test, lint, or build commands were found in the inspected repository files. Do not claim that automated checks exist unless you confirm them in the repo later.
- Minimum manual validation for every styling or template change:
  - check the front end in both desktop and mobile widths
  - check the Site Editor or block editor rendering for the affected template/pattern/variation
  - check hover, focus, and active states for navigation, buttons, and links
  - check that token references resolve to existing `theme.json` presets
- For Tour Operator-facing changes, manually review the affected archive/single templates and card patterns together:
  - `templates/archive-tour.html`
  - `templates/single-tour.html`
  - `templates/single-destination.html`
  - `templates/single-accommodation.html`
  - ATI card patterns and fast-facts parts
- Treat unresolved token names, stale media IDs, copied URLs, and copied text-domain references as regressions worth catching before handoff.

## Change and PR Instructions

- Prefer small, targeted changes over broad rewrites.
- Inspect the exact template, part, pattern, style variation, and token definition involved before editing.
- If a change touches ATI retheme drift, update the related name stack together where appropriate:
  - theme name and text domain
  - pattern `Theme:` references
  - template-part `theme` references
  - classnames or variation slugs
  - asset handles and PHP function prefixes
- When a request overlaps the current ATI conversion work, compare against open PR `#1` first and continue from that direction instead of creating a second naming system.
- If you make a design-driven recommendation, explain whether it is:
  - verified from repo files or `DESIGN.md`
  - inferred from the supplied live site, dev site, Figma, or project document
- Do not introduce new branch rules, commit conventions, release steps, or CI expectations unless they are later confirmed in the repo.

## Safety and Boundaries

- The current `develop` branch is still in migration. Do not treat copied legacy source-project content as ATI truth.
- Known verified drift still present in inspected files:
  - `style.css` still declares legacy theme metadata and legacy text domain values
  - `functions.php` still uses legacy function names and asset handles
  - `readme.txt` still uses the legacy slug and description
  - `parts/header.html` and `parts/footer.html` still reference legacy `theme` values
  - `patterns/header.php`, `patterns/footer.php`, and `templates/front-page.html` still contain copied legacy content, URLs, classes, or text
- Do not hard-code raw colors when an existing ATI preset slug is the correct source.
- Do not remove compatibility tokens just because they look duplicated; `DESIGN.md` explicitly keeps some ATI and compatibility layers side by side.
- Do not flatten modular `styles/**/*.json` structures into `style.css` unless there is no block-theme-native place for the rule.
- Be careful with header/footer edits: the current pattern files contain copied contact details, navigation refs, image IDs, and placeholder asset URLs, so seemingly small edits can preserve old project data if you only patch one line.
- Be careful with Tour Operator-related classes and block names. This child theme is styling plugin output, not just core blocks.
- Inferred caution from the supplied sources: when live-site behavior, the dev rebuild, Figma, and current repo files disagree, prefer `DESIGN.md` plus the active rebuild direction over the legacy live implementation, and call out the conflict explicitly.
