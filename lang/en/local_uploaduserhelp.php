<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * English strings.
 *
 * @package    local_uploaduserhelp
 * @copyright  2026 Alberto Azzalini <alberto.azzalini@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaulttemplate'] = 'Default username template';
$string['defaulttemplate_desc'] = 'Value pre-filled in the "Username template" field of Upload users (it can still be changed each time). Leave empty to keep the field empty. Example: %-f.%-l gives mario.rossi.';
$string['pluginname'] = 'Upload users: username template help';
$string['privacy:metadata'] = 'The plugin does not store any personal data.';
$string['usernametemplate'] = 'Username template';
$string['usernametemplate_help'] = 'Used only for rows of the file with no username. Placeholders:

* **%f** first name, **%l** last name, **%u** username
* modifiers after %: **-** lowercase, **+** uppercase, **~** capitalised
* a number after % (and after the modifier) keeps only the first N characters
* other characters are copied as they are

Examples for Mario Rossi:

* **%-f.%-l** → mario.rossi
* **%-1f%-l** → mrossi
* **%-l.%-f** → rossi.mario

With "Standardise usernames" accents, spaces and apostrophes are removed (Nicolò D\'Angelo → nicol.dangelo). With "Add all, append number to usernames if needed", duplicates become mario.rossi2, mario.rossi3…';
