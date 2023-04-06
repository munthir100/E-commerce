@extends('admin::Layouts.adminLayout')
@section('title',translate('Products'))
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Products')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Products')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <livewire:alerts.alert>

                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom p-1">

                                <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-1 mt-1">
                                    <div class="head-label">
                                        <form method="GET" action="{{ route('admin.products.index') }}">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="{{__('search ..')}}" aria-describedby="button-addon2" name="q" value="{{ Request::get('q') }}">
                                                <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="submit">
                                                    <i data-feather='search'></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 mb-1 mt-1 col-12">
                                    <div class="head-label">
                                        <form method="GET" action="{{ route('admin.products.index') }}">

                                            <select class="select2 form-select" name="category_id" onchange="this.form.submit()">
                                                <option value="">{{__('All categories')}}</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ Request::get('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                                                @endforeach
                                            </select>

                                        </form>
                                    </div>
                                </div>

                                <div class="dt-action-buttons text-end">
                                    <div class=" d-inline-flex">
                                        <a href="{{route('admin.products.create')}}" class="dt-button create-new btn btn-primary"><span>
                                                <i data-feather="plus"></i>
                                                {{__('Add New Product') }}</span></a>
                                    </div>
                                </div>

                            </div>

                            <div class="table-responsive">
                                @if($products->isEmpty())
                                <div class="demo-spacing-0 mb-2">
                                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                        <div class="alert-body d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info me-50">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                            </svg>
                                            <span>{{__('No Items to display it now .')}}</span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <table class="table table-striped table-bordered" style="margin-bottom: 5rem;">
                                    <thead>
                                        <tr>
                                            <th>{{__('name')}}</th>
                                            <th>{{__('product sku')}}</th>
                                            <th>{{__('quantity')}}</th>
                                            <th>{{__('price')}}</th>
                                            <th>{{__('Publish in store')}}</th>
                                            <th>{{__('Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr id="row-{{$product->id}}">
                                            <td>{{$product->title}}</td>
                                            @isset($product->sku)
                                            <td>
                                                {{$product->sku}}
                                            </td>
                                            @endisset

                                            @empty($product->sku)
                                            <td>
                                                -
                                            </td>
                                            @endempty
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->price}}</td>

                                            @if($product->is_active != 0)
                                            <td><span class="badge rounded-pill badge-light-primary me-1">{{__('Active')}}</span></td>
                                            @else
                                            <td><span class="badge rounded-pill badge-light-secondary me-1">{{__('Not Active')}}</span></td>
                                            @endif
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{route('admin.products.edit',[$product->id])}}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>{{__('Edit')}}</span>
                                                        </a>
                                                        <livewire:admin::delete-product-livewire :product="$product" />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="col-2 mb-2">
                                    <form method="GET" action="{{ route('admin.products.index') }}" class="mr-10">
                                        <select class="form-select" name="per_page" onchange="this.form.submit()">
                                            <option value="10" {{ Request::get('per_page') == 10 ? 'selected' : '' }}>{{__('10 items')}}</option>
                                            <option value="25" {{ Request::get('per_page') == 25 ? 'selected' : '' }}>{{__('25 item')}}</option>
                                            <option value="50" {{ Request::get('per_page') == 50 ? 'selected' : '' }}>{{__('50 item')}}</option>
                                            <option value="100" {{ Request::get('per_page') == 100 ? 'selected' : '' }}>{{__('100 item')}}</option>
                                        </select>
                                    </form>
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
        </div>
    </div>
</div>
@endsection


@section('styles')

<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
@endsection

@section('scripts')

<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>
@endsection