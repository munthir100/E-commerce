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
                        <h2 class="content-header-title float-start mb-0">{{translate('Settings')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{translate('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{translate('Settings')}}
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

                <h5> {{translate('Account Settings')}}</h5>

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
                                    <h6 class="fw-bolder">{{translate('Subscriptions')}}</h6>
                                    <p class="card-text">{{translate('manage subscriptions')}}</p>
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
                                    <h6 class="fw-bolder">{{translate('Account Settings')}}</h6>
                                    <p class="card-text">{{translate('edit account settings')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



                <h5> {{translate('Basic Settings')}}</h5>

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
                                    <h6 class="fw-bolder">{{translate('Store Settings')}}</h6>
                                    <p class="card-text">{{translate('Store information')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <!-- {{route('admin.settings.paymentMethods')}} -->
                        <a href="#" onclick="notAvailable()" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='credit-card'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('payment methods')}}</h6>
                                    <p class="card-text">{{translate('e-Payment gateways')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <!-- {{route('admin.settings.shipping.index')}} -->
                        <a href="#" onclick="notAvailable()" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='truck'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('Shipping')}}</h6>
                                    <p class="card-text">{{translate('Active shipping options')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <!-- {{route('admin.settings.storeDesign')}} -->
                        <a href="#" class="text-muted" onclick="notAvailable()">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='layout'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('Store Design')}}</h6>
                                    <p class="card-text">{{translate('edit in store Design')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>


                <h5> {{translate('Other Settings')}}</h5>

                <!-- Stats Vertical Card -->
                <div class="row">
                    <!-- {{route('admin.settings.vat.index')}} -->
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="#" onclick="notAvailable()" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='file-text'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('vat')}}</h6>
                                    <p class="card-text">{{translate('vat Settings')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <!-- {{route('admin.settings.teamwork')}} -->
                        <a href="#" onclick="notAvailable()" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='users'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('Teamwork')}}</h6>
                                    <p class="card-text">{{translate('Manage your teamwork')}}</p>
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
                                    <h6 class="fw-bolder">{{translate('Definition pages')}}</h6>
                                    <p class="card-text">{{translate('Terms and Conditions')}} </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- {{route('admin.settings.domain')}} -->
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="#" onclick="notAvailable()" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='globe'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('Domain')}}</h6>
                                    <p class="card-text">{{translate('Domain reservation')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <!-- {{route('admin.settings.services')}} -->
                        <a href="#" onclick="notAvailable()" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='link'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('Services')}}</h6>
                                    <p class="card-text">{{translate('Link a services')}}</p>
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
                                    <h6 class="fw-bolder">{{translate('Ratings')}}</h6>
                                    <p class="card-text">{{translate('Products and store')}}</p>
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
                                    <h6 class="fw-bolder">{{translate('Countries and currencies')}}</h6>
                                    <p class="card-text">{{translate('Manage Countries and currencies')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6" onclick="notAvailable()">
                        <a href="#" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='search'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('SEO')}}</h6>
                                    <p class="card-text">{{translate('Address and other')}}</p>
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
                                    <h6 class="fw-bolder">{{translate('Additional Settings')}}</h6>
                                    <p class="card-text">{{translate('Mantinance and more')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-md-4 col-sm-6">
                        <a href="#" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='trash'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{translate('Archive')}}</h6>
                                    <p class="card-text">{{translate('Clients archive')}}</p>
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