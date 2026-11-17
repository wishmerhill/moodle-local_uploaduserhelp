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

namespace local_uploaduserhelp;

use core\hook\output\before_footer_html_generation;

/**
 * Adds a help icon (and optionally a default value) to the username template field of "Upload users".
 *
 * @package    local_uploaduserhelp
 * @copyright  2026 Albes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {

    /** Page type of admin/tool/uploaduser/index.php. */
    const PAGETYPE = 'admin-tool-uploaduser-index';

    /**
     * Load the JS on the "Upload users" page only.
     *
     * @param before_footer_html_generation $hook
     */
    public static function before_footer_html_generation(before_footer_html_generation $hook): void {
        global $PAGE, $OUTPUT;

        if (during_initial_install() || $PAGE->pagetype !== self::PAGETYPE) {
            return;
        }
        if (!has_capability('moodle/site:uploadusers', \context_system::instance())) {
            return;
        }

        $default = trim((string)get_config('local_uploaduserhelp', 'defaulttemplate'));
        $helpicon = $OUTPUT->help_icon('usernametemplate', 'local_uploaduserhelp');
        $PAGE->requires->js_call_amd('local_uploaduserhelp/template', 'init', [$helpicon, $default]);
    }
}
