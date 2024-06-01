<?php
require 'fungsi/fungsi.php';

?>
<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Icon -->
	<link rel="icon" type="image/png" href="assets/images/logo_spp_64x64.png">
	<!-- Title Page-->
	<title>Print</title>

	<!-- Fontfaces CSS-->
	<link href="http://your-base-url.com/css/font-face.css" rel="stylesheet" media="all">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" media="all">
	<link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="https://cdn.jsdelivr.net/npm/animsition/dist/css/animsition.min.css" rel="stylesheet" media="all">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-progressbar/css/bootstrap-progressbar.min.css" rel="stylesheet" media="all">
	<link href="https://cdn.jsdelivr.net/npm/animate.css/animate.min.css" rel="stylesheet" media="all">
	<link href="https://cdn.jsdelivr.net/npm/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" rel="stylesheet" media="all">
	<link href="https://cdn.jsdelivr.net/npm/select2/dist/css/select2.min.css" rel="stylesheet" media="all">
	<link href="https://cdn.jsdelivr.net/npm/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="http://your-base-url.com/css/theme.css" rel="stylesheet" media="all">
</head>

<body>
	<div class="row">
		<div class="container">
			<div class="jumbotron">
				<center>
					<img src="https://vervalyayasan.data.kemdikbud.go.id/upload/file/36/36BF/519255-468844895261571803.jpg" width="120" />
				</center>
			</div>
		</div>
	</div>
	<?php foreach (select_print_siswa() as $key) : ?>
		<table class="table">
			<tr>
				<td style="width:10%;">
					Nama
				</td>
				<td>
					: <?php echo $key['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Kelas
				</td>
				<td>
					: <?php echo $key['kelas']; ?>
				</td>
			</tr>
			<tr>
				<td>jurusan : </td>
				<td><?= $key['jurusan']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
		<br>
		<?php foreach (select_print_bayar() as $tab) : ?>


			<table class="table table-striped">
				<tr>
					<th>
						No
					</th>
					<th>
						Bulan
					</th>
					<th>
						Waktu Bayar
					</th>
					<th>
						Nominal
					</th>
					<th>
						Bayar
					</th>
					<th>
						Kembalian
					</th>
				</tr>
				<?php $no = 1; ?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>

						<?php

						if ($tab['bulan'] == 1) {
							echo '<p style="color: black;">Januari</p>';
						} else if ($tab['bulan'] == 2) {
							echo '<p style="color: black;">Febuari</p>';
						} elseif ($tab['bulan'] == 3) {
							echo '<p style="color: black;">Maret</p>';
						} elseif ($tab['bulan'] == 4) {
							echo '<p style="color: black;">April</p>';
						} elseif ($tab['bulan'] == 5) {
							echo '<p style="color: black;">Mei</p>';
						} elseif ($tab['bulan'] == 6) {
							echo '<p style="color: black;">Juni</p>';
						} elseif ($tab['bulan'] == 7) {
							echo '<p style="color: black;">Juli</p>';
						} elseif ($tab['bulan'] == 8) {
							echo '<p style="color: black;">Agustus</p>';
						} elseif ($tab['bulan'] == 9) {
							echo '<p style="color: black;">September</p>';
						} elseif ($tab['bulan'] == 10) {
							echo '<p style="color: black;">Oktober</p>';
						} elseif ($tab['bulan'] == 11) {
							echo '<p style="color: black;">November</p>';
						} elseif ($tab['bulan'] == 12) {
							echo '<p style="color: black;">Desember</p>';
						}

						?>
					</td>
					<td>
						<?= $tab['tstamp']; ?>
					</td>
					<td>
						<?= rupiah($_GET['nominal']); ?>
					</td>
					<td>
						<?= rupiah($tab['bayar']); ?>
					</td>
					<td>
						<?= rupiah($_GET['kembalian']); ?>
					</td>
				</tr>


			</table>
			<br><br>
			<div class="pull-right">
				<h5>Tanda Tangan</h5>
				<h5>Yang Bersangkutan</h5>
				<br><br><br>
				<h5><?php echo $tab['nama']; ?></h5>
			</div>
		<?php endforeach ?>
		<script>
			window.print();
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</body>

</html>