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
                        <h2 class="content-header-title float-start mb-0">{{__('Store Settings')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.settings.index')}}">{{__('Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Store Settings')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <livewire:alerts.alert>
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('Store Settings')}}</h4>
                                </div>
                                <div class="card-body">
                                    <livewire:admin::store.updata-store-data-livewire :store="$store" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="input-file-browser">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('Logo Of Store')}}</h4>
                                </div>
                                <div class="card-body">
                                    <livewire:admin::store.upload-store-logo-livewire :store="$store" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="input-file-browser">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('Icon of tab in browser')}}</h4>
                                </div>
                                <div class="card-body">
                                    <livewire:admin::store.upload-store-browser-icon :store="$store" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="store-desc">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('Store description')}}</h4>
                                </div>
                                <div class="card-body">
                                    <livewire:admin::store-description :store="$store" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="social-media-links">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('Social media links')}}</h4>
                                </div>
                                <div class="card-body">
                                    <livewire:admin::create-social-media-links />
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
<link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
@endsection

@section('scripts')
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>

<script src="../../../app-assets/js/scripts/extensions/ext-component-blockui.js"></script>
@endsection