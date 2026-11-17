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
 * Italian strings.
 *
 * @package    local_uploaduserhelp
 * @copyright  2026 Alberto Azzalini <alberto.azzalini@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaulttemplate'] = 'Modello username predefinito';
$string['defaulttemplate_desc'] = 'Valore precompilato nel campo "Modello per gli username" di Carica utenti (si può sempre cambiare). Lasciare vuoto per non precompilare. Esempio: %-f.%-l dà mario.rossi.';
$string['pluginname'] = 'Carica utenti: guida al modello username';
$string['privacy:metadata'] = 'Il plugin non memorizza dati personali.';
$string['usernametemplate'] = 'Modello per gli username';
$string['usernametemplate_help'] = 'Usato solo per le righe del file senza username. Segnaposto:

* **%f** nome, **%l** cognome, **%u** username
* modificatori dopo il %: **-** minuscolo, **+** maiuscolo, **~** iniziali maiuscole
* un numero dopo il % (e dopo il modificatore) tiene solo i primi N caratteri
* gli altri caratteri vengono copiati così come sono

Esempi per Mario Rossi:

* **%-f.%-l** → mario.rossi
* **%-1f%-l** → mrossi
* **%-l.%-f** → rossi.mario

Con "Standardizza gli username" accenti, spazi e apostrofi vengono tolti (Nicolò D\'Angelo → nicol.dangelo). Con "Crea tutti gli utenti, aggiungendo un numero agli username ove necessario" gli omonimi diventano mario.rossi2, mario.rossi3…';
