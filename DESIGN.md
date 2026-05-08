---
version: alpha
name: ATI Holidays Retheme Brief
description: ATI Holidays design contract for retheming the duplicated GoAfrica Ollie child theme to ATI-specific brand, typography, and Tour Operator styling.
colors:
  primary: "#DBBD8D"
  primary-accent: "#AA653C"
  main: "#231F20"
  base: "#FFFFFF"
  ink: "#262423"
  error: "#A94442"
  brand-sand: "#DBBD8D"
  brand-rust: "#AA653C"
  brand-charcoal: "#231F20"
typography:
  body-md:
    fontFamily: Forum
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
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
rounded:
  md: 15px
spacing:
  md: 15px
  lg: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.main}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.md}"
  button-primary-hover:
    backgroundColor: "{colors.primary-accent}"
    textColor: "{colors.base}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.md}"
  button-outline:
    backgroundColor: "{colors.base}"
    textColor: "{colors.primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.md}"
  card-dark:
    backgroundColor: "{colors.main}"
    textColor: "{colors.base}"
    typography: "{typography.body-md}"
    padding: "{spacing.lg}"
  input-default:
    backgroundColor: "{colors.base}"
    textColor: "{colors.ink}"
    typography: "{typography.body-md}"
    rounded: "{rounded.md}"
    padding: "{spacing.md}"
---
# ATI Holidays Design Contract

## Overview
- Primary mode: `create-from-partial-project`
- Secondary outcome: provide a Copilot-ready retheme brief for `/lightspeedwp/ati-ollie-child`
- This package treats the current `ati-ollie-child` as an ATI placeholder that still inherits GoAfrica palette, theme labels, pattern references, and font setup.
- ATI evidence is strongest in three places:
  legacy LSX child styling, the ATI Figma design-system file, and the ATI branding questionnaire.
- The live site URL was supplied as a useful reference, but direct fetch verification was blocked in this environment. Use it as a human cross-check, not as the only authoritative source.

## Colors
- Verified ATI brand colors:
  `primary` and `brand-sand` = `#DBBD8D`
  `primary-accent` and `brand-rust` = `#AA653C`
  `main` and `brand-charcoal` = `#231F20`
  `base` = `#FFFFFF`
  `ink` = `#262423`
- Verified usage patterns:
  buttons default to sand with dark text
  buttons hover to rust with white text
  dark Tour Operator cards use charcoal surfaces with white text
  top utility navigation and footer borders/icons use sand
- Token drift to remove from the duplicated child:
  GoAfrica greens such as `#1F4B3B` and `#1A5D4A`
  GoAfrica orange-red support colors such as `#DD4611` and `#BE3100`
- Copilot mapping target for `theme.json`:
  replace inherited GoAfrica `primary` with ATI sand
  replace inherited GoAfrica `primary-accent` with ATI rust
  replace inherited GoAfrica `main` with ATI charcoal
  keep `base` as white
  set supporting border and utility tokens from ATI sand and ATI charcoal instead of the GoAfrica neutral set

## Typography
- Verified brand direction:
  ATI uses `Forum` across headings, body copy, navigation, utility text, and buttons in the legacy child theme.
- Verified desktop scale from legacy ATI styling:
  `heading-xl` = `54/66`
  `heading-lg` = `36/44`
  `heading-md` = `24/34`
  `body-md` = `16/24`
  `nav-md` = `17/24`
  `button-md` = `18/24`, uppercase, `0.6px` letter spacing from the Figma button component
- Brand tone from the questionnaire:
  mature, affluent, mostly UK and US travelers
  classy, exclusive, genteel, with a subtle adventurous African note
- Typography drift to remove from the duplicated child:
  `Mona Sans`
  `Poppins`
  GoAfrica font-family slugs and related remote font URLs

## Layout & Spacing
- Verified current implementation widths in the duplicated ATI child:
  `contentSize: 800px`
  `wideSize: 1320px`
- Confidence note:
  these widths come from the duplicated GoAfrica child, not ATI-specific evidence
- Provisional spacing tokens supported by current evidence:
  `md: 15px` from repeated button and form control padding/radius usage
  `lg: 24px` from repeated line-height and control rhythm
- Implementation guidance:
  keep layout widths provisional until the homepage and archive templates are reviewed against the live ATI content density
  do not blindly inherit GoAfrica spacing scale names without checking ATI page compositions

## Elevation
- No ATI-specific shadow system is confirmed.
- Safe default for the first retheme pass:
  remove visual dependence on GoAfrica shadow presets
  prefer color contrast, borders, and whitespace over decorative shadow styling
- Any retained Ollie or GoAfrica shadow preset should be marked provisional until a dedicated ATI decision exists.

## Shapes
- Verified ATI rounded value:
  `15px` radius is repeated across Gravity Forms inputs, footer CTA form controls, modal actions, and button treatments in the legacy ATI child
- Copilot should replace inherited Ollie and GoAfrica small-radius defaults where ATI buttons and inputs are intended to match the old site language.

## Components
### Header and Navigation
- ATI header should keep ATI as the sole primary brand mark.
- The current `ati-ollie-child` still points its header template-part pattern at the GoAfrica theme namespace.
- The utility row and footer iconography should use ATI sand on dark or white surfaces, matching the legacy theme.
- The user plans to build mega menu and mobile menu behavior with `ollie-menu-designer`, so Copilot should not hard-code final menu layout assumptions into the theme package.

### Logo
- Verified logo assets exist in Drive as:
  `ati-logo-black.svg`
  `ati-logo-white.svg`
- Branding questionnaire guidance:
  preserve recognizability of the ATI mark
  keep the zebra treatment lineage
  treat the tagline `Journeys Of A Lifetime` as optional, because the client sometimes drops it

### Buttons
- Verified primary CTA:
  sand background, dark text, uppercase Forum, 15px rounding
- Verified hover CTA:
  rust background, white text
- Verified secondary CTA pattern in footer CTA:
  transparent or white surface with sand border and sand text, then rust on hover

### Forms
- Verified input treatment:
  white surface
  dark text
  15px radius
  1px sand border
- Verified Gravity Forms action pattern:
  form submit buttons follow the ATI sand-to-rust hover behavior

### Tour Operator Cards and Meta Blocks
- Verified legacy accommodation and tour card treatment:
  charcoal panel background
  white text
  sand accent borders and icon markers
- Copilot should preserve ATI’s higher-contrast dark card treatment when restyling the LSX Tour Operator blocks in the block theme.

## Do's and Don'ts
- Do replace every visible GoAfrica theme label, namespace, and token value in the ATI child theme.
- Do keep ATI’s elegant serif-led voice instead of inheriting GoAfrica’s cleaner sans-serif system.
- Do treat the ATI questionnaire, ATI Figma, and legacy ATI child as the primary ATI sources.
- Do preserve the dark-card plus sand-accent pattern for Tour Operator content unless the Figma file explicitly replaces it.
- Don't keep GoAfrica greens as temporary brand tokens in `theme.json`; that drift will leak into patterns and editor controls.
- Don't leave `go-africa-ollie-child` names in `style.css`, `Text Domain`, asset handles, or pattern references.
- Don't convert ATI into a generic Ollie palette; the warmer sand, rust, charcoal, and serif pairing are the clearest surviving ATI signals.
- Don't assume the current duplicated content widths, shadows, or spacing scale are ATI-approved just because they exist in the copied child theme.
