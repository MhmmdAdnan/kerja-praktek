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
}
