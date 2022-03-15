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
 * Strings for component 'gradingform_rubric', language 'id', version '3.11'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Tambahkan kriteria';
$string['additionalfeedback'] = 'Umpan balik tambahan';
$string['alwaysshowdefinition'] = 'Izinkan pengguna untuk melihat pratinjau rubrik (jika tidak, rubrik hanya akan ditampilkan setelah penilaian)';
$string['backtoediting'] = 'Kembali ke pengeditan';
$string['confirmdeletecriterion'] = 'Anda yakin ingin menghapus kriteria ini?';
$string['confirmdeletelevel'] = 'Apakah Anda yakin ingin menghapus level ini?';
$string['criterion'] = 'Kriteria {$a}';
$string['criterionaddlevel'] = 'Tambahkan level';
$string['criteriondelete'] = 'Hapus kriteria';
$string['criterionduplicate'] = 'Duplikat kriteria';
$string['criterionempty'] = 'Klik untuk mengedit kriteria';
$string['criterionmovedown'] = 'Turunkan';
$string['criterionmoveup'] = 'Naikkan';
$string['criterionremark'] = 'Catatan untuk kriteria {$a->description}: {$a->remark}';
$string['definerubric'] = 'Tentukan rubrik';
$string['description'] = 'Deskripsi';
$string['enableremarks'] = 'Izinkan penilai untuk menambahkan catatan teks untuk setiap kriteria';
$string['err_mintwolevels'] = 'Setiap kriteria harus memiliki setidaknya dua level';
$string['err_nocriteria'] = 'Rubrik harus berisi setidaknya satu kriteria';
$string['err_nodefinition'] = 'Definisi level tidak boleh kosong';
$string['err_nodescription'] = 'Deskripsi kriteria wajib diisi';
$string['err_novariations'] = 'Level kriteria tidak semuanya dapat bernilai jumlah poin yang sama';
$string['err_scoreformat'] = 'Jumlah poin untuk setiap level harus berupa angka yang valid';
$string['err_totalscore'] = 'Jumlah poin maksimum yang dimungkinkan ketika dinilai oleh rubrik harus lebih dari nol';
$string['gradingof'] = 'nilai {$a}';
$string['level'] = 'Level {$a->definition}, {$a->score} poin.';
$string['leveldefinition'] = 'Definisi level {$a}';
$string['leveldelete'] = 'Hapus level {$a}';
$string['levelempty'] = 'Klik untuk mengedit level';
$string['levelsgroup'] = 'Grup level';
$string['lockzeropoints'] = 'Hitung nilai yang memiliki skor minimum dari nilai minimum yang dapat dicapai untuk rubrik';
$string['lockzeropoints_help'] = 'Setelan ini hanya berlaku jika jumlah poin minimum untuk setiap kriteria lebih besar dari 0. Jika dicentang, skor minimum aktivitas akan menjadi nilai minimum yang dapat dicapai untuk rubrik. Jika tidak dicentang, skor minimum yang mungkin untuk rubrik akan dipetakan ke nilai minimum yang tersedia untuk aktivitas tersebut (yaitu 0 kecuali jika skala digunakan).';
$string['name'] = 'Nama';
$string['needregrademessage'] = 'Definisi rubrik diubah setelah siswa ini dinilai. Siswa tidak dapat melihat rubrik ini sampai Anda memeriksa rubrik dan memperbarui nilainya.';
$string['notset'] = 'Tidak disetel';
$string['pluginname'] = 'Rubrik';
$string['pointsvalue'] = 'poin {$a}';
$string['previewrubric'] = 'Pratinjau rubrik';
$string['privacy:metadata:criterionid'] = 'Pengidentifikasi untuk kriteria tertentu yang dinilai.';
$string['privacy:metadata:fillingssummary'] = 'Menyimpan informasi tentang nilai pengguna yang dibuat oleh rubrik.';
$string['privacy:metadata:instanceid'] = 'Pengidentifikasi yang berkaitan dengan nilai dalam suatu aktivitas.';
$string['privacy:metadata:levelid'] = 'Level yang didapat dalam rubrik.';
$string['privacy:metadata:remark'] = 'Catatan terkait dengan kriteria rubrik yang dinilai.';
$string['regrademessage1'] = 'Anda akan menyimpan perubahan ke rubrik yang telah digunakan untuk penilaian. Harap tunjukkan jika nilai yang ada perlu ditinjau. Jika Anda mengatur ini maka rubrik akan disembunyikan dari siswa sampai item mereka dinilai ulang.';
$string['regrademessage5'] = 'Anda akan menyimpan perubahan signifikan pada rubrik yang telah digunakan untuk penilaian. Nilai buku nilai tidak akan berubah, tetapi rubrik akan disembunyikan dari siswa hingga item mereka dinilai ulang.';
$string['regradeoption0'] = 'Jangan tandai untuk dinilai ulang';
$string['regradeoption1'] = 'Tandai untuk dinilai ulang';
$string['restoredfromdraft'] = 'CATATAN: Upaya terakhir untuk menilai orang ini tidak disimpan dengan benar sehingga nilai draf telah dipulihkan. Jika Anda ingin membatalkan perubahan ini, gunakan tombol \'Batal\' di bawah.';
$string['rubric'] = 'Rubrik';
$string['rubricmapping'] = 'Skor untuk menilai aturan pemetaan';
$string['rubricmappingexplained'] = 'Skor minimum yang mungkin untuk rubrik ini adalah <b>{$a->minscore} poin</b>. Ini akan dikonversi ke nilai minimum yang tersedia untuk aktivitas (yaitu 0 kecuali jika skala digunakan). Skor maksimum <b>{$a->maxscore} poin</b> akan diubah menjadi nilai maksimum. Skor menengah akan dikonversi masing-masing.

