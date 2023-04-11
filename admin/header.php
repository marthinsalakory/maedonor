<?php include 'function.php'; ?>
<?php isLogin(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mae Donor</title>

    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="../img/donor.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header ps-1 d-flex align-items-center justify-content-start">
                    <img src="assets/images/logo_unpatti.png" class="m-0 p-0" style="height: 50px;">
                    <img src="assets/images/maedonor.jpeg" class="m-0 p-0" style="height: 70px;">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>ADMIN</li>



                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="clipboard" width="20"></i>
                                <span>Permohonan</span>
                            </a>


                            <ul class="submenu">

                                <li>
                                    <a href="permohonan_aktif.php">Permohonan Aktif </a>
                                </li>

                                <li>
                                    <a href="riwayat_permohonan.php">Riwayat Permohonan</a>
                                </li>

                                <li>
                                    <a href="laporan_permohonan.php">Laporan Permohonan</a>
                                </li>

                            </ul>

                        </li>


                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="users" width="20"></i>
                                <span>Pendonor</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="tambah_pendonor.php">Tambah Pendonor</a>
                                </li>

                                <li>
                                    <a href="data_pendonor.php">Data Pendonor</a>
                                </li>

                                <li>
                                    <a href="laporan_pendonor.php">Laporan Pendonor</a>
                                </li>

                                <li>
                                    <a href="terdaftar.php">Permohonan Pendonor</a>
                                </li>

                            </ul>

                        </li>


                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="bar-chart-2" width="20"></i>
                                <span>Presentase</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="presentase_pendonor.php">Pendonor</a>
                                </li>

                                <li>
                                    <a href="presentase_permohonan.php">Permohonan</a>
                                </li>

                            </ul>

                        </li>


                        <?php if (user()->role == '1') : ?>
                            <li class="sidebar-item  has-sub">

                                <a href="#" class='sidebar-link'>
                                    <i data-feather="file-text" width="20"></i>
                                    <span>Artikel</span>
                                </a>


                                <ul class="submenu ">

                                    <li>
                                        <a href="tulis_artikel.php">Tulis Artikel</a>
                                    </li>

                                    <li>
                                        <a href="semua_artikel.php">Semua Artikel</a>
                                    </li>

                                    <li>
                                        <a href="artikel_aktif.php">Artikel Aktif</a>
                                    </li>

                                </ul>

                            </li>


                            <li class="sidebar-item  has-sub">

                                <a href="#" class='sidebar-link'>
                                    <i data-feather="user-check" width="20"></i>
                                    <span>Pengguna</span>
                                </a>


                                <ul class="submenu ">

                                    <li>
                                        <a href="tambah_pengguna.php">Tambah Pengguna</a>
                                    </li>

                                    <li>
                                        <a href="data_pengguna.php">Data Pengguna</a>
                                    </li>

                                </ul>

                            </li>
                        <?php endif; ?>


                        <!-- <li class="sidebar-item ">

                            <a href="pengaduan.php" class='sidebar-link'>
                                <i data-feather="flag" width="20"></i>
                                <span>Pengaduan</span>
                            </a>


                        </li> -->


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar me-1">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, <?= user()->nama; ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="profil.php"><i data-feather="user"></i> Akun</a>
                                <!-- <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <?= flash(); ?>