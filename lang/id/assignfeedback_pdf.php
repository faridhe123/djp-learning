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
 * Strings for component 'assignfeedback_pdf', language 'id', version '3.11'.
 *
 * @package     assignfeedback_pdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotationhelp_text'] = '<tabel>
<thead><tr><th>Kontrol</th><th>Pintasan keyboard</th><th>Deskripsi</th></tr></thead>
<tr><td>{$a->save}</td><td>&nbsp;</td><td>Tutup anotasi tanpa membuat PDF respons (perhatikan semua anotasi disimpan segera saat disimpan</td ></tr>
 <tr><td>{$a->generate}</td><td>&nbsp;</td><td>Buat PDF beranotasi untuk diunduh siswa</td></tr>
 <tr><td>Temukan komentar</td><td>&nbsp;</td><td>Langsung ke komentar yang dimasukkan sebelumnya (pada kiriman ini) dan sorot.</td></tr>
 <tr><td>Tampilkan sebelumnya</td><td>&nbsp;</td><td>Tampilkan komentar untuk siswa ini dari tugas lain pada kursus ini (dalam bingkai samping)</td></tr>
 <tr><td>&lt;-- Sebelumnya</td><td>p</td><td>Lihat halaman sebelumnya</td></tr>
 <tr><td>Berikutnya --&gt;</td><td>n</td><td>Lihat halaman berikutnya</td></tr>
 <tr><td>Warna latar belakang</td><td>[ dan ]</td><td>Ubah warna isian untuk kotak komentar (juga tersedia dengan mengklik kanan pada komentar)</td></ tr>
 <tr><td>Warna garis</td><td>{ dan }</td><td>Mengubah warna anotasi</td></tr>
 <tr><td>Pilih stempel</td><td>&nbsp;</td><td>Pilih stempel yang akan digunakan untuk alat stempel (stempel baru dapat ditambahkan ke folder \'pix/stamps\' di server )</td></tr>
 <tr><td>{$a->comment}</td><td>c</td><td>Klik halaman untuk menambahkan kotak komentar, ketik komentar, lalu klik halaman lagi untuk menyimpan. Klik pada komentar untuk mengedit, seret untuk memindahkan. Klik kanan untuk mengubah warna, simpan ke daftar cepat atau hapus (atau hapus teks untuk dihapus).</td></tr>
 <tr><td>{$a->line}</td><td>l</td><td>Klik + seret (atau klik, pindahkan, klik) untuk menggambar garis pada halaman</td> </tr>
 <tr><td>{$a->rectangle}</td><td>r</td><td>Klik + seret (atau klik, pindahkan, klik) untuk menggambar persegi panjang di halaman</td> </tr>
 <tr><td>{$a->oval}</td><td>o</td><td>Klik + seret (atau klik, pindahkan, klik) untuk menggambar oval di halaman</td> </tr>
 <tr><td>{$a->freehand}</td><td>f</td><td>Klik + seret untuk menggambar garis freehand pada halaman</td></tr>
 <tr><td>{$a->highlight}</td><td>h</td><td>Klik + seret (atau klik, pindahkan, klik) untuk menggambar sorotan semi-transparan di seluruh halaman yang ada konten</td></tr>
 <tr><td>{$a->stamp}</td><td>s</td><td>Klik untuk menyisipkan stempel yang dipilih pada ukuran bawaan. Klik + seret untuk menyisipkan pada ukuran yang berbeda</td></tr>
 <tr><td>{$a->erase}</td><td>e</td><td>Klik atau pada anotasi (bukan komentar) untuk menghapusnya</td></tr>
 <tr><td>Daftar Cepat</td><td>&nbsp;</td><td>Klik kanan halaman untuk menyisipkan komentar yang sebelumnya disimpan ke \'daftar cepat\'. Gunakan \'x\' untuk menghapus item daftar cepat yang tidak diinginkan.</td></tr>
 </tabel>';
$string['servercommfailed'] = 'Komunikasi server gagal - apakah Anda ingin mengirim ulang pesan?';
