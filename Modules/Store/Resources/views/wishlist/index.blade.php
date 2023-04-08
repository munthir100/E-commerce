@extends('store::layouts.storeLayout')
@section('title',"$store->store_name | wishlist")
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Wishlist')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('store.index',$store->store_link)}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Wishlist')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <!-- Wishlist Starts -->
            <section id="wishlist" class="grid-view wishlist-items">
                @foreach($wishlistProducts as $product)
                <div class="card ecommerce-card">
                    <div class="text-center">
                        <a href="{{route('store.product-details',[$store->store_link,$product->id])}}">
                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="img-placeholder" style="width: 300px;"/>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="item-wrapper">
                            <div class="item-rating">
                                <ul class="unstyled-list list-inline">
                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                </ul>
                            </div>
                            <div class="item-cost">
                                <h6 class="item-price">{{$product->price}}</h6>
                            </div>
                        </div>
                        <div class="item-name">
                            <a href="{{route('store.product-details',[$store->store_link,$product->id])}}">{{$product->title}}</a>
                        </div>
                        <p class="card-text item-description">
                            {{$product->description}}
                        </p>
                    </div>
                    <div class="item-options text-center">
                        <livewire:store::wishlist.wishlist :product="$product" source="index" />

                        <livewire:store::cart.add-to-cart :product="$product" source="index"/>
                        
                    </div>

                </div>
                @endforeach
            </section>
            <!-- Wishlist Ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection


@section('styles')

<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/app-ecommerce.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-toastr.css">
@endsection
@section('scripts')

<script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../../../app-assets/js/scripts/pages/app-ecommerce-wishlist.js"></script>
@endsection