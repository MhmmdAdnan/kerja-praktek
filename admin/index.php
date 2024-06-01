<?php
session_start();
include_once 'fungsi/sesi.php';
$modul  = (isset($_GET['m'])) ? $_GET['m'] : "dashboard";
$nama_app = " | SPP";
switch ($modul) {
    case 'dashboard':
    default:
        $judul = "Dashboard $nama_app";
        include 'dashboard.php';
        break;
    case 'admin':
        include 'modul/admin/index.php';
        break;
    case 'siswa':
        include 'modul/siswa/index.php';
        break;
    case 'kelas':
        include 'modul/kelas/index.php';
        break;
    case 'jurusan':
        include 'modul/jurusan/index.php';
        break;
    case 'tapel':
        include 'modul/tapel/index.php';
        break;
    case 'jenis_bayar':
        include 'modul/jenis_bayar/index.php';
        break;
}
