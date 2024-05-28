<?php

// koneksi
$koneksi = mysqli_connect('localhost', 'root', '', 'kp_spp');

// --- FUNGSI ADMIN ---
function summon_admin()
{
    global $koneksi;
    $id = $_SESSION['idsppapp'];
    return mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id'");
}
function select_admin()
{
    global $koneksi;
    return mysqli_query($koneksi, "SELECT * FROM admin");
}
function edit_admin()
{
    global $koneksi;
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];

    date_default_timezone_set("Asia/Jakarta");

    $tstamp = date("d-m-Y h:i a");

    return mysqli_query($koneksi, "UPDATE admin SET username='$username', password='$password', nama='$nama', kontak='$kontak', tstamp='$tstamp' where id='$id'");
}
// --- END FUNGSI ADMIN ---

//---FUNGSI SISWA---
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

// --- END SISWA ---

// --- FUNGSI KELAS ---
function insert_kelas()
{
    global $koneksi;
    $kelas = $_POST['kelas'];


    date_default_timezone_set("Asia/Jakarta");

    $tstamp = date("d-m-Y h:i:s a");

    $admin = $_POST['admin'];

    return mysqli_query($koneksi, "INSERT INTO tb_kelas SET kelas='$kelas', tstamp='$tstamp', admin='$admin'");
}

function hapus_kelas()
{
    global $koneksi;
    $id = $_POST['id'];

    return mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id='$id'");
}

function hapus_kelas_semua()
{
    global $koneksi;

    return mysqli_query($koneksi, "DELETE FROM tb_kelas");
}

function edit_kelas()
{
    global $koneksi;
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];

    date_default_timezone_set("Asia/Jakarta");
    $tstamp = date("d-m-Y h:i:s a");

    $admin = $_POST['admin'];

    return mysqli_query($koneksi, "UPDATE tb_kelas SET kelas='$kelas', tstamp='$tstamp', admin='$admin' WHERE id='$id'");
}

// --- END KELAS ---

// --- FUNGSI JURUSAN ---
function insert_jurusan()
{
    global $koneksi;
    $jurusan = $_POST['jurusan'];

    date_default_timezone_set("Asia/Jakarta");
    $tstamp = date("d-m-Y h:i:s a");



    $admin = $_POST['admin'];

    return mysqli_query($koneksi, "INSERT INTO tb_jurusan SET jurusan='$jurusan', tstamp='$tstamp', admin='$admin'");
}

function delete_jurusan()
{
    global $koneksi;
    $id = $_POST['id'];

    return mysqli_query($koneksi, "DELETE FROM tb_jurusan WHERE id='$id'");
}

function delete_jurusan_semua()
{
    global $koneksi;

    return mysqli_query($koneksi, "DELETE FROM tb_jurusan");
}

function edit_jurusan()
{
    global $koneksi;
    $id = $_POST['id'];
    $jurusan = $_POST['jurusan'];

    date_default_timezone_set("Asia/Jakarta");
    $tstamp = date("d-m-Y h:i:s a");



    $admin = $_POST['admin'];

    return mysqli_query($koneksi, " UPDATE tb_jurusan SET jurusan='$jurusan', tstamp='$tstamp', admin='$admin' WHERE id='$id'");
}
// --END JURUSAN--

// ---FUNGSI TAHUN PELAJARAN ---
function insert_tapel()
{
    global $koneksi;
    $tapel = $_POST['tapel'];

    date_default_timezone_set("Asia/Jakarta");
    $tstamp = date("d-m-Y h:i:s a");

    $admin = $_POST['admin'];

    return mysqli_query($koneksi, "INSERT INTO tb_tahun_ajaran SET tapel='$tapel', tstamp='$tstamp', admin='$admin'");
}

function hapus_tapel()
{
    global $koneksi;
    $id = $_POST['id'];

    return mysqli_query($koneksi, "DELETE FROM tb_tahun_ajaran WHERE id='$id'");
}


function edit_tapel()
{
    global $koneksi;
    $id = $_POST['id'];
    $tapel = $_POST['tapel'];

    date_default_timezone_set("Asia/Jakarta");
    $tstamp = date("d-m-Y h:i:s a");

    $admin = $_POST['admin'];

    return mysqli_query($koneksi, "UPDATE tb_tahun_ajaran SET tapel='$tapel', tstamp='$tstamp', admin='$admin'");
}

function hapus_tapel_semua()
{
    global $koneksi;

    return mysqli_query($koneksi, "DELETE FROM tb_tahun_ajaran");
}
// -- END TAPEL --

function gambar($img, $size)
{
    echo '<img src="//localhost/kerja-praktek/assets/images/' . $img . '" width="' . $size . '">';
}

function url()
{
    return $url = "//localhost/kerja-praktek/assets/";
}
