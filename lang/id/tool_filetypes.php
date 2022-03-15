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
 * Strings for component 'tool_filetypes', language 'id', version '3.11'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Tambahkan jenis berkas baru';
$string['corestring'] = 'String bahasa alternatif';
$string['corestring_help'] = 'Setelan ini dapat digunakan untuk memilih string bahasa yang berbeda dari berkas bahasa inti mimetypes.php. Umumnya harus dibiarkan kosong. Untuk jenis kustom, gunakan ruas deskripsi.';
$string['defaulticon'] = 'Ikon bawaan untuk tipe MIME';
$string['defaulticon_help'] = 'Jika ada beberapa ekstensi berkas dengan jenis MIME yang sama, pilih opsi ini untuk salah satu ekstensi sehingga ikonnya akan digunakan saat menentukan ikon dari jenis MIME.';
$string['delete_confirmation'] = 'Apakah Anda benar-benar yakin ingin menghapus <strong>.{$a}</strong>?';
$string['deletea'] = 'Hapus {$a}';
$string['deletefiletypes'] = 'Hapus jenis berkas';
$string['description'] = 'Deskripsi kustom';
$string['description_help'] = 'Deskripsi jenis berkas sederhana, mis. \'Ebook Kindle\'. Jika situs Anda mendukung beberapa bahasa dan menggunakan filter multibahasa, Anda dapat memasukkan tag multibahasa di ruas ini untuk memberikan deskripsi dalam berbagai bahasa.';
$string['descriptiontype'] = 'Jenis deskripsi';
$string['descriptiontype_custom'] = 'Deskripsi khusus yang ditentukan dalam formulir ini';
$string['descriptiontype_default'] = 'Bawaan (tipe MIME atau string bahasa yang sesuai jika tersedia)';
$string['descriptiontype_help'] = 'Ada tiga cara yang mungkin untuk menentukan deskripsi.

* Perilaku bawaan menggunakan tipe MIME. Jika ada string bahasa di mimetypes.php yang sesuai dengan tipe MIME itu, itu akan digunakan; jika tidak, tipe MIME itu sendiri akan ditampilkan kepada pengguna.
* Anda dapat menentukan deskripsi khusus pada formulir ini.
* Anda dapat menentukan nama string bahasa di mimetypes.php untuk digunakan sebagai ganti tipe MIME.';
$string['descriptiontype_lang'] = 'String bahasa alternatif (dari mimetypes.php)';
$string['displaydescription'] = 'Deskripsi';
$string['editfiletypes'] = 'Edit jenis berkas yang ada';
$string['emptylist'] = 'Tidak ada jenis file yang ditentukan.';
$string['error_addentry'] = 'Ekstensi jenis berkas, deskripsi, jenis MIME, dan ikon tidak boleh berisi umpan baris dan karakter titik koma.';
$string['error_defaulticon'] = 'Ekstensi berkas lain dengan jenis MIME yang sama sudah ditandai sebagai ikon default.';
$string['error_extension'] = 'Ekstensi jenis berkas <strong>{$a}</strong> sudah ada atau tidak valid. Ekstensi berkas harus unik dan tidak boleh berisi karakter khusus.';
$string['error_notfound'] = 'Jenis berkas dengan ekstensi {$a} tidak dapat ditemukan.';
$string['extension'] = 'Ekstensi';
$string['extension_help'] = 'Ekstensi nama berkas tanpa titik, mis. \'mobi\'';
$string['groups'] = 'Ketik grup';
$string['groups_help'] = 'Daftar opsional dari grup tipe file tempat tipe ini berada. Ini adalah kategori umum seperti \'dokumen\' dan \'gambar\'.';
$string['icon'] = 'Berkas ikon';
$string['icon_help'] = 'Nama berkas ikon.

Daftar ikon diambil dari direktori /pix/f di dalam instalasi Moodle Anda. Anda dapat menambahkan ikon khusus ke folder ini jika diperlukan.';
$string['mimetype'] = 'Jenis MIME';
$string['mimetype_help'] = 'Jenis MIME yang terkait dengan jenis berkas ini, mis. \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Jenis barkas';
$string['privacy:metadata'] = 'Pengaya Jenis berkas tidak menyimpan data pribadi apa pun.';
$string['revert'] = 'Pulihkan {$a} ke bawaan Moodle';
$string['revert_confirmation'] = 'Apakah Anda yakin ingin mengembalikan <strong>.{$a}</strong> ke bawaan Moodle, membuang perubahan Anda?';
$string['revertfiletype'] = 'Kembalikan jenis berkas';
$string['source'] = 'Jenis';
$string['source_custom'] = 'Kustom';
$string['source_deleted'] = 'Dihapus';
$string['source_modified'] = 'Dimodifikasi';
$string['source_standard'] = 'Standar';
