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
 * Strings for component 'cachestore_redis', language 'id', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Tidak ada kompresi.';
$string['compressor_php_gzip'] = 'Gunakan kompresi gzip.';
$string['compressor_php_zstd'] = 'Gunakan kompresi Zstandard.';
$string['password'] = 'Kata sandi';
$string['password_help'] = 'Ini mengatur kata sandi server Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefiks kunci';
$string['prefix_help'] = 'Prefiks ini digunakan untuk semua nama kunci di server Redis.
* Jika Anda hanya memiliki satu model Moodle yang menggunakan server ini, Anda dapat membiarkan nilai ini sebagai bawaan.
* Karena batasan panjang kunci, maksimal 5 karakter yang diperbolehkan.';
$string['prefixinvalid'] = 'Prefiks tidak valid. Anda hanya dapat menggunakan a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Pengaya penyimpan tembolok Redis menyimpan data secara singkat sebagai bagian dari fungsi cachingnya. Data ini disimpan di server Redis tempat data dihapus secara berkala.';
$string['privacy:metadata:redis:data'] = 'Berbagai data yang disimpan dalam tembolok';
$string['serializer_igbinary'] = 'Serializer igbinary.';
$string['serializer_php'] = 'Serializer PHP bawaan.';
$string['server'] = 'Server';
$string['server_help'] = 'Ini menetapkan nama hos atau alamat IP dari server Redis untuk digunakan.';
$string['test_password'] = 'Uji kata sandi server';
$string['test_password_desc'] = 'Uji kata sandi server Redis.';
$string['test_serializer'] = 'Serializer';
$string['test_serializer_desc'] = 'Serializer yang digunakan untuk pengujian.';
$string['test_server'] = 'Uji server';
$string['test_server_desc'] = 'Redis server yang akan digunakan untuk pengujian.';
$string['usecompressor'] = 'Gunakan kompresor';
$string['usecompressor_help'] = 'Menentukan kompresor yang akan digunakan setelah serialisasi. Ini dilakukan pada level API Cache Moodle, bukan pada level php-redis.';
$string['useserializer'] = 'Gunakan serializer';
$string['useserializer_help'] = 'Menentukan serializer yang akan digunakan untuk serialisasi. Serializer yang valid adalah Redis::SERIALIZER_PHP atau Redis::SERIALIZER_IGBINARY. Yang terakhir ini hanya didukung ketika phpredis dikonfigurasi dengan opsi --enable-redis-igbinary dan ekstensi igbinary dimuat.';
