<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home One || Financo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

    <!-- All css here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shortcode/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="header-top blue-bg fix d-lg-block d-md-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3">
                        <span>Welcome to {{ env('APP_NAME') }}</span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="header-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="search-container">
                            <form action="#" method="post">
                                <input placeholder="" type="text">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main bg-green white">
            <div class="container">
                <div class="header-main-wrapper">
                    <div class="logo-wrapper">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                    alt="FINANCO" /></a>
                        </div>
                    </div>
                    <div class="header-main-content">
                        <div class="header-info">
                            <img src="{{ asset('assets/img/icons/phone.png') }}" alt="">
                            <div class="header-info-text">
                                <h4>{{ env('APP_NUM') }}</h4>
                                <span>We are open 9 am - 10pm</span>
                            </div>
                        </div>
                        <div class="header-info">
                            <img src="{{ asset('assets/img/icons/message.png') }}" alt="">
                            <div class="header-info-text">
                                <h4>{{ env('APP_EMAIL') }}</h4>
                                <span>You can mail us</span>
                            </div>
                        </div>
                    </div>
                    <div class="quote-btn">
                        @if (auth()->user())
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning text-white">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-large btn-warning  text-white">Register</a>
                                <a href="{{ route('login') }}" class="btn btn-large btn-warning  text-white">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area Start -->
        <div class="mainmenu-area fixed header-sticky d-lg-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('Welcome') }}">HOME</a>
                                    </li>
                                    @if (auth()->user())
                                    <li><a href="{{ route('User.Dashboard') }}">Dashboard</a>
                                    @endif
                                    <li><a href="about.html">ABOUT US</a></li>
                                    </li>
                                    <li><a href="services.html">SERVICES</a>
                                    </li>
                                    <li><a href="project.html">PROJECTS</a>
                                    </li>
                                    <li><a href="#">SHOP</a></li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area Start -->
        <!-- Mobile Menu Area start -->
        <div class="mobile-menu-area d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{ route('Welcome') }}">HOME</a></li>
                                    <li><a href="{{ route('User.Dashboard') }}">Dashboard</a></li>
                                    <li><a href="about.html">ABOUT US</a>
                                    </li>
                                    <li><a href="blog.html">BLOG</a>
                                        <ul class="submenu">
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area end -->
    </header>
