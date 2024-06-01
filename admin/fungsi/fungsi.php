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

    return mysqli_query($koneksi, " UPDATE tb_tahun_ajaran SET tapel='$tapel', tstamp='$tstamp', admin='$admin' WHERE id='$id'");
}

function hapus_tapel_semua()
{
    global $koneksi;

    return mysqli_query($koneksi, "DELETE FROM tb_tahun_ajaran");
}
// -- END TAPEL --


// --- FUNGSI JENIS BAYAR ---

function jenis_bayar()
{
    global $koneksi;
    $tapel = $_POST['tapel'];
    $kelas = $_POST['kelas'];
    $nominal = $_POST['nominal'];

    date_default_timezone_set("Asia/Jakarta");
    $tstamp = date("d-m-Y h:i:s a");

    $admin = $_POST['admin'];

    return mysqli_query($koneksi, "INSERT INTO tb_jenis_pembayaran SET tapel='$tapel', kelas='$kelas', nominal='$nominal', tstamp='$tstamp', admin='$admin'");
}

function hapus_jenis_bayar()
{
    global $koneksi;
    $id = $_POST['id'];

    return mysqli_query($koneksi, "DELETE FROM tb_jenis_pembayaran WHERE id='$id'");
}
function hapus_jenis_bayar_semua()
{
    global $koneksi;

    $hapus = mysqli_query($koneksi, "DELETE FROM tb_jenis_pembayaran");

    // $hapus2 = mysqli_query($koneksi, "DELETE FROM tb_tapel");

    // $hapus3 = mysqli_query($koneksi, "DELETE FROM tb_kelas");
}

function edit_jenis_bayar()
{
    global $koneksi;
    $id = $_POST['id'];
    $tapel = $_POST['tapel'];
    $kelas = $_POST['kelas'];
    $nominal = $_POST['nominal'];

    date_default_timezone_set("Asia/Jakarta");
    $tstamp = date("d-m-Y h:i:s a");

    $admin = $_POST['admin'];

    return mysqli_query($koneksi, "UPDATE tb_jenis_pembayaran SET tapel='$tapel', kelas='$kelas', nominal='$nominal', tstamp='$tstamp', admin='$admin' WHERE id='$id'");
}

// --- END JENIS BAYAR ----------

// --- FUNGSI TRANSAKSI SPP  ---

function bayar_spp()
{
    global $koneksi;
    $nis = $_POST['nis'];

    $nama = $_POST['nama'];

    $kelas = $_POST['kelas'];
    $tapel = $_POST['tapel'];
    $nominal = $_POST['nominal'];
    $bayar = $_POST['bayar'];

    // waktu
    date_default_timezone_set("Asia/Jakarta");
    $bulan = date("m");
    $tstamp = date("d-m-Y h:i:s a");
    // admin


    $kembalian = $bayar - $nominal;
    $admin = $_POST['admin'];
    $selectbayar = mysqli_query($koneksi, "SELECT * FROM tb_bayar WHERE bulan='$bulan' AND nis='$nis'");
    $cek = mysqli_num_rows($selectbayar);
    if ($cek) {
        echo '<script>alert("SPP bulan ini sudah dibayar")</script>';
    } else {
        $save = mysqli_query($koneksi, "INSERT INTO tb_bayar SET nis='$nis', nama='$nama', kelas='$kelas', tapel='$tapel', bayar='$bayar', bulan='$bulan', tstamp='$tstamp', admin='$admin'");
        $save2 = mysqli_query($koneksi, "UPDATE tb_tagihan SET keterangan ='lunas', bulan='$bulan' WHERE nis='$nis'");
        if ($save) {
            echo '<script>window.open("?m=print&nis=' . $nis . '&nominal=' . $nominal . '&kembalian=' . $kembalian . '", "_blank");</script>';
        } else {
            echo '<script>alert(">:(")</script>';
        }
    }
}

