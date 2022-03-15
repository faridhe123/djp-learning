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
 * Strings for component 'tool_uploaduser', language 'id', version '3.11'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Izinkan penghapusan';
$string['allowrenames'] = 'Izinkan penggantian nama';
$string['allowsuspends'] = 'Izinkan penangguhan dan pengaktifan akun';
$string['assignedsysrole'] = 'Peran sistem yang ditetapkan {$a}';
$string['clidefault'] = 'Bawaan:';
$string['clierrorargument'] = 'Nilai untuk argumen --{$a->name} tidak valid. Nilai yang diizinkan: {$a->nilai}';
$string['clifile'] = 'Jalur ke berkas CSV dengan data pengguna. Dibutuhkan.';
$string['clifilenotreadable'] = 'File {$a} tidak ada atau tidak dapat dibaca';
$string['clihelp'] = 'Cetak bantuan ini.';
$string['climissingargument'] = 'Argumen - {$a} diperlukan';
$string['clititle'] = 'Alat unggah pengguna berbasis baris perintah.';
$string['clivalidationerror'] = 'Kesalahan validasi:';
$string['csvdelimiter'] = 'Pembatas CSV';
$string['defaultvalues'] = 'Nilai bawaan';
$string['deleteerrors'] = 'Hapus kesalahan';
$string['encoding'] = 'Pengodean';
$string['errormnetadd'] = 'Tidak dapat menambahkan pengguna jarak jauh';
$string['errorprefix'] = 'Galat';
$string['errors'] = 'Galat';
$string['examplecsv'] = 'Berkas teks contoh';
$string['examplecsv_help'] = 'Untuk menggunakan berkas teks contoh, unduh kemudian buka dengan editor teks atau spreadsheet. Biarkan baris pertama tidak berubah, lalu edit baris (record) berikut dan tambahkan data pengguna Anda, tambahkan lebih banyak baris seperlunya. Simpan file sebagai CSV lalu unggah. Berkas teks contoh juga dapat digunakan untuk pengujian, karena Anda dapat melihat data pengguna dan dapat memilih untuk membatalkan tindakan sebelum akun pengguna dibuat.';
$string['infoprefix'] = 'Info:';
$string['invalidtheme'] = 'Tema "{$a}" tidak dipasang dan akan diabaikan.';
$string['invalidupdatetype'] = 'Opsi ini tidak dapat dipilih dengan jenis unggahan yang dipilih.';
$string['invaliduserdata'] = 'Data tidak valid terdeteksi untuk pengguna {$a} dan telah dibersihkan secara otomatis.';
$string['linex'] = 'Baris {$a}';
$string['nochanges'] = 'tidak ada perubahan';
$string['notheme'] = 'Tidak ada tema yang ditentukan untuk pengguna ini.';
$string['pluginname'] = 'Unggah pengguna';
$string['privacy:metadata'] = 'Pengaya Unggah Pengguna tidak menyimpan data pribadi apa pun.';
$string['renameerrors'] = 'Galat penggantian nama';
$string['requiredtemplate'] = 'Yg dibutuhkan. Anda dapat menggunakan sintaks templat di sini (%l = lastname, %f = firstname, %u = userrname). Lihat bantuan untuk detail dan contoh.';
$string['rowpreviewnum'] = 'Pratinjau baris';
$string['unassignedsysrole'] = 'Peran sistem tidak ditetapkan {$a}';
$string['uploadpicture_baduserfield'] = 'Atribut pengguna yang ditentukan tidak valid. Tolong, coba lagi.';
$string['uploadpicture_cannotmovezip'] = 'Tidak dapat memindahkan berkas zip ke direktori sementara.';
$string['uploadpicture_cannotprocessdir'] = 'Tidak dapat memproses berkas yang tidak di-zip.';
$string['uploadpicture_cannotsave'] = 'Tidak dapat menyimpan gambar untuk pengguna {$a}. Periksa berkas gambar asli.';
$string['uploadpicture_cannotunzip'] = 'Tidak dapat mengurai berkas gambar';
$string['uploadpicture_invalidfilename'] = 'Berkas gambar {$a} memiliki karakter yang tidak valid dalam namanya. Lewati.';
$string['uploadpicture_overwrite'] = 'Timpa gambar pengguna yang ada?';
$string['uploadpicture_userfield'] = 'Atribut pengguna yang digunakan untuk mencocokkan gambar:';
$string['uploadpicture_usernotfound'] = 'Pengguna dengan nilai \'{$a->userfield}\' dari \'{$a->uservalue}\' tidak ada. Lewati.';
$string['uploadpicture_userskipped'] = 'Lewati pengguna {$a} (sudah memiliki gambar).';
$string['uploadpicture_userupdated'] = 'Gambar diperbarui untuk pengguna {$a}.';
$string['uploadpictures'] = 'Unggah gambar pengguna';
$string['uploadpictures_help'] = 'Gambar pengguna dapat diunggah sebagai file berkas dari berkas gambar. Berkas gambar harus diberi nama selected-user-attribute.extension, misalnya user1234.jpg untuk pengguna dengan nama pengguna user1234.';
$string['uploaduser:uploaduserpictures'] = 'Unggah gambar pengguna';
$string['uploadusers'] = 'Unggah pengguna';
$string['uploadusers_help'] = 'Pengguna dapat diunggah (dan secara opsional terdaftar dalam kursus) melalui berkas teks. Format berkas harus sebagai berikut:

