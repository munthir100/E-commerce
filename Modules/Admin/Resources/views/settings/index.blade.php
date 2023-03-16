@extends('admin::Layouts.adminLayout')
@section('title','My store | Settings')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Statistics Cards</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Cards</a>
                                </li>
                                <li class="breadcrumb-item active">Statistics Cards
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Statistics card section -->
            <section id="statistics-card">

                <h5> Account Settings</h5>

                <!-- Stats Vertical Card -->
                <div class="row">


                    <div class="col-md-6 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.subscriptions')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='unlock'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Subscriptions</h6>
                                    <p class="card-text">manage subscriptions</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.profile')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='user'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Account Settings</h6>
                                    <p class="card-text">edit account settings</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



                <h5> Basic Settings</h5>

                <!-- Stats Vertical Card -->
                <div class="row">

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.store')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='shopping-bag'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Store Settings</h6>
                                    <p class="card-text">Store information</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.paymentMethods')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='credit-card'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">payment methods</h6>
                                    <p class="card-text">e-Payment gateways</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.shipping')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='truck'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Shipping</h6>
                                    <p class="card-text">Active shipping options</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.storeDesign')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='layout'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Store Design</h6>
                                    <p class="card-text">edit in store Design</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>


                <h5> Other Settings</h5>

                <!-- Stats Vertical Card -->
                <div class="row">

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.vat.index')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='file-text'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">vat</h6>
                                    <p class="card-text">vat Settings</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.teamwork')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='users'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Teamwork</h6>
                                    <p class="card-text">Manage your teamwork</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.pages.index')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='type'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Definition pages</h6>
                                    <p class="card-text">Terms and Conditions </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.domain')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='globe'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Domain</h6>
                                    <p class="card-text">Domain reservation</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.services')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='link'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Services</h6>
                                    <p class="card-text">Link a services</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.rating')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='star'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Ratings</h6>
                                    <p class="card-text">Products and store</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.countries')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='map-pin'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Countries and currencies</h6>
                                    <p class="card-text">Manage Countries and currencies</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.profile')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='search'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">SEO</h6>
                                    <p class="card-text">Address and other</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.additionalSetting')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='tool'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Additional Settings</h6>
                                    <p class="card-text">Mantinance and more</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.profile')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='trash'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Archive</h6>
                                    <p class="card-text">Clients archive</p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <!--/ Stats Vertical Card -->

            </section>
            <!--/ Statistics Card section-->

        </div>
    </div>
</div>
@endsection


@section('styles')
<style>
    .card-body {
        height: 12.5rem;
    }
</style>
@endsection

@section('scripts')
@endsection