function delele_spp()
{
    global $koneksi;
    $id = $_POST['id'];

    // Lakukan kueri untuk mendapatkan NIS dari pembayaran yang akan dihapus
    $result = mysqli_query($koneksi, "SELECT nis FROM tb_bayar WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);
    $nis = $row['nis'];

    // Hapus entri pembayaran
    $delete_spp = mysqli_query($koneksi, "DELETE FROM tb_bayar WHERE id='$id'");

    if ($delete_spp) {
        // Ubah status pembayaran menjadi tidak lunas dan hapus informasi bulan yang dibayarkan
        $update_tagihan = mysqli_query($koneksi, "UPDATE tb_tagihan SET keterangan ='belum lunas', bulan='-' WHERE nis='$nis'");
        if ($update_tagihan) {
            // Jika berhasil dihapus, kembalikan true
            return true;
        } else {
            // Jika gagal mengubah status pembayaran, kembalikan false
            return false;
        }
    } else {
        // Jika gagal menghapus pembayaran, kembalikan false
        return false;
    }
}

// --- END TRANSAKSI SPP -------------------------------

// --- FUNGSI PRINT -------------------

function select_print_siswa()
{
    global $koneksi;
    $nis = $_GET['nis'];

    return mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis = '$nis'");
}

function select_print_bayar()
{
    global $koneksi;

    $nis = $_GET['nis'];

    date_default_timezone_set("Asia/Jakarta");
    $bulan = date("m");

    return mysqli_query($koneksi, "SELECT * FROM tb_bayar WHERE nis='$nis' AND bulan = '$bulan' ");
}

function print_tagihan()
{
    global $koneksi;
    return mysqli_query($koneksi, "SELECT * FROM tb_tagihan");
}

// Hapus semua entri dari tb_bayar
function hapus_semua_tagihan()
{
    global $koneksi;

    // Hapus semua data dari tb_bayar
    $hapus = mysqli_query($koneksi, "DELETE FROM tb_bayar");

    // Set kolom bulan menjadi '-' dan keterangan menjadi 'belum lunas' di tb_tagihan
    $update_tagihan = mysqli_query($koneksi, "UPDATE tb_tagihan SET bulan='-', keterangan='belum lunas'");

    // Kembalikan hasil query
    return $hapus && $update_tagihan;
}

// --- END FUNGSI PRINT --------------------


// --- FUNGSI RUPIAH DAN BULAN ------------------------
function bulan_sekarang($colorc)
{
    date_default_timezone_set("Asia/Jakarta");
    $bulan = date("m");

    if ($bulan == 1) {
        echo '<h4 style="color: ' . $colorc . ';">Januari</h4>';
    } else if ($bulan == 2) {
        echo '<h4 style="color: ' . $colorc . ';">Febuari</h4>';
    } elseif ($bulan == 3) {
        echo '<h4 style="color: ' . $colorc . ';">Maret</h4>';
    } elseif ($bulan == 4) {
        echo '<h4 style="color: ' . $colorc . ';">April</h4>';
    } elseif ($bulan == 5) {
        echo '<h4 style="color: ' . $colorc . ';">Mei</h4>';
    } elseif ($bulan == 6) {
        echo '<h4 style="color: ' . $colorc . ';">Juni</h4>';
    } elseif ($bulan == 7) {
        echo '<h4 style="color: ' . $colorc . ';">Juli</h4>';
    } elseif ($bulan == 8) {
        echo '<h4 style="color: ' . $colorc . ';">Agustus</h4>';
    } elseif ($bulan == 9) {
        echo '<h4 style="color: ' . $colorc . ';">September</h4>';
    } elseif ($bulan == 10) {
        echo '<h4 style="color: ' . $colorc . ';">Oktober</h4>';
    } elseif ($bulan == 11) {
        echo '<h4 style="color: ' . $colorc . ';">November</h4>';
    } elseif ($bulan == 12) {
        echo '<h4 style="color: ' . $colorc . ';">Desember</h4>';
    }
}





function rupiah($angka)
{
    $hasil = "Rp. " . number_format($angka, 2, ',', '.');
    return $hasil;
}

// --- END FUNGSI RUPIAH DAN BULAN -----------------
function gambar($img, $size)
{
    echo '<img src="//localhost/kerja-praktek/assets/images/' . $img . '" width="' . $size . '">';
}

function url()
{
    return $url = "//localhost/kerja-praktek/assets/";
}
