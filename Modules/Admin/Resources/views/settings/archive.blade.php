@extends('admin::Layouts.adminLayout')
@section('title', __('Settings'))
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Archive')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.settings.index')}}">{{__('Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Clients Archive')}}
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

                <h5> {{__('Archive')}}</h5>

                <!-- Stats Vertical Card -->
                <div class="row">


                    <div class="col-md-3">
                        <a href="{{route('admin.settings.clientsArchive')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='users'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">{{__('Clients')}}</h6>
                                    <p class="card-text">{{__('Clients Archive')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>



            </section>
            <!--/ Statistics Card section-->

        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection