<?php

// koneksi
$koneksi = mysqli_connect('localhost', 'root', '', 'spp_smadm');

function summon_admin()
{
    global $koneksi;
    $id = $_SESSION['idsppapp'];
    return mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id'");
}

// ---------------------------------------------------FUNGSI SISWA----------------------------------------------------------
function insert_siswa()
{
    global $koneksi;
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];


    date_default_timezone_set("Asia/Jakarta");

    $tstamp = date("d-m-Y h:i a");

    $admin = $_POST['admin'];

    $selectsiswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis='$nis'");
    $cek = mysqli_num_rows($selectsiswa);

    if ($cek) {
        echo '<script>alert("nis sudah ada")</script>';
    } else {

        $save = mysqli_query($koneksi, "INSERT INTO tb_siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan', tstamp='$tstamp', admin='$admin'");

        $save2 = mysqli_query($koneksi, "INSERT INTO tb_tagihan SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan', bulan='-',keterangan='belum lunas', tstamp='$tstamp'");
    }
}

function hapus_siswa()
{
    global $koneksi;
    $id = $_POST['id'];
    $nis = $_POST['nis'];

    $hapus = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id='$id'");

    $hapus2 = mysqli_query($koneksi, "DELETE FROM tb_tagihan WHERE nis = '$nis'");
}

function hapus_siswa_semua()
{
    global $koneksi;

    $hapus = mysqli_query($koneksi, "DELETE FROM tb_siswa");

    $hapus2 = mysqli_query($koneksi, "DELETE FROM tb_tagihan");

    $hapus3 = mysqli_query($koneksi, "DELETE FROM tb_bayar");
}

function edit_siswa()
{
    global $koneksi;
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];


    date_default_timezone_set("Asia/Jakarta");

    $tstamp = date("d-m-Y h:i:s a");

    $admin = $_POST['admin'];

    $save1 =  mysqli_query($koneksi, "UPDATE tb_siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan', tstamp='$tstamp', admin='$admin' WHERE id='$id'");

    $save2 = mysqli_query($koneksi, "UPDATE tb_tagihan SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE nis='$nis'");
}


function gambar($img, $size)
{
    echo '<img src="//localhost/kerja-praktek/assets/images/' . $img . '" width="' . $size . '">';
}

function url()
{
    return $url = "//localhost/kerja-praktek/assets/";
}
