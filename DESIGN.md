---
version: alpha
name: ATI Holidays Block Theme
description: ATI Holidays design contract for the Ollie-based block theme and Tour Operator integration, using ATI-approved brand colors, Forum typography, and plugin-safe compatibility tokens.
colors:
  primary: "#DBBD8D"
  primary-accent: "#AA653C"
  primary-alt: "#AA653C"
  primary-alt-accent: "#7C2D12"
  primary-200: "#F8F7F3"
  primary-700: "#262423"
  main: "#231F20"
  contrast: "#231F20"
  base: "#FFFFFF"
  ink: "#262423"
  secondary: "#5C5652"
  tertiary: "#F8F7F3"
  border-light: "#E8E1D8"
  border-dark: "#8E8479"
  error: "#A94442"
  error-text: "#A94442"
  error-background: "#F2DEDE"
  error-border: "#EBCCD1"
  brand-sand: "#DBBD8D"
  brand-rust: "#AA653C"
  brand-charcoal: "#231F20"
typography:
  body-sm:
    fontFamily: Forum
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  body-md:
    fontFamily: Forum
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-md:
    fontFamily: Forum
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button-md:
    fontFamily: Forum
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.6px
  heading-xl:
    fontFamily: Forum
    fontSize: 56px
    fontWeight: 600
    lineHeight: 64px
  heading-lg:
    fontFamily: Forum
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  heading-md:
    fontFamily: Forum
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
rounded:
  xs: 4px
  sm: 8px
  md: 15px
  lg: 24px
spacing:
  10: 10px
  20: 20px
  30: 30px
  40: 40px
  50: 50px
  60: 60px
  70: 70px
  80: 80px
  md: 15px
  lg: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.main}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.20}"
  button-primary-hover:
    backgroundColor: "{colors.primary-accent}"
    textColor: "{colors.base}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.20}"
  breadcrumb-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.base}"
    typography: "{typography.nav-md}"
    padding: "{spacing.20}"
  sticky-menu:
    backgroundColor: "{colors.main}"
    textColor: "{colors.base}"
    typography: "{typography.nav-md}"
    padding: "{spacing.20}"
  card-dark:
    backgroundColor: "{colors.main}"
    textColor: "{colors.base}"
    typography: "{typography.body-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.30}"
  input-default:
    backgroundColor: "{colors.base}"
    textColor: "{colors.ink}"
    typography: "{typography.body-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.20}"
---
# ATI Holidays Design Contract

## Overview

- Primary mode: `update-existing`
- This package is the ATI Holidays source-of-truth design brief for the Ollie-based block theme rebuild and Tour Operator integration.
- The design system should preserve ATI’s established brand language consistently across theme, patterns, and plugin-facing surfaces.
- Highest-confidence ATI evidence comes from the ATI block-theme project document, ATI Figma design system, and legacy ATI LSX child implementation.
- Use `/workspace/output/ati-holidays-theme.json` as the implementation companion for this document.
- `DESIGN.md` defines ATI source-of-truth design tokens.
- `theme.json` should stay aligned to the fuller approved ATI working palette defined here.

## Colors

- Verified ATI brand colors:
  `primary` = `#DBBD8D`
  `primary-accent` = `#AA653C`
  `main` and `contrast` = `#231F20`
  `primary-700` and `ink` = `#262423`
  `base` = `#FFFFFF`
  `ink` = `#262423`
  `error` = `#A94442`
- Approved supporting and alias tokens:
  `primary-alt` = `#AA653C`
  `primary-alt-accent` = `#7C2D12`
  `primary-200` and `tertiary` = `#F8F7F3`
  `primary-700` = `#262423`
  `contrast` = `#231F20`
  `secondary` = `#5C5652`
  `border-light` = `#E8E1D8`
  `border-dark` = `#8E8479`
  `error-text` = `#A94442`
  `error-background` = `#F2DEDE`
  `error-border` = `#EBCCD1`
- Design contract rule:
  these colors define the approved ATI working palette for this package
  aliases, support colors, and state colors are intentionally part of the design system when listed here
- Usage intent:
  use sand for default calls to action, utility accents, and borders
  use rust for hover and stronger action emphasis
  use charcoal for dark surfaces and primary contrast roles
  use `#262423` for deeper text emphasis, breadcrumb hover text, and dark-on-light compatibility cases
  use `#F8F7F3` for soft light-surface roles where a warmer neutral is preferred over pure white
  use `#E8E1D8` and `#8E8479` for border hierarchy and light structural separation

