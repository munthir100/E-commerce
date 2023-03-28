@extends('client::layouts.clientLayout')
@section('title','soon')
@section('content')
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Orders</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Orders
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">

            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            @if(!$orders)
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
                            @else
                            
                            <div class="col-2 mb-2">
                                <form method="GET" action="#" class="mr-10">
                                    <select class="form-select" name="per_page" onchange="this.form.submit()">
                                        <option value="10" {{ Request::get('per_page') == 10 ? 'selected' : '' }}>{{translate('10 items')}}</option>
                                        <option value="25" {{ Request::get('per_page') == 25 ? 'selected' : '' }}>{{translate('25 item')}}</option>
                                        <option value="50" {{ Request::get('per_page') == 50 ? 'selected' : '' }}>{{translate('50 item')}}</option>
                                        <option value="100" {{ Request::get('per_page') == 100 ? 'selected' : '' }}>{{translate('100 item')}}</option>
                                    </select>
                                </form>
                            </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection