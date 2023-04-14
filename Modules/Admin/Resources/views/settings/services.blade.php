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


            <section id="card-demo-example">
                <div class="row match-height">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>

                                <img class="img-fluid my-2" src="../../../app-assets/images/slider/06.jpg" alt="Card image cap">

                                <button type="button" class="btn btn-primary">
                                    <i data-feather='link'></i>
                                    <span>Link</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>

                                <img class="img-fluid my-2" src="../../../app-assets/images/slider/06.jpg" alt="Card image cap">

                                <button type="button" class="btn btn-primary">
                                    <i data-feather='link'></i>
                                    <span>Link</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>

                                <img class="img-fluid my-2" src="../../../app-assets/images/slider/06.jpg" alt="Card image cap">

                                <button type="button" class="btn btn-primary">
                                    <i data-feather='link'></i>
                                    <span>Link</span>
                                </button>
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

@endsection

@section('scripts')
@endsection