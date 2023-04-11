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
            <a href="index.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><img class="mr-2" src="img/maedonor.jpeg" style="height: 100px;" alt=""></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Beranda</a>
                    <a href="index.php#tentang" class="nav-item nav-link">Tentang</a>
                    <a href="index.php#donor" class="nav-item nav-link">Permohonan</a>
                    <a href="index.php#artikel" class="nav-item nav-link">artikel</a>
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