<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets/img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/lp/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lp/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lp/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets/lp/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>assets/lp/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">Pelaporan Pengaduan Masyarakat</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Jl.Nitikan Yogyakarta</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>PPM@gmail.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+06 821 6666 8888</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="http://facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="htto://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">GrowMark</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="<?= base_url('login') ?>" class="btn btn-primary rounded-pill py-2 px-3">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" id="home">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url() ?>assets/lp/img/masyarakat2.png" alt="Image" style="filter:brightness(70%);">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>PPM</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Pelaporan Pengaduan Masyarakat</h1>
                                    <a class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight" href="<?=base_url('login')?>">Lapor Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


        <!-- Features Start -->
        <div class="container-xxl py-5" id="service">
            <div class="container">
                <div class="row g-0 feature-row">
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="feature-item border h-100 p-5">
                            <h5 class="mb-3">Tepat Waktu</h5>
                            <p class="mb-0">Kami melayani masyarakat dengan tepat waktu</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="feature-item border h-100 p-5">
                            <h5 class="mb-3">Professional </h5>
                            <p class="mb-0">Kami melayani masyarakat dengan se-professional mungkin</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="feature-item border h-100 p-5">
                            <h5 class="mb-3">Layanan 24 jam</h5>
                            <p class="mb-0">kami melayani sampai 24 jam</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="feature-item border h-100 p-5">
                            <h5 class="mb-3">Terselesaikan</h5>
                            <p class="mb-0">Dengan kami semua komplain dapat terselesaikan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- About Start -->
        <div class="container-xxl about my-5" id="about">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white rounded-top p-5 mt-lg-5">
                            <p class="fs-5 fw-medium text-primary">About Us</p>
                            <h1 class="display-6 mb-4">Apa itu laporan pengaduan masyarakat?</h1>
                            <p class="mb-4"> Apa itu laporan pengaduan masyarakat?
                                Pengaduan masyarakat adalah penyampaian keluhan oleh masyarakat kepada pemerintah atas pelayanan yang tidak sesuai dengan standar pelayanan, atau pengabaian kewajiban dan/atau pelanggaran larangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer wow fadeIn" data-wow-delay="0.1s" id="contact">
            <div class="container py-5">
                <h1 class="text-white mb-2">PPM</h1>
                <p class="text-white mb-4">PPM adalah singkatan dari Pelaporan pengaduan masyarakat yang <br> umumnya digunakan untuk melaporkan suatu kejadian ke pihak instansi tertentu</p>
                <hr class="text-white mb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Our Office</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>JL. Nitikan</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 821 6666 8888</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>PPM@gmail.com</p>
                        <div class="d-flex pt-3">
                            <a class="btn btn-square btn-light rounded-circle me-2" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle me-2" href="http://facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle me-2" href="http://youtube.com"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light rounded-circle me-2" href="http://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="#about">About Us</a>
                        <a class="btn btn-link" href="#contact">Contact Us</a>
                        <a class="btn btn-link" href="#service">Our Services</a>
                    </div>
                    <div class="col-lg-6 col-md-6" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7905.022732002771!2d110.49172557513505!3d-7.8414243488605555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a51b8225936b3%3A0x5e202810fa7c49a0!2sSumber%20Tetes%2C%20Patuk%2C%20Gunung%20Kidul%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1678735730168!5m2!1sen!2sid" width="500" height="250" style="border:0;margin-left:100px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="fw-medium text-light" href="#">Pelaporan Pengaduan Masyarakat</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="fw-medium text-light">Harits T.K</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/lp/lib/wow/wow.min.js"></script>
        <script src="<?= base_url() ?>assets/lp/lib/easing/easing.min.js"></script>
        <script src="<?= base_url() ?>assets/lp/lib/waypoints/waypoints.min.js"></script>
        <script src="<?= base_url() ?>assets/lp/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/lp/lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="<?= base_url() ?>assets/lp/js/main.js"></script>
</body>

</html>