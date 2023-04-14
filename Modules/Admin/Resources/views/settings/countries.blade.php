@extends('admin::Layouts.adminLayout')
@section('title', __('Dashboard'))
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Countries')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.settings.index')}}">{{__('Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Countries')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <div class="demo-spacing-0">
                <div class="alert alert-primary" role="alert">
                    <div class="alert-body d-flex align-items-center">
                        <i data-feather='alert-triangle'></i>
                        <span>
                            {{__('This feature is available in the advanced package and the professional package,')}}
                            <a href="#" class="text-decoration-underline">
                                {{__('click here')}}
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <section id="countries">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Store Countries
                            <div style="text-align:end">
                                <button class="btn btn-primary" onclick="notAvailable()">
                                    {{__('+ Add Country')}}
                                </button>
                            </div>
                        </h4>
                        <div class="card-header border-bottom p-1">
                            <div class="head-label">
                                <h6 class="mb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="70" height="34">
                                        </div>
                                        <h5 class="mb-0">{{__('Sudan (SDG)')}}</h5>
                                    </div>
                                </h6>
                            </div>
                            <div class="dt-action-buttons text-end">
                                <div class="dt-buttons d-inline-flex">
                                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in">
                                        <span>
                                            <i data-feather='check'></i> {{__('Main country')}}
                                        </span>
                                    </button>
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
@section('scripts')
@endsection
