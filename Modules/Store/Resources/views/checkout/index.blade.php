@extends('store::layouts.storeLayout')

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
                        <h2 class="content-header-title float-start mb-0">Checkout</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                </li>
                                <li class="breadcrumb-item active">Checkout
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
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
                                <span class="bs-stepper-title">Cart</span>
                                <span class="bs-stepper-subtitle">Your Cart Items</span>
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
                                <span class="bs-stepper-title">Address</span>
                                <span class="bs-stepper-subtitle">Enter Your Address</span>
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
                                <span class="bs-stepper-title">Payment</span>
                                <span class="bs-stepper-subtitle">Select Payment Method</span>
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
                                        <span class="text-success mb-1">Available</span>

                                        <livewire:store::cart.update-quantity :productId="$product->id" :quantity="$itemsById[$product->id]->qty" />




                                        <span class="delivery-date text-muted">Date of creation, {{$product->created_at->diffForHumans()}}</span>
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
                                        <label class="section-label form-label mb-1">Options</label>
                                        <div class="coupons input-group input-group-merge">
                                            <input type="text" class="form-control" placeholder="Coupons" aria-label="Coupons" aria-describedby="input-coupons" />
                                            <span class="input-group-text text-primary ps-1" id="input-coupons">Apply</span>
                                        </div>
                                        <hr />
                                        <div class="price-details">
                                            <h6 class="price-title">Price Details</h6>
                                            <ul class="list-unstyled">
                                                <li class="price-detail">
                                                    <div class="detail-title">Products Cost</div>
                                                    <div class="detail-amt">
                                                        <livewire:client::cart.total />
                                                    </div>
                                                </li>
                                                <li class="price-detail">
                                                    <div class="detail-title">Shipping Cost</div>
                                                    <div class="detail-amt discount-amt text-success">0</div>
                                                </li>
                                                <li class="price-detail">
                                                    <div class="detail-title">Cash on Delivary</div>
                                                    <div class="detail-amt">0</div>
                                                </li>
                                                <li class="price-detail">
                                                    <div class="detail-title">Delivery Charges</div>
                                                    <div class="detail-amt discount-amt text-success">Free</div>
                                                </li>
                                            </ul>
                                            <hr />
                                            <ul class="list-unstyled">
                                                <li class="price-detail">
                                                    <div class="detail-title detail-total">Total</div>
                                                    <div class="detail-amt fw-bolder">
                                                        <livewire:client::cart.total />
                                                    </div>
                                                </li>
                                            </ul>
                                            @if (Auth::check())
                                            <button type="button" class="btn btn-primary w-100 btn-next place-order" disabled>Place Order</button>
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
                            <div class="card">
                                <div class="card-header flex-column align-items-start">
                                    <h4 class="card-title">Add New Address</h4>
                                    <p class="card-text text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-name">Full Name:</label>
                                                <input type="text" id="checkout-name" class="form-control" name="fname" placeholder="John Doe" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-number">Mobile Number:</label>
                                                <input type="number" id="checkout-number" class="form-control" name="mnumber" placeholder="0123456789" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-apt-number">Flat, House No:</label>
                                                <input type="number" id="checkout-apt-number" class="form-control" name="apt-number" placeholder="9447 Glen Eagles Drive" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-landmark">Landmark e.g. near apollo hospital:</label>
                                                <input type="text" id="checkout-landmark" class="form-control" name="landmark" placeholder="Near Apollo Hospital" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-city">Town/City:</label>
                                                <input type="text" id="checkout-city" class="form-control" name="city" placeholder="Tokyo" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-pincode">Pincode:</label>
                                                <input type="number" id="checkout-pincode" class="form-control" name="pincode" placeholder="201301" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="checkout-state">State:</label>
                                                <input type="text" id="checkout-state" class="form-control" name="state" placeholder="California" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-2">
                                                <label class="form-label" cfor="add-type">Address Type:</label>
                                                <select class="form-select" id="add-type">
                                                    <option>Home</option>
                                                    <option>Work</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary btn-next delivery-address">Save And Deliver Here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Customer Address Left ends -->

                            <!-- Checkout Customer Address Right starts -->
                            <div class="customer-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">John Doe</h4>
                                    </div>
                                    <div class="card-body actions">
                                        <p class="card-text mb-0">9447 Glen Eagles Drive</p>
                                        <p class="card-text">Lewis Center, OH 43035</p>
                                        <p class="card-text">UTC-5: Eastern Standard Time (EST)</p>
                                        <p class="card-text">202-555-0140</p>
                                        <button type="button" class="btn btn-primary w-100 btn-next delivery-address mt-2">
                                            Deliver To This Address
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Customer Address Right ends -->
                        </form>
                    </div>
                    <!-- Checkout Customer Address Ends -->
                    <!-- Checkout Payment Starts -->
                    <div id="step-payment" class="content" role="tabpanel" aria-labelledby="step-payment-trigger">
                        <form id="checkout-payment" class="list-view product-checkout" onsubmit="return false;">
                            <div class="payment-type">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start">
                                        <h4 class="card-title">Payment options</h4>
                                        <p class="card-text text-muted mt-25">Be sure to click on correct payment option</p>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-holder-name my-75">John Doe</h6>
                                        <div class="form-check">
                                            <input type="radio" id="customColorRadio1" name="paymentOptions" class="form-check-input" checked />
                                            <label class="form-check-label" for="customColorRadio1">
                                                US Unlocked Debit Card 12XX XXXX XXXX 0000
                                            </label>
                                        </div>
                                        <div class="customer-cvv mt-1 row row-cols-lg-auto">
                                            <div class="col-3 d-flex align-items-center">
                                                <label class="mb-50 form-label" for="card-holder-cvv">Enter CVV:</label>
                                            </div>
                                            <div class="col-4 p-0">
                                                <input type="password" class="form-control mb-50 input-cvv" name="input-cvv" id="card-holder-cvv" />
                                            </div>
                                            <div class="col-3">
                                                <button type="button" class="btn btn-primary btn-cvv mb-50">Continue</button>
                                            </div>
                                        </div>
                                        <hr class="my-2" />
                                        <ul class="other-payment-options list-unstyled">
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio2" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio2"> Credit / Debit / ATM Card </label>
                                                </div>
                                            </li>
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio3" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio3"> Net Banking </label>
                                                </div>
                                            </li>
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio4" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio4"> EMI (Easy Installment) </label>
                                                </div>
                                            </li>
                                            <li class="py-50">
                                                <div class="form-check">
                                                    <input type="radio" id="customColorRadio5" name="paymentOptions" class="form-check-input" />
                                                    <label class="form-check-label" for="customColorRadio5"> Cash On Delivery </label>
                                                </div>
                                            </li>
                                        </ul>
                                        <hr class="my-2" />
                                        <div class="gift-card mb-25">
                                            <p class="card-text">
                                                <i data-feather="plus-circle" class="me-50 font-medium-5"></i>
                                                <span class="align-middle">Add Gift Card</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amount-payable checkout-options">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Price Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled price-details">
                                            <li class="price-detail">
                                                <div class="details-title">Price of 3 items</div>
                                                <div class="detail-amt">
                                                    <strong>$699.30</strong>
                                                </div>
                                            </li>
                                            <li class="price-detail">
                                                <div class="details-title">Delivery Charges</div>
                                                <div class="detail-amt discount-amt text-success">Free</div>
                                            </li>
                                        </ul>
                                        <hr />
                                        <ul class="list-unstyled price-details">
                                            <li class="price-detail">
                                                <div class="details-title">Amount Payable</div>
                                                <div class="detail-amt fw-bolder">$699.30</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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