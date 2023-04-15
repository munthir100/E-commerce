<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title',__('Welcome'))</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon.png')}}" type="img/png"/>
    <!--====== Bootstrap css ======-->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}"/>
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.min.css')}}"/>
    <!--====== Magnific ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}"/>
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.min.css')}}"/>
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}"/>
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome/css/all.min.css')}}"/>
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/flaticon/flaticon.css')}}"/>
    <!--====== Spacing Css ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/spacing.min.css')}}"/>
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}"/>
    <!--====== Responsive CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}"/>
</head>

<body class="software-landing-page">
<!--======= Start Preloader =======-->
<!--<div id="preloader">-->
<!--    <img class="preloader-image" width="60" src="{{asset('frontend/assets/img/favicon.png')}}" alt="preloader" />-->
<!--</div>-->
<!--======= End Preloader =======-->
<!--====== Start Header ======-->
<div class="top-bar">
    <div class="container text-center p-2">
        <p class="text-white text-center ">
            المنصة تحت التطوير
        </p>
    </div>
</div>
<header class="template-header navbar-center">

    <div class="container fluid-gap-70">

        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="/">
                        <img class="top-logo" src="{{asset('frontend/assets/img/logo.png')}}" alt="logo"/>
                    </a>
                </div>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' :'' }}">
                            <a href="/">الرئيسية</a>
                        </li>

                        <li class="{{ request()->is('price') ? 'active' :'' }}">
                            <a href="#">الاسعار</a>
                        </li>


                        @guest
                            <li>
                                <a href="{{ route('admin.login') }}">تسجيل دخول</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">متجر جديد</a>
                            </li>
                        @endguest

                        @auth
                            @if (auth()->user()->hasRole('admin'))
                                <li>
                                    <a href="{{ url('/admin') }}"><i class="far fa-user-circle"></i> الادارة</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        تسجيل خروج
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('adminLogout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            @else
                            <li>
                                    <a href="{{ route('store.index',auth()->user()->client->store->store_link) }}"><i class="far fa-user-circle"></i> الادارة</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        تسجيل خروج
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('adminLogout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            @endif

                        @endauth

                    </ul>

                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <div class="mobile-logo">
                <a href="/">
                    <img src="{{asset('frontend/assets/img/logo.png')}}" alt="Landio"/>
                </a>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li class="active">
                        <a href="/">الرئيسية</a>
                    </li>
                    <li>
                        <a href="#">المدونة</a>
                    </li>
                    <li>
                        <a href="#">الاسعار</a>
                    </li>
                    <li>
                        <a href="/admin">تجربة المنصة</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <a href="{{ url('/admin') }}" class=""> <i class="far fa-user-circle"></i> Dashboard
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('admin.login')}}" class=""> تسجيل دخول </a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{route('register')}}" class=""> متجر جديد </a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->
</header>
<!--====== End Header ======-->

<!--====== Start Hero Area ======-->
<section class="hero-area-v7">
    <div class="container-fluid">
        <div class="hero-content">
            <h2 class="hero-title wow fadeInLeft" data-wow-delay="0.2s">هل تريد بناء مصدر دخل <br>بطريقة جديدة وإحترافية
                .!</h2>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                بإمكانك ذلك الآن سجّل متجرك عبر منصة رست ون <br>لبدء نشاطك التجاري أينما كنت وبسهولة تامة
            </p>
            <a href="{{route('register')}}" class="template-btn primary-bg-5 wow fadeInUp mb-2" data-wow-delay="0.4s">
                متجر جديد</a>
            <a href="/admin" class="template-btn primary-bg-6 mb-2 wow fadeInUp">تجربة المنصة</a>
        </div>
        <div class="hero-img d-none d-lg-block wow fadeInUp" data-wow-delay="0.2s">
            <img src="{{ asset('frontend/assets/img/hero/hero-1.png') }}" alt="Image"/>
        </div>
    </div>
