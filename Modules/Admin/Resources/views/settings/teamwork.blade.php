@extends('admin::Layouts.adminLayout')
@section('title','Settings')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Teamwork')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.settings.index')}}">{{__('Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item">{{__('Teamwork')}}
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
                        <span>{{__('This feature is available in the advanced package and the professional package')}},<strong>{{__(' click here')}} </strong></span>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header border-bottom p-1">

                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-1 mt-1">
                        <div class="card-title">
                            {{__('Teamwork')}}
                        </div>
                    </div>


                    <div class="dt-action-buttons text-end">
                        <div class=" d-inline-flex">
                            <a href="#" class="btn btn-primary">
                                <span>
                                    <i data-feather="plus"></i>
                                    {{__('Add')}}
                                </span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="margin-bottom: 5rem;">
                        <thead>
                            <tr>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Email')}}</th>
                                <th>{{__('Permission')}}</th>
                                <th>{{__('Establis Date')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>


        </div>
    </div>
</div>
@endsection


@section('styles')

@endsection

@section('scripts')
@endsection