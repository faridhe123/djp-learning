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
 * Strings for component 'qformat_xml', language 'id', version '3.11'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Berkas XML tidak valid - string diharapkan (gunakan CDATA?)';
$string['pluginname'] = 'Format XML Moodle';
$string['pluginname_help'] = 'Ini adalah format khusus Moodle untuk mengimpor dan mengekspor pertanyaan.';
$string['privacy:metadata'] = 'Pengaya format soal XML tidak menyimpan data pribadi apa pun.';
$string['truefalseimporterror'] = '<b>Peringatan</b>: Pertanyaan benar/salah \'{$a->questiontext}\' tidak dapat diimpor dengan benar. Tidak jelas apakah jawaban yang benar itu benar atau salah. Pertanyaan telah diimpor dengan asumsi bahwa jawabannya adalah \'{$a->answer}\'. Jika ini tidak benar, Anda perlu mengedit pertanyaan.';
$string['unsupportedexport'] = 'Jenis pertanyaan {$a} tidak didukung oleh ekspor XML';
$string['xmlimportnoname'] = 'Nama pertanyaan tidak ada dalam file XML';
$string['xmlimportnoquestion'] = 'Teks pertanyaan tidak ada dalam berkas XML';
$string['xmltypeunsupported'] = 'Jenis pertanyaan {$a} tidak didukung oleh impor XML';