</section>
<!--====== End Hero Area ======-->
<!--====== Section Service Start ======-->
<section class="service-section">
    <div class="container">


        <div class="common-heading m-b-30">
            <h4 class=" text-first" style="padding-bottom: 8px;">انشئ متجرك واستمتع بافضل الخدمات</h4>
            <h5 class="">انشئ متجرك واستمتع بافضل الخدمات</h5>
        </div>

        <div class="row justify-content-center icon-boxes-v3">
            <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                <div class="iconic-box box-version-white color-v1 m-t-50">
                    <div class="icon text-center mb-4 mt-4">
                        <i class="far fa-file-check fa-4x text-three"></i>
                    </div>
                    <h4 class="title"><a href="#">سرعة الاعداد والتجهيز</a></h4>
                    <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                        بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                <div class="iconic-box box-version-white color-v2 m-t-50">
                    <div class="icon text-center mb-4 mt-4">
                        <i class="far fa-map-marked fa-4x text-second"></i>
                    </div>
                    <h4 class="title"><a href="#">اضف منتجاتك بسهولة</a></h4>
                    <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                        بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                <div class="iconic-box box-version-white color-v3 m-t-50">
                    <div class="icon text-center mb-4 mt-4">
                        <i class="far fa-bullseye-arrow fa-4x text-first"></i>
                    </div>
                    <h4 class="title"><a href="#">انت تدير كل شيئ</a></h4>
                    <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                        بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت
                    </p>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                <div class="iconic-box box-version-white color-v4 m-t-50">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="title"><a href="#">أدوات تسويقية لزيادة مبيعاتك</a></h4>
                    <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                        بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                <div class="iconic-box box-version-white color-v5 m-t-50">
                    <div class="icon">
                        <i class="far fa-credit-card"></i>
                    </div>
                    <h4 class="title"><a href="#">دعم جميع وسائل الدفع</a></h4>
                    <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                        بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                <div class="iconic-box box-version-white color-v1 m-t-50">
                    <div class="icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4 class="title"><a href="#">تطوير وتحسين تقني مستمر و دائم</a></h4>
                    <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                        بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!--====== Start Pricing Area ======-->
<small> <small> we need to change this page design because the design is old</small></small>
<!-- <section class="pricing-section p-t-60 p-b-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-headingtagline-boxed-two title-line m-b-70 text-center">
                    <span class="tagline">باقات منصة رست ون</span>
                    <h2 class="title  text-center ">إختر الباقة المناسبة لمتجرك</h2>
                </div>
            </div>
        </div>

       
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-table p-0 m-t-30">
                    <div class="p-3">
                        <div class="plan-title-area">
                            <h3>باقة رست ون</h3>
                            <h5 class="">بيزك</h5>
                            <img src="{{ asset('frontend/assets/img/pricing/plan-icon.png') }}" alt="Plan icon"
                                 class="plan-icon"/>
                            <svg class="plan-shape">
                                <path class="blob"
                                      d="M675.762,6280.79c27.519-33.95,38.271-67.86,19.8-107.55-44.452-95.53-192.815-73.8-213.55-32.81-19.531,38.6,77.819,48.49,80.344,152.05C563.555,6341.55,636.194,6329.6,675.762,6280.79Z"
                                      transform="translate(-479.406 -6105.56)"></path>
                            </svg>
                        </div>
                        <div class="plan-cost">
                            <h3>22 ر.س / شهريا</h3>
                        </div>
                        <ul class="plan-feature">

                            <li class="">

                            </li>


                        </ul>
                    </div>
                    <a href="#" class="template-btn btn-block text-center"> الاشتراك الان</a>

                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-table p-0 m-t-30">
                    <div class="p-3">
                        <div class="plan-title-area">
                            <h3>باقة رست ون</h3>
                            <h5 class="">برو</h5>
                            <img src="{{ asset('frontend/assets/img/pricing/plan-icon.png') }}" alt="Plan icon"
                                 class="plan-icon"/>
                            <svg class="plan-shape">
                                <path class="blob"
                                      d="M675.762,6280.79c27.519-33.95,38.271-67.86,19.8-107.55-44.452-95.53-192.815-73.8-213.55-32.81-19.531,38.6,77.819,48.49,80.344,152.05C563.555,6341.55,636.194,6329.6,675.762,6280.79Z"
                                      transform="translate(-479.406 -6105.56)"></path>
                            </svg>
                        </div>
                        <div class="plan-cost">
                            <h3>22 ر.س / شهريا</h3>
                        </div>
                        <ul class="plan-feature">

                            <li class="">

                            </li>


                        </ul>
                    </div>
                    <a href="#" class="template-btn btn-block text-center"> الاشتراك الان</a>

                </div>

            </div>


            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-table p-0 m-t-30">
                    <div class="p-3">
                        <div class="plan-title-area">
                            <h3>باقة رست ون</h3>
                            <h5 class="">بريميوم</h5>
                            <img src="{{ asset('frontend/assets/img/pricing/plan-icon.png') }}" alt="Plan icon"
                                 class="plan-icon"/>
                            <svg class="plan-shape">
                                <path class="blob"
                                      d="M675.762,6280.79c27.519-33.95,38.271-67.86,19.8-107.55-44.452-95.53-192.815-73.8-213.55-32.81-19.531,38.6,77.819,48.49,80.344,152.05C563.555,6341.55,636.194,6329.6,675.762,6280.79Z"
                                      transform="translate(-479.406 -6105.56)"></path>
                            </svg>
                        </div>
                        <div class="plan-cost">
                            <h3>22 ر.س / شهريا</h3>
                        </div>
                        <ul class="plan-feature">

                            <li class="">

                            </li>


                        </ul>
                    </div>
                    <a href="#" class="template-btn btn-block text-center"> الاشتراك الان</a>

                </div>

            </div>

        </div>
    </div>
