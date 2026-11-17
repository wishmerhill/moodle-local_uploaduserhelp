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
 * Help icon and default value for the username template field of "Upload users".
 *
 * @module     local_uploaduserhelp/template
 * @copyright  2026 Alberto Azzalini <alberto.azzalini@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Initialise.
 *
 * @param {string} helpIconHtml Help icon HTML rendered by the server ($OUTPUT->help_icon()).
 * @param {string} defaultTemplate Value to put in the field when it is empty ('' = none).
 */
export const init = (helpIconHtml, defaultTemplate) => {
    const input = document.getElementById('id_username');
    if (!input) {
        return; // First step of the page (file upload): the field is not there yet.
    }

    if (defaultTemplate && input.value === '') {
        input.value = defaultTemplate;
    }

    const item = document.getElementById('fitem_id_username');
    if (!item || item.querySelector('.local-uploaduserhelp-icon')) {
        return;
    }
    let addon = item.querySelector('.form-label-addon');
    if (!addon) {
        const label = item.querySelector('label');
        if (!label) {
            return;
        }
        addon = document.createElement('div');
        addon.className = 'form-label-addon d-flex align-items-center align-self-start';
        label.after(addon);
    }
    const wrapper = document.createElement('span');
    wrapper.className = 'local-uploaduserhelp-icon';
    wrapper.innerHTML = helpIconHtml;
    addon.appendChild(wrapper);
};
