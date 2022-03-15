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
 * Strings for component 'assignfeedback_offline', language 'id', version '3.11'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Konfirmasi impor nilai';
$string['default'] = 'Secara bawaan diaktifkan';
$string['default_help'] = 'Jika disetel, penilaian luring dengan lembar kerja akan diaktifkan secara bawaan untuk semua penugasan baru.';
$string['downloadgrades'] = 'Unduh Lembar Kerja Penilaian';
$string['enabled'] = 'Lembar kerja penilaian luring';
$string['enabled_help'] = 'Jika diaktifkan, pengajar akan dapat mengunduh dan mengunggah lembar kerja dengan nilai siswa saat menandai tugas.';
$string['feedbackupdate'] = 'Setel ruas "{$a->field}" untuk "{$a->student}" pada "{$a->text}"';
$string['gradelockedingradebook'] = 'Nilai telah dikunci di buku nilai untuk {$a}';
$string['graderecentlymodified'] = 'Nilai {$a} telah dikunci dalam buku nilai';
$string['gradesfile'] = 'Lembar kerja penilaian (format csv)';
$string['gradesfile_help'] = 'Menilai lembar kerja dengan nilai yang dimodifikasi. File ini harus berupa file CSV dengan encoding UTF-8 yang telah diunduh dari tugas, dengan kolom untuk nilai dan pengenal siswa.';
$string['gradeupdate'] = 'Setel nilai untuk {$a->student} menjadi {$a->grade}';
$string['ignoremodified'] = 'Izinkan memperbarui catatan yang telah dimodifikasi lebih baru di Moodle daripada di spreadsheet.';
$string['ignoremodified_help'] = 'Ketika lembar kerja penilaian diunduh dari Moodle, itu berisi tanggal modifikasi terakhir untuk masing-masing nilai. Jika ada nilai yang diperbarui di Moodle setelah lembar kerja ini diunduh, secara default Moodle akan menolak untuk menimpa informasi yang diperbarui ini saat mengimpor nilai. Dengan memilih opsi ini Moodle akan menonaktifkan pemeriksaan keamanan ini dan memungkinkan beberapa penanda untuk menimpa nilai satu sama lain.';
$string['importgrades'] = 'Konfirmasikan perubahan di lembar kerja penilaian';
$string['invalidgradeimport'] = 'Moodle tidak dapat membaca lembar kerja yang diunggah. Pastikan itu disimpan dalam format nilai yang dipisahkan koma (.csv) dan coba lagi.';
$string['nochanges'] = 'Tidak ada nilai yang diubah ditemukan di lembar kerja yang diunggah';
$string['offlinegradingworksheet'] = 'Nilai';
$string['pluginname'] = 'Lembar Kerja Penilaian Luring';
$string['privacy:nullproviderreason'] = 'Pengaya ini tidak memiliki basis data untuk menyimpan informasi pengguna. Ini hanya menggunakan API di mod_assign untuk membantu menampilkan antarmuka penilaian.';
$string['processgrades'] = 'Impor nilai';
$string['skiprecord'] = 'Lewati rekaman';
$string['updatedgrades'] = 'Memperbarui nilai <strong> {$a->gradeupdatescount} </strong> dan model umpan balik <strong> {$a->feedbackupdatescount} </strong>.';
$string['updaterecord'] = 'Perbarui rekaman';
$string['uploadgrades'] = 'Unggah lembar kerja penilaian';
