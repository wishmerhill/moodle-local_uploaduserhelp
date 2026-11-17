# Upload users: username template help (`local_uploaduserhelp`)

A small Moodle plugin that improves the **Username template** field of
*Site administration > Users > Accounts > Upload users*:

- adds a help icon **(?)** next to the field, listing the placeholders that
  can be used (`%f`, `%l`, `%u`, the `-` `+` `~` modifiers, the character
  count) with examples;
- pre-fills the field with a default template (for example `%-f.%-l`, which
  gives `mario.rossi`), so it does not have to be typed at every upload. The
  value can still be changed each time.

Moodle core gives this field no help and no default value, although the
template is only useful if you know its syntax.

> **Vibe coded.** This plugin was written by an AI assistant (Claude, by
> Anthropic) following my instructions and tests; I did not write the code
> myself. It works on my Moodle 4.5 site, but review it before using it in
> production.

## How it works

The plugin does not change the core form. It uses the output hook
`core\hook\output\before_footer_html_generation` and, only on the Upload users
page and only for users with `moodle/site:uploadusers`, loads a small AMD
module that adds the help icon and fills the field when it is empty.

The template itself is applied by Moodle core, only to rows of the CSV file
that have no `username`. Putting a template in the `username` column of the
file does not work: it is taken literally.

## Requirements

- Moodle 4.5.

## Installation

1. Download the ZIP of a release, or clone this repository into
   `local/uploaduserhelp` of your Moodle code.
2. *Site administration > Plugins > Install plugins*, or visit
   *Site administration > Notifications*.

No other step is needed.

## Settings

*Site administration > Plugins > Local plugins > Upload users: username template help*

- **Default username template** (`local_uploaduserhelp/defaulttemplate`):
  value pre-filled in the field. Default `%-f.%-l`. Leave empty to keep the
  field empty and only show the help icon.

## Template syntax (Moodle core)

| Placeholder | Meaning |
|---|---|
| `%f` | first name |
| `%l` | last name |
| `%u` | username |
| `-` after `%` | lower case, e.g. `%-l` |
| `+` after `%` | upper case |
| `~` after `%` | capitalised |
| number after `%` (and after the modifier) | first N characters, e.g. `%-1f` |

Examples for Mario Rossi: `%-f.%-l` → `mario.rossi`, `%-1f%-l` → `mrossi`,
`%-l.%-f` → `rossi.mario`.

With *Standardise usernames* enabled, accents, spaces and apostrophes are
removed (`Nicolò D'Angelo` → `nicol.dangelo`). With *Add all, append number to
usernames if needed*, duplicates become `mario.rossi2`, `mario.rossi3`…

## Privacy

The plugin stores no personal data (null privacy provider).

## Changes

### 0.1 (2026-11-17)

- First release: help icon and default value for the username template.

## Licence

GNU GPL v3 or later. See `LICENSE`.
