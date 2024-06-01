<?php include 'comp/header.php';
if (isset($_POST['hapus_semua'])) {
	hapus_semua_tagihan();
}
?>

<div class="main-content mb-1">
	<div class="section__content section__content--p30">

	</div>
	<div class="content-wrapper">
		<div class="content-header mr-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h3 class="col-sm-6 ml-1">Data Tagihan</h3>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php?m=dashboard">Home</a></li>
						<li class="breadcrumb-item active">Tagihan</li>
					</ol>
				</div>
				<div class="col-sm-3 ml-4">
					<form class="au-form-icon--sm" action="" method="post">
						<div class="input-group mb-2">
							<div class="input-group-prepend">

							</div>
							<input type="text" placeholder="cari" name="cari" class="form-control sm-3 xs-2" id="bayar2">
							<div class="input-group-text"><b><button type="submit" name="go"><i class="fa fa-search"></i></b></div>
						</div>



					</form>
				</div>
				<div class=" mb-2 ml-5">
					<a href="?m=cetak" target="_blank"><button class="btn btn-success"><i class="fa fa-print"></i> Print</button></a>

				</div>
				<button class="btn btn-danger mb-2 ml-5" data-toggle="modal" data-target="#hapus_semua"><i class="fa fa-trash"></i> Hapus Semua Data Bayar</button>
				<div class="modal fade" id="hapus_semua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								Apakah Anda yakin ingin menghapus semua DATA BAYAR ?
							</div>
							<div class="modal-footer">
								<form action="" method="post">
									<button type="submit" name="hapus_semua" class="btn btn-danger">Hapus Semua</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /.col -->
			</div>
		</div>


		<!-- Main Content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12"><br>


						<!-- Tabel -->
						<div class="row">
							<div class="table-responsive table--no-card m-b-30 ml-5 mr-5">
								<table class="table table-borderless table-striped table-earning">
									<thead>
										<tr>
											<th>No</th>
											<th>NIS</th>
											<th>Nama</th>
											<th>Kelas</th>
											<th>Jurusan</th>
											<th>Bulan</th>
											<th>Keterangan</th>


										</tr>
									</thead>
									<?php


									$no = 1;




									?>
									<tbody>
										<?php
										$no = 1;
										include 'paging.php';
										?>

									</tbody>
								</table>
							</div>
						</div>
						<center>
							<ul class="pagination justify-content-center">
								<li class="page-item">
									<a class="page-link" <?php if ($halaman > 1) {
																echo "href='?m=tagihan&halaman=$previous'";
															} ?>>Previous</a>
								</li>
								<?php
								for ($x = 1; $x <= $total_halaman; $x++) {
								?>
									<li class="page-item"><a class="page-link" href="?m=tagihan&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
								<?php
								}
								?>
								<li class="page-item">
									<a class="page-link" <?php if ($halaman < $total_halaman) {
																echo "href='?m=tagihan&halaman=$next'";
															} ?>>Next</a>
								</li>
							</ul>
						</center>

						<!-- end table -->


					</div>
				</div>
			</div>
		</section>

	</div>

</div>
<?php include 'comp/footer.php'; ?>