<?php include 'comp/header.php'; ?>
<?php

if (isset($_POST['simpan'])) {
  insert_tapel();
}

if (isset($_POST['hapus'])) {
  hapus_tapel();
}

if (isset($_POST['edit'])) {
  edit_tapel();
}

if (isset($_POST['hapus_semua'])) {
  hapus_tapel_semua();
}
?>
<div class="main-content mb-1">
  <div class="section__content section__content--p30">

  </div>
  <div class="content-wrapper">
    <div class="content-header mr-2">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="col-sm-6 ml-1" style="padding-bottom: 20px;">Data Tahun Pelajaran</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?m=dashboard">Home</a></li>
            <li class="breadcrumb-item active">Tahun Pelajaran</li>
          </ol>
        </div><!-- /.col -->
      </div>
    </div>


    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12"><br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-5 ml-5" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-plus"></i>
              Tambah Data Tahun Pelajaran
            </button>

            <button class="btn btn-danger mb-5 ml-5" data-toggle="modal" data-target="#hapus_semua"><i class="fa fa-trash"></i> Hapus Semua Data</button>
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
                    Apakah Anda yakin ingin menghapus semua DATA TAHUN PELAJARAN ?
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tahun Pelajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Tahun Pelajaran</label>
                        <input type="text" class="form-control" autocomplete="off" name="tapel">
                      </div>


                      <input type="hidden" name="admin" value="<?= $adm['nama']; ?>" hidden>

                      <div class="modal-footer">
                        <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </form>

                  </div>

                </div>
              </div>
            </div>

            <!-- Tabel -->
            <div class="row">
              <div class="table-responsive table--no-card m-b-30 ml-5 mr-5">
                <table class="table table-borderless table-striped table-earning">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tahun Pelajaran</th>

                      <th>aksi</th>

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
                                          echo "href='?m=tapel&halaman=$previous'";
                                        } ?>>Previous</a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                  <li class="page-item"><a class="page-link" href="?m=tapel&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                  <a class="page-link" <?php if ($halaman < $total_halaman) {
                                          echo "href='?m=tapel&halaman=$next'";
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