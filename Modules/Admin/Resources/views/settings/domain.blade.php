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
                        <h2 class="content-header-title float-start mb-0">{{__('Domain')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.settings.index')}}">{{__('Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Domain')}}
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
                        <span> {{__('This feature is available in the advanced package and the professional package,')}}<strong> {{__('click here')}} </strong></span>
                    </div>
                </div>
            </div>


            <section id="block-level-buttons">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('Request a custom domain')}}</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{__('Reserve a custom domain or request to connect your own custom domain.')}}</p>
                                <div class="row">
                                    <div class="d-grid col-lg-6 col-md-12 mb-1 mb-lg-0">
                                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light">{{__('Reserve a aomain')}}</button>
                                    </div>
                                    <div class="d-grid col-lg-6 col-md-12">
                                        <button type="button" class="btn btn-outline-primary waves-effect">{{__('I have a domain and want to connect it')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    @endsection


    @section('styles')

    @endsection

    @section('scripts')
    @endsection