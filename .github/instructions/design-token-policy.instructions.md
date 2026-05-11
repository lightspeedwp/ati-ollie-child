---
applyTo: "DESIGN.md,theme.json,styles/**/*.json,src/scss/**/*,assets/css/**/*,patterns/**/*,parts/**/*.html,templates/**/*.html"
---

# ATI Design Token Policy

Use `DESIGN.md` as the single source of truth for ATI design tokens and variables unless the user explicitly overrides it.

Current ATI defaults from `DESIGN.md`:

- sand primary: `#DBBD8D`
- rust accent: `#AA653C`
- charcoal main: `#231F20`
- base white: `#FFFFFF`
- supporting ink: `#262423`
- primary type family: `Forum`
- working radius token: `15px`

Policy:

- replace inherited legacy greens, orange-reds, and sans-serif font stacks
- prefer semantic token mapping over raw repeated literals
- preserve ATI dark-card treatment for Tour Operator surfaces
- keep `theme.json` and related style files aligned with the ATI token names and values in `DESIGN.md`
- treat widths, spacing expansion, and shadows as provisional unless stronger ATI evidence is added
- review legacy or copied token names such as `primary-alt` and `primary-alt-accent` before preserving them

If a requested value is not supported by `DESIGN.md`, label it as an assumption or ask for confirmation.
