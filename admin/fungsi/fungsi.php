<?php

// koneksi
$koneksi = mysqli_connect('localhost', 'root', '', 'spp_smadm');

function url()
{
    return $url = "//localhost/kerja-praktek/assets/";
}

function gambar($img, $size)
{
    echo '<img src="//localhost/kerja-praktek/assets/images/' . $img . '" width="' . $size . '">';
}

function summon_admin()
{
    global $koneksi;
    $id = $_SESSION['idsppapp'];
    return mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id'");
}
