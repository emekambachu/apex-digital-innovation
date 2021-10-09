<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('main/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('main/assets/img/favicon.png') }}">

    <title>@yield('title') - Apex Digital Innovation</title>

</head>
<body>

{{--<div class="loader">--}}
{{--    <div class="d-table">--}}
{{--        <div class="d-table-cell">--}}
{{--            <div class="spinner">--}}
{{--                <div class="double-bounce1"></div>--}}
{{--                <div class="double-bounce2"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="header-area two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="left">
                    <ul>
                        <li>
                            <i class='bx bx-mail-send'></i>
                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#eb838e878784ab8d82858485c5888486"><span class="__cf_email__" data-cfemail="0b636e6767644b6d6265646525686466">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right">
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="navbar-area sticky-top">

    <div class="mobile-nav">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('apex_digital_innovation.png') }}" alt="Logo">
        </a>
    </div>

    <div class="main-nav two">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('apex_digital_innovation.png') }}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('about') }}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('terms') }}" class="nav-link">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('legal') }}" class="nav-link">Legal</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('content')

<footer class="footer-area two pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('apex_digital_innovation_white.png') }}" alt="Logo">
                        </a>
                        <p>We believe that blockchain and bitcoin will make the world more fair. To speed up the process of cryptocurrency mass adoption.</p>
                        <ul>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <span>Phone:</span>
                                <a href="tel:882569756">882-569-756</a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <span>Email:</span>
                                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#58303d343437183e31363736763b3735"><span class="__cf_email__" data-cfemail="d2bab7bebebd92b4bbbcbdbcfcb1bdbf">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="{{ url('about') }}">About us</a>
                            </li>
                            <li>
                                <a href="{{ url('legal') }}">Legal</a>
                            </li>
                            <li>
                                <a href="{{ url('faq') }}">FAQ</a>
                            </li>
                            <li>
                                <a href="{{ url('terms') }}">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <h3>Newsletter</h3>
                    <div class="footer-newsletter">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control"
                                   placeholder="Enter email address"
                                   name="EMAIL" required autocomplete="off">
                            <button class="btn common-btn" type="submit">
                                Subscribe
                                <span></span>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>What We Do</h3>
                        <ul>
                            <li>
                                <a href="{{ url('about') }}">About us</a>
                            </li>
                            <li>
                                <a href="{{ url('legal') }}">Legal</a>
                            </li>
                            <li>
                                <a href="{{ url('faq') }}">FAQ</a>
                            </li>
                            <li>
                                <a href="{{ url('terms') }}">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyright-area two">
    <div class="container">
        <div class="copyright-item">
            <p>Copyright ©{{ date('Y') }} Apex Digital Innovation</p>
        </div>
    </div>
</div>


<div class="go-top">
    <i class='bx bxs-up-arrow'></i>
    <i class='bx bxs-up-arrow'></i>
</div>


<script data-cfasync="false"
        src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('main/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('main/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('main/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('main/assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('main/assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('main/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('main/assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('main/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('main/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('main/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('main/assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('main/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('main/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('main/assets/js/custom.js') }}"></script>
</body>

</html>
