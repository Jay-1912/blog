<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from template.hasthemes.com/bunzo/bunzo/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 17:25:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bunzo - Blog Bootstrap 5 HTML Template</title>
    <meta name="description" content="Bunzo is one of the most popular blog template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bunzo - Blog HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/vendor/bootstrap.min.css">  -->

    <!-- Gordita Fonts CSS -->
    <link rel="stylesheet" href="fonts/gordita-fonts.css" />

    <!-- Icofont CSS -->
    <!-- <link rel="stylesheet" href="css/vendor/icofont.min.css" /> -->

    <!-- Light gallery CSS -->
    <!-- <link rel="stylesheet" href="css/plugins/lightgallery.min.css"> -->

    <!-- Swiper bundle CSS -->
    <!-- <link rel="stylesheet" href="css/plugins/swiper-bundle.min.css" /> -->

    <!-- AOS CSS -->
    <!-- <link rel="stylesheet" href="css/plugins/aos.css"> -->


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="css/vendor/vendor.min.css">
    <link rel="stylesheet" href="css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>




<body class="theme-color-five">
    <!--========  header area =========-->
    <header class="header-five">
        <div class="header-bottom-area bg-gray">
            <div class="container-fluid container-custom-150">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-6 col-5">
                        <div class="header-five-left-side-box">
                            <div class="logo">
                                <a href="/">
                                    <img src="images/logo/logo-5-black.png" alt="" />
                                </a>
                            </div>
                            <div class="main-menu-area text-center ml-3">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li>
                                            <a href="/"><span>Home</span></a>
                                        </li>
                                        <li>
                                            <a href="/about-us"><span>About</span></a>
                                        </li>
                                        <li>
                                            <a href="/category"><span>Category</span></a>
                                        </li>
                                        <li><a href="/contact-us"><span>Contact </span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-7">
                        <div class="header-five-right-side">
                            @auth
                                <div class="d-sm-block d-none">
                                    <a href="/login" class="log-in-action-btn">
                                        Log Out
                                    </a>
                                </div>
                            @else
                                <div class="d-sm-block d-none">
                                    <a href="/login" class="log-in-action-btn">
                                        Log in
                                    </a>
                                </div>
                                <a href="/sign-up" class="sign-up-action-button btn-bg-5 btn-large btn">
                                    Sign Up Free
                                </a>
                            @endauth
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--======== End of header area  =========-->

        {{$slot}}

        <!--======  footer area =======-->
        <footer class="footer-area footer-five">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="images/logo/logo-5.png" alt="">
                                    </a>
                                </div>
                                <p class="footer-dec-text">Lorem Ipsum is simply dummy text
                                    the printing and typesetting industry
                                    has been the industry's standard
                                    text ever since.
                                </p>
                                <ul class="footer-socail-share">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6">
                            <div class="footer-widget footer-subscribe-center">
                                <div class="footer-widget-title">
                                    <h4 class="title">Subscribe</h4>
                                </div>
                                <div class="footer-subscribe-wrap">
                                    <div class="single-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                    <div class="button-box">
                                        <button class="btn-primary btn-bg-5 btn-large" type="submit">Subscribe Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="footer-menu-widget">
                                <div class="single-footer-menu">
                                    <div class="footer-widget-title">
                                        <h4 class="title">Company</h4>
                                    </div>
                                    <ul class="footer-widget-menu-list">
                                        <li><a href="#!">About Us</a></li>
                                        <li><a href="#!">Contact Us</a></li>
                                        <li><a href="#!">Local Print Ads</a></li>
                                        <li><a href="#!">FAQ’s</a></li>
                                        <li><a href="#!">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="single-footer-menu">
                                    <div class="footer-widget-title">
                                        <h4 class="title">Quick Links</h4>
                                    </div>
                                    <ul class="footer-widget-menu-list">
                                        <li><a href="#!">Privacy Policy</a></li>
                                        <li><a href="#!">Discussion</a></li>
                                        <li><a href="#!">Terms & Conditions</a></li>
                                        <li><a href="#!">Customer Support</a></li>
                                        <li><a href="#!">Course FAQ’s</a></li>
                                    </ul>
                                </div>
                                <div class="single-footer-menu">
                                    <div class="footer-widget-title">
                                        <h4 class="title">Category</h4>
                                    </div>
                                    <ul class="footer-widget-menu-list">
                                        <li><a href="#!">Lefestyle</a></li>
                                        <li><a href="#!">Healthy</a></li>
                                        <li><a href="#!">Restaurent</a></li>
                                        <li><a href="#!">Travel Tips</a></li>
                                        <li><a href="#!">Marketing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-bottom-inner">
                                <div class="copy-right-text mb-20">
                                    <p>© 2021 <a href="#">Bunzo</a>. Made with ❤️ by <a target="_blank" rel="noopener" href="https://hasthemes.com/">HasThemes</a></p>
                                </div>
                                <ul class="footer-bottom-menu-list  mb-20">
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Status</a></li>
                                    <li><a href="#">Writers</a></li>
                                </ul>
                                <div class="scroll-button-buttom  mb-20">
                                    <span class="text">Jump to top</span>
                                    <a class="right-side-scroll-up" href="#">
                                        <i class="icofont-long-arrow-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====  End of footer area ========-->








        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="images/logo/logo.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-end">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li><a href="/"><span>Home</span></a></li>
                            <li><a href="/about-us"><span>About</span></a></li>
                            <li><a href="/category"><span>Category</span></a></li>
                            <li><a href="/contact-us"><span>Contact </span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->








        <!-- JS
        ============================================ -->
        <!-- Modernizer JS -->
        <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->

        <!-- jQuery JS -->
        <!-- <script src="js/vendor/jquery-3.5.1.min.js"></script>
        <script src="js/vendor/jquery-migrate-3.3.0.min.js"></script> -->

        <!-- Bootstrap JS -->
        <!-- <script src="js/vendor/bootstrap.min.js"></script> -->

        <!-- Light gallery JS -->
        <!-- <script src="js/plugins/lightgallery.min.js"></script> -->

        <!-- Isotope JS -->
        <!-- <script src="js/plugins/isotope.min.js"></script> -->

        <!-- Masonry JS -->
        <!-- <script src="js/plugins/masonry.min.js"></script> -->

        <!-- ImagesLoaded JS -->
        <!-- <script src="js/plugins/images-loaded.min.js"></script> -->

        <!-- Swiper Bundle JS -->
        <!-- <script src="js/plugins/swiper-bundle.min.js"></script> -->

        <!-- AOS JS -->
        <!-- <script src="js/plugins/aos.js"></script> -->

        <!-- Ajax JS -->
        <!-- <script src="js/plugins/ajax.mail.js"></script> -->

        <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
        <script src="js/vendor/vendor.min.js"></script>
        <script src="js/plugins/plugins.min.js"></script>


        <!-- Main JS -->
        <script src="js/main.js"></script>


    </body>


    <!-- Mirrored from template.hasthemes.com/bunzo/bunzo/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 17:26:40 GMT -->
    </html>
