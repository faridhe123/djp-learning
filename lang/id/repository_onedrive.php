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
 * Strings for component 'repository_onedrive', language 'id', version '3.11'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Akses';
$string['both'] = 'Internal dan eksternal';
$string['cachedef_folder'] = 'ID berkas OneDrive untuk folder di akun sistem';
$string['configplugin'] = 'Konfigurasikan pengaya OneDrive';
$string['confirmimportskydrive'] = 'Apakah Anda yakin ingin mengimpor semua berkas dari repositori Microsoft SkyDrive ke repositori Microsoft OneDrive? Repositori Microsoft OneDrive harus dikonfigurasi dan berfungsi agar berkas yang diimpor dapat terus berfungsi seperti sebelumnya. Peringatan: Tindakan ini tidak dapat diurungkan!';
$string['defaultreturntype'] = 'Jenis pengembalian bawaan';
$string['external'] = 'Eksternal (hanya tautan yang disimpan di Moodle)';
$string['fileoptions'] = 'Jenis dan bawaan untuk berkas yang dikembalikan dapat dikonfigurasi di sini. Perhatikan bahwa semua berkas yang ditautkan secara eksternal akan diperbarui sehingga pemiliknya adalah akun sistem Moodle.';
$string['importskydrivefiles'] = 'Impor berkas dari repositori Microsoft SkyDrive';
$string['internal'] = 'Internal (berkas yang disimpan di Moodle)';
$string['issuer'] = 'Layanan OAuth 2';
$string['issuer_help'] = 'Pilih layanan OAuth 2 yang dikonfigurasi untuk berbicara dengan OneDrive API. Jika layanan belum ada, Anda harus membuatnya.';
$string['mysitenotfound'] = 'Anda belum pernah masuk ke OneDrive sebelumnya. Anda harus masuk ke OneDrive setidaknya sekali sebelum dapat digunakan dengan Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Tautan ke konfigurasi layanan OAuth 2"> Konfigurasi layanan OAuth 2</a>';
$string['onedrive:view'] = 'Lihat repositori OneDrive';
$string['owner'] = 'Dimiliki oleh: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Repositori Microsoft OneDrive menyimpan hak akses sementara, dan mengirimkan data pengguna dari Moodle ke sistem jarak jauh.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Microsoft OneDrive dengan ID item pemberian akses sementara.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'ID izin pemberian akses sementara Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Tanggal/waktu pembuatan izin akses sementara Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Tanggal/waktu modifikasi pemberian akses sementara Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'ID pengguna yang mengubah pemberian akses sementara Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Kueri teks pencarian pengguna repositori Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Hapus akses tulis sementara dari tautan terkontrol';
$string['searchfor'] = 'Telusuri {$a}';
$string['servicenotenabled'] = 'Akses tidak dikonfigurasi.';
$string['skydrivefilesexist'] = 'Berkas ditemukan di repositori Microsoft SkyDrive. Repositori ini tidak digunakan lagi oleh Microsoft, namun berkas dapat diimpor ke repositori Microsoft OneDrive.';
$string['skydrivefilesimported'] = 'Semua berkas diimpor dari repositori Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Beberapa berkas tidak dapat diimpor dari repositori Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Berkas yang didukung';
