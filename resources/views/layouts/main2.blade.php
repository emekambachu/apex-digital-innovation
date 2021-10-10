<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Crypto ICO is a responsive modern &amp; clean cryptocurrency website landing page html with admin dashboard template , specially created for ICO Startup agencies and digital crypto currency investment website.">
    <meta name="keywords" content="crypto, ico, cryptocurrency, bitcoin, landing, admin, dashboard, template, modern, clean, responsive">
    <meta name="author" content="PIXINVENT">

    <title>Apex Digital Innovation</title>
    <link rel="apple-touch-icon" href="../../../theme-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('apex_digital_innovation_logoonly.png') }}">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,700" rel="stylesheet">
    <!--Font icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/fonts/themify/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/vendors/flipclock/flipclock.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/vendors/swiper/css/swiper.min.css') }}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/css/demo.min.css') }}">
    <!-- END CRYPTO CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/theme-assets/css/template-3d-graphics.min.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('main2/assets/css/style.css') }}">
    <!-- END Custom CSS-->
</head>

<body class=" 1-column   page-animated template-3g-graphics" data-menu-open="hover" data-menu="">
<!-- Preloader | Comment below code if you don't want preloader-->
<div id="loader-wrapper">
    <svg viewbox=" 0 0 512 512" id="loader">
        <linearGradient id="loaderLinearColors" x1="0" y1="0" x2="1" y2="1">
            <stop offset="5%" stop-color="#28bcfd"></stop>
            <stop offset="100%" stop-color="#1d78ff"></stop>
        </linearGradient>
        <g>
            <circle cx="256" cy="256" r="150" fill="none" stroke="url(#loaderLinearColors)" />
        </g>
        <g>
            <circle cx="256" cy="256" r="125" fill="none" stroke="url(#loaderLinearColors)" />
        </g>
        <g>
            <circle cx="256" cy="256" r="100" fill="none" stroke="url(#loaderLinearColors)" />
        </g>
        <g>
            <circle cx="256" cy="256" r="75" fill="none" stroke="url(#loaderLinearColors)" />
        </g>
        <circle cx="256" cy="256" r="60" fill="url(#loaderImage)" stroke="none" stroke-width="0" />

        <!-- Change the preloader logo here -->
        <defs>
            <pattern id="loaderImage" height="100%" width="100%" patternContentUnits="objectBoundingBox">
                <image href="../../../{{ asset('main2/theme-assets/images-counter/loader-logo.png') }}"
                       preserveAspectRatio="none" width="1" height="1"></image>
            </pattern>
        </defs>
    </svg>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--/ Preloader -->

<!-- /////////////////////////////////// HEADER /////////////////////////////////////-->
<!-- Header Start-->
<header class="page-header">
    <!-- Horizontal Menu Start-->
    <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1"><div class="container">
            <a class="navbar-brand animated" data-animation="fadeInDown" data-animation-delay="1s" href="#head-area">
                <img src="{{ asset('apex_digital_innovation_white.png') }}" alt="Apex Digital Innovation Logo"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div id="navigation" class="navbar-nav ml-auto">
                    <ul class="navbar-nav mt-1">
                        <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                            <a class="nav-link" href="{{ url('/') }}#about">About</a>
                        </li>
                        <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.2s">
                            <a class="nav-link" href="{{ url('/') }}#how">How it works</a>
                        </li>
                        <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.3s">
                            <a class="nav-link" href="{{ url('/') }}#testimonies">Testimonies</a>
                        </li>
                        <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <a class="nav-link" href="{{ url('/') }}#faq">FAQ</a>
                        </li>
                        <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <a class="nav-link" href="{{ url('/') }}#contact">Contact</a>
                        </li>
                        <li class="dropdown show mr-4 animated" data-animation="fadeInDown"
                            data-animation-delay="1.7s" id="google_translate_element"></li>
                    </ul>
{{--                    <span id="slide-line"></span>--}}
{{--                    <form class="form-inline mt-2 mt-md-0">--}}
{{--                        <a class="btn btn-sm btn-gradient-purple btn-glow my-2 my-sm-0 animated" data-animation="fadeInDown" data-animation-delay="1.8s" href="https://pixinvent.com/demo/crypto-ico-admin/html/ltr/vertical-menu/account-login.html" target="_blank">Sign in</a>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </nav>
    <!-- /Horizontal Menu End-->
</header>
<!-- /Header End-->

@yield('content')

<footer class="footer static-bottom  footer-custom-class" data-midnight="white"><div class="container">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <div class="about">
                        <div class="title animated"
                             data-animation="fadeInUpShorter"
                             data-animation-delay="0.2s">
                            <img src="{{ asset('apex_digital_innovation_white.png') }}" alt="Logo">
                        </div>
                        <div class="about-text animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <p class="grey-accent2">We believe that blockchain and bitcoin will make the world more fair. To speed up the process of cryptocurrency mass adoption, We decided to run 5 000 BTC giveaway.</p>
                        </div>
                        <ul class="social-buttons list-unstyled mb-5">
                            <li class="animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.4s">
                                <a href="#" title="Facebook" class="btn font-medium">
                                    <i class="ti-facebook"></i></a></li>
                            <li class="animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.5s">
                                <a href="#" title="Twitter" class="btn font-medium">
                                    <i class="ti-twitter-alt"></i></a></li>
                            <li class="animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.6s">
                                <a href="#" title="LinkedIn" class="btn font-medium">
                                    <i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="links">
                        <h5 class="title animated" data-animation="fadeInUpShorter"
                            data-animation-delay="0.5s">
                            Useful Links</h5>
                        <ul class="useful-links float-left mr-5">
                            <li class="animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.6s">
                                <a href="#">FAQ</a></li>
                            <li class="animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.7s">
                                <a href="#">Terms</a></li>
                            <li class="animated" data-animation="fadeInUpShorter"
                                data-animation-delay="0.8s">
                                <a href="#">Legal </a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feed">
                        <h5 class="title animated" data-animation="fadeInUpShorter"
                            data-animation-delay="0.8s">Feeds</h5>
{{--                        <div class="tweets">--}}
{{--                            <span class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.0s">More about our most powerful theme Crypto ICO : https://t.co/JHBAS345</span>--}}
{{--                            <span class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.2s">More infotamation about CIC Coin : https://t.co/JHSD34JHB</span>--}}
{{--                        </div>--}}
                    </div>
                </div>

            </div>
            <div class="copy-right mx-auto text-center">
                <span class="copyright">Copyright &copy; {{ date('Y') }}, Apex Digital Innovation.</span>
            </div>
        </div>
    </div>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{ asset('main2/theme-assets/vendors/vendors.min.js') }}"></script>
<!-- BEGIN VENDOR JS-->

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('main2/theme-assets/vendors/flipclock/flipclock.min.js') }}"></script>
<script src="{{ asset('main2/theme-assets/vendors/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('main2/theme-assets/vendors/particles.min.js') }}"></script>
<script src="{{ asset('main2/theme-assets/vendors/waypoints/jquery.waypoints.min.js') }}"></script>
<!-- END PAGE VENDOR JS-->

<!-- BEGIN THEME JS-->
<script src="{{ asset('main2/theme-assets/js/theme.min.js') }}"></script>
<script src="{{ asset('main2/theme-assets/js/sales-notification.js') }}"></script>
<script src="{{ asset('main2/theme-assets/js/scripts/demo.min.js') }}"></script>
<!-- END CRYPTO JS-->

<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('main2/theme-assets/js/scripts/particles-type1.min.js') }}"></script>
<!-- END PAGE LEVEL JS-->

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
