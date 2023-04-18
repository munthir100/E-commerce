@extends('store::layouts.storeLayout')
@section('title',"$store->store_name | $product->title")
@section('content')
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Product Details')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('store.index',$store->store_link)}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('store.index',$store->store_link)}}">{{__('Products')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{$product->title}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- app e-commerce details start -->
            <section class="app-ecommerce-details">
                <div class="card">
                    <!-- Product Details starts -->
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                <div id="carousel-interval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" style="height: 224px;width: 480px;" />
                                        </div>
                                        @foreach($product->productImages as $productImage)
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('storage/' . $productImage->path) }}" style="height: 224px;width: 480px;" />
                                        </div>
                                        @endforeach
                                    </div>

                                    <a class="carousel-control-prev" href="#carousel-interval" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-interval" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-md-7">
                                <h4>{{$product->title}}</h4>
                                <span class="card-text item-company">{{__('Category:')}} <a href="#" class="company-name">
                                        @if($product->category)
                                        {{$product->category->title}}
                                        @else
                                        {{__('None')}}
                                        @endif
                                    </a>
                                </span>
                                <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4 class="item-price me-1">${{$product->price}}</h4>
                                    <ul class="unstyled-list list-inline ps-1 border-start">
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    </ul>
                                </div>
                                <p class="card-text">{{$product->short_description}}</p>
                                <p class="card-text">
                                    {{$product->description}}
                                </p>
                                <ul class="product-features list-unstyled">
                                    <li><i data-feather="shopping-cart"></i> <span class="text-success">{{__('Available now')}}</span></li>
                                </ul>

                                <hr />
                                <div class="d-flex flex-column flex-sm-row pt-1">
                                    <livewire:store::cart.add-to-cart :product="$product" source="productDetails" />

                                    <livewire:store::wishlist.wishlist :product="$product" source="productDetails" />

                                    <div class="btn-group dropdown-icon-wrapper btn-share">
                                        <button type="button" class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{route('store.product-details',[$store->store_link,$product->id])}}', 'facebook-share', 'width=500,height=500');" class="dropdown-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);" onclick="window.open('https://twitter.com/intent/tweet?text=&url={{route('store.product-details',[$store->store_link,$product->id])}}', 'twitter-share', 'width=500,height=500');" class="dropdown-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);" onclick="window.open('https://t.me/share/url?url={{route('store.product-details',[$store->store_link,$product->id])}}&text={{route('store.index',[$store->store_link])}}', 'telegram-share', 'width=500,height=500');" class="dropdown-item">
                                                <i class="fab fa-telegram"></i>
                                            </a>

                                            <a href="javascript:void(0);" onclick="window.open('https://wa.me/?text={{route('store.product-details',[$store->store_link,$product->id])}}', 'whatsapp-share', 'width=500,height=500');" class="dropdown-item">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details ends -->



                    <!-- Related Products starts -->
                    @if($relatedProducts->isNotEmpty())
                    <div class="card-body">
                        <div class="mt-4 mb-2 text-center">
                            <h4>{{__('Related Products')}}</h4>
                            <p class="card-text">{{__('People also search for this items')}}</p>
                        </div>
                        <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                            <div class="swiper-wrapper">
                                @foreach($relatedProducts as $product)
                                <div class="swiper-slide">
                                    <a href="{{route('store.product-details',[$store->store_link,$product->id])}}">
                                        <div class="item-heading">
                                            <h5 class="text-truncate mb-0">{{$product->title}}</h5>
                                            <small class="text-body">{{$product->short_description}}</small>
                                        </div>
                                        <div class="img-container w-50 mx-auto py-75">
                                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="image" />
                                        </div>
                                        <div class="item-meta">
                                            <ul class="unstyled-list list-inline mb-25">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                            </ul>
                                            <p class="card-text text-primary mb-0">${{$product->price}}</p>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    @endif
                    <!-- Related Products ends -->
                </div>
            </section>
            <!-- app e-commerce details end -->

        </div>
    </div>
</div>
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/swiper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/app-ecommerce-details.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-number-input.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/swiper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/ext-component-swiper.css')}}">
@endsection
@section('scripts')
<script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/app-ecommerce-details.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-number-input.js')}}"></script>

<script src="{{asset('app-assets/js/scripts/extensions/ext-component-swiper.js')}}"></script>
@endsection