</section> -->
<!--====== End Pricing Area ======-->

<!--<section class="service-section new-store p-t-130 p-b-50">
<div class="container">

    <div class="common-heading m-b-30">
        <h2 class="title">احدث المتاجر على منصة رست ون</h2>
        <p> حدث المتاجر على منصة رست ونحدث المتاجر على منصة رست ون حدث المتاجر على منصة رست ون</p>
    </div>

    <div class="row top justify-content-center icon-boxes-v3">
        <div class="col-md-3">
            <div class="blog-post-items">
                <div class="single-blog-post">
                    <div class="post-thumbnail">
                        <img src="http://127.0.0.1:8000/frontend/assets/img/blog/blog-thumbnail-4.jpg" alt="blog thumbnail one" />
                    </div>
                    <div class="post-content">
                        <h4 class="post-title">
                            <a href="#">الحميضي للساعات</a>
                        </h4>
                        <div class="post-excerpt">
                            <p>كيان يهتم بإنتقاء أفضل الماركات العالمية في مجال الساعات ويقدم أفضل الخدمات لعملائه بعرض أحدث الموديلات المتميزة.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="blog-post-items">
                <div class="single-blog-post">
                    <div class="post-thumbnail">
                        <img src="http://127.0.0.1:8000/frontend/assets/img/blog/blog-thumbnail-4.jpg" alt="blog thumbnail one" />
                    </div>
                    <div class="post-content">
                        <h4 class="post-title">
                            <a href="#">الحميضي للساعات</a>
                        </h4>
                        <div class="post-excerpt">
                            <p>كيان يهتم بإنتقاء أفضل الماركات العالمية في مجال الساعات ويقدم أفضل الخدمات لعملائه بعرض أحدث الموديلات المتميزة.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="blog-post-items">
                <div class="single-blog-post">
                    <div class="post-thumbnail">
                        <img src="http://127.0.0.1:8000/frontend/assets/img/blog/blog-thumbnail-4.jpg" alt="blog thumbnail one" />
                    </div>
                    <div class="post-content">
                        <h4 class="post-title">
                            <a href="#">الحميضي للساعات</a>
                        </h4>
                        <div class="post-excerpt">
                            <p>كيان يهتم بإنتقاء أفضل الماركات العالمية في مجال الساعات ويقدم أفضل الخدمات لعملائه بعرض أحدث الموديلات المتميزة.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="blog-post-items">
                <div class="single-blog-post">
                    <div class="post-thumbnail">
                        <img src="http://127.0.0.1:8000/frontend/assets/img/blog/blog-thumbnail-4.jpg" alt="blog thumbnail one" />
                    </div>
                    <div class="post-content">
                        <h4 class="post-title">
                            <a href="#">الحميضي للساعات</a>
                        </h4>
                        <div class="post-excerpt">
                            <p>كيان يهتم بإنتقاء أفضل الماركات العالمية في مجال الساعات ويقدم أفضل الخدمات لعملائه بعرض أحدث الموديلات المتميزة.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</section>-->
<section class="wcu-section p-t-130 p-b-130">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-6 col-md-10">
                <div class="preview-square-oval-image m-b-md-60">
                    <div class="square-image hover-overly-left-to-right">
                        <img src="{{ asset('frontend/assets/img/preview-gallery/graphic-5.png') }}" alt="Image"/>
                    </div>
                    <div class="oval-image animate-float-bob-y hover-overly-zoom">
                        <img src="{{ asset('frontend/assets/img/preview-gallery/graphic-6.png') }}" alt="Image"/>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="common-heading m-b-50">
                    <h2 class="title m-b-20">ندعمك ونساندك</h2>
                    <p>بالإضافة للحلول التقنية المتقدمة، نحرص في رست ون أن نكون معك بمسيرتك في التجارة خطوة بخطوة، من
                        خلال التواصل الفعاّل وإيجاد حلول استراتيجية تمكنك من النمو بتجارتك الإلكترونية</p>
                </div>

                <ul class="fancy-check-list-v2">
                    <li class="wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <span class="list-inner">
                                ابدأ المتجر المجاني
                            </span>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <span class="list-inner">
                                ضيف المنتجات
                            </span>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <span class="list-inner">فعل الدفع والشحن</span>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <span class="list-inner">
                                إبدأ البيع
                            </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
