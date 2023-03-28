@extends('admin::Layouts.adminLayout')
@section('title', translate('Main Page') . ' | ' . translate('My store'))
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">


                    <!-- Statistics Card -->
                    <div class="col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title">{{translate('Statistics')}}</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 me-25 mb-0">{{translate('Updated 1 month ago')}}</p>
                                </div>
                            </div>
                            <div class="card-body statistics-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-primary me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">0</h4>
                                                <p class="card-text font-small-3 mb-0">{{translate('Sales')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-info me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="user" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">0</h4>
                                                <p class="card-text font-small-3 mb-0">{{translate('Customers')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-danger me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">0</h4>
                                                <p class="card-text font-small-3 mb-0">{{translate('Orders')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-success me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">0</h4>
                                                <p class="card-text font-small-3 mb-0">{{translate('Profit')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>


                <div class="row match-height">
                    <!-- Goal Overview Card -->
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">{{translate('Most requested cities')}}</h4>
                                <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                            </div>

                        </div>
                    </div>
                    <!--/ Goal Overview Card -->

                    <!-- Transaction Card -->
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">{{translate('Orders')}}</h4>
                                <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                            </div>
                            <div class="card-body p-0">

                                <div class="row border-top text-center mx-0">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
@endsection
