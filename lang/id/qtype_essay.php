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
 * Strings for component 'qtype_essay', language 'id', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Jenis berkas yang diizinkan';
$string['acceptedfiletypes_help'] = 'Jenis berkas yang diterima dapat dibatasi dengan memasukkan daftar ekstensi berkas. Jika bidang dibiarkan kosong, maka semua jenis berkas diperbolehkan.';
$string['allowattachments'] = 'Izinkan lampiran';
$string['answerfiles'] = '"Berkas jawaban';
$string['answertext'] = 'Teks jawaban';
$string['attachedfiles'] = 'Lampiran: {$a}';
$string['attachmentsoptional'] = 'Lampiran adalah opsional';
$string['attachmentsrequired'] = 'Membutuhkan lampiran';
$string['attachmentsrequired_help'] = 'Opsi ini menentukan jumlah minimum lampiran yang diperlukan agar respons dipertimbangkan secara gradual.';
$string['err_maxminmismatch'] = 'Batas kata maksimum harus lebih besar dari batas kata minimum';
$string['err_maxwordlimit'] = 'Batas kata maksimum dinonaktifkan tetapi tidak disetel';
$string['err_maxwordlimitnegative'] = 'Batas kata maksimum tidak boleh berupa angka negatif';
$string['err_minwordlimit'] = 'Batas kata minimum diaktifkan tetapi tidak disetel';
$string['err_minwordlimitnegative'] = 'Batas kata minimum tidak boleh berupa angka negatif';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML dengan pilihan berkas';
$string['formatmonospaced'] = 'Teks biasa, font monospace';
$string['formatnoinline'] = 'Tidak ada teks daring';
$string['formatplain'] = 'Teks biasa';
$string['graderinfo'] = 'Informasi untuk siswa';
$string['graderinfoheader'] = 'Informasi Penilaian';
$string['maxbytes'] = 'Ukuran berkas maksimum';
$string['maxwordlimit'] = 'Batas kata maksimum';
$string['maxwordlimit_help'] = 'Jika jawaban mengharuskan siswa memasukkan teks, ini adalah jumlah maksimum kata yang boleh dikirim oleh setiap siswa.';
$string['maxwordlimitboundary'] = 'Batas kata untuk soal ini adalah {$a->limit} kata dan Anda mencoba mengirimkan {$a->count} kata. Harap persingkat jawaban Anda dan coba lagi.';
$string['minwordlimit'] = 'Batas kata minimum';
$string['minwordlimit_help'] = 'Jika jawaban mengharuskan siswa memasukkan teks, ini adalah jumlah minimum kata yang boleh dikirim oleh setiap siswa.';
$string['minwordlimitboundary'] = 'Soal ini membutuhkan jawaban minimal {$a->limit} kata dan Anda mencoba mengirimkan {$a->count} kata. Perluas jawaban Anda dan coba lagi.';
$string['mustattach'] = 'Ketika "Tidak ada teks daring" dipilih, atau tanggapan bersifat opsional, Anda harus mengizinkan setidaknya satu lampiran.';
$string['mustrequire'] = 'Ketika "Tidak ada teks daring" dipilih, atau tanggapan bersifat opsional, Anda harus mengizinkan setidaknya satu lampiran.';
$string['mustrequirefewer'] = 'Anda tidak dapat meminta lebih banyak lampiran daripada yang Anda izinkan.';
$string['nlines'] = '{$a} baris';
$string['nonexistentfiletypes'] = 'Tipe berkas berikut tidak dikenal: {$a}';
$string['pluginname'] = 'Essay';
$string['pluginname_help'] = 'Sebagai tanggapan atas suatu soal, responden dapat mengunggah satu atau lebih file dan / atau memasukkan teks daring. Templat tanggapan mungkin disediakan. Tanggapan harus dinilai secara manual.';
$string['pluginnameadding'] = 'Tambahkan soal essay';
$string['pluginnameediting'] = 'Mengedit soal essay';
$string['pluginnamesummary'] = 'Memungkinkan tanggapan unggahan berkas dan  atau teks daring. Ini kemudian harus dinilai secara manual.';
$string['privacy:metadata'] = 'Pengaya jenis pertanyaan esai memungkinkan penulis pertanyaan untuk mengatur opsi bawaan sebagai preferensi pengguna.';
$string['privacy:preference:attachments'] = 'Jumlah lampiran yang diizinkan.';
$string['privacy:preference:attachmentsrequired'] = 'Jumlah lampiran yang diwajibkan.';
$string['privacy:preference:defaultmark'] = 'Poin bawaan ditetapkan untuk soal yang diberikan.';
$string['privacy:preference:maxbytes'] = 'Ukuran berkas maksimum.';
$string['privacy:preference:responsefieldlines'] = 'Jumlah baris yang menunjukkan ukuran kotak input (textarea).';
$string['privacy:preference:responseformat'] = 'Apa format jawaban (editor HTML, teks biasa, dll.)?';
$string['privacy:preference:responserequired'] = 'Apakah siswa diharuskan memasukkan teks atau input teks adalah opsional.';
$string['responsefieldlines'] = 'Ukuran kotak input';
$string['responseformat'] = 'Format respons';
$string['responseisrequired'] = 'Diperlukan siswa untuk mengisikan teks';
$string['responsenotrequired'] = 'Masukan teks adalah opsional';
$string['responseoptions'] = 'Opsi Respons';
$string['responserequired'] = 'Teks yang dibutuhkan';
$string['responsetemplate'] = 'Templat jawaban';
$string['responsetemplate_help'] = 'Teks apa pun yang dimasukkan di sini akan ditampilkan di kotak masukan respons saat upaya baru pada soal dimulai.';
$string['responsetemplateheader'] = 'Templat respon';
$string['wordcount'] = 'Jumlah kata: {$a}';
$string['wordcounttoofew'] = 'Jumlah kata: {$a->count}, kurang dari {$a->limit} kata yang dibutuhkan.';
$string['wordcounttoomuch'] = 'Jumlah kata: {$a->count}, melebihi batas {$a->limit} kata.';
