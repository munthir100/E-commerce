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
            <div class="demo-spacing-0 mb-2">
                <div class="alert alert-primary" role="alert">
                    <div class="alert-body d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info me-50">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <span> This feature is available in the advanced package and the professional package,<strong> click here </strong></span>
                    </div>
                </div>
            </div>

            <section id="additionalSettings">


                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col" style="min-height: 30rem;">
                        <div class="card h-100">
                            <img class="card-img-top" src="../../../app-assets/images/slider/03.jpg" alt="Card image cap" style="height: inherit;" />

                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Free</h6>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Basic</h6>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-relief-success">
                                                <i data-feather='check'></i>
                                            </button>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col" style="min-height: 30rem;">
                        <div class="card h-100">
                            <img class="card-img-top" src="../../../app-assets/images/slider/03.jpg" alt="Card image cap" style="height: inherit;" />

                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">10 SDG</h6>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Advance</h6>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">
                                            <button type="button" class="btn btn-primary">
                                                active
                                            </button>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
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