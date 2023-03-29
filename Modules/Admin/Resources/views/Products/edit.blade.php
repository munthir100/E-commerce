@extends('admin::Layouts.adminLayout')
@section('title','Products | Edit')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{translate('Edit Product')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{translate('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">{{translate('Products')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{translate('Edit')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <livewire:alerts.alert>

                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <livewire:admin::products.update-product-livewire :product="$product" />
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
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">

@endsection

@section('scripts')
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>

@endsection
