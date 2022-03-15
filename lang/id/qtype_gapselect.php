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
 * Strings for component 'qtype_gapselect', language 'id', version '3.11'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Kosong untuk {no} lebih banyak pilihan';
$string['answer'] = 'Jawaban';
$string['choices'] = 'Pilihan';
$string['choicex'] = 'Pilihan [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menu tarik-lepas';
$string['combinedcontrolnamegapselectplural'] = 'menu tarik-lepas';
$string['correctansweris'] = 'Jawaban yang benar adalah: {$a}';
$string['errorblankchoice'] = 'Harap periksa pilihannya: Pilihan {$a} kosong.';
$string['errormissingchoice'] = 'Silakan periksa teks soal: {$a} tidak ditemukan dalam pilihan! Hanya nomor dengan pilihan jawaban yang ditentukan yang boleh digunakan sebagai placeholder.';
$string['errornoslots'] = 'Teks soal harus berisi placeholder seperti [[1]] untuk menunjukkan ke mana kata-kata yang hilang itu pergi.';
$string['errorquestiontextblank'] = 'Anda harus isikan beberapa teks soal.';
$string['group'] = 'Grup';
$string['pleaseputananswerineachbox'] = 'Tolong beri jawaban di setiap kotak.';
$string['pluginname'] = 'Pilih kata yang hilang';
$string['pluginname_help'] = 'Soal pilih kata yang hilang mengharuskan responden untuk memilih jawaban yang benar dari menu tarik-lepas. [[1]], [[2]], [[3]], ... digunakan sebagai pengganti dalam teks soal, dengan jawaban yang benar ditentukan sebagai pilihan jawaban 1, 2, 3, ... masing-masing. Jawaban pilihan tambahan dapat ditambahkan untuk membuat soal lebih sulit. Pilihan jawaban dapat dikelompokkan untuk membatasi jawaban yang tersedia di setiap menu tarik-lepas.';
$string['pluginnameadding'] = 'Menambahkan soal pilih kata yang hilang';
$string['pluginnameediting'] = 'Mengedit soal pilih kata yang hilang';
$string['pluginnamesummary'] = 'Kata yang hilang dalam teks soal diisi menggunakan menu tarik-lepas.';
$string['privacy:metadata'] = 'Pilih pengaya jenis soal kata yang hilang memungkinkan penulis soal untuk mengatur opsi bawaan sebagai preferensi pengguna.';
$string['privacy:preference:defaultmark'] = 'Poin bawaan ditetapkan untuk soal yang diberikan.';
$string['privacy:preference:penalty'] = 'Penalti untuk setiap upaya yang salah ketika soal dijalankan menggunakan perilaku \'Interaktif dengan beberapa upaya\' atau \'Mode adaptif\'.';
$string['privacy:preference:shuffleanswers'] = 'Apakah jawaban harus diacak secara otomatis.';
$string['shuffle'] = 'Acak';
$string['tagsnotallowed'] = '{$a->tag} tidak diperbolehkan. (Hanya {$a->allowed} yang diizinkan.)';
$string['tagsnotallowedatall'] = '{$a->tag} tidak diperbolehkan. (Tidak ada HTML yang diizinkan di sini.)';
