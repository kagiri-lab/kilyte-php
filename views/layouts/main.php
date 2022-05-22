<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?= $this->title ?></title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="/assets/default/img/favicon.png" rel="icon" />
    <link href="/assets/default/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="/assets/site/vendor/aos/aos.css" rel="stylesheet" />
    <link href="/assets/site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/site/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="/assets/site/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="/assets/site/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="/assets/site/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="/assets/site/css/style.css" rel="stylesheet" />
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="/assets/default/img/logo.png" alt="" />
                <span>KiLyte</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="">Home</a></li>
                    <li><a class="nav-link scrollto" href="/about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="/contact">Contact Us</a></li>

                    <?php

                    use kilyte\Application;

                    if (Application::isGuest()) : ?>
                        <li><a class="nav-link" href="/login">Login</a></li>
                        <li><a class="nav-link" href="/register">Register</a></li>
                    <?php else : ?>
                        <li><a class="nav-link" href="/profile">Profile</a></li>
                        <li>
                            <a class="nav-link" href="/logout">
                                <?php echo Application::$app->user->getDisplayName() ?> (Logout)
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>

    {{content}}


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="./" class="logo d-flex align-items-center">
                            <img src="/assets/default/img/logo.png" alt="" />
                            <span>KiLyte</span>
                        </a>
                        <p>
                            We offer modern solutions for growing your business
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Web Design</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Product Management</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Marketing</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Nairobi, Kenya<br /><br />
                            <strong>Phone:</strong> (254) 114 889 330<br />
                            <strong>Email:</strong> info@sharksight.co.ke<br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/site/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/site/vendor/aos/aos.js"></script>
    <script src="/assets/site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/site/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/site/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/site/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/site/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/site/js/main.js"></script>
</body>

</html>