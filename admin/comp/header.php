<?php require 'fungsi/fungsi.php'; ?>

<?php foreach (summon_admin() as $adm) : ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Icon -->
        <link rel="icon" type="image/png" href="assets/images/logo_tittle.png">
        <!-- Title Page-->
        <title><?= $judul; ?></title>

        <!-- Fontfaces CSS-->
        <link href="assets/css/font-face.css" rel="stylesheet" media="all">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Material Design Icons -->
        <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="../assets/css/theme.css">
    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER DESKTOP -->
            <header class="header-desktop3 d-none d-lg-block">
                <div class="section__content section__content--p35">
                    <div class="header3-wrap">
                        <div class="header__logo">
                            <div class="img-cir">
                                <a href="index.php">
                                    <img src="../assets/images/logo_spp.png" alt="gambar" width="50" height="50">
                                </a>
                            </div>
                            <!-- Bulan -->
                            <h4 class="ml-4" style="color: white;">SMA Darul Ma'arif</h4>
                        </div>
                        <div class="header__navbar">
                            <ul class="list-unstyled">
                                <li class="has-sub">
                                    <a href="index.php">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard
                                        <span class="bot-line"></span>
                                    </a>

                                </li>
                                <li class="has-sub">
                                    <a href="#">
                                        <i class="fa fa-compass" aria-hidden="true"></i>
                                        <span class="bot-line"></span>Input Data</a>

                                    <ul class="header3-sub-list list-unstyled">
                                        <li>
                                            <a href="?m=tapel">Tahun Pelajaran <span class="bot-line"></span></a>
                                        </li>
                                        <li>
                                            <a href="?m=jurusan">Data Jurusan<span class="bot-line"></span></a>
                                        </li>
                                        <li>
                                            <a href="?m=kelas">Data Kelas <span class="bot-line"></span></a>
                                        </li>
                                        <li>
                                            <a href="?m=siswa">Data Siswa <span class="bot-line"></span></a>
                                        </li>
                                        <li>
                                            <a href="?m=jenis_bayar">Data Jenis Pembayaran <span class="bot-line"></span></a>
                                        </li>
                                        <li>

                                    </ul>
                                </li>

                                <li class="has-sub">
                                    <a href="?m=bayar">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                        <span class="bot-line"></span>Pembayaran</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <span class="bot-line"></span>Laporan</a>
                                    <ul class="header3-sub-list list-unstyled">
                                        <li>
                                            <a href="?m=tagihan">Tagihan<span class="bot-line"></span></a>
                                        </li>



                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="header__tool">

                            <div class="account-wrap">
                                <div class="account-item account-item--style2 clearfix js-item-menu">
                                    <div class="image">
                                        <div class="img-cir">
                                            <img src="../assets/images/admin_logo.jpg" alt="gambar" width="64" height="64">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 style="color:white;"><?= $adm['nama']; ?> <i class="fa-solid fa-caret-down"></i></h4>

                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <div class="img-cir">
                                                        <img src="../assets/images/admin_logo.jpg" alt="gambar" width="64" height="64">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"><?= $adm['nama']; ?></a>
                                                </h5>

                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="?m=admin&s=akun">
                                                    <i class="fa-solid fa-user-tie"></i></i>Akun</a>
                                            </div>

                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="fungsi/logout.php">
                                                <i class="fa-solid fa-right-from-bracket"></i></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- HEADER MOBILE-->
            <header class="header-mobile header-mobile-2 d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <div class="img-cir">
                                <a class="logo" href="index.php">
                                    <img src="../assets/images/logo_spp.png" alt="gambar" width="60" height="60">
                                </a>
                            </div>

                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <i class="fa-solid fa-bars" style="color: white;"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">

                            <li class="has-sub">
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>

                            </li>

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Input Data</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="?m=tapel">Tahun Pelajaran</a>
                                    </li>
                                    <li>
                                        <a href="?m=jurusan">Data Jurusan</a>
                                    </li>
                                    <li>
                                        <a href="?m=kelas">Data Kelas</a>
                                    </li>
                                    <li>
                                        <a href="?m=siswa">Data Siswa</a>
                                    </li>
                                    <li>
                                        <a href="?m=jenis_bayar">Data Jenis Pembayaran</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="?m=bayar">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    <span class="bot-line"></span>Pembayaran</a>

                            </li>

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Laporan</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="?m=tagihan">Tagihan</a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <div class="sub-header-mobile-2 d-block d-lg-none">
                <div class="header__tool">


                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <div class="img-cir">
                                    <img src="../assets/images/admin_logo.jpg" alt="gambar" width="120" height="120">
                                </div>
                            </div>
                            <div class="content">
                                <h5 style="color:grey"><?= $adm['nama']; ?> <i class="fa-solid fa-caret-down"></i></h5>

                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <div class="img-cir">
                                                <img src="../assets/images/admin_logo.jpg" alt="gambar" width="120" height="120">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?= $adm['nama']; ?></a>
                                        </h5>

                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="?m=admin&s=akun">
                                            <i class="fa-solid fa-user-tie"></i>Account</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="fungsi/logout.php">
                                        <i class="fa-solid fa-right-from-bracket"></i></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>