## Typography

- ATI uses `Forum` across headings, body copy, navigation, and buttons.
- Approved typography system:
  `body-sm` = `12/16`
  `body-md` = `16/24`
  `nav-md` = `16/24`
  `button-md` = `16/24`, uppercase, `0.6px` letter spacing
  `heading-md` = `24/32`
  `heading-lg` = `40/48`
  `heading-xl` = `56/64`
- System rule:
  the typography scale should follow an 8pt rhythm wherever practical
  `12px` is the approved small exception for rare compact text
- Typography requirement:
  keep `Forum` active across ATI-facing theme output where the design contract applies.

## Layout & Spacing

- Current child-theme layout baseline:
  `contentSize: 800px`
  `wideSize: 1320px`
- Theme implementation alignment:
  `theme.json` may expose both numeric spacing presets and named spacing presets at the same time
  the numeric preset ladder exists for shared block and plugin compatibility
- Tour Operator compatibility spacing ladder:
  `10` = `10px`
  `20` = `20px`
  `30` = `30px`
  `40` = `40px`
  `50` = `50px`
  `60` = `60px`
  `70` = `70px`
  `80` = `80px`
- ATI rhythm note:
  `15px` remains the core ATI control spacing and radius cue, but it does not replace the numeric Tour Operator preset ladder.
- Implementation rule:
  keep the numeric preset slugs in `theme.json` even if named spacing tokens such as `small` and `medium` are also present.

## Elevation

- No ATI-specific shadow system is verified strongly enough to treat as brand-defining.
- Prefer borders, surface contrast, and spacing over decorative shadow use.
- Any retained inherited shadow preset should be treated as secondary implementation support rather than ATI visual identity.

## Shapes

- ATI’s primary control radius is `15px`.
- Use `15px` for branded buttons, form controls, and modal actions.
- Tour Operator patterns also use smaller inherited radii such as `4px`, `8px`, and `0.5rem`.
- Normalize where practical, but do not break block or plugin layouts to force a single radius everywhere.

## Components

### Header and Navigation

- Keep ATI as the only primary brand mark.
- Top utility and footer iconography should use ATI sand on dark or white surfaces.
- Breadcrumb bars should use ATI sand backgrounds with `ink` for darker hover or emphasis text where needed.
- Sticky menus should preserve dark ATI surfaces with white text.
- If implementation uses aliases such as `contrast` or `primary-700`, those aliases should still resolve back to ATI charcoal or deep-dark values.

### Buttons

- Primary buttons:
  sand background, dark text, uppercase Forum, `15px` radius
- Hover state:
  rust background, white text
- Secondary or outline actions:
  white or transparent surface with sand border and sand text, then rust on hover

### Forms

- Inputs:
  white surface
  dark text
  `15px` radius
  sand or light-border treatment when a border token is needed
- Validation:
  use `error` as the only validated error-state color in this package unless newer ATI evidence expands the system
  `error-text`, `error-background`, and `error-border` may be implemented when needed if they remain visually anchored to the approved ATI palette and accessibility requirements

### Tour Operator Cards and Meta Blocks

- Preserve ATI’s dark-card treatment:
  charcoal panel backgrounds
  white text
  sand accents and borders
- Meta panels and informational wrappers can use `primary-200`, `tertiary`, `border-light`, and `border-dark` as approved ATI support tokens for softer structural styling.

## Do's and Don'ts

- Do preserve Tour Operator compatibility slugs and numeric spacing presets, but map those slugs back to ATI-approved colors only.
- Do keep ATI’s serif-led, elegant, warm visual tone.
- Do use `#262423` intentionally for emphasis and hover-dark cases rather than leaving it undefined.
- Do keep `DESIGN.md` and `theme.json` aligned on the approved ATI working palette.
- Don't inherit Ollie lavender, blue, or neon-style defaults.
- Don't introduce extra palette colors into `DESIGN.md` unless ATI evidence or an approved system decision supports them directly.
- Don't treat outdated theme values as ATI truth when ATI evidence disagrees.
- Don't flatten ATI into a generic Ollie palette or sans-serif system.
