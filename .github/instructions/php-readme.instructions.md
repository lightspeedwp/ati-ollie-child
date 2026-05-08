---
applyTo: "functions.php,readme.txt"
---

# PHP and Readme Drift Instructions

These files currently contain copied-project drift and should be treated as early cleanup targets in the ATI retheme.

For `functions.php`:

- replace `goafrica_*` function names with ATI-specific names
- replace GoAfrica asset handles such as `goafrica-ollie-child` and `goafrica-faq-accordion`
- update package docblocks so they describe ATI, not GoAfrica
- preserve behavior for Tour Operator block rendering while renaming identifiers safely

For `readme.txt`:

- replace the `go-africa-ollie-child` slug and description with ATI-specific values
- align the description with the ATI Holidays block-theme retheme
- keep WordPress readme structure valid

If a rename could affect hook compatibility or downstream references, call that out in the PR notes.
