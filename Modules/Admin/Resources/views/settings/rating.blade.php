@extends('admin::Layouts.adminlayout')
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
                        <h2 class="content-header-title float-start mb-0">{{translate('Ratings')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{translate('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{translate('Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{translate('Ratings')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="copy-to-clipboard">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-secondary">
                                    <i data-feather="star"></i>
                                    {{translate('Store and products rating link')}}
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-12 pe-sm-0">
                                        <a href="{{$storeLink}}" target="__blank">
                                            <div class="mb-1">
                                                <input type="text" class="form-control" id="copy-to-clipboard-input" value="{{$storeLink}}" readonly style="cursor:pointer">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-2 col-12">
                                        <button class="btn btn-outline-primary waves-effect" id="btn-copy">{{translate('Copy!')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="table">
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{translate('Ratings')}}</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{translate('product')}}</th>
                                            <th>{{translate('Client')}}</th>
                                            <th>{{translate('Users')}}</th>
                                            <th>{{translate('Status')}}</th>
                                            <th>{{translate('Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="demo-spacing-0 mb-2">
                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                <div class="alert-body d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info me-50">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="16" x2="12" y2="12"></line>
                                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                                    </svg>
                                                    <span>{{ translate('No Items to display it now .')}}</span>
                                                </div>
                                            </div>
                                        </div>

                                    </tbody>
                                </table>
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
<script src="../../../app-assets/js/scripts/extensions/ext-component-clipboard.js"></script>
@endsection