-->
<section class="counter-section section-with-map-bg bg-primary-color p-t-80 p-b-80 p-t-md-160">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="preview-galley-v3 m-b-md-100">
                    <img class="preview-image-1" src="{{ asset('frontend/assets/img/preview-gallery/graphic-4.png') }}"
                         alt="Preview Image"/>
                    <img class="preview-image-2 animate-float-bob-y"
                         src="{{ asset('frontend/assets/img/particle/cta-right-particle-1.png') }}"
                         alt="Preview Image"/>
                    <img class="preview-image-3 animate-float-bob-y"
                         src="{{ asset('frontend/assets/img/particle/paper-plane.png') }}" alt="Preview Image"/>
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="row counter-items-v1 p-xl-5">
                    <div class="col-6">
                        <div class="counter-item m-b-60">
                            <div class="icon">
                                <i class="fas fa-store-alt"></i>
                            </div>
                            <div class="counter-wrap">
                                <span class="counter">12</span>
                                <span class="suffix">+</span>
                            </div>
                            <p class="title">متجر إلكتروني</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter-item m-b-60">
                            <div class="icon">
                                <i class="fal fa-file-alt"></i>
                            </div>
                            <div class="counter-wrap">
                                <span class="counter">22</span>
                                <span class="suffix">+</span>
                            </div>
                            <p class="title">حساب نشط</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fal fa-money-bill-wave-alt"></i>
                            </div>
                            <div class="counter-wrap">
                                <span class="counter">56324</span>
                                <span class="suffix">+</span>
                            </div>
                            <p class="title">مليون دولار مبيعات</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fal fa-gem"></i>
                            </div>
                            <div class="counter-wrap">
                                <span class="counter">10</span>
                                <span class="suffix">+</span>
                            </div>
                            <p class="title">سنين خبرة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--====== Start Footer ======-->
<footer class="template-footer mt-5">
    <div class="container">
        <div class="footer-widgets">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-md-4 col-sm-6">
                    <div class="widget text-block-widget">
                        <h5 class="widget-title">رست ون</h5>
                        <p>بدون خبرة تقنية وبكل سهولة يمكنك البيع في أي مكان وزمان بمتجر إلكتروني خاص بك وبهويتك
                            التجارية</p>
                    </div>
                    <div class="widget social-widget pl-xl-5">
                        <ul class="social-links">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-md-2 col-sm-6">
                    <div class="d-lg-flex justify-content-center">
                        <div class="widget nav-widget">
                            <h5 class="widget-title">الخدمات والمميزات</h5>
                            <ul>
                                <li><a href="#">اﻟﺸﺤﻦ واﻟﺘﻮﺻﻴﻞ</a></li>
                                <li><a href="#">اﻟﺪﻓﻊ اﻟﺈﻟﻜﺘﺮوﻧﻲ</a></li>
                                <li><a href="#">اﻟﺄﺳﺌﻠﺔ اﻟﻤﺘﻜﺮرة</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-md-2 col-sm-6">
                    <div class="d-lg-flex justify-content-center">
                        <div class="widget nav-widget">
                            <h5 class="widget-title">رست ون</h5>
                            <ul>
                                <li><a href="#">ﻣﺮﻛﺰ اﻟﻤﺴﺎﻋﺪة</a></li>
                                <li><a href="#">سياسة الخصوصية</a></li>
                                <li><a href="#">اتفاقية الاستخدام</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget text-block-widget">

                        <p>بدون خبرة تقنية وبكل سهولة يمكنك البيع التجارية</p>
                        <h2 class="mt-3">نضمن لك السرعة و السهولة و الامان</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright border-top-secondary">
        <div class="container">
            <p class="copyright-text text-center">© 2022 <a href="/">رست ون</a>. كل الحقوق محفوظة</p>
        </div>
    </div>
</footer>

<!--====== End Footer ======-->
<!--====== Jquery ======-->
<script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<!--====== Bootstrap ======-->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!--====== Slick slider ======-->
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<!--====== Magnific ======-->
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--====== Inview ======-->
<script src="{{asset('frontend/assets/js/jquery.inview.min.js')}}"></script>
<!--====== Nice Select ======-->
<script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
<!--====== Wow ======-->
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<!--====== Main JS ======-->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>


</body>

</html>
