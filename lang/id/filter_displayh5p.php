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
 * Strings for component 'filter_displayh5p', language 'id', version '3.11'.
 *
 * @package     filter_displayh5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedsourceslist'] = 'Sumber yang diizinkan';
$string['allowedsourceslistdesc'] = 'Daftar URL tempat pengguna dapat menyematkan konten H5P. Jika tidak ada yang ditentukan, semua URL akan tetap sebagai tautan dan tidak ditampilkan sebagai konten H5P yang disematkan.

\'[id]\' adalah pengganti untuk ID konten H5P di sumber eksternal.
Sebagai contoh:

- H5P.com: https://[xxxxxx].h5p.com/content/[id]
- Wordpress: http://myserver/wp-admin/admin-ajax.php?action=h5p_embed&id=[id]';
$string['filtername'] = 'Tampilan H5P';
$string['privacy:metadata'] = 'Filter tampilan H5P tidak menyimpan data pribadi apa pun.';
