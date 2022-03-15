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
 * Strings for component 'debug', language 'id', version '3.11'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Pengaya autentikasi {$a} tidak ditemukan.';
$string['blocknotexist'] = 'Blok {$a} tidak ada';
$string['cannotbenull'] = '{$a} tidak boleh nol!';
$string['cannotdowngrade'] = 'Tidak dapat menurunkan {$a->plugin} dari {$a->oldversion} ke {$a->newversion}.';
$string['cannotfindadmin'] = 'Tidak dapat menemukan pengguna admin!';
$string['cannotinitpage'] = 'Tidak dapat sepenuhnya menginisialisasi halaman: tidak valid {$a->name} id {$a->id}';
$string['cannotsetuptable'] = '{$a} tabel TIDAK berhasil disiapkan!';
$string['codingerror'] = 'Kesalahan pengkodean terdeteksi, itu harus diperbaiki oleh programmer: {$a}';
$string['configmoodle'] = 'Moodle belum dikonfigurasi. Anda perlu mengedit config.php terlebih dahulu.';
$string['debuginfo'] = 'Info awakutu';
$string['erroroccur'] = 'Terjadi kesalahan selama proses ini';
$string['invalidarraysize'] = 'Ukuran array salah dalam parameter {$a}';
$string['invalideventdata'] = 'Data peristiwa yang dikirimkan salah: {$a}';
$string['invalidparameter'] = 'Nilai parameter tidak valid terdeteksi';
$string['invalidresponse'] = 'Nilai respons tidak valid terdeteksi';
$string['line'] = 'Garis';
$string['missingconfigversion'] = 'Tabel konfigurasi tidak berisi versi. Anda tidak dapat melanjutkan.';
$string['modulenotexist'] = 'Modul {$a} tidak ada';
$string['morethanonerecordinfetch'] = 'Ditemukan lebih dari satu rekaman di fetch() !';
$string['mustbeoveride'] = 'Metode {$a} abstrak harus disampingkan.';
$string['noadminrole'] = 'Tidak ada peran admin yang dapat ditemukan';
$string['noblocks'] = 'Tak ada blok terpasang!';
$string['nocate'] = 'Tidak ada kategori';
$string['nomodules'] = 'Modul tidak ditemukan!';
$string['nopageclass'] = 'Mengimpor {$a} tetapi tidak menemukan kelas halaman';
$string['noreports'] = 'Tidak ada laporan yang dapat diakses';
$string['notables'] = 'Tidak ada tabel!';
$string['outputbuffer'] = 'Penyangga keluaran';
$string['phpvaroff'] = 'Variabel server PHP \'{$a->name}\' harus Mati - {$a->link}';
$string['phpvaron'] = 'Variabel server PHP \'{$a->name}\' tidak diaktifkan - {$a->link}';
$string['sessionmissing'] = '{$a} objek hilang dari sesi';
$string['sqlrelyonobsoletetable'] = 'SQL ini bergantung pada tabel usang: {$a}! Kode Anda harus diperbaiki oleh pengembang.';
$string['stacktrace'] = 'Jejak tumpukan';
$string['withoutversion'] = 'Berkas version.php utama tidak ada, tidak dapat dibaca atau rusak.';
$string['xmlizeunavailable'] = 'fungsi xmlize tidak tersedia';
