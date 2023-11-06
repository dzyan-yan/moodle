<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Ne mogu stvoriti bazu podataka.</p>
<p>Navedena baza podataka ne postoji i korisnik nema prava stvaranja baze podataka.</p>
<p>Administrator treba provjeriti postavke baze podataka.</p>';
$string['cannotcreatelangdir'] = 'Nije moguće stvoriti jezičnu (<i>lang</i>) mapu';
$string['cannotcreatetempdir'] = 'Nije moguće stvoriti privremenu (<i>temp</i>) mapu';
$string['cannotdownloadcomponents'] = 'Nije moguće preuzeti komponente';
$string['cannotdownloadzipfile'] = 'Nije moguće preuzeti ZIP datoteku';
$string['cannotfindcomponent'] = 'Nije moguće pronaći komponentu';
$string['cannotsavemd5file'] = 'Nije moguće pohraniti MD5 datoteku';
$string['cannotsavezipfile'] = 'Nije moguće pohraniti ZIP datoteku';
$string['cannotunzipfile'] = 'Nije moguće otpakirati datoteku';
$string['componentisuptodate'] = 'Komponenta je dostupna u svojoj najnovijoj inačici.';
$string['dmlexceptiononinstall'] = '<p>Dogodila se pogreška baze podataka [{$a->errorcode}].<br />{$a->debuginfo}';
$string['downloadedfilecheckfailed'] = 'Došlo je do pogreške pri provjeri preuzete datoteke';
$string['invalidmd5'] = 'Neispravna md5 datoteka - pokušajte ponovno';
$string['missingrequiredfield'] = 'Nedostaje neko obvezatno polje';
$string['remotedownloaderror'] = 'Nije uspjelo preuzimanje komponente na poslužitelj, provjerite postavke proxyja. Preporuča se uporaba PHP cURL dodatka.<br /><br />Ručno preuzmite datoteku s <a href="{$a->url}">{$a->url}</a> iskopirajte ju u "{$a->dest}" na poslužitelju i raspakirajte.';
$string['wrongdestpath'] = 'Pogrešna odredišna putanja.';
$string['wrongsourcebase'] = 'Pogrešna baza izvornog URL-a';
$string['wrongzipfilename'] = 'Pogrešno ime ZIP datoteke';
