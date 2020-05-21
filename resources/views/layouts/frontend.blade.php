<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Geek - Blog, News & Magazine </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

</head>
<body>

<!-- header-start -->
<header>
    <div class="header-top-area grey-2-bg d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="header-2-right">
                        <div class="header-02-info f-left d-none d-lg-block">
                            <span><i class="far fa-clock"></i> <a href="#">Friday,</a> 25 Nov 2019</span>
                        </div>
                        <div class="header-lang  f-left pos-rel">
                            <div class="lang-icon">
                                <img src="{{asset('img/icon/flag-2.png')}}" alt="">
                                <a href="#">English <i class="far fa-angle-down"></i></a>
                            </div>
                            <ul class="header-lang-list">
                                <li><a href="#">USA</a></li>
                                <li><a href="#">UK</a></li>
                                <li><a href="#">CA</a></li>
                                <li><a href="#">AU</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="header-top-right f-right">
                        <div class="header-icon f-right d-none d-lg-block">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="twitt" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="instagra" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="youtub" href="#"><i class="fab fa-youtube-square"></i></a>
                        </div>
                        <ul class="header-top-link f-right d-none d-xl-block">
                            <li><a href="#">About </a></li>
                            <li><a href="#">Advertisement</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">My Account </a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle-area pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 d-none d-xl-block">
                    <div class="sub-wrap fix">
                        <div class="subs-img f-left">
                            <a href="#"><img src="{{asset('img/bg/subs.jpg')}}" alt=""></a>
                        </div>
                        <div class="sub-content fix">
                            <span>20% Off For New Product</span>
                            <h4>Subscribe Our Newsletter</h4>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#subscribe-modal">Subscribe <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="logo-2 text-left text-xl-center">
                        <a href="index.html"><img src="{{asset('img/logo/logo-2.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="header-banner text-right d-none d-lg-block">
                        <a href="index.html"><img src="{{asset('img/banner/banner.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-menu-area menu-2 d-none d-lg-block">
        <div class="container">
            <div class="menu-bg menu-bg-2 theme-bg position-relative">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 position-static">
                        <div class="main-menu f-left">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="/">home</a></li>
                                        @include('frontend.partials.navBar')
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                        <div class="header-1-right">
                            <div class="menu-bar f-right d-none d-lg-block">
                                <a class="info-bar" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
                            </div>
                            <div class="search-icon f-right d-none d-lg-block">
                                <a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="extra-info">
        <div class="close-icon">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <a href="index.html">
                <img src="assets/img/logo/white.png" alt="" />
            </a>
        </div>
        <div class="side-info mb-30">
            <div class="contact-list mb-30">
                <h4>Office Address</h4>
                <p>123/A, Miranda City Likaoli
                    Prikano, Dope</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Phone Number</h4>
                <p>+0989 7876 9865 9</p>
                <p>+(090) 8765 86543 85</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Email Address</h4>
                <p><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="670e09010827021f060a170b024904080a">[email&#160;protected]</a></p>
                <p><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f0edf4f8e5f9f0bbf8f4fcf9d5fde0f8bbf6faf8">[email&#160;protected]</a></p>
            </div>
        </div>
        <div class="instagram">
            <a href="#">
                <img src="assets/img/portfolio/p1.jpg" alt="">
            </a>
            <a href="#">
                <img src="assets/img/portfolio/p2.jpg" alt="">
            </a>
            <a href="#">
                <img src="assets/img/portfolio/p3.jpg" alt="">
            </a>
            <a href="#">
                <img src="assets/img/portfolio/p4.jpg" alt="">
            </a>
            <a href="#">
                <img src="assets/img/portfolio/p5.jpg" alt="">
            </a>
            <a href="#">
                <img src="assets/img/portfolio/p6.jpg" alt="">
            </a>
        </div>
        <div class="social-icon-right mt-20">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</header>
<!-- header-start -->

 @yield('content')

<!-- footer-area-start -->
<footer>
    <div class="footer-area blue-bg pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">About Us</h3>
                        <div class="footer-text">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound the actual teachings of the great explorer of the truth the master-builder.</p>
                        </div>
                        <div class="social-icon footer-icon">
                            <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="twit" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="insta" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="pin" href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a class="google" href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="footer-wrapper pl-30 mb-30">
                        <h3 class="footer-title">Information</h3>
                        <div class="footer-link">
                            <ul>
                                <li><a href="#">About Company</a></li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Recent News</a></li>
                                <li><a href="#">Meet With Us</a></li>
                                <li><a href="#">Needs A Job ?</a></li>
                                <li><a href="#">What We Do ?</a></li>
                                <li><a href="#">Report Our News ?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="footer-wrapper pl-25 mb-30">
                        <h3 class="footer-title">About Us</h3>
                        <div class="footer-link">
                            <ul>
                                <li><a href="#">Who We Are ?</a></li>
                                <li><a href="#">Conatct Us</a></li>
                                <li><a href="#">Advertisement Us</a></li>
                                <li><a href="#">Join With Us</a></li>
                                <li><a href="#">Setting & Privacy</a></li>
                                <li><a href="#">Latest Blog</a></li>
                                <li><a href="#">Entertainment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">Contact Us</h3>
                        <ul class="footer-info">
                            <li><span><i class="far fa-map-marker-alt"></i> 1058 Meadowb, Mall Road</span></li>
                            <li><span><i class="far fa-envelope-open"></i> <a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a696f6a6a75686e5a7d777b737634797577">[email&#160;protected]</a></span></li>
                            <li><span><i class="far fa-phone"></i> +000 (123) 44 558</span></li>
                            <li><span><i class="far fa-paper-plane"></i> www.buildmartinfo.net</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-5">
                    <div class="footer-wrapper mb-30 pl-60">
                        <h3 class="footer-title">Twitter Feeds</h3>
                        <ul class="footer-info-link">
                            <li>
                                <div class="footer-info-icon f-left mr-20 ">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="footer-content">
                                    <p><a href="#">"<span class="__cf_email__" data-cfemail="460823313506">[email&#160;protected]</span></a> accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium "</p>
                                </div>
                            </li>
                            <li>
                                <div class="footer-info-icon f-left mr-20 ">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="footer-content">
                                    <p><a href="#">"<span class="__cf_email__" data-cfemail="7240463c17050132">[email&#160;protected]</span></a> On the other hand, we denounce with rindi natioand dislike men who are so beguiled and demoralized "</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area mt-45 pt-25 pb-25 footer-border-top">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 offset-xl-2">
                        <div class="footer-bottom-link text-center">
                            <a href="#">About Us</a>
                            <a href="#">Latest News</a>
                            <a href="#">Contact Us</a>
                            <a href="#">Popular News</a>
                            <a href="#">Payment Type</a>
                            <a href="#">News Type</a>
                            <a href="#">Information</a>
                            <a href="#">My Account</a>
                            <a href="#"> Setting & Privacy</a>
                        </div>
                        <div class="copyright text-center">
                            <p>Copyright <i class="far fa-copyright"></i> 2019, <a href="#">GeekBlog</a> All rights reserved. Design By <a href="#">PeekTower</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->



<!-- Modal Search -->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <input type="text" placeholder="Search here...">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>


<!-- Subscribe Search -->
<div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="sub-modal d-flex align-items-center">
                <div class="sub-m-img">
                    <img src="assets/img/banner/newsletter.jpg" alt="">
                </div>
                <div class="sub-m-form">
                    <h3><span>Subscribe Our</span>
                        Newsletter</h3>
                    <form>
                        <input type="email" placeholder="Enter your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JS here -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('frontend/js/ajax-form.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>
