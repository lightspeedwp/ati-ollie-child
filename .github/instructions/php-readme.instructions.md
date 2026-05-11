---
applyTo: "functions.php,readme.txt"
---

# PHP and Readme Drift Instructions

These files currently contain copied-project drift and should be treated as early cleanup targets in the ATI retheme.

For `functions.php`:

- replace legacy function-name prefixes with ATI-specific names
- replace legacy asset handles with ATI-specific handles
- update package docblocks so they describe ATI, not the source project
- preserve behavior for Tour Operator block rendering while renaming identifiers safely

For `readme.txt`:

- replace legacy slug values and descriptions with ATI-specific values
- align the description with the ATI Holidays block-theme retheme
- keep WordPress readme structure valid

If a rename could affect hook compatibility or downstream references, call that out in the PR notes.
