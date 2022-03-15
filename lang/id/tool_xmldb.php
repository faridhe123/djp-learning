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
 * Strings for component 'tool_xmldb', language 'id', version '3.11'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Aktual';
$string['addpersistent'] = 'Tambahkan ruas persisten wajib';
$string['aftertable'] = 'Setelah tabel:';
$string['back'] = 'Kembali';
$string['backtomainview'] = 'Kembali ke utama';
$string['cannotuseidfield'] = 'Tidak dapat menyisipkan bidang "id". Ini adalah kolom autonumerik';
$string['change'] = 'Perubahan';
$string['charincorrectlength'] = 'Panjang salah untuk ruas \'char\'';
$string['check_bigints'] = 'Cari bilangan bulat DB yang salah';
$string['check_defaults'] = 'Cari nilai bawaan yang tidak konsisten';
$string['check_foreign_keys'] = 'Cari pelanggaran kunci asing';
$string['check_indexes'] = 'Cari indeks DB yang hilang';
$string['check_oracle_semantics'] = 'Cari semantik panjang yang salah';
$string['checkbigints'] = 'Periksa bilangan bulat';
$string['checkdefaults'] = 'Periksa bawaan';
$string['checkforeignkeys'] = 'Periksa kunci asing';
$string['checkindexes'] = 'Periksa indeks';
$string['checkoraclesemantics'] = 'Periksa semantik';
$string['completelogbelow'] = '(lihat log lengkap pencarian di bawah)';
$string['confirmcheckbigints'] = 'Fungsi ini akan mencari <a href="https://tracker.moodle.org/browse/MDL-11038">potensi bidang bilangan bulat yang salah</a> di server Moodle Anda, menghasilkan (tetapi tidak mengeksekusi!) secara otomatis yang diperlukan Pernyataan SQL agar semua bilangan bulat di DB Anda didefinisikan dengan benar. Setelah dibuat, Anda dapat menyalin pernyataan tersebut dan menjalankannya dengan aman dengan antarmuka SQL favorit Anda (jangan lupa untuk mencadangkan data Anda sebelum melakukannya). Sangat disarankan untuk menjalankan (+ versi) terbaru yang tersedia dari rilis Moodle Anda sebelum menjalankan pencarian bilangan bulat yang salah. Fungsionalitas ini tidak melakukan tindakan apa pun terhadap DB (hanya membaca darinya), sehingga dapat dieksekusi dengan aman kapan saja.';
$string['confirmcheckdefaults'] = 'Fungsionalitas ini akan mencari nilai bawaan yang tidak konsisten di server Moodle Anda, menghasilkan (tetapi tidak mengeksekusi!) pernyataan SQL yang diperlukan agar semua nilai bawaan didefinisikan dengan benar. Setelah dibuat, Anda dapat menyalin pernyataan tersebut dan menjalankannya dengan aman dengan antarmuka SQL favorit Anda (jangan lupa untuk mencadangkan data Anda sebelum melakukannya). Sangat disarankan untuk menjalankan (+ versi) terbaru yang tersedia dari rilis Moodle Anda sebelum menjalankan pencarian nilai bawaan yang tidak konsisten. Fungsionalitas ini tidak melakukan tindakan apa pun terhadap DB (hanya membaca darinya), sehingga dapat dieksekusi dengan aman kapan saja.';
$string['confirmcheckforeignkeys'] = 'Fungsionalitas ini akan mencari potensi pelanggaran kunci asing yang ditentukan dalam definisi install.xml. (Moodle saat ini tidak menghasilkan batasan kunci asing yang sebenarnya dalam basis data, itulah sebabnya data yang tidak valid mungkin ada.)

Sangat disarankan untuk menjalankan (+ versi) terbaru yang tersedia dari rilis Moodle Anda sebelum menjalankan pencarian potensi pelanggaran kunci asing.

