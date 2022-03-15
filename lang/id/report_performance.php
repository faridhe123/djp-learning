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
 * Strings for component 'report_performance', language 'id', version '3.11'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Pencadangan otomatis';
$string['check_backup_comment_disable'] = 'Kinerja mungkin terpengaruh selama proses pencadangan. Jika diaktifkan, pencadangan harus dijadwalkan untuk waktu tidak sibuk.';
$string['check_backup_comment_enable'] = 'Kinerja mungkin terpengaruh selama proses pencadangan. Pencadangan harus dijadwalkan untuk waktu tidak sibuk.';
$string['check_backup_details'] = 'Mengaktifkan pencadangan otomatis akan secara otomatis membuat arsip semua kursus di server pada waktu yang Anda tentukan.<p>Selama proses ini, akan menghabiskan lebih banyak sumber daya server dan dapat memengaruhi kinerja.</p>';
$string['check_cachejs_comment_disable'] = 'Jika diaktifkan, kinerja pemuatan halaman ditingkatkan.';
$string['check_cachejs_comment_enable'] = 'Jika dinonaktifkan, halaman mungkin dimuat dengan lambat.';
$string['check_cachejs_details'] = 'Caching dan kompresi Javascript sangat meningkatkan kinerja pemuatan halaman. Sangat disarankan untuk lokasi produksi.';
$string['check_debugmsg_comment_developer'] = 'Jika disetel ke nilai selain DEVELOPER, kinerja mungkin sedikit meningkat.';
$string['check_debugmsg_comment_nodeveloper'] = 'Jika diatur ke DEVELOPER, kinerja mungkin sedikit terpengaruh.';
$string['check_debugmsg_details'] = 'Jarang ada keuntungan masuk ke tingkat Pengembang, kecuali diminta oleh pengembang.<p>Setelah Anda mendapatkan pesan kesalahan, dan menyalin dan menempelkannya di suatu tempat, SANGAT DIREKOMENDASIKAN untuk mengembalikan awakutu ke NONE. Pesan awakutu dapat memberikan petunjuk kepada peretas tentang penyiapan situs Anda dan dapat memengaruhi kinerja.</p>';
$string['check_enablestats_comment_disable'] = 'Performa dapat dipengaruhi oleh pemrosesan statistik. Jika diaktifkan, setelan statistik harus disetel dengan hati-hati.';
$string['check_enablestats_comment_enable'] = 'Performa dapat dipengaruhi oleh pemrosesan statistik. Pengaturan statistik harus diatur dengan hati-hati.';
$string['check_enablestats_details'] = 'Mengaktifkan ini akan memproses log di cronjob dan mengumpulkan beberapa statistik. Bergantung pada jumlah lalu lintas di situs Anda, ini bisa memakan waktu cukup lama.<p>Selama proses ini, akan menghabiskan lebih banyak sumber daya server dan dapat memengaruhi kinerja.</p>';
$string['check_themedesignermode_comment_disable'] = 'Jika diaktifkan, gambar dan lembar gaya tidak akan di-cache, yang mengakibatkan penurunan kinerja yang signifikan.';
$string['check_themedesignermode_comment_enable'] = 'Jika dinonaktifkan, gambar dan lembar gaya di-cache, menghasilkan peningkatan kinerja yang signifikan.';
$string['check_themedesignermode_details'] = 'Ini sering menjadi penyebab situs Moodle lambat. <p>Rata-rata dibutuhkan setidaknya dua kali jumlah CPU untuk menjalankan situs Moodle dengan mode perancang tema yang diaktifkan.</p>';
$string['comments'] = 'Komentar';
$string['disabled'] = 'Dinonaktifkan';
$string['edit'] = 'Edit';
$string['enabled'] = 'Diaktifkan';
$string['issue'] = 'Isu';
$string['morehelp'] = 'lebih banyak bantuan';
$string['performance:view'] = 'Laporan ini mencantumkan masalah yang dapat memengaruhi kinerja situs {$a}';
$string['performancereportdesc'] = 'Laporan ini mencantumkan masalah yang dapat memengaruhi kinerja situs {$a}';
$string['pluginname'] = 'Ikhtisar kinerja';
$string['privacy:metadata'] = 'Pengaya Ikhtisar kinerja tidak menyimpan data pribadi apa pun.';
$string['value'] = 'Nilai';
