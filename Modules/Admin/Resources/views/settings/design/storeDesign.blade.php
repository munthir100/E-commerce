@extends('admin::Layouts.adminLayout')
@section('title',translate('Settings'))

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Store Design<')}}/h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item">{{__('Store Design')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="additionalSettings">

                <h5> {{__('Basic Settings')}}</h5>

                <!-- Stats Vertical Card -->
                <div class="row">

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.theme')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i class="fa fa-brush"></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{__('Store Theme')}}</h6>
                                    <p class="card-text">{{__('Theme Settings')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.sections')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i class="fas fa-layer-group"></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{__('Customize store layers')}}</h6>
                                    <p class="card-text">{{__('banners and other')}}</p>
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
                                            <i class="fa fa-palette"></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{__('Shipping')}}</h6>
                                    <p class="card-text">{{__('Active shipping options')}}</p>
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
                                            <i class="fas fa-browser"></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{__('Store Design')}}</h6>
                                    <p class="card-text">{{__('edit in store Design')}}</p>
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
                                            <i class="fas fa-code"></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{__('Store Design')}}</h6>
                                    <p class="card-text">{{__('edit in store Design')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </section>
        </div>
    </div>
</div>
@endsection


@section('styles')
<link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome/css/all.min.css"" />

@endsection

@section('scripts')
@endsection