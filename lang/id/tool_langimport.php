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
 * Strings for component 'tool_langimport', language 'id', version '3.11'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Tidak dapat terhubung ke server unduhan. Tidak mungkin menginstal atau memperbarui paket bahasa secara otomatis. Silakan unduh berkas ZIP yang sesuai dari <a href="{$a->src}">{$a->src}</a> dan unzip secara manual ke direktori data Anda <code>{$a- >dest}</code>';
$string['install'] = 'Instal paket bahasa yang dipilih';
$string['installedlangs'] = 'Paket bahasa yang diinstal';
$string['installfailed'] = 'Instalasi paket bahasa gagal!';
$string['installfinished'] = 'Instalasi paket bahasa selesai.';
$string['installpending'] = 'Paket bahasa berikut akan segera dipasang: {$a}.';
$string['installscheduled'] = 'Paket bahasa dijadwalkan untuk instalasi.';
$string['langimport'] = 'Perkakas impor bahasa';
$string['langimportdisabled'] = 'Fitur impor bahasa telah dinonaktifkan. Anda harus memperbarui paket bahasa Anda secara manual di tingkat sistem berkas. Jangan lupa untuk membersihkan tembolok string setelah Anda melakukannya.';
$string['langpackinstalled'] = 'Paket bahasa \'{$a}\' berhasil dipasang';
$string['langpackinstalledevent'] = 'Paket bahasa diinstal';
$string['langpacknotremoved'] = 'Terjadi kesalahan; paket bahasa \'{$a}\' tidak sepenuhnya dihapus. Silakan periksa izin berkas.';
$string['langpackremoved'] = 'Paket bahasa \'{$a}\' telah dicopot pemasangannya';
$string['langpackremovedevent'] = 'Paket bahasa dihapus';
$string['langpackupdated'] = 'Paket bahasa \'{$a}\' berhasil diperbarui';
$string['langpackupdatedevent'] = 'Paket bahasa diperbarui';
$string['langpackupdateskipped'] = 'Pembaruan paket bahasa \'{$a}\' dilewati';
$string['langpackuptodate'] = 'Paket bahasa \'{$a}\' terbaru';
$string['langunsupported'] = '<p>Server Anda tampaknya tidak sepenuhnya mendukung bahasa berikut:</p><ul>{$a->missinglocales}</ul><p>Sebaliknya, lokal global ({$a->globallocale}) akan digunakan untuk memformat string tertentu seperti tanggal atau angka.</p>';
$string['langupdatecomplete'] = 'Pembaruan paket bahasa selesai';
$string['missingcfglangotherroot'] = 'Nilai konfigurasi tidak ada $CFG->langotherroot';
$string['missinglangparent'] = 'Tidak ada bahasa induk <em>{$a->parent}</em> dari <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Paket bahasa Inggris tidak dapat dihapus.';
$string['nolangupdateneeded'] = 'Semua paket bahasa Anda mutakhir, tidak diperlukan pembaruan';
$string['pluginname'] = 'Paket bahasa';
$string['privacy:metadata'] = 'Pengaya paket Bahasa tidak menyimpan data pribadi apa pun.';
$string['purgestringcaches'] = 'Bersihkan tembolok string';
$string['search'] = 'Cari paket bahasa yang tersedia';
$string['selectlangs'] = 'Pilih bahasa untuk dicopot pemasangannya';
$string['uninstall'] = 'Copot pemasangan paket bahasa yang dipilih';
$string['uninstallconfirm'] = 'Anda akan mencopot pemasangan paket bahasa ini: <strong>{$a}</strong>. Apa kamu yakin?';
$string['updatelangs'] = 'Perbarui semua paket bahasa yang diinstal';
$string['updatelangsnote'] = 'Memperbarui semua paket bahasa yang terinstal dengan mengklik tombol dapat memakan waktu lama dan menyebabkan waktu habis. Sebaiknya gunakan tugas terjadwal \'{$a->taskname}\' (yang berjalan secara bawaan setiap hari).';
