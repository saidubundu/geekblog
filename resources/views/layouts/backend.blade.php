<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Mar 2020 00:11:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Den of Geeks | Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, light bootstrap 4 dashboard, frontend, responsive bootstrap dashboard">
    <meta name="description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$39">
    <meta name="twitter:label2" content="Price">
    <!-- Open Graph data -->
    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="dashboard.html" />
    <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg" />
    <meta property="og:description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->


    <link rel="stylesheet" href="{{asset('backend/css/fontawesome-all.min.css')}}" />
    <!-- CSS Files -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/light-bootstrap-dashboard790f.css')}}?v=2.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('backend/css/demo.css')}}" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
{{--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"--}}
{{--                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>--}}
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    @include('backend.partials.sideBar')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                            <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                            <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="nav navbar-nav mr-auto">
                        <form class="navbar-form navbar-left navbar-search-form" role="search">
                            <div class="input-group">
                                <i class="nc-icon nc-zoom-split"></i>
                                <input type="text" value="" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-planet"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Create New Post</a>
                                <a class="dropdown-item" href="#">Manage Something</a>
                                <a class="dropdown-item" href="#">Do Nothing</a>
                                <a class="dropdown-item" href="#">Submit to live</a>
                                <li class="divider"></li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </ul>
                        </li>
{{--                        <li class="dropdown nav-item">--}}
{{--                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">--}}
{{--                                <i class="nc-icon nc-bell-55"></i>--}}
{{--                                <span class="notification">5</span>--}}
{{--                                <span class="d-lg-none">Notification</span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <a class="dropdown-item" href="#">Notification 1</a>--}}
{{--                                <a class="dropdown-item" href="#">Notification 2</a>--}}
{{--                                <a class="dropdown-item" href="#">Notification 3</a>--}}
{{--                                <a class="dropdown-item" href="#">Notification 4</a>--}}
{{--                                <a class="dropdown-item" href="#">Notification 5</a>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bullet-list-67"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-email-85"></i> Messages
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-umbrella-13"></i> Help Center
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-settings-90"></i> Settings
                                </a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                                </a>
                                <a href="#" class="dropdown-item text-danger">
                                    <i class="nc-icon nc-button-power"></i> Log out
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        @yield('content')

        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="/">Den Of Geeks</a>, powered by: <a href="">PeekTower</a>
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>

{{--<div class="fixed-plugin">--}}
{{--    <div class="dropdown show-dropdown">--}}
{{--        <a href="#" data-toggle="dropdown">--}}
{{--            <i class="fa fa-cog fa-2x"> </i>--}}
{{--        </a>--}}
{{--        <ul class="dropdown-menu">--}}
{{--            <li class="header-title"> Sidebar Style</li>--}}
{{--            <li class="adjustments-line">--}}
{{--                <a href="javascript:void(0)" class="switch-trigger">--}}
{{--                    <p>Background Image</p>--}}
{{--                    <label class="switch-image">--}}
{{--                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info">--}}
{{--                        <span class="toggle"></span>--}}
{{--                    </label>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="adjustments-line">--}}
{{--                <a href="javascript:void(0)" class="switch-trigger">--}}
{{--                    <p>Sidebar Mini</p>--}}
{{--                    <label class="switch-mini">--}}
{{--                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">--}}
{{--                        <span class="toggle"></span>--}}
{{--                    </label>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="adjustments-line">--}}
{{--                <a href="javascript:void(0)" class="switch-trigger">--}}
{{--                    <p>Fixed Navbar</p>--}}
{{--                    <label class="switch-nav">--}}
{{--                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">--}}
{{--                        <span class="toggle"></span>--}}
{{--                    </label>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="adjustments-line">--}}
{{--                <a href="javascript:void(0)" class="switch-trigger background-color">--}}
{{--                    <p>Filters</p>--}}
{{--                    <div class="pull-right">--}}
{{--                        <span class="badge filter badge-black" data-color="black"></span>--}}
{{--                        <span class="badge filter badge-azure" data-color="azure"></span>--}}
{{--                        <span class="badge filter badge-green" data-color="green"></span>--}}
{{--                        <span class="badge filter badge-orange active" data-color="orange"></span>--}}
{{--                        <span class="badge filter badge-red" data-color="red"></span>--}}
{{--                        <span class="badge filter badge-purple" data-color="purple"></span>--}}
{{--                    </div>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="header-title">Sidebar Images</li>--}}
{{--            <li class="active">--}}
{{--                <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--                    <img src="../assets/img/sidebar-1.jpg" alt="" />--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--                    <img src="../assets/img/sidebar-3.jpg" alt="" />--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--                    <img src="../assets/img/sidebar-4.jpg" alt="" />--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--                    <img src="../assets/img/sidebar-5.jpg" alt="" />--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="button-container">--}}
{{--                <div>--}}
{{--                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get free demo!</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="button-container">--}}
{{--                <div>--}}
{{--                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block">Buy now!</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="button-container">--}}
{{--                <div>--}}
{{--                    <a href="https://demos.creative-tim.com/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documention</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>--}}
{{--            <li class="button-container">--}}
{{--                <button id="twitter" class="btn btn-social btn-twitter btn-round twitter-sharrre"><i class="fa fa-twitter"></i> · 256</button>--}}
{{--                <button id="facebook" class="btn btn-social btn-facebook btn-round facebook-sharrre"><i class="fa fa-facebook-square"></i> · 426</button>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
</body>

<!--   Core JS Files   -->
<script src="{{asset('backend/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>

<script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('backend/js/plugins/bootstrap-switch.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('backend/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('backend/js/plugins/bootstrap-notify.js')}}"></script>
<!--  Share Plugin -->
<script src="{{asset('backend/js/plugins/jquery.sharrre.js')}}"></script>
<!--  jVector Map  -->
<script src="{{asset('backend/js/plugins/jquery-jvectormap.js')}}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('backend/js/plugins/moment.min.js')}}"></script>
<!--  DatetimePicker   -->
<script src="{{asset('backend/js/plugins/bootstrap-datetimepicker.js')}}"></script>
<!--  Sweet Alert  -->
<script src="{{asset('backend/js/plugins/sweetalert2.min.js')}}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{asset('backend/js/plugins/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{asset('backend/js/plugins/nouislider.js')}}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{asset('backend/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{asset('backend/js/plugins/jquery.validate.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('backend/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{asset('backend/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{asset('backend/js/plugins/jquery.dataTables.min.js')}}"></script>



<script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
<!--  Full Calendar   -->
<script src="{{asset('backend/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('backend/js/light-bootstrap-dashboard790f.js?v=2.0.1')}}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/js/demo.js')}}"></script>
@yield('script')
<!--
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

        demo.initVectorMap();

    });
</script> -->
<!-- Facebook Pixel Code Don't Delete -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

</html>
