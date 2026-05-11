# Agent Instructions

Follow the user's request and this file's guidance when working in this repository.

## Repository Mission

This repository is an ATI Holidays WordPress block theme retheme based on a duplicated child theme that still contains inherited GoAfrica values.

The main job is to replace copied project identity with ATI-specific design, content structure, metadata, and block styling without breaking WordPress block-theme behavior or Tour Operator compatibility.

## Primary Sources

Use sources in this order when they conflict:

1. direct user instructions
2. `DESIGN.md`
3. root `AGENTS.md`
4. `.github/copilot-instructions.md`
5. `.github/instructions/*.instructions.md`
6. current repository files
7. linked issues and pull requests
8. upstream Ollie or plugin sources used only for compatibility context

Do not guess when these sources disagree. Call out the conflict and ask which source should win.

## Working Style

- Prefer small, targeted updates over broad refactors.
- Inspect affected files before proposing or making changes.
- Keep implementation aligned to ATI evidence, not duplicated GoAfrica defaults.
- Treat unresolved spacing, width, or shadow values as provisional unless `DESIGN.md` confirms them.
- Preserve existing WordPress block-theme structures unless there is a clear ATI reason to change them.

## Required Task Flow

For design, styling, template, or metadata work:

1. Read `DESIGN.md` first.
2. Summarize the relevant ATI tokens, typography, spacing, and acceptance criteria.
3. Inspect the affected files.
4. Identify inherited GoAfrica or generic Ollie drift.
5. Make the smallest effective ATI-aligned change.
6. Explain any provisional values or unresolved evidence.

If `DESIGN.md` is missing, say so plainly before making high-confidence design decisions.

## ATI Retheme Priorities

Prioritize the following work:

- replace copied GoAfrica naming in `style.css`, `readme.txt`, `Text Domain`, asset handles, namespaces, and pattern references
- replace copied palette values with ATI sand, rust, charcoal, white, and supporting tokens from `DESIGN.md`
- replace inherited `Mona Sans` and `Poppins` with ATI `Forum` typography where the design contract calls for it
- preserve ATI dark-card styling for Tour Operator blocks and related meta surfaces
- make theme metadata ATI-specific
- review the repository for placeholder values left behind from the duplicated source theme

## Known Drift To Fix First

These are first-pass remediation targets unless the repository has already corrected them:

- `style.css` still says `Theme Name: Go Africa Ollie Child`
- `style.css` still says `Description: A child theme of the Ollie theme for GoAfrica.nl`
- `style.css` still uses `Text Domain: go-africa-ollie-child`
- `readme.txt` still uses the `go-africa-ollie-child` slug and GoAfrica description
- `functions.php` still uses `goafrica_*` function names and handles
- `style.css` may reference tokens such as `primary-alt` and `primary-alt-accent` that need to be checked against `DESIGN.md`

Treat these as concrete cleanup items, not optional polish.

## WordPress Block Theme Rules

- Prefer `theme.json` for shared design-token ownership and reusable styling decisions.
- Check `styles/**/*.json` before hardcoding variation-specific values.
- Inspect `templates/**/*.html`, `parts/**/*.html`, and `patterns/**/*` for block markup and duplicated content drift.
- Inspect `functions.php`, `inc/**/*.php`, `style.css`, `src/scss/**/*`, and `assets/css/**/*` as needed.
- If `src/scss/` exists, treat it as the styling source layer and avoid hand-editing compiled CSS unless no source file exists.
- Keep block markup, template structure, and pattern composition compatible with the editor.
- Do not flatten modular `theme.json` data or style-variation structures unless the code proves they are unused.

## Theme Token Rules

- Keep ATI semantic tokens and required compatibility aliases both available when `DESIGN.md` supports both layers.
- Prefer WordPress preset variables over raw hex values when an existing preset is the correct source.
- Do not remove compatibility slugs just because they appear duplicative.
- Flag token drift clearly when implementation uses a token not represented in `DESIGN.md`.
- Avoid introducing new brand tokens without ATI evidence.

## Tour Operator Compatibility

This theme is expected to work closely with `lightspeedwp/tour-operator` block output.

Agents should:

- preserve required palette and spacing slugs used by Tour Operator templates and patterns
- review cards, meta blocks, review sections, and archive surfaces against ATI dark-card guidance in `DESIGN.md`
- preserve or improve contrast and semantic structure
- avoid generic restyling that erases ATI's stronger hospitality and travel visual language

Pay special attention to these compatibility slugs when `DESIGN.md` includes them:

- `primary`
- `contrast`
- `base`
- `primary-700`
- `primary-200`
- `border-light`
- `border-dark`
- spacing `10` through `80`

Important usage patterns:

- breadcrumbs often depend on `primary` with `primary-700` hover text
- sticky menus often depend on `primary`, `contrast`, and `base`
- review sections often depend on `primary-200`
- cards, modals, and fast-fact panels often depend on numeric spacing presets

## Priority Files And Areas

Common files and areas to inspect first:

- `theme.json`
- `styles/**/*.json`
- `style.css`
- `readme.txt`
- `functions.php`
- `templates/**/*.html`
- `parts/**/*.html`
- `patterns/**/*`
- `src/scss/**/*`
- `assets/css/**/*`

When Tour Operator template overrides or related pattern files exist, check them carefully before changing shared tokens.

## Accessibility And Quality

- Preserve or improve text contrast, especially on sand, rust, and charcoal surfaces.
- Check hover, focus, and active states when changing button or navigation colors.
- Avoid shipping changes that only work on the front end but break editor presentation.
- Prefer additive fixes that keep the theme maintainable for future ATI work.

## Escalation Rules

Stop and ask for confirmation when:

- `DESIGN.md` is missing
- the design contract appears outdated relative to the repository
- a requested change conflicts with ATI design evidence
- the change would affect security, billing, auth, destructive actions, or data integrity
- the change would require a broad refactor without clear design justification
- a proposed token, spacing value, or shadow choice is not supported by ATI evidence

Suggested escalation wording:

`I found a mismatch between the ATI design contract, the current repository state, and the requested change. Please confirm which source should win before I continue.`

## Output Expectations

For design-driven work, prefer responses that include:

1. the relevant ATI design summary
2. implementation drift found
3. the recommended repository update
4. risks, assumptions, or unresolved evidence
5. any validation still needed in the browser or editor

Do not present copied GoAfrica values as ATI truth.