Jika skala digunakan untuk penilaian, skor akan dibulatkan dan diubah menjadi elemen skala seolah-olah mereka bilangan bulat berurutan.

Penghitungan nilai ini dapat diubah dengan mengedit formulir dan mencentang kotak \'Hitung nilai yang memiliki skor minimum dari nilai minimum yang dapat dicapai untuk rubrik\'.';
$string['rubricnotcompleted'] = 'Silakan pilih sesuatu untuk setiap kriteria';
$string['rubricoptions'] = 'Pilihan rubrik';
$string['rubricstatus'] = 'Status rubrik saat ini';
$string['save'] = 'Simpan';
$string['saverubric'] = 'Simpan rubrik dan siapkan';
$string['saverubricdraft'] = 'Simpan sebagai draf';
$string['scoreinputforlevel'] = 'Masukan skor untuk level {$a}';
$string['scorepostfix'] = '{$a} poin';
$string['showdescriptionstudent'] = 'Tampilkan deskripsi rubrik kepada yang sedang dinilai';
$string['showdescriptionteacher'] = 'Tampilkan deskripsi rubrik selama evaluasi';
$string['showremarksstudent'] = 'Tunjukkan catatan kepada mereka yang dinilai';
$string['showscorestudent'] = 'Tampilkan poin untuk setiap level ke level yang dinilai';
$string['showscoreteacher'] = 'Tampilkan poin untuk setiap level selama evaluasi';
$string['sortlevelsasc'] = 'Urutkan urutan untuk level:';
$string['sortlevelsasc0'] = 'Menurun berdasarkan jumlah poin';
$string['sortlevelsasc1'] = 'Naik berdasarkan jumlah poin';
$string['zerolevelsabsent'] = 'Peringatan: Skor minimum yang mungkin untuk rubrik ini bukan 0; ini dapat menghasilkan nilai yang tidak terduga untuk aktivitas tersebut. Untuk menghindari hal ini, setiap kriteria harus memiliki level dengan 0 poin.<br>
Peringatan ini dapat diabaikan jika skala digunakan untuk penilaian, dan level minimum dalam rubrik sesuai dengan nilai minimum skala.';
