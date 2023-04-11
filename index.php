<?php include 'function.php'; ?>
<?php isLogin(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mae Donor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- JQUERY -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="lib/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css/fonts.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-12 text-center mb-2 mb-lg-0">
                <div class="d-inline-flex justify-content-evenly align-items-center text-white">
                    <small><a target="_blank" class="text-light" href="https://wa.me/6282141676561"><i class="fa fa-phone-alt mr-2"></i>+6282141676561(Arthur)</a></small>
                    <small class="px-3">|</small>
                    <small><a target="_blank" class="text-light" href="https://wa.me/6281340903473"><i class="fa fa-phone-alt mr-2"></i>+6281340903473(Yulinda)</a></small>
                    <small class="px-3">|</small>
                    <small><a target="_blank" class="text-light" href="https://wa.me/6281318812027"><i class="fa fa-phone-alt mr-2"></i>+6281318812027(Marthin)</a></small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a target="_blank" href="https://unpatti.ac.id" class="navbar-brand m-0 p-0">
                <img class="m-0 p-0" src="img/logo_unpatti.png" style="height: 60px;">
            </a>
            <a href="index.php" class="navbar-brand m-0 p-0">
                <img class="m-0 p-0" src="img/maedonor.jpeg" style="height: 100px;">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="#" class="nav-item nav-link active">Beranda</a>
                    <a href="#tentang" class="nav-item nav-link">Tentang</a>
                    <a href="#donor" class="nav-item nav-link">Permohonan</a>
                    <a href="#artikel" class="nav-item nav-link">artikel</a>
                    <!-- <a href="price.html" class="nav-item nav-link">Price</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                </div>
                <button class="btn btn-primary py-2 px-4 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#loginmodal">Sign In</button>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Modal Login -->
    <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginmodalLabel">Sign In</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="action.php" method="POST">
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control mt-2">
                        <button type="button" class="btn btn-secondary mt-2 me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button name="login" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-primary mb-4">Selamat Datang di</h1>
            <h1 class="text-white display-3 mb-5">Bank Data Pendonor Darah</h1>
            <h1 class="text-light mb-4">Penguhubung Donor Darah Universitas Pattimura</h1>
            <div class="row">
                <div class="col-4 bg-danger border border-2 py-2">
                    <h5 class="text-light">Total Pendonor</h5>
                    <h3 class="text-light mb-2"><?= db_count('pendonor'); ?></h3>
                </div>
                <div class="col-2 bg-danger border border-2 py-2">
                    <h5 class="text-light">Golongan Darah A</h5>
                    <h3 class="text-light mb-2"><?= db_count('pendonor', ['golongan_darah' => 'A']); ?></h3>
                </div>
                <div class="col-2 bg-danger border border-2 p-2">
                    <h5 class="text-light">Golongan Darah B</h5>
                    <h3 class="text-light mb-2"><?= db_count('pendonor', ['golongan_darah' => 'B']); ?></h3>
                </div>
                <div class="col-2 bg-danger border border-2 p-2">
                    <h5 class="text-light">Golongan Darah AB</h5>
                    <h3 class="text-light mb-2"><?= db_count('pendonor', ['golongan_darah' => 'AB']); ?></h3>
                </div>
                <div class="col-2 bg-danger border border-2 p-2">
                    <h5 class="text-light">Golongan Darah O</h5>
                    <h3 class="text-light mb-2"><?= db_count('pendonor', ['golongan_darah' => 'O']); ?></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/donor1.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0  ">Mae Donor</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Tentang Kami</h6>
                    <h1 class="mb-4">Mae Donor Universitas Pattimura</h1>
                    <p class="mb-4">Mae Donor adalah aplikasi bank data pendonor darah penghubung donor darah Universitas Pattimura</p>
                    <div class="d-flex align-items-center pt-2">
                        <!-- <a href="tes" type="button" class="btn-play">
                            <span></span>
                        </a> -->
                        <h5 class="font-weight-bold m-0"><a class="text-dark" href="#tentang">Tampilkan Selengkapnya</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5" id="donor">
        <div class="container">
            <?= flash(); ?>
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Permintaan Darah</h6>
                    <h1 class="mb-4">Apakah anda membutuhkan darah?</h1>
                    <p class="mb-4">Hai guys,<br>Kalian butuh darah?<br>Silahkan masukan data diri anda untuk melanjutkan permintaan.</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up"><?= db_count('pendonor'); ?></h1>
                            <h6 class="font-weight-bold mb-4">Jumlah Pendonor</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up"><?= db_count('permohonan', ['status' => '2']); ?></h1>
                            <h6 class="font-weight-bold mb-4">Berhasil Mendonor</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up"><?= db_count('permohonan', ['status' => '1']); ?></h1>
                            <h6 class="font-weight-bold mb-4">Permohonan Aktif</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input oninput="$(this).val() == '' ? $('#inp2').attr('disabled', '') : $('#inp2').removeAttr('disabled'); $('#nama_wali').val($(this).val())" type="text" class="form-control border-0 p-4" placeholder="Nama Lengkap Anda" required="required" />
                            </div>
                            <div class="form-group">
                                <input id="inp2" disabled oninput="$(this).val() == '' ? $('#inp3').attr('disabled', '') : $('#inp3').removeAttr('disabled'); $('#no_telp').val($(this).val())" type="number" class="form-control border-0 p-4" placeholder="Nomor Telepon/Whatsapp" required="required" />
                            </div>
                            <div class="form-group">
                                <select id="inp3" disabled onchange="$(this).val() == '' ? $('#inp4').attr('disabled', '') : $('#inp4').removeAttr('disabled'); $('#hubungan').val($(this).val())" required class="custom-select border-0 px-4" style="height: 47px;">
                                    <option value="">Hubungan Dengan Pasien</option>
                                    <option value="Orang Tua Kandung">Orang Tua Kandung</option>
                                    <option value="Saudara Kandung">Saudara Kandung</option>
                                    <option value="Kerabat">Kerabat</option>
                                    <option value="Sahabat">Sahabat</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div>
                                <button id="inp4" disabled class="btn btn-dark btn-block border-0 py-3" type="button" data-bs-toggle="modal" data-bs-target="#permohonan">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->

    <!-- Modal Login -->
    <div class="modal fade" id="permohonan" tabindex="-1" aria-labelledby="permohonanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="permohonanLabel">Data Pasien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="action.php" method="POST">
                        <input type="hidden" name="nama_wali" id="nama_wali" placeholder="Nama Wali" class="form-control">
                        <input type="hidden" name="no_telp" id="no_telp" placeholder="Nomor Telepon/Whatsapp" class="form-control mt-1">
                        <input type="hidden" name="hubungan" id="hubungan" placeholder="Hubungan dengan Pasien" class="form-control mt-1">
                        <input type="text" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" class="form-control mt-1">
                        <input type="text" name="umur" id="umur" placeholder="Umur Pasien" class="form-control mt-1">
                        <input type="text" name="rumah_sakit" id="rumah_sakit" placeholder="Nama Rumah Sakit" class="form-control mt-1">
                        <select class="form-select mt-1" name="golongan_darah" id="golongan_darah">
                            <option value="">Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                        <input type="number" name="kuota" id="kuota" placeholder="Berapa Kantong" class="form-control mt-1">
                        <button type="button" class="btn btn-secondary mt-2 me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button name="tambah_permohonan" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="artikel">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold"><a class="text-primary" href="semua_artikel.php">Lainnya</a></h6>
                <h1 class="mb-4">Artikel</h1>
            </div>
            <div class="row pb-3" style="justify-content: space-evenly;">
                <?php foreach (db_findAll('artikel', ['status' => '1']) as $a) : ?>
                    <div class="col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                            <h6 class="text-white font-weight-medium m-0"><?= $a['title']; ?></h6>
                        </div>
                        <p><?= $a['deskripsi']; ?></p>
                        <a class="border-bottom text-decoration-none" href="detail_artikel.php?id=<?= $a['id']; ?>">Baca Lainnya</a>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0"></h6>
                    </div>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                    <a class="border-bottom text-decoration-none" href="">Baca Lainnya</a>
                    </div> -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Blog</h6>
                <h1 class="mb-4">Latest From Blog</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Alamat</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Universitas Pattimura</p>
                        <p><a target="_blank" class="text-light" href="https://wa.me/6282141676561"><i class="fa fa-phone-alt mr-2"></i>+6282141676561 (Arthur)</a></p>
                        <p><a target="_blank" class="text-light" href="https://wa.me/6281340903473"><i class="fa fa-phone-alt mr-2"></i>+6281340903473 (Yulinda)</a></p>
                        <p><a target="_blank" class="text-light" href="https://wa.me/628131881027"><i class="fa fa-phone-alt mr-2"></i>+628131881027 (Marthin)</a></p>
                        <!-- <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Link Aplikasi</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                            <a class="text-white mb-2" href="#tentang"><i class="fa fa-angle-right mr-2"></i>Tentang</a>
                            <a class="text-white mb-2" href="#donor"><i class="fa fa-angle-right mr-2"></i>Permohononan</a>
                            <a class="text-white mb-2" href="#artikel"><i class="fa fa-angle-right mr-2"></i>artikel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Berita Terbaru</h3>
                <p>Dapatkan semua informasi terbaru mengenai maedonor dengan cara mengirimkan email anda untuk di daftarkan pada sistem kami</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Email Anda">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Mae Donor</a>. All Rights Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed by <a href="https://wa.me/6281318812027">Marthin Alfreinsco Salakory</a>
                    <!-- <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="lib/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>