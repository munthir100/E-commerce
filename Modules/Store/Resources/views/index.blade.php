@extends('store::layouts.storeLayout')

@section('content')
<div class="app-content content ecommerce-application bg-white">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-detached">
            <div class="content-body">


                <!-- pagination swiper -->
                <section id="component-swiper-pagination">
                    <div class="card">
                        <div class="card-body" style="padding: 0;">
                            <div class="swiper-paginations swiper-container swiper-autoplay">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid" style="width: -webkit-fill-available; height:25rem" src="../../../app-assets/images/slider/06.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" style="width: -webkit-fill-available; height:25rem" src="../../../app-assets/images/slider/05.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" style="width: -webkit-fill-available; height:25rem" src="../../../app-assets/images/slider/02.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" style="width: -webkit-fill-available; height:25rem" src="../../../app-assets/images/slider/04.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" style="width: -webkit-fill-available; height:25rem" src="../../../app-assets/images/banner/banner-20.jpg" alt="banner" />
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ pagination swiper -->

                <!-- Item features starts -->
                <section id="features" class="app-ecommerce-details">
                    <div class="card">
                        <div class="item-features">
                            <div class="row text-center">
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award">
                                            <circle cx="12" cy="8" r="7"></circle>
                                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                        </svg>
                                        <h4 class="mt-2 mb-1">100% Original</h4>
                                        <p class="card-text">Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        <h4 class="mt-2 mb-1">10 Day Replacement</h4>
                                        <p class="card-text">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        </svg>
                                        <h4 class="mt-2 mb-1">1 Year Warranty</h4>
                                        <p class="card-text">Cotton candy gingerbread cake I love sugar plum I love sweet croissant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Item features ends -->

                <!-- dynamic products -->
                <section id="dynamic-products" class="app-ecommerce-details">
                    <div class="card-body">
                        <div class="mt-4 mb-2 text-center">
                            <h4>Related Products</h4>
                            <p class="card-text">People also search for this items</p>
                        </div>
                        <div class="swiper-responsive-breakpoints swiper-container px-4 py-2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-rtl">
                            <div class="swiper-wrapper" id="swiper-wrapper-f189d6cdefc7b1007" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" style="width: 244px; margin-left: 55px;">
                                    <a href="#">
                                        <div class="item-heading">
                                            <h5 class="text-truncate mb-0">Apple Watch Series 6</h5>
                                            <small class="text-body">by Apple</small>
                                        </div>
                                        <div class="img-container w-50 mx-auto py-75">
                                            <img src="../../../app-assets/images/elements/apple-watch.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <ul class="unstyled-list list-inline mb-25">
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                            </ul>
                                            <p class="card-text text-primary mb-0">$399.98</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="width: 244px; margin-left: 55px;">
                                    <a href="#">
                                        <div class="item-heading">
                                            <h5 class="text-truncate mb-0">Apple MacBook Pro - Silver</h5>
                                            <small class="text-body">by Apple</small>
                                        </div>
                                        <div class="img-container w-50 mx-auto py-50">
                                            <img src="../../../app-assets/images/elements/macbook-pro.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <ul class="unstyled-list list-inline mb-25">
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                            </ul>
                                            <p class="card-text text-primary mb-0">$2449.49</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 244px; margin-left: 55px;">
                                    <a href="#">
                                        <div class="item-heading">
                                            <h5 class="text-truncate mb-0">Apple HomePod (Space Grey)</h5>
                                            <small class="text-body">by Apple</small>
                                        </div>
                                        <div class="img-container w-50 mx-auto py-75">
                                            <img src="../../../app-assets/images/elements/homepod.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <ul class="unstyled-list list-inline mb-25">
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                            </ul>
                                            <p class="card-text text-primary mb-0">$229.29</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5" style="width: 244px; margin-left: 55px;">
                                    <a href="#">
                                        <div class="item-heading">
                                            <h5 class="text-truncate mb-0">Magic Mouse 2 - Black</h5>
                                            <small class="text-body">by Apple</small>
                                        </div>
                                        <div class="img-container w-50 mx-auto py-75">
                                            <img src="../../../app-assets/images/elements/magic-mouse.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <ul class="unstyled-list list-inline mb-25">
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                            </ul>
                                            <p class="card-text text-primary mb-0">$90.98</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 244px; margin-left: 55px;">
                                    <a href="#">
                                        <div class="item-heading">
                                            <h5 class="text-truncate mb-0">iPhone 12 Pro</h5>
                                            <small class="text-body">by Apple</small>
                                        </div>
                                        <div class="img-container w-50 mx-auto py-75">
                                            <img src="../../../app-assets/images/elements/iphone-x.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <ul class="unstyled-list list-inline mb-25">
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star">
                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg></li>
                                            </ul>
                                            <p class="card-text text-primary mb-0">$1559.99</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </section>
                <!-- end dynamic products -->

                <!-- tall banner -->
                <section id="tall-banner">
                    <div id="user-profile">
                        <!-- profile header -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card profile-header mb-2">
                                    <!-- profile cover photo -->
                                    <img class="card-img-top" src="../../../app-assets/images/profile/user-uploads/timeline.jpg" alt="User Profile Image" style="min-height:8rem; max-height:18rem;" />
                                    <!--/ profile cover photo -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end tall banner -->

                <!-- youtube vedio -->
                <section id="youtube">
                    <div class="card">
                        <div class="card-body">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/wfcMbfPmYQQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>
                <!--end youtube vedio -->

                <!-- large banner -->
                <section id="large banner">
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <img class="img-fluid" src="../../../app-assets/images/banner/banner-12.jpg" alt="banner" />
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <img class="img-fluid" src="../../../app-assets/images/banner/banner-12.jpg" alt="banner" />
                        </div>
                    </div>
                </section>
                <!--end large banner -->

                <!-- pictures -->
                <section id="component-swiper-multiple">
                    <div class="card">
                        <div class="mt-4 mb-2 text-center">
                            <h4>Related Products</h4>
                            <p class="card-text">People also search for this items</p>
                        </div>
                        <div class="card-body">
                            <div class="swiper-multiple swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-rtl">
                                <div class="swiper-wrapper" id="swiper-wrapper-99332351074b6610e5" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" style="height: 200px; margin-left: 30px;">
                                        <img class="img-fluid" src="../../../app-assets/images/banner/banner-31.jpg" alt="banner">
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="height: 200px; margin-left: 30px;">
                                        <img class="img-fluid" src="../../../app-assets/images/banner/banner-32.jpg" alt="banner">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="3 / 5" style="height: 200px; margin-left: 30px;">
                                        <img class="img-fluid" src="../../../app-assets/images/banner/banner-33.jpg" alt="banner">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5" style="height: 200px; margin-left: 30px;">
                                        <img class="img-fluid" src="../../../app-assets/images/banner/banner-34.jpg" alt="banner">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5" style="height: 200px; margin-left: 30px;">
                                        <img class="img-fluid" src="../../../app-assets/images/banner/banner-35.jpg" alt="banner">
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </section>
                <!--end pictures -->


                <!-- E-commerce Products Starts -->
                <livewire:store::products.products-list :storeLink="$storeLink" :products="$products" />
                <!-- E-commerce Products Ends -->


            </div>
        </div>

    </div>
</div>



@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-sliders.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/app-ecommerce.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-toastr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-toastr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/swiper.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-swiper.css">


<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/app-ecommerce-details.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/forms/form-number-input.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-toastr.css">
@endsection
@section('scripts')

<script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../../../app-assets/vendors/js/extensions/wNumb.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/nouislider.min.js"></script>
<script src="../../../app-assets/js/scripts/pages/app-ecommerce.js"></script>
<script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="../../../app-assets/js/scripts/extensions/ext-component-toastr.js"></script>


<script src="../../../app-assets/vendors/js/extensions/swiper.min.js"></script>

<script src="../../../app-assets/js/scripts/extensions/ext-component-swiper.js"></script>
@endsection