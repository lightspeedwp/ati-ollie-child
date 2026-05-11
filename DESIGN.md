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
  support-gold: "#BAAC2F"
  support-red: "#B92A02"
  support-sky: "#BEDCF8"
  error-text: "#A94442"
  error-background: "#F2DEDE"
  error-border: "#EBCCD1"
typography:
  body-md:
    fontFamily: Forum
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-md:
    fontFamily: Forum
    fontSize: 17px
    fontWeight: 600
    lineHeight: 24px
  button-md:
    fontFamily: Forum
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.6px
  heading-xl:
    fontFamily: Forum
    fontSize: 54px
    fontWeight: 600
    lineHeight: 66px
  heading-lg:
    fontFamily: Forum
    fontSize: 36px
    fontWeight: 600
    lineHeight: 44px
  heading-md:
    fontFamily: Forum
    fontSize: 24px
    fontWeight: 600
    lineHeight: 34px
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
    backgroundColor: "{colors.contrast}"
    textColor: "{colors.base}"
    typography: "{typography.nav-md}"
    padding: "{spacing.20}"
  review-section:
    backgroundColor: "{colors.primary-200}"
    textColor: "{colors.main}"
    typography: "{typography.body-md}"
    padding: "{spacing.50}"
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
- The design system must preserve ATI’s established brand language instead of inheriting copied GoAfrica or upstream Ollie defaults.
- Highest-confidence ATI evidence comes from the ATI block-theme project document, ATI Figma design system, and legacy ATI LSX child implementation.
- Use `/workspace/output/ati-holidays-theme.json` as the exact implementation companion for this document.

## Colors
- Verified ATI brand colors:
  `primary` = `#DBBD8D`
  `primary-accent` = `#AA653C`
  `main` and `contrast` = `#231F20`
  `primary-700` and `ink` = `#262423`
  `base` = `#FFFFFF`
- Verified supporting system colors:
  `primary-200` and `tertiary` = `#F8F7F3`
  `border-light` = `#E8E1D8`
  `border-dark` = `#8E8479`
- Compatibility note:
  Tour Operator templates require `primary`, `contrast`, `base`, `primary-700`, and `primary-200` to exist as resolvable palette slugs.
- Usage intent:
  use sand for default calls to action, utility accents, and borders
  use rust for hover and stronger action emphasis
  use charcoal for dark surfaces and primary contrast roles
  use `#262423` for deeper text emphasis, breadcrumb hover text, and dark-on-light compatibility cases

## Typography
- ATI uses `Forum` across headings, body copy, navigation, and buttons.
- Verified desktop typography:
  `heading-xl` = `54/66`
  `heading-lg` = `36/44`
  `heading-md` = `24/34`
  `body-md` = `16/24`
  `nav-md` = `17/24`
  `button-md` = `18/24`, uppercase, `0.6px` letter spacing
- Migration requirement:
  remove inherited `Mona Sans` and `Poppins` usage from ATI-facing theme output.

## Layout & Spacing
- Current child-theme layout baseline:
  `contentSize: 800px`
  `wideSize: 1320px`
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
- Breadcrumb bars should use ATI sand backgrounds with `primary-700` hover or emphasis text where needed.
- Sticky menus should preserve plugin-safe `primary`, `contrast`, and `base` relationships.

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
  sand border
- Validation:
  use `error-text`, `error-background`, and `error-border` as implementation support tokens rather than core brand accents

### Tour Operator Cards and Meta Blocks
- Preserve ATI’s dark-card treatment:
  charcoal panel backgrounds
  white text
  sand accents and borders
- Review sections should use `primary-200` as the light warm background role.
- Meta panels and informational wrappers should use light ATI surfaces and border tokens rather than inherited GoAfrica or Ollie colors.

## Do's and Don'ts
- Do replace all remaining GoAfrica names, palette values, and references.
- Do preserve Tour Operator compatibility slugs and numeric spacing presets.
- Do keep ATI’s serif-led, elegant, warm visual tone.
- Do use `#262423` intentionally for emphasis and hover-dark cases rather than leaving it undefined.
- Don't inherit Ollie lavender, blue, or neon-style defaults.
- Don't remove `primary-700`, `primary-200`, or `contrast` because they look duplicative.
- Don't treat copied theme values as ATI truth when ATI evidence disagrees.
- Don't flatten ATI into a generic Ollie palette or sans-serif system.
