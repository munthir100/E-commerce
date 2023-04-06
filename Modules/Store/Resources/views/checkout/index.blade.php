@extends('store::layouts.storeLayout')
@section('title',"$store->store_name | checkout")

@section('content')
@php
$wishlist = session()->get('wishlist', []);
@endphp
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Checkout')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Checkout')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <div class="bs-stepper checkout-tab-steps">
                <!-- Wizard starts -->
                <div class="bs-stepper-header">
                    <div class="step" data-target="#step-cart" role="tab" id="step-cart-trigger">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-box">
                                <i data-feather="shopping-cart" class="font-medium-3"></i>
                            </span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">{{__('Cart')}}</span>
                                <span class="bs-stepper-subtitle">{{__('Your Cart Items')}}</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i data-feather="chevron-right" class="font-medium-2"></i>
                    </div>
                    <div class="step" data-target="#step-address" role="tab" id="step-address-trigger">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-box">
                                <i data-feather="home" class="font-medium-3"></i>
                            </span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">{{__('Address')}}</span>
                                <span class="bs-stepper-subtitle">{{__('Enter Your Address')}}</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i data-feather="chevron-right" class="font-medium-2"></i>
                    </div>
                    <div class="step" data-target="#step-payment" role="tab" id="step-payment-trigger">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-box">
                                <i data-feather="credit-card" class="font-medium-3"></i>
                            </span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">{{__('Payment')}}</span>
                                <span class="bs-stepper-subtitle">{{__('Select Payment Method')}}</span>
                            </span>
                        </button>
                    </div>
                </div>
                <!-- Wizard ends -->

                <div class="bs-stepper-content">
                    <!-- Checkout Place order starts -->
                    <div id="step-cart" class="content" role="tabpanel" aria-labelledby="step-cart-trigger">
                        <div id="place-order" class="list-view product-checkout">
                            <!-- Checkout Place Order Left starts -->
                            <div class="checkout-items">
                                @php
                                $itemsById = $items->keyBy('id');
                                @endphp
                                @foreach($products as $product)
                                <div class="card ecommerce-card">
                                    <div class="item-img">
                                        <a href="app-ecommerce-details.html">
                                            <img src="../../../app-assets/images/pages/eCommerce/2.png" alt="img-placeholder" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-name">
                                            <h6 class="mb-0">
                                                <a href="app-ecommerce-details.html" class="text-body">{{$product->title}}</a>
                                            </h6>
                                            <div class="item-rating">
                                                <ul class="unstyled-list list-inline">
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span class="text-success mb-1">{{__('Available')}}</span>

                                        <livewire:store::cart.update-quantity :productId="$product->id" :quantity="$itemsById[$product->id]->qty" />




                                        <span class="delivery-date text-muted">{{__('Date of creation')}}, {{$product->created_at->diffForHumans()}}</span>
                                        <span class="text-success">{{$product->short_description}}</span>
                                    </div>
                                    <div class="item-options text-center">
                                        <div class="item-wrapper">
                                            <div class="item-cost">
                                                <h4 class="item-price">{{$product->price}} S.R</h4>
                                            </div>
                                        </div>
                                        <livewire:store::cart.remove-from-cart :productId="$product->id" />



                                        <livewire:store::wishlist.wishlist :product="$product" source="checkout" />

                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Checkout Place Order Left ends -->

                            <!-- Checkout Place Order Right starts -->
                            <div class="checkout-options">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="section-label form-label mb-1">{{__('Options')}}</label>
                                        <div class="coupons input-group input-group-merge">
                                            <input type="text" class="form-control" placeholder="{{__('Coupons')}}" aria-label="Coupons" aria-describedby="input-coupons" />
                                            <span class="input-group-text text-primary ps-1" id="input-coupons">{{__('Apply')}}</span>
                                        </div>
                                        <hr />
                                        <div class="price-details">
                                            <h6 class="price-title">{{__('Price Details')}}</h6>
                                            <ul class="list-unstyled">
                                                <li class="price-detail">
                                                    <div class="detail-title">{{__('Products Cost')}}</div>
                                                    <div class="detail-amt">
                                                        <livewire:client::cart.total />
                                                    </div>
                                                </li>
                                                <li class="price-detail">
                                                    <div class="detail-title">{{__('Shipping Cost')}}</div>
                                                    <div class="detail-amt discount-amt text-success">0</div>
                                                </li>
                                                <li class="price-detail">
                                                    <div class="detail-title">{{__('Cash on Delivary')}}</div>
                                                    <div class="detail-amt">0</div>
                                                </li>
                                                <li class="price-detail">
                                                    <div class="detail-title">{{__('Delivery Charges')}}</div>
                                                    <div class="detail-amt discount-amt text-success">{{__('Free')}}</div>
                                                </li>
                                            </ul>
                                            <hr />
                                            <ul class="list-unstyled">
                                                <li class="price-detail">
                                                    <div class="detail-title detail-total">{{__('Total')}}</div>
                                                    <div class="detail-amt fw-bolder">
                                                        <livewire:client::cart.total />
                                                    </div>
                                                </li>
                                            </ul>
                                            @if (Auth::check())
                                            <button type="button" class="btn btn-primary w-100 btn-next place-order" disabled>{{__('Place Order')}}</button>
                                            @else
                                            <button data-bs-toggle="modal" data-bs-target="#userLoginModal" type="button" class="btn btn-primary w-100">Place Order</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Checkout Place Order Right ends -->
                            </div>
                        </div>
                        <!-- Checkout Place order Ends -->
                    </div>
                    <!-- Checkout Customer Address Starts -->
                    <div id="step-address" class="content" role="tabpanel" aria-labelledby="step-address-trigger">
                        <form id="checkout-address" class="list-view product-checkout">
                            <!-- Checkout Customer Address Left starts -->
                            
                            <!-- Checkout Customer Address Left ends -->

                            <!-- Checkout Customer Address Right starts -->
                            <div class="customer-card">
                               
                            </div>
                            <!-- Checkout Customer Address Right ends -->
                        </form>
                    </div>
                    <!-- Checkout Customer Address Ends -->
                    <!-- Checkout Payment Starts -->
                    <div id="step-payment" class="content" role="tabpanel" aria-labelledby="step-payment-trigger">
                        <form id="checkout-payment" class="list-view product-checkout" onsubmit="return false;">
                            <div class="payment-type">
                                
                            </div>
                            <div class="amount-payable checkout-options">

                            </div>
                        </form>
                    </div>
                    <!-- Checkout Payment Ends -->
                    <!-- </div> -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/app-ecommerce.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/forms/pickers/form-pickadate.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/forms/form-wizard.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-toastr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/forms/form-number-input.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css">
@endsection
@section('scripts')
<script src="../../../app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
<script src="../../../app-assets/js/scripts/pages/app-ecommerce-checkout.js"></script>

@endsection