* Setiap baris berkas berisi satu rekaman
* Setiap record adalah rangkaian data yang dipisahkan dengan koma (atau pembatas lainnya)
* Catatan pertama berisi daftar nama kolom yang menentukan format berkas lainnya
* Nama ruas yang diperlukan adalah username, password, firstname, lastname, email';
$string['uploaduserspreview'] = 'Pratinjau unggah pengguna';
$string['uploadusersresult'] = 'Hasil unggah pengguna';
$string['useraccountupdated'] = 'Pengguna diperbarui';
$string['useraccountuptodate'] = 'Pengguna terkini';
$string['userdeleted'] = 'Pengguna dihapus';
$string['userrenamed'] = 'Pengguna diganti nama';
$string['userscreated'] = 'Pengguna dibuat';
$string['usersdeleted'] = 'Pengguna dihapus';
$string['usersrenamed'] = 'Pengguna diganti nama';
$string['usersskipped'] = 'Pengguna dilewati';
$string['usersupdated'] = 'Pengguna diperbarui';
$string['usersweakpassword'] = 'Pengguna memiliki kata sandi yang lemah';
$string['userthemesnotallowed'] = 'Tema pengguna tidak diaktifkan, jadi semua yang disertakan dalam unggahan berkas pengguna akan diabaikan.';
$string['uubulk'] = 'Pilih untuk tindakan pengguna massal';
$string['uubulkall'] = 'Semua pengguna';
$string['uubulknew'] = 'Pengguna baru';
$string['uubulkupdated'] = 'Pengguna diperbarui';
$string['uucsvline'] = 'Baris CSV';
$string['uulegacy1role'] = '(Siswa Asli) tipeN = 1';
$string['uulegacy2role'] = '(Pengajar Asli) typeN=2';
$string['uulegacy3role'] = '(Pengajar noneditor asli) typeN=3';
$string['uunoemailduplicates'] = 'Cegah alamat surel duplikat';
$string['uuoptype'] = 'Jenis unggahan';
$string['uuoptype_addinc'] = 'Tambahkan semua, tambahkan nomor ke nama pengguna jika diperlukan';
$string['uuoptype_addnew'] = 'Hanya tambahkan yang baru, lewati pengguna yang ada';
$string['uuoptype_addupdate'] = 'Tambahkan pengguna dan perbarui pengguna yang ada';
$string['uuoptype_update'] = 'Perbarui pengguna yang ada saja';
$string['uupasswordcron'] = 'Dihasilkan di cron';
$string['uupasswordnew'] = 'Kata sandi pengguna baru';
$string['uupasswordold'] = 'Kata sandi pengguna yang sudah ada';
$string['uustandardusernames'] = 'Standarkan nama pengguna';
$string['uuupdateall'] = 'Timpa dengan berkas dan bawaan';
$string['uuupdatefromfile'] = 'Timpa dengan berkas';
$string['uuupdatemissing'] = 'Isi kekosongan dari berkas dan bawaan';
$string['uuupdatetype'] = 'Detail pengguna yang sudah ada';
$string['uuusernametemplate'] = 'Templat nama pengguna';
$string['warningprefix'] = 'Peringatan:';
