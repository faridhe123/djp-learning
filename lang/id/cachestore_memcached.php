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
 * Strings for component 'cachestore_memcached', language 'id', version '3.11'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Penyangga tulis';
$string['bufferwrites_help'] = 'Mengaktifkan atau menonaktifkan penyangga I/O. Mengaktifkan penyangga I/O menyebabkan perintah penyimpanan menjadi "penyangga" alih-alih dikirim. Setiap tindakan yang mengambil data menyebabkan penyangga ini dikirim ke koneksi jarak jauh. Menghentikan koneksi atau menutup koneksi juga akan menyebabkan data penyangga didorong ke koneksi jarak jauh.';
$string['clustered'] = 'Aktifkan server klaster';
$string['clustered_help'] = 'This is used to allow read-one, set-multi functionality.

The intended use case is to create an improved store for load-balanced configurations. The store will fetch from one server (usually localhost), but set to many (all the servers in the load-balance pool). For caches with very high read to set ratios, this saves a significant amount of network overhead.

When this setting is enabled, the server listed above will be used for fetching.';
$string['clusteredheader'] = 'Bagi server';
$string['hash'] = 'Metode hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Bawaan (satu per satu)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Menentukan algoritma hashing yang digunakan untuk kunci item. Setiap algoritma hash memiliki kelebihan dan kekurangannya masing-masing. Pergi dengan bawaan jika Anda tidak tahu atau tidak peduli.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Tembolok bersama';
$string['isshared_help'] = 'Apakah server memcached Anda juga digunakan oleh aplikasi lain?

Jika tembolok digunakan bersama oleh aplikasi lain, maka setiap kunci akan dihapus satu per satu untuk memastikan bahwa hanya data yang dimiliki oleh aplikasi ini yang dihapus (tidak mengubah data tembolok aplikasi eksternal). Hal ini dapat mengakibatkan penurunan kinerja saat membersihkan tembolok, tergantung pada konfigurasi server Anda.

Jika Anda menjalankan tembolok khusus untuk aplikasi ini, maka seluruh tembolok dapat dihapus dengan aman tanpa risiko merusak data tembolok aplikasi lain. Ini akan menghasilkan peningkatan kinerja saat membersihkan tembolok.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Prefiks kunci';
$string['prefix_help'] = 'Dapat digunakan untuk membuat "domain" untuk kunci item Anda yang memungkinkan Anda membuat beberapa penyimpanan memcached pada satu instalasi memcached. Tidak boleh lebih dari 16 karakter untuk memastikan masalah panjang kunci tidak ditemukan.';
$string['prefixinvalid'] = 'Prefiks tidak valid. Anda hanya dapat menggunakan a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'Plugin penyimpanan tembolok Memcached menyimpan data secara singkat sebagai bagian dari fungsi cachingnya. Data ini disimpan di server Memcache tempat data dihapus secara berkala.';
$string['privacy:metadata:memcached:data'] = 'Berbagai data yang disimpan dalam cache';
$string['serialiser_igbinary'] = 'Serializer igbinary.';
$string['serialiser_json'] = 'Serializer JSON.';
$string['serialiser_php'] = 'Serializer PHP bawaan.';
$string['servers'] = 'Server';
$string['servers_help'] = 'Penetapan server yang harus digunakan oleh adaptor memcached ini.
Server harus didefinisikan satu per baris dan terdiri dari alamat server dan secara opsional porta dan bobot.
Jika tidak ada porta yang disediakan maka porta bawaan (11211) digunakan.

Sebagai contoh:
<pre>
server.url.com
alamat ipad: port
servername:port:weight
</pre>

Jika *Aktifkan klaster server* diaktifkan di bawah, hanya boleh ada satu server yang terdaftar di sini. Ini biasanya akan menjadi nama yang selalu diselesaikan ke mesin lokal, seperti 127.0.0.1 atau localhost.';
$string['serversclusterinvalid'] = 'Tepat satu server diperlukan saat klaster diaktifkan.';
$string['sessionhandlerconflict'] = 'Peringatan: Sebuah model memcache ({$a}) telah dikonfigurasi untuk menggunakan server memcache yang sama sebagai sesi. Membersihkan semua cache akan menyebabkan sesi juga dibersihkan.';
$string['setservers'] = 'Setel server';
$string['setservers_help'] = 'Ini adalah daftar server yang akan diperbarui ketika data diubah dalam tembolok. Umumnya nama yang memenuhi syarat dari setiap server di pool. Ini **harus** menyertakan server yang tercantum dalam *Server* di atas, meskipun dengan nama hos yang berbeda.
Server harus didefinisikan satu per baris dan terdiri dari alamat server dan porta opsional. Jika tidak ada porta yang disediakan maka porta bawaan (11211) digunakan.

Sebagai contoh:
<pre>
server.url.com
ipaddress: port
</pre>';
$string['testservers'] = 'Uji server';
$string['testservers_desc'] = 'Satu atau beberapa string koneksi untuk server memcached untuk diuji. Jika server pengujian telah ditentukan maka kinerja memcached dapat diuji menggunakan halaman kinerja tembolok di blok administrasi.';
$string['upgrade200recommended'] = 'Kami menyarankan Anda meningkatkan ekstensi Memcached PHP Anda ke versi 2.0.0 atau yang lebih baru.
Versi ekstensi Memcached PHP yang Anda gunakan saat ini tidak menyediakan fungsionalitas yang digunakan Moodle untuk memastikan tembolok berkotak pasir. Sebelum Anda meningkatkan, kami menyarankan Anda untuk tidak mengonfigurasi aplikasi lain untuk menggunakan server Memcached yang sama seperti yang dikonfigurasi Moodle untuk digunakan.';
$string['usecompression'] = 'Gunakan kompresi';
$string['usecompression_help'] = 'Mengaktifkan atau menonaktifkan kompresi payload. Saat diaktifkan, nilai item yang lebih panjang dari ambang tertentu (saat ini 100 byte) akan dikompresi selama penyimpanan dan didekompresi selama pengambilan secara transparan.';
$string['useserialiser'] = 'Gunakan serialiser';
$string['useserialiser_help'] = 'Menentukan serializer yang akan digunakan untuk membuat serialisasi nilai non-skalar. Serializer yang valid adalah Memcached::SERIALIZER_PHP atau Memcached::SERIALIZER_IGBINARY. Yang terakhir ini hanya didukung ketika memcached dikonfigurasi dengan opsi --enable-memcached-igbinary dan ekstensi igbinary dimuat.';
