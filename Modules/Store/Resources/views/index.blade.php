@extends('store::layouts.storeLayout')

@section('content')
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-detached">
            <div class="content-body">
                <!-- sections -->
                <!-- end sections -->
                <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <form action="{{route('store.index',$storeLink)}}">
                                <div class="input-group input-group-merge">
                                    <input name="searchTerm" type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" wire:model="searchTerm" />
                                    <button class="input-group-text"><i data-feather="search" class="text-muted"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

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