Fungsionalitas ini tidak melakukan tindakan apa pun terhadap DB (hanya membaca darinya), sehingga dapat dieksekusi dengan aman kapan saja.';
$string['confirmcheckindexes'] = 'Fungsionalitas ini akan mencari indeks potensial yang hilang di server Moodle Anda, menghasilkan (tetapi tidak mengeksekusi!) secara otomatis pernyataan SQL yang diperlukan untuk menjaga semuanya diperbarui. Setelah dibuat, Anda dapat menyalin pernyataan tersebut dan menjalankannya dengan aman dengan antarmuka SQL favorit Anda (jangan lupa untuk mencadangkan data Anda sebelum melakukannya). Sangat disarankan untuk menjalankan (+ versi) terbaru yang tersedia dari rilis Moodle Anda sebelum menjalankan pencarian indeks yang hilang. Fungsionalitas ini tidak melakukan tindakan apa pun terhadap DB (hanya membaca darinya), sehingga dapat dieksekusi dengan aman kapan saja.';
$string['confirmcheckoraclesemantics'] = 'Fungsi ini akan mencari <a href="https://tracker.moodle.org/browse/MDL-29322">Kolom Oracle varchar2 menggunakan semantik BYTE</a> di server Moodle Anda, menghasilkan (tetapi tidak mengeksekusi!) secara otomatis pernyataan SQL yang diperlukan agar semua kolom dikonversi untuk menggunakan semantik CHAR (lebih baik untuk kompatibilitas lintas-db dan meningkatkan panjang maks. konten). Setelah dibuat, Anda dapat menyalin pernyataan tersebut dan menjalankannya dengan aman dengan antarmuka SQL favorit Anda (jangan lupa untuk mencadangkan data Anda sebelum melakukannya). Sangat disarankan untuk menjalankan (+ versi) terbaru yang tersedia dari rilis Moodle Anda sebelum menjalankan pencarian semantik BYTE. Fungsionalitas ini tidak melakukan tindakan apa pun terhadap DB (hanya membaca darinya), sehingga dapat dieksekusi dengan aman kapan saja.';
$string['confirmdeletefield'] = 'Apakah Anda benar-benar yakin ingin menghapus ruas:';
$string['confirmdeleteindex'] = 'Apakah Anda benar-benar yakin ingin menghapus indeks:';
$string['confirmdeletekey'] = 'Apakah Anda benar-benar yakin ingin menghapus kunci:';
$string['confirmdeletetable'] = 'Apakah Anda benar-benar yakin ingin menghapus tabel:';
$string['confirmdeletexmlfile'] = 'Apakah Anda benar-benar yakin ingin menghapus berkas:';
$string['confirmrevertchanges'] = 'Apakah Anda benar-benar yakin ingin mengembalikan perubahan yang dilakukan selama:';
$string['create'] = 'Buat';
$string['createtable'] = 'Buat tabel:';
$string['defaultincorrect'] = 'Bawaan salah';
$string['delete'] = 'Hapus';
$string['delete_field'] = 'Hapus ruas';
$string['delete_index'] = 'Hapus indeks';
$string['delete_key'] = 'Hapus kunci';
$string['delete_table'] = 'Hapus tabel';
$string['delete_xml_file'] = 'Hapus berkas XML';
$string['doc'] = 'Dok';
$string['docindex'] = 'Indeks dokumentasi:';
$string['documentationintro'] = 'Dokumentasi ini dihasilkan secara otomatis dari definisi basis data XMLDB. Ini hanya tersedia dalam bahasa Inggris.';
$string['down'] = 'Turun';
$string['duplicate'] = 'Duplikat';
$string['duplicatefieldname'] = 'Ruas lain dengan nama itu ada';
$string['duplicatefieldsused'] = 'Ruas duplikat digunakan';
$string['duplicateindexname'] = 'Nama indeks duplikat';
$string['duplicatekeyname'] = 'Kunci lain dengan nama itu ada';
$string['duplicatetablename'] = 'Tabel lain dengan nama itu ada';
$string['edit'] = 'Edit';
$string['edit_field'] = 'Edit ruas';
$string['edit_field_save'] = 'Simpan ruas';
$string['edit_index'] = 'Edit indeks';
$string['edit_index_save'] = 'Simpan indeks';
$string['edit_key'] = 'Edit kunci';
$string['edit_key_save'] = 'Simpan kunci';
$string['edit_table'] = 'Edit tabel';
$string['edit_table_save'] = 'Simpan tabel';
$string['edit_xml_file'] = 'Edit berkas XML';
$string['enumvaluesincorrect'] = 'Nilai salah untuk ruas enum';
$string['expected'] = 'Diharapkan';
$string['extensionrequired'] = 'Maaf - ekstensi PHP \'{$a}\' diperlukan untuk tindakan ini. Silakan instal ekstensi jika Anda ingin menggunakan fitur ini.';
$string['extraindexesfound'] = 'Indeks tambahan ditemukan';
$string['field'] = 'Ruras';
$string['fieldnameempty'] = 'Nama ruas kosong';
$string['fields'] = 'Ruas';
$string['fieldsnotintable'] = 'Ruas tidak ada pada tabel';
$string['fieldsusedinindex'] = 'Ruas ini digunakan sebagai indeks';
$string['fieldsusedinkey'] = 'Ruas digunakan sebagai kunci.';
$string['filemodifiedoutfromeditor'] = 'Peringatan: Berkas dimodifikasi secara lokal saat menggunakan Editor XMLDB. Menyimpan akan menimpa perubahan lokal.';
$string['filenotwriteable'] = 'Berkas tidak dapat ditulisi';
$string['fkunknownfield'] = 'Kunci asing {$a->keyname} pada tabel {$a->tablename} menunjuk ke ruas yang tidak ada {$a->reffield} di tabel referensi {$a->reftable}.';
$string['fkunknowntable'] = 'Kunci asing {$a->keyname} pada tabel {$a->tablename} menunjuk ke tabel yang tidak ada {$a->reftable}.';
$string['fkviolationdetails'] = 'Kunci asing {$a->keyname} pada tabel {$a->tablename} dilanggar oleh {$a->numviolations} dari {$a->numrows} baris.';
$string['float2numbernote'] = 'Pemberitahuan: Meskipun ruas "float" 100% didukung oleh XMLDB, disarankan untuk bermigrasi ke bidang "angka".';
$string['floatincorrectdecimals'] = 'Jumlah desimal yang salah untuk ruas float';
$string['floatincorrectlength'] = 'Panjang salah untuk ruas pelampung';
$string['generate_all_documentation'] = 'Semua dokumentasi';
$string['generate_documentation'] = 'Dokumentasi';
$string['gotolastused'] = 'Buka berkas yang terakhir digunakan';
$string['incorrectfieldname'] = 'Nama yang salah';
$string['incorrectindexname'] = 'Nama indeks salah';
$string['incorrectkeyname'] = 'Nama kunci salah';
$string['incorrecttablename'] = 'Nama tabel salah';
$string['index'] = 'Indeks';
$string['indexes'] = 'Indeks';
$string['indexnameempty'] = 'Nama indeks kosong';
$string['integerincorrectlength'] = 'Panjang salah untuk ruas bilangan bulat';
$string['key'] = 'Kunci';
$string['keynameempty'] = 'Nama kunci tidak boleh kosong';
$string['keys'] = 'Kunci';
$string['listreservedwords'] = 'Daftar kata-kata yang dicadangkan<br />(digunakan untuk menjaga <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">kata-kata yang dicadangkan XMLDB</a>)';
$string['load'] = 'Muat';
$string['main_view'] = 'Tampilan utama';
$string['masterprimaryuniqueordernomatch'] = 'Ruas di kunci asing Anda harus terdaftar dalam urutan yang sama seperti yang tercantum dalam KUNCI UNIK pada tabel yang direferensikan.';
$string['missing'] = 'Hilang';
$string['missingindexes'] = 'Indeks yang hilang ditemukan';
$string['mustselectonefield'] = 'Anda harus memilih satu field untuk melihat aksi field yang terkait!';
$string['mustselectoneindex'] = 'Anda harus memilih satu index untuk melihat aksi index yang terkait!';
$string['mustselectonekey'] = 'Anda harus memilih satu key untuk melihat aksi key yang terkait!';
$string['new_table_from_mysql'] = 'Tabel baru dari MySQL';
$string['newfield'] = 'Ruas baru';
$string['newindex'] = 'Indeks baru';
$string['newkey'] = 'Kunci baru';
$string['newtable'] = 'Tabel baru';
$string['newtablefrommysql'] = 'Tabel baru dari MySQL';
$string['nofieldsspecified'] = 'Tidak ada ruas yang ditentukan';
$string['nomasterprimaryuniquefound'] = 'Kolom yang menjadi referensi kunci asing Anda harus disertakan dalam KUNCI utama atau unik dalam tabel yang direferensikan. Perhatikan bahwa kolom yang berada di UNIQUE INDEX tidak cukup baik.';
$string['nomissingorextraindexesfound'] = 'Tidak ada indeks yang hilang atau ekstra yang ditemukan, jadi tidak diperlukan tindakan lebih lanjut.';
$string['noreffieldsspecified'] = 'Tidak ada ruas referensi yang ditentukan';
$string['noreftablespecified'] = 'Tabel referensi yang ditentukan tidak ditemukan';
$string['noviolatedforeignkeysfound'] = 'Tidak ditemukan kunci asing yang dilanggar';
$string['nowrongdefaultsfound'] = 'Tidak ada nilai bawaan yang tidak konsisten yang ditemukan, DB Anda tidak memerlukan tindakan lebih lanjut.';
$string['nowrongintsfound'] = 'Tidak ada bilangan bulat yang salah yang ditemukan, DB Anda tidak memerlukan tindakan lebih lanjut.';
$string['nowrongoraclesemanticsfound'] = 'Tidak ada kolom Oracle yang menggunakan semantik BYTE yang ditemukan, DB Anda tidak memerlukan tindakan lebih lanjut.';
$string['numberincorrectdecimals'] = 'Jumlah desimal yang salah untuk ruas angka';
$string['numberincorrectlength'] = 'Panjang salah untuk ruas angka';
$string['numberincorrectwholepart'] = 'Ruas bilangan bulat terlalu besar untuk ruas bilangan';
$string['pendingchanges'] = 'Catatan: Anda telah melakukan perubahan pada berkas ini. Mereka dapat diselamatkan kapan saja.';
$string['pendingchangescannotbesaved'] = 'Ada perubahan dalam berkas ini tetapi tidak dapat disimpan! Harap verifikasi bahwa direktori dan "install.xml" di dalamnya memiliki izin menulis untuk server web.';
$string['pendingchangescannotbesavedreload'] = 'Ada perubahan dalam berkas ini tetapi tidak dapat disimpan! Harap verifikasi bahwa direktori dan "install.xml" di dalamnya memiliki izin menulis untuk server web. Kemudian muat ulang halaman ini dan Anda seharusnya dapat menyimpan perubahan itu.';
$string['persistentfieldscomplete'] = 'Ruas berikut telah ditambahkan:';
$string['persistentfieldsconfirm'] = 'Apakah Anda ingin menambahkan ruas berikut:';
$string['persistentfieldsexist'] = 'Ruas berikut sudah ada:';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Kunci utama tidak boleh null';
$string['privacy:metadata'] = 'Pengaya editor XMLDB tidak menyimpan data pribadi apa pun.';
$string['reserved'] = 'Dicadangkan';
$string['reservedwords'] = 'Kata yang dicadangkan';
$string['revert'] = 'kembalikan';
$string['revert_changes'] = 'Kembalikan perubahan';
$string['save'] = 'Simpan';
$string['searchresults'] = 'Hasil pencarian';
$string['selectaction'] = 'Pilih tindakan:';
$string['selectdb'] = 'Pilih basis data:';
$string['selectfieldkeyindex'] = 'Pilih ruas/kunci/indeks:';
$string['selectonecommand'] = 'Silakan pilih satu tindakan dari daftar untuk melihat kode PHP';
$string['selectonefieldkeyindex'] = 'Silakan pilih satu ruas/kunci/indeks dari daftar untuk melihat kode PHP';
$string['selecttable'] = 'Pilih tabel:';
$string['table'] = 'Tabel';
$string['tablenameempty'] = 'Nama tael tidak boleh kosong';
$string['tables'] = 'Tabel';
$string['unknownfield'] = 'Mengacu pada ruas yang tidak diketahui';
$string['unknowntable'] = 'Mengacu pada tabel yang tidak diketahui';
$string['unload'] = 'Tidak memuat';
$string['up'] = 'Naik';
$string['view'] = 'Lihat';
$string['view_reserved_words'] = 'Lihat kata-kata yang dipesan';
$string['view_structure_php'] = 'Lihat struktur PHP';
$string['view_structure_sql'] = 'Lihat struktur SQL';
$string['view_table_php'] = 'Lihat tabel PHP';
$string['view_table_sql'] = 'Lihat tabel SQL';
$string['viewedited'] = 'Lihat yang diedit';
$string['vieworiginal'] = 'Lihat asli';
$string['viewphpcode'] = 'Lihat kode PHP';
$string['viewsqlcode'] = 'Lihat kode SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Kunci asing yang dilanggar';
$string['violatedforeignkeysfound'] = 'Kunci asing yang dilanggar ditemukan';
$string['violations'] = 'Pelanggaran';
$string['wrong'] = 'Salah';
$string['wrongdefaults'] = 'Kesalahan bawaan ditemukan';
$string['wrongints'] = 'Integer salah ditemukan';
$string['wronglengthforenum'] = 'Panjang salah untuk ruas enum';
$string['wrongnumberofreffields'] = 'Jumlah ruas referensi salah';
$string['wrongoraclesemantics'] = 'Ditemukan semantik Oracle BYTE yang salah';
$string['wrongreservedwords'] = 'Kata-kata cadangan yang saat ini digunakan<br />(perhatikan bahwa nama tabel tidak penting jika menggunakan $CFG->prefix)';
$string['yesextraindexesfound'] = 'Indeks tambahan berikut ditemukan.';
$string['yesmissingindexesfound'] = '<p>Beberapa indeks yang hilang telah ditemukan di DB Anda. Berikut adalah detailnya dan pernyataan SQL yang diperlukan untuk dieksekusi dengan antarmuka SQL favorit Anda untuk membuat semuanya. Ingatlah untuk membuat cadangan data Anda terlebih dahulu!</p>
<p>Setelah melakukannya, sangat disarankan untuk menjalankan utilitas ini lagi untuk memeriksa bahwa tidak ada lagi indeks yang hilang.</p>';
$string['yeswrongdefaultsfound'] = '<p>Beberapa BAWAAN yang tidak konsisten telah ditemukan di DB Anda. Berikut adalah detailnya dan pernyataan SQL yang diperlukan untuk dieksekusi dengan antarmuka SQL favorit Anda untuk memperbaiki semuanya. Ingatlah untuk mencadangkan data Anda terlebih dahulu!</p> <p>Setelah melakukannya, sangat disarankan untuk menjalankan utilitas ini lagi untuk memeriksa bahwa tidak ada lagi default yang tidak konsisten yang ditemukan.</p>';
$string['yeswrongintsfound'] = '<p>Beberapa bilangan bulat yang salah telah ditemukan di DB Anda. Berikut adalah detailnya dan pernyataan SQL yang diperlukan untuk dieksekusi dengan antarmuka SQL favorit Anda untuk memperbaikinya. Ingatlah untuk mencadangkan data Anda terlebih dahulu!</p> <p>Setelah memperbaikinya, sangat disarankan untuk menjalankan utilitas ini lagi untuk memeriksa bahwa tidak ada lagi bilangan bulat yang salah ditemukan.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Beberapa kolom Oracle yang menggunakan semantik BYTE telah ditemukan di DB Anda. Berikut adalah detailnya dan pernyataan SQL yang diperlukan untuk dieksekusi dengan antarmuka SQL favorit Anda untuk mengonversi semuanya. Ingatlah untuk membuat cadangan data Anda terlebih dahulu!</p>
<p>Setelah melakukannya, sangat disarankan untuk menjalankan utilitas ini lagi untuk memeriksa bahwa tidak ada lagi semantik yang salah ditemukan.</p>';
