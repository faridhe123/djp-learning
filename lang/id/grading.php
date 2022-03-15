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
 * Strings for component 'grading', language 'id', version '3.11'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' dipilih sebagai metode penilaian aktif untuk area \'{$a->area}\'';
$string['activemethodinfonone'] = 'Tidak ada metode penilaian lanjutan terpilih untuk area \'{$a->area}\'. Metode penilaian sederhana akan digunakan.';
$string['changeactivemethod'] = 'Ubah metode penilaian aktif ke';
$string['clicktoclose'] = 'klik untuk menutup';
$string['error:gradingunavailable'] = 'Metode penilaian lanjutan tidak diatur dengan benar. Silakan periksa seluruh opsi penilaian forum di setelan forum.';
$string['error:notinrange'] = 'Nilai \'{$a->grade}\' yang diberikan tidak valid. Nilai harus antara 0 dan {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Tidak dapat mencontohkan elemen blangko penilaian';
$string['formnotavailable'] = 'Metode penilaian lanjutan dipilih untuk digunakan tetapi blangko penilaian belum tersedia. Anda perlu mendefinisikannya dulu melalui tautan pada Blok Administrasi.';
$string['gradingformunavailable'] = 'Harap diperhatikan: saat ini formulir penilaian lanjutan belum siap. Metode penilaian sederhana akan digunakan sampai formulir memiliki status yang valid.';
$string['gradingmanagement'] = 'Penilaian lanjut';
$string['gradingmanagementtitle'] = 'Penilaian lanjutan: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Metode penilaian';
$string['gradingmethod_help'] = 'Pilih metode penilaian lanjutan yang harus digunakan untuk menghitung nilai dalam konteks tertentu. Untuk menonaktifkan penilaian lanjutan dan beralih kembali ke mekanisme penilaian bawaan, pilih \'Penilaian langsung sederhana\'.';
$string['gradingmethodnone'] = 'Penilaian langsung sederhana';
$string['gradingmethods'] = 'Metode penilaian';
$string['manageactionclone'] = 'Membuat lembar penilaian baru dari templat';
$string['manageactiondelete'] = 'Hapus formulir yang saat ini ditentukan';
$string['manageactiondeleteconfirm'] = 'Anda akan menghapus formulir penilaian \'{$a->formname}\' dan semua informasi terkait dari \'{$a->component} ({$a->area})\'. Pastikan Anda memahami konsekuensi berikut:

* Tidak ada cara untuk membatalkan operasi ini.
* Anda dapat beralih ke metode penilaian lain termasuk \'Penilaian langsung sederhana\' tanpa menghapus formulir ini.
* Semua informasi tentang cara pengisian formulir penilaian akan hilang.
* Nilai hasil yang dihitung yang disimpan dalam buku nilai tidak akan terpengaruh. Namun penjelasan tentang bagaimana mereka dihitung tidak akan tersedia.
* Operasi ini tidak memengaruhi salinan formulir ini di aktivitas lain.';
$string['manageactiondeletedone'] = 'Formulir berhasil dihapus';
$string['manageactionedit'] = 'Edit definisi formulir saat ini';
$string['manageactionnew'] = 'Tentukan formulir penilaian baru dari awal';
$string['manageactionshare'] = 'Publikasikan formulir sebagai templat baru';
$string['manageactionshareconfirm'] = 'Anda akan menyimpan salinan formulir penilaian \'{$a}\' sebagai templat publik baru. Pengguna lain di situs Anda akan dapat membuat formulir penilaian baru dalam aktivitas mereka dari templat tersebut.';
$string['manageactionsharedone'] = 'Formulir berhasil disimpan sebagai templat';
$string['noitemid'] = 'Penilaian tidak mungkin. Item yang dinilai tidak ada.';
$string['nosharedformfound'] = 'Template tidak ditemukan';
$string['privacy:metadata:grading_definitions'] = 'Informasi dasar tentang formulir penilaian tingkat lanjut yang ditentukan di area yang dapat dinilai.';
$string['privacy:metadata:grading_definitions:areaid'] = 'ID area tempat formulir penilaian lanjutan ditentukan.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ID definisi penilaian dari mana ini disalin.';
$string['privacy:metadata:grading_definitions:description'] = 'Deskripsi metode penilaian lanjutan.';
$string['privacy:metadata:grading_definitions:method'] = 'Metode penilaian yang bertanggung jawab untuk definisi.';
$string['privacy:metadata:grading_definitions:name'] = 'Nama definisi penilaian lanjutan.';
$string['privacy:metadata:grading_definitions:options'] = 'Beberapa setelan definisi penilaian ini.';
$string['privacy:metadata:grading_definitions:status'] = 'Status definisi penilaian lanjutan ini.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Waktu ketika definisi penilaian disalin.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Waktu ketika definisi penilaian dibuat.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Waktu saat definisi penilaian terakhir diubah.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID pengguna yang membuat definisi penilaian.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID pengguna yang terakhir mengubah definisi penilaian.';
$string['privacy:metadata:grading_instances'] = 'Rekaman penilaian untuk satu item yang dapat dinilai, dinilai oleh satu penilai.';
$string['privacy:metadata:grading_instances:feedback'] = 'Umpan balik yang diberikan oleh pengguna.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Format teks dari umpan balik yang diberikan oleh pengguna.';
$string['privacy:metadata:grading_instances:raterid'] = 'ID pengguna yang menilai model penilaian.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Nilai untuk model penilaian.';
$string['privacy:metadata:grading_instances:status'] = 'Status model penilaian ini.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Waktu saat model penilaian terakhir diubah.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Data untuk metode penilaian.';
$string['searchownforms'] = 'sertakan formulir saya sendiri';
$string['searchtemplate'] = 'Pencarian formulir penilaian';
$string['searchtemplate_help'] = 'Anda dapat mencari formulir penilaian dan menggunakannya sebagai templat untuk formulir penilaian baru di sini. Cukup ketik kata-kata yang seharusnya muncul di suatu tempat dalam nama formulir, deskripsi. Untuk mencari frasa, bungkus seluruh kueri dalam tanda kutip ganda. Secara default, hanya formulir penilaian yang telah disimpan sebagai templat bersama yang dimasukkan dalam hasil pencarian. Anda juga dapat menyertakan semua formulir penilaian Anda sendiri dalam hasil pencarian. Dengan cara ini, Anda dapat menggunakan kembali formulir penilaian Anda tanpa membagikannya. Hanya formulir yang ditandai sebagai \'Siap digunakan\' yang dapat digunakan kembali dengan cara ini.';
$string['statusdraft'] = 'Konsep';
$string['statusready'] = 'Siap digunakan';
$string['templatedelete'] = 'Hapus';
$string['templatedeleteconfirm'] = 'Anda akan menghapus templat bersama \'{$a}\'. Menghapus templat tidak memengaruhi formulir yang sudah ada.';
$string['templateedit'] = 'Edit';
$string['templatepick'] = 'Gunakan template ini';
$string['templatepickconfirm'] = 'Apakah Anda ingin menggunakan formulir penilaian \'{$a->formname}\' sebagai templat untuk formulir penilaian baru di \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Gunakan formulir ini sebagai templat';
$string['templatesource'] = 'Lokasi: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Formulir sendiri';
$string['templatetypeshared'] = 'Berbagi templat';
