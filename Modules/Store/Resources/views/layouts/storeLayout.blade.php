<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="{{('Restone')}} admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, {{('Restone')}} admin template, dashboard template, flat admin template, responsive admin template, web app">
    <link rel="shortcut icon" href="{{ $store->browser_icon ? asset('storage/' . $store->browser_icon) : asset('app-assets/images/custom/image-icon.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }

        .item-img.text-center {
            align-self: center;
        }

        .card-img,
        .card-img-top {
            max-height: 178px;
            width: 408px !important;
        }
    </style>
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css">

    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-toastr.css">

    <!-- BEGIN: Page CSS-->
    @yield('styles')
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="bg-white horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" id="store-body">
    @livewireScripts
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="../../../html/rtl/horizontal-menu-template/index.html"><span class="brand-logo">
                            <img class="top-logo" src="{{ $store->logo ? asset('storage/' . $store->logo) : asset('app-assets/images/custom/image-icon.png') }}" alt="logo" width="50" height="50" />
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <!-- <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us"></i>
                    <span class="selected-language">English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="#" data-language="en">
                        <i class="flag-icon flag-icon-us"></i> English</a>
                    <a class="dropdown-item" href="#" data-language="fr">
                        <i class="flag-icon flag-icon-fr"></i> French</a>
                    <a class="dropdown-item" href="#" data-language="de">
                        <i class="flag-icon flag-icon-de"></i> German</a>
                    <a class="dropdown-item" href="#" data-language="pt">
                        <i class="flag-icon flag-icon-pt"></i> Portuguese</a>
                </div>
            </li> -->

                <li class="nav-item nav-search">
                    <a class="nav-link" href="{{route('store.wishlist',$store->store_link)}}">
                        <i class="ficon" data-feather="heart"></i>
                        <span class="badge rounded-pill bg-primary badge-up cart-item-count">
                            <livewire:store::wishlist.wishlist-counter>
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-cart me-25">
                    <a class="nav-link" href="{{route('store.checkout',$store->store_link)}}">
                        <i class="ficon" data-feather="shopping-cart"></i>
                        <span class="badge rounded-pill bg-primary badge-up cart-item-count">
                            <livewire:client::cart-counter />
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">{{__('My Cart')}}</h4>
                                <div class="badge rounded-pill badge-light-primary" style="display:inherit;">
                                    {{__('items')}}
                                    (
                                    <livewire:client::cart-counter />
                                    )
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">{{__('Total:')}}</h6>
                                <h6 class="text-primary fw-bolder mb-0">
                                    <livewire:client::cart.total />
                                </h6>
                            </div>
                            <a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">{{__('Checkout')}}</a>
                        </li>
                    </ul>
                </li>
                @if (Auth::check())
                @php
                $url = Auth::user()->admin == $store->admin ? route('admin.index') : route('client.dashboard', $store->store_link);
                @endphp
                <li class="nav-item dropdown dropdown-notification me-25">
                    <a href="{{ $url }}" class="avatar bg-light-success" target="__blank">
                        <span class="avatar-content">{{ucfirst(Auth::user()->name[0])}}</span>
                        <span class="avatar-status-online"></span>
                    </a>
                </li>
                @else
                <li class="nav-item dropdown dropdown-notification me-25">
                    <a class="nav-link" href="#" data-bs-target="#userLoginModal" data-bs-toggle="modal">
                        <i class="ficon" data-feather="user"></i>
                    </a>
                </li>
                @endif


            </ul>
        </div>
    </nav>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item me-auto"><a class="navbar-brand" href="../../../html/rtl/horizontal-menu-template/index.html"><span class="brand-logo">
                                <img class="top-logo" src="{{ $store->logo ? asset('storage/' . $store->logo) : asset('app-assets/images/custom/image-icon.png') }}" alt="logo" width="50" height="50" />
                            </span>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a>
                    </li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item">
                        <a class="nav-link d-flex align-items-center" href="{{route('store.index',$store->store_link)}}">
                            <i data-feather="home"></i>
                            <span data-i18n="Home">{{__('Home')}}</span>
                        </a>
                    </li>
                    @foreach($categories as $category)
                    @if(count($category->children) > 0 )
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle  nav-link d-flex align-items-center" href="{{route('store.shopCategory',[$store->store_link,$category->id])}}">
                            <i data-feather='circle'></i>
                            <span data-i18n="Apps">{{$category->title}}</span>
                        </a>
                        @include('store::Categories.subcategories', ['subcategories' => $category->children])
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="{{route('store.shopCategory',[$store->store_link,$category->id])}}">
                            <i data-feather='circle'></i>
                            <span data-i18n="Apps">{{$category->title}}</span>
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <footer class="bg-light d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" id="store-footer">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="store-data mb-2">
                        <h3>
                            {{$store->store_name}}
                        </h3>
                        <p>{{$store->store_desc}}</p>
                        <div>
                            @if($store->instagram_link)
                            <a href="https://instagram.com/{{$store->instagram_link}}" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                            @endif
                            @if($store->snapchat_link)
                            <a href="https://snapchat.com/{{$store->snapchat_link}}" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                            </a>
                            @endif
                            @if($store->twitter_link)
                            <a href="https://twitter.com/{{$store->twitter_link}}" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                </svg>
                            </a>
                            @endif
                            @if($store->tiktok_link)
                            <a href="https://tiktok.com/{{$store->tiktok_link}}" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            @endif
                            @if($store->telegram_link)
                            <a href="https://t.me/{{$store->telegram_link}}" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <i class="fab fa-telegram"></i>
                            </a>
                            @endif
                            @if($store->whatsapp_number)
                            <a href="https://api.whatsapp.com/send?phone={{$store->whatsapp_number}}/" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            @endif
                            @if($store->phone_number)
                            <a href="tel:{{$store->phone_number}}" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                    <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </a>
                            @endif
                            @if($store->facebook_user)
                            <a href="https://facebook.com/{{$store->facebook_user}}" target="__blank" type="button" class="btn btn btn-icon btn-icon rounded-circle btn-outline-dark mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="contact-data">
                        <h3>{{__('Quick Access')}}</h3>
                        <p><a href="#" class="text-body">{{__('click heare to contact us')}}</a></p>
                    </div>
                    <button class="btn btn-outline-primary">
                        <span>
                            <i data-feather="truck"></i>
                        </span>
                        {{__('shipping options')}}
                    </button>
                </div>
            </div>
        </div>
    </footer>
    <style>
        @media (max-width: 768px) {
            footer {
                text-align: center;
            }
        }
    </style>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <script src="../../../app-assets/js/scripts/extensions/ext-component-blockui.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="../../../app-assets/js/scripts/extensions/ext-component-toastr.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    @yield('scripts')
    <!-- END: Page Vendor JS-->


    @section('modals')
    @extends('store::layouts.authModalsLayout',['storeLink' => $store->store_link,'store' => $store])
    @endsection
    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>

    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->
</body>
<!-- END: Body-->

</html>