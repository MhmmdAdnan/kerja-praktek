<?php

include_once 'fungsi/sesi.php';
$modul  = (isset($_GET['s'])) ? $_GET['s'] : "dashboard";
$nama_app = " | SPP";
switch ($modul) {
	case 'dashboard':
	default:
		$judul = "Data SPP $nama_app";
		include 'page.php';
		break;
}
