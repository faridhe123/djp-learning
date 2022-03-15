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
 * Strings for component 'workshopallocation_random', language 'id', version '3.11'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Tambahkan penilaian sendiri';
$string['allocationaddeddetail'] = 'Penilaian baru yang harus dilakukan: <strong>{$a->reviewername}</strong> adalah peninjau dari <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Tidak dapat membatalkan alokasi penilaian yang sudah dinilai: pengulas<strong>{$a->reviewername}</strong>, penulis naskah<strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Penilaian yang digunakan kembali: <strong>{$a->reviewername}</strong> disimpan sebagai pengulas <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Setelan alokasi';
$string['assessmentdeleteddetail'] = 'Penilaian tidak dialokasikan: <strong>{$a->reviewername}</strong> bukan lagi pengulas <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Peserta dapat menilai tanpa mengirimkan apapun';
$string['confignumofreviews'] = 'Jumlah bawaan ajuan untuk dialokasikan secara acak';
$string['excludesamegroup'] = 'Cegah ulasan oleh rekan dari grup yang sama';
$string['noallocationtoadd'] = 'Tidak ada alokasi untuk ditambahkan';
$string['nogroupusers'] = '<p> Peringatan: Jika lokakarya berada dalam mode \'grup terlihat\' atau mode \'grup terpisah\', maka pengguna HARUS menjadi bagian dari setidaknya satu grup agar penilaian sejawat dialokasikan kepada mereka dengan alat ini. Pengguna yang tidak dikelompokkan masih dapat diberi penilaian mandiri baru atau jika penilaian yang sudah ada dihapus. </p> <p> Pengguna ini saat ini tidak ada dalam grup: {$a} </p>';
$string['numofdeallocatedassessment'] = 'Membatalkan alokasi penilaian {$a}';
$string['numofrandomlyallocatedsubmissions'] = 'Menetapkan alokasi {$a} secara acak';
$string['numofreviews'] = 'Jumlah ulasan';
$string['numofselfallocatedsubmissions'] = 'Mengalokasikan sendiri ajuan {$a}';
$string['numperauthor'] = 'per ajuan';
$string['numperreviewer'] = 'per pengulas';
$string['pluginname'] = 'Alokasi acak';
$string['privacy:metadata'] = 'Pengaya alokasi acak tidak menyimpan data pribadi apa pun. Data pribadi aktual tentang siapa yang akan menilai siapa yang disimpan oleh modul Lokakarya itu sendiri dan mereka menjadi dasar untuk mengekspor detail penilaian.';
$string['randomallocationdone'] = 'Alokasi acak dilakukan';
$string['removecurrentallocations'] = 'Hapus alokasi saat ini';
$string['resultnomorepeers'] = 'Tidak ada lagi rekan yang tersedia';
$string['resultnomorepeersingroup'] = 'Tidak ada lagi rekan yang tersedia di grup terpisah ini';
$string['resultnotenoughpeers'] = 'Tidak cukup rekan yang tersedia';
$string['resultnumperauthor'] = 'Mencoba mengalokasikan {$a} ulasan per penulis';
$string['resultnumperreviewer'] = 'Mencoba mengalokasikan {$a} ulasan per penulis';
$string['stats'] = 'Statistik alokasi saat ini';
