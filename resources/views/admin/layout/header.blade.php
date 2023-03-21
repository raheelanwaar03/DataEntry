<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="9lQReAOP7TYMbm5nNnK5b7NtKpmZuMGXAIriNN7M">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Some description for the page" />
    <meta property="og:title" content="Lezato : Restaurant Admin Laravel Template" />
    <meta property="og:description" content="Lezato | Dashboard" />
    <meta property="og:image" content="../social-image.html" />
    <meta name="format-detection" content="telephone=no">
    <title>Admin | Dashboard</title>
    {{-- css --}}
    <link href="{{ asset('admin/public/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/public/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/public/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="preloader">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="{{ route('Welcome') }}" class="brand-logo">
                <img src="{{ asset('admin/public/images/logo.png') }}" height="100px" width="100px" alt="logo">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="nav-item">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Find something here......">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item recipe">
                                <form action="{{ route('logout') }}" method="Post">
                                    @csrf
                                    <button class="btn btn-primary btn-rounded">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        {{-- links --}}

        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{ route('Admin.Dashboard') }}" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">User's</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.All.Users') }}">All User's</a></li>
                            <li><a href="#">Pending User's</a></li>
                            <li><a href="#">Approved User's</a></li>
                            <li><a href="#">Rejected User's</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-041-graph"></i>
                            <span class="nav-text">Limite's</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Add Referal limit</a></li>
                        </ul>
                    </li>
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-045-heart"></i>
                            <span class="nav-text">Food</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Add Food</a></li>
                            <li><a href="#">All Food</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-013-checkmark"></i>
                            <span class="nav-text">Reservation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Table Request</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-072-printer"></i>
                            <span class="nav-text">Orders</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Pending Orders</a></li>
                            <li><a href="#">Cancelled Orders</a></li>
                            <li><a href="#">Delivered Orders</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="copyright">
                    <p><strong>{{ env('APP_NAME') }} Data Entry Admin side</strong> © 2023 All Rights Reserved</p>
                </div>
            </div>
        </div>
