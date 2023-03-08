@extends('admin::Layouts.adminLayout')
@section('title','My store | Create new product')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Create New Product</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Products</a>
                                </li>
                                <li class="breadcrumb-item active">Create New Product
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple Column</h4>
                            </div>
                            <div class="card-body">
                                <livewire:admin::products.create-product-livewire />
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
<link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/bordered-layout.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/forms/form-file-uploader.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>

<script src="../../../app-assets/vendors/js/file-uploaders/dropzone.min.js"></script>
<script src="../../../app-assets/js/scripts/forms/form-file-uploader.js"></script>
<script src="../../../app-assets/js/scripts/components/components-tooltips.js"></script>
@endsection