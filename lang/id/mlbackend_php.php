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
 * Strings for component 'mlbackend_php', language 'id', version '3.11'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Hanya sebagian dari set data yang telah dievaluasi karena ukurannya. Setel $CFG->mlbackend_php_no_memory_limit jika Anda yakin bahwa sistem Anda dapat mengatasi set data {$a}.';
$string['errorcantloadmodel'] = 'File model {$a} tidak ada. Model harus dilatih sebelum digunakan untuk memprediksi.';
$string['errorlowscore'] = 'Keakuratan prediksi model yang dievaluasi tidak terlalu tinggi, sehingga beberapa prediksi mungkin tidak akurat. Skor model = {$a->score}, skor minimum = {$a->minscore}';
$string['errornotenoughdata'] = 'Tidak ada cukup data untuk mengevaluasi model ini menggunakan interval analisis yang disediakan.';
$string['errornotenoughdatadev'] = 'Hasil evaluasi terlalu bervariasi. Disarankan agar lebih banyak data dikumpulkan untuk memastikan model tersebut valid. Standar deviasi hasil evaluasi = {$a->deviation}, standar deviasi maksimum yang direkomendasikan = {{$a->accepteddeviation}';
$string['errorphp7required'] = 'Bagian belakang pembelajaran mesin PHP membutuhkan PHP 7';
$string['pluginname'] = 'Bagian belakang pembelajaran mesin PHP';
$string['privacy:metadata'] = 'Pengaya backend pembelajaran mesin PHP tidak menyimpan data pribadi apa pun.';
