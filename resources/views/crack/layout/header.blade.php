<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/robtic/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 13:28:48 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/bootstrap.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/meanmenu.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/boxicons.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/fonts/flaticon.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/crack/css/owl.theme.default.min.css') }}">
    <!-- Odometer CSS-->
    <link rel="stylesheet" href="{{ asset('public/crack/css/odometer.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/magnific-popup.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/style.css') }}">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/dark.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('public/crack/css/responsive.css') }}">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <title>Home | Yanai Crackers</title>

    <link rel="icon" type="image/png" href="{{ asset('public/crack/img/yanai_logo.png') }}">
</head>

<body>
    <!-- Pre Loader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <!-- End Pre Loader -->

    <!-- Header top -->
    <div class="header-top-area" style="background-color:chocolate;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-top-item">
                        <div class="header-left">
                            <ul>
                                <li>
                                    <i class="flaticon-mail"></i>
                                    <a href="info@yanaicrackers.com">
                                        info@yanaicrackers.com
                                    </a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i>
                                    <a href="tel:+918098144662">
                                        +91 80981 44662
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-item">
                        <div class="header-right">
                            <!-- <ul>
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
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header top -->

    <!-- Start Navbar Area -->
    <div class="navbar-area sticky-top">
        <!-- Mobile Device -->
        <div class="mobile-nav">
            <a href="{{ route('/') }}" class="logo" style="display: flex; gap: 5px;">
                <div style="background-color: #fff; display: inline-block; padding: 5px;">
                    <img src="{{ asset('public/crack/assets/img/yanai_logo.png') }}" class="main-logo" alt="Logo" height="40px" width="100px">
                </div>

                <h6>Yanai <br> Crackers</h6>
            </a>
        </div>

        <!-- Desktop Device -->
        <div class="main-nav" style="background-color:#b3405d;">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('public/crack/img/yanai_logo.png') }}" class="main-logo" alt="Logo" height="60px" width="200px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('/') }}" class="nav-link{{ request()->is('/') ? ' active' : '' }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link{{ request()->is('about') ? ' active' : '' }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('category') }}" class="nav-link{{ request()->is('category') ? ' active' : '' }}">Categories</a>
                            </li>
                            <!-- Add similar logic for other navigation links -->
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link{{ request()->is('contact') ? ' active' : '' }}">Contact</a>
                            </li>
                        </ul>

                        <div class="side-nav">
                            <a href="{{ route('/') }}">Order Now</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->