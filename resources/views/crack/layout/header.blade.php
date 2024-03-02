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
<style>
    /* Select the path element within the SVG and change its fill color to red */
    #ast-cart-svg path {
        fill: red;
    }
</style>
<style>
    .switch-box {
        display: none;
    }
</style>

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
    <a href="{{ route('cart') }}">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="ast-cart-svg" x="0px" y="0px" width="20px" height="20px" viewBox="826 837.5 140 121" enable-background="new 826 837.5 140 121" xml:space="preserve">
            <text x="9" y="30" fill="white" font-size="12" text-anchor="middle">7</text> <!-- Adjust the x, y, font-size values as needed -->
            <path d="M878.77,943.611c0,2.75-1.005,5.131-3.015,7.141c-2.009,2.01-4.389,3.014-7.139,3.014c-2.75,0-5.13-1.004-7.139-3.014  c-2.01-2.01-3.015-4.391-3.015-7.141c0-2.749,1.005-5.129,3.015-7.138c2.009-2.011,4.389-3.016,7.139-3.016  c2.75,0,5.13,1.005,7.139,3.016C877.765,938.482,878.77,940.862,878.77,943.611z M949.846,943.611c0,2.75-1.005,5.131-3.015,7.141  s-4.39,3.014-7.141,3.014c-2.748,0-5.129-1.004-7.138-3.014c-2.01-2.01-3.015-4.391-3.015-7.141c0-2.749,1.005-5.129,3.015-7.138  c2.009-2.011,4.39-3.016,7.138-3.016c2.751,0,5.131,1.005,7.141,3.016C948.841,938.482,949.846,940.862,949.846,943.611z   M960,857.306v40.615c0,1.27-0.438,2.393-1.311,3.371s-1.943,1.548-3.212,1.705l-82.815,9.678c0.687,3.174,1.031,5.024,1.031,5.554  c0,0.846-0.635,2.539-1.904,5.076h72.979c1.375,0,2.564,0.503,3.569,1.508c1.006,1.005,1.508,2.194,1.508,3.569  c0,1.376-0.502,2.564-1.508,3.569c-1.005,1.005-2.194,1.507-3.569,1.507H863.54c-1.375,0-2.565-0.502-3.57-1.507  s-1.507-2.193-1.507-3.569c0-0.581,0.212-1.415,0.634-2.498c0.424-1.085,0.847-2.036,1.27-2.855c0.423-0.82,0.992-1.878,1.706-3.174  s1.124-2.076,1.23-2.34l-14.041-65.285h-16.183c-1.375,0-2.564-0.502-3.569-1.507c-1.005-1.005-1.508-2.195-1.508-3.57  c0-1.375,0.502-2.565,1.508-3.57c1.004-1.004,2.194-1.507,3.569-1.507h20.308c0.846,0,1.6,0.172,2.261,0.516  s1.177,0.754,1.547,1.229c0.37,0.476,0.714,1.124,1.032,1.944c0.316,0.819,0.528,1.507,0.634,2.062  c0.106,0.556,0.252,1.336,0.437,2.34c0.185,1.005,0.304,1.692,0.357,2.063h95.271c1.375,0,2.563,0.502,3.57,1.507  C959.497,854.741,960,855.931,960,857.306z"></path>
        </svg><span id="pay"> &#8377;00</span>
    </a>
</div>



                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->