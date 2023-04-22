@extends('store::layouts.storeLayout')
@section('title',$store->store_name)
@section('content')
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Products')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('Products')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('All Products')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-detached">
            <div class="content-body">
                <!-- E-commerce Content Section Starts -->
                <section id="ecommerce-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ecommerce-header-items">
                                <div class="search-results">{{$products_count}} {{__('results found')}}</div>
                                <div class="view-options d-flex">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
                                        <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1"><i data-feather="grid" class="font-medium-3"></i></label>
                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
                                        <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2"><i data-feather="list" class="font-medium-3"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- E-commerce Content Section Starts -->

                <!-- sections -->
                <!-- end sections -->
                @if(!$products->isEmpty())
                <section id="ecommerce-searchbar" class="ecommerce-searchbar mb-2">
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <form action="{{route('store.index',$store->store_link)}}">
                                <div class="input-group input-group-merge">
                                    <input name="searchTerm" type="text" class="form-control search-product" id="shop-search" placeholder="{{__('Search Product')}}" aria-label="Search..." aria-describedby="shop-search" wire:model.defer="searchTerm" />
                                    <button class="input-group-text"><i data-feather="search" class="text-muted"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                @endif
                <!-- E-commerce Products Starts -->
                <livewire:store::products.products-list :storeLink="$store->store_link" :products="$products" />
                <!-- E-commerce Products Ends -->
                @if($products->isEmpty())
                <section id="basic-alerts">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('No Products Yet')}}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="demo-spacing-0">
                                        <div class="alert alert-danger" role="alert">
                                            <div class="alert-body">
                                                {{{__('There Is No Products Found')}}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endif
            </div>
        </div>

    </div>
</div>



@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/ext-component-sliders.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/app-ecommerce.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/swiper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/ext-component-swiper.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/app-ecommerce-details.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-number-input.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/authentication.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">


@endsection
@section('scripts')

<script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/wNumb.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/nouislider.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/app-ecommerce.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>



<script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>

<script src="{{asset('app-assets/js/scripts/extensions/ext-component-swiper.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/auth-login.js')}}"></script>

<script>
    window.addEventListener('added_to_cart', function(event) {
        var message = event.detail;

        var addToCart = $('.custom-add-to-cart');
        if (addToCart.length > 0) {
            event.preventDefault();
         
            toastr['success']('', message, {
                closeButton: true,
                tapToDismiss: false,
                rtl: isRtl
            });
        }
    });
</script>
@endsection