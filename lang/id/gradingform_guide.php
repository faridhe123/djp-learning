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
 * Strings for component 'gradingform_guide', language 'id', version '3.11'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Tambahkan komentar yang sering digunakan';
$string['addcriterion'] = 'Tambahkan kriteria';
$string['additionalcomments'] = 'Komentar tambahan';
$string['additionalcommentsforcriterion'] = 'Komentar tambahan untuk kriteria, {$a}';
$string['alwaysshowdefinition'] = 'Tunjukkan definisi panduan kepada siswa';
$string['backtoediting'] = 'Kembali ke pengeditan';
$string['clicktocopy'] = 'Klik untuk menyalin teks ini ke dalam umpan balik kriteria';
$string['clicktoedit'] = 'Klik untuk mengedit';
$string['clicktoeditname'] = 'Klik untuk mengedit nama kriteria';
$string['comment'] = 'Komentar';
$string['commentpickerforcriterion'] = 'Pemilih komentar yang sering digunakan untuk {$a} komentar tambahan';
$string['comments'] = 'Komentar yang sering digunakan';
$string['commentsdelete'] = 'Hapus komentar';
$string['commentsempty'] = 'Klik untuk mengedit komentar';
$string['commentsmovedown'] = 'Turunkan';
$string['commentsmoveup'] = 'Naikkan';
$string['confirmdeletecriterion'] = 'Anda yakin ingin menghapus item ini?';
$string['confirmdeletelevel'] = 'Apakah Anda yakin ingin menghapus level ini?';
$string['criterion'] = 'Nama kriteria';
$string['criteriondelete'] = 'Hapus kriteria';
$string['criterionempty'] = 'Klik untuk mengedit kriteria';
$string['criterionmovedown'] = 'Turunkan';
$string['criterionmoveup'] = 'Naikkan';
$string['criterionname'] = 'Nama kriteria';
$string['criterionremark'] = '{$a} catatan kriteria';
$string['definemarkingguide'] = 'Tentukan panduan penilaian';
$string['description'] = 'Deskripsi';
$string['descriptionmarkers'] = 'Deskripsi untuk Marker';
$string['descriptionstudents'] = 'Deskripsi untuk siswa';
$string['err_maxscoreisnegative'] = 'Skor maksimal tidak valid, nilai negatif tidak diperbolehkan';
$string['err_maxscorenotnumeric'] = 'Skor maksimum kriteria harus berupa angka';
$string['err_nocomment'] = 'Komentar tidak boleh kosong';
$string['err_nodescription'] = 'Deskripsi siswa wajib diisi';
$string['err_nodescriptionmarkers'] = 'Deskripsi penanda tidak boleh kosong';
$string['err_nomaxscore'] = 'Kriteria skor maksimal tidak boleh kosong';
$string['err_noshortname'] = 'Nama kriteria wajib diisi';
$string['err_scoreinvalid'] = 'Skor yang diberikan untuk \'{$a->criterianame}\' tidak valid, skor maksimalnya adalah: {$a->maxscore}';
$string['err_scoreisnegative'] = 'Skor yang diberikan untuk \'{$a->criterianame}\' tidak valid, nilai negatif tidak diperbolehkan';
$string['err_shortnametoolong'] = 'Nama kriteria harus kurang dari 256 karakter';
$string['gradingof'] = 'nilai {$a}';
$string['guide'] = 'Penduan penilaian';
$string['guidemappingexplained'] = 'PERINGATAN: Panduan penilaian Anda memiliki nilai maksimum <b>{$a->maxscore} poin</b> tetapi nilai maksimum yang ditetapkan dalam aktivitas Anda adalah {$a->modulegrade} Skor maksimum yang ditetapkan dalam panduan penilaian Anda akan ditingkatkan ke nilai maksimum dalam modul.<br />
     Skor menengah akan dikonversi masing-masing dan dibulatkan ke nilai terdekat yang tersedia.';
$string['guidenotcompleted'] = 'Harap berikan nilai yang valid untuk setiap kriteria';
$string['guideoptions'] = 'Opsi panduan penilaian';
$string['guidestatus'] = 'Status panduan penilaian saat ini';
$string['hidemarkerdesc'] = 'Sembunyikan deskripsi kriteria penilaian';
$string['hidestudentdesc'] = 'Sembunyikan deskripsi kriteria siswa';
$string['informationforcriterion'] = '{$a} informasi';
$string['insertcomment'] = 'Sisipkan komentar yang sering digunakan';
$string['maxscore'] = 'Skor maksimum';
$string['name'] = 'Nama';
$string['needregrademessage'] = 'Definisi panduan penilaian diubah setelah siswa ini dinilai. Siswa tidak dapat melihat panduan penilaian ini sampai Anda memeriksa panduan penilaian dan memperbarui nilainya.';
$string['outof'] = 'Skor dari {$a}';
$string['pluginname'] = 'Panduan penilaian';
$string['previewmarkingguide'] = 'Pratinjau panduan penandaan';
$string['privacy:metadata:criterionid'] = 'Pengidentifikasi kriteria untuk penilaian lanjutan.';
$string['privacy:metadata:fillingssummary'] = 'Menyimpan informasi tentang nilai pengguna dan umpan balik untuk panduan penilaian.';
$string['privacy:metadata:instanceid'] = 'Pengidentifikasi untuk nilai yang digunakan oleh suatu aktivitas.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Apakah akan menampilkan deskripsi kriteria penanda';
$string['privacy:metadata:preference:showstudentdesc'] = 'Apakah akan menampilkan deskripsi kriteria siswa';
$string['privacy:metadata:remark'] = 'Catatan terkait dengan kriteria nilai ini.';
$string['privacy:metadata:score'] = 'Skor untuk kriteria nilai ini.';
$string['regrademessage1'] = 'Anda akan menyimpan perubahan pada panduan penandaan yang telah digunakan untuk penilaian. Harap tunjukkan jika nilai yang ada perlu ditinjau. Jika Anda mengatur ini maka panduan penilaian akan disembunyikan dari siswa sampai item mereka dinilai ulang.';
$string['regrademessage5'] = 'Anda akan menyimpan perubahan signifikan pada panduan penandaan yang telah digunakan untuk penilaian. Nilai buku nilai tidak akan berubah, tetapi panduan penilaian akan disembunyikan dari siswa hingga item mereka dinilai ulang.';
$string['regradeoption0'] = 'Jangan tandai untuk nilai ulang';
$string['regradeoption1'] = 'Tandai untuk nilai ulang';
$string['remark_help'] = 'Masukkan komentar tambahan tentang kriteria ini.';
$string['restoredfromdraft'] = 'CATATAN: Upaya terakhir untuk menilai orang ini tidak disimpan dengan benar sehingga nilai draf telah dipulihkan. Jika Anda ingin membatalkan perubahan ini, gunakan tombol \'Batal\' di bawah.';
$string['save'] = 'Simpan';
$string['saveguide'] = 'Simpan panduan penilaian dan siapkan';
$string['saveguidedraft'] = 'Simpan sebagai konsep';
$string['score'] = 'skor';
$string['score_help'] = 'Masukkan skor untuk {$a->criterion} antara 0 dan {$a->maxscore}.';
$string['scoreforcriterion'] = '{$a} skor';
$string['showmarkerdesc'] = 'Tampilkan deskripsi kriteria penanda';
$string['showmarkspercriterionstudents'] = 'Tunjukkan nilai per kriteria kepada siswa';
$string['showstudentdesc'] = 'Tampilkan deskripsi kriteria siswa';
