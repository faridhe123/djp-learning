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
 * Strings for component 'qtype_ddmarker', language 'id', version '3.11'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Kosong untuk {no} lebih banyak penanda';
$string['alttext'] = 'Teks alt';
$string['answer'] = 'Jawaban';
$string['bgimage'] = 'Gambar latar belakang';
$string['clearwrongparts'] = 'Pindahkan penanda yang salah ditempatkan kembali ke posisi awal bawaan di bawah gambar';
$string['coords'] = 'Koordinat';
$string['correctansweris'] = 'Jawaban yang benar adalah: {$a}';
$string['draggableimage'] = 'Gambar yang dapat diseret';
$string['draggableitem'] = 'Item yang dapat diseret';
$string['draggableitemheader'] = 'Item yang dapat diseret {$a}';
$string['draggableitemtype'] = 'Tipe';
$string['draggableword'] = 'Teks yang dapat diseret';
$string['dropbackground'] = 'Gambar latar belakang untuk menyeret penanda';
$string['dropzone'] = 'Zona lepas {$a}';
$string['dropzoneheader'] = 'Zona lepas';
$string['dropzones'] = 'Zona lepas';
$string['dropzones_help'] = 'Zona lepas dapat ditentukan oleh koordinat, atau diseret ke posisi dalam pratinjau di atas. Pertama memilih bentuk (lingkaran, persegi panjang atau poligon) akan menambahkan bentuk zona lepas baru ke kiri atas pratinjau. Mungkin berguna untuk meminimalkan bagian Penanda sehingga Anda dapat melihat pratinjau saat mengedit zona lepas. Mengedit bentuk dimulai dengan klik pada bentuk di pratinjau untuk menampilkan gagang pengeditan. Anda dapat memindahkan bentuk menggunakan gagang tengah, atau menyesuaikan dimensi bentuk dengan gagang simpul. Untuk poligon saja, menahan tombol kontrol (tombol perintah pada Mac) sambil mengklik pegangan simpul akan menambahkan simpul baru ke poligon. Harap pertahankan bentuk poligon sesederhana mungkin, tanpa melintasi garis. Untuk informasi ketiga bentuk menggunakan koordinat dengan cara ini: * Lingkaran: center_x, center_y; radius<br />misalnya: <code>80,100;50</code> * Persegi panjang: top_left_x, top_left_y; lebar, tinggi<br />misalnya: <code>20,60;80,40</code> * Poligon: x1, y1; x2, y2; ...; xn, yn<br />misalnya: <code>20,60;100,60;20,100</code> Memilih teks Marker akan menambahkan teks tersebut ke bentuk di pratinjau.';
$string['followingarewrong'] = 'Penanda berikut telah ditempatkan di area yang salah : {$a}.';
$string['followingarewrongandhighlighted'] = 'Penanda berikut salah ditempatkan : {$a}. Penanda yang disorot sekarang ditampilkan dengan penempatan yang benar.<br /> Klik penanda untuk menyorot area yang diizinkan.';
$string['formerror_nobgimage'] = 'Anda perlu memilih gambar untuk digunakan sebagai latar belakang untuk area seret dan lepas.';
$string['formerror_noitemselected'] = 'Anda telah menentukan zona lepas tetapi tidak memilih penanda yang harus diseret ke zona tersebut.';
$string['formerror_nosemicolons'] = 'Tidak ada titik koma di string koordinat Anda. Koordinat Anda untuk {$a->shape} harus dinyatakan sebagai - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Hanya label "{$a}" yang diperbolehkan dalam label untuk penanda.';
$string['formerror_onlyusewholepositivenumbers'] = 'Harap gunakan hanya bilangan bulat positif untuk menentukan koordinat x,y dan/atau lebar dan tinggi bentuk. Koordinat Anda untuk {$a->shape} harus dinyatakan sebagai - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Untuk bentuk poligon, Anda harus menentukan setidaknya 3 titik. Koordinat Anda untuk {$a->shape} harus dinyatakan sebagai - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Anda telah memasukkan koordinat yang sama dua kali. Setiap titik harus unik. Koordinat Anda untuk {$a->shape} harus dinyatakan sebagai - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Bentuk yang telah Anda tetapkan keluar dari batas gambar latar belakang.';
$string['formerror_toomanysemicolons'] = 'Ada terlalu banyak bagian yang dipisahkan titik koma pada koordinat yang telah Anda tentukan. Koordinat Anda untuk {$a->shape} harus dinyatakan sebagai - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Lebar dan tinggi yang Anda tentukan tidak dapat dikenali. Koordinat Anda untuk {$a->shape} harus dinyatakan sebagai - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Koordinat x,y yang telah Anda tentukan tidak dapat dikenali. Koordinat Anda untuk {$a->shape} harus dinyatakan sebagai - {$a->coordsstring}.';
$string['infinite'] = 'Tak terbatas';
$string['marker'] = 'Penanda';
$string['marker_n'] = 'Penanda {no}';
$string['markers'] = 'Penanda';
$string['nolabel'] = 'Tidak ada teks label';
$string['noofdrags'] = 'Nomor';
$string['pleasedragatleastonemarker'] = 'Jawaban Anda tidak lengkap; Anda harus menempatkan setidaknya satu penanda pada gambar.';
$string['pluginname'] = 'Seret dan lepas penanda';
$string['pluginname_help'] = 'Seret dan lepas penanda mengharuskan responden untuk menyeret label teks dan melepaskannya ke zona lepas yang ditentukan pada gambar latar belakang.';
$string['pluginnameadding'] = 'Menambahkan penanda seret dan lepas';
$string['pluginnameediting'] = 'Mengedit penanda seret dan lepas';
$string['pluginnamesummary'] = 'Penanda diseret dan dilepaskan ke gambar latar belakang. Catatan: Jenis soal ini tidak dapat diakses oleh pengguna tunanetra.';
$string['previewareaheader'] = 'Pratinjau';
$string['previewareamessage'] = 'Pilih berkas gambar latar belakang, masukkan label teks untuk penanda dan tentukan zona lepas pada gambar latar tempat mereka harus diseret.';
$string['privacy:metadata'] = 'Seret dan lepas pengaya jenis soal penanda memungkinkan penulis soal untuk mengatur opsi bawaan sebagai preferensi pengguna.';
$string['privacy:preference:defaultmark'] = 'Poin bawaan ditetapkan untuk soal yang diberikan.';
$string['privacy:preference:penalty'] = 'Penalti untuk setiap upaya yang salah ketika soal dijalankan menggunakan perilaku \'Interaktif dengan beberapa upaya\' atau \'Mode adaptif\'.';
$string['privacy:preference:shuffleanswers'] = 'Apakah jawaban harus diacak secara otomatis.';
$string['refresh'] = 'Segarkan pratinjau';
$string['shape'] = 'Bentuk';
$string['shape_circle'] = 'Lingkaran';
$string['shape_circle_coords'] = 'x,y;r (di mana x,y adalah koordinat pusat lingkaran dan r adalah jari-jarinya)';
$string['shape_circle_lowercase'] = 'lingkaran';
$string['shape_polygon'] = 'Poligon';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (di mana x1, y1 adalah koordinat titik pertama, x2, y2 adalah koordinat titik kedua dst. Tidak perlu mengulang koordinat untuk simpul pertama yang menutup poligon.)';
$string['shape_polygon_lowercase'] = 'poligon';
$string['shape_rectangle'] = 'Persegi panjang';
$string['shape_rectangle_coords'] = 'x,y;w,h (di mana x,y adalah koordinat sudut kiri atas persegi panjang dan w dan h adalah lebar dan tinggi persegi panjang)';
$string['shape_rectangle_lowercase'] = 'persegi panjang';
$string['showmisplaced'] = 'Sorot zona lepas yang tidak memiliki penanda yang benar dijatuhkan pada mereka';
$string['shuffleimages'] = 'Acak item seret setiap kali soal dikerjakan';
$string['stateincorrectlyplaced'] = 'Nyatakan penanda mana yang salah ditempatkan';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona lepas {$a}';
$string['ytop'] = 'Atas';
