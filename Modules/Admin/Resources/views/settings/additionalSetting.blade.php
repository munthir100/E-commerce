@extends('admin::Layouts.adminlayout')
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
                        <h2 class="content-header-title float-start mb-0">{{translate('Additional Settings')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{translate('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{translate('Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{translate('Additional Settings')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="additionalSettings">
                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">{{translate('Additional settings')}}</h4>
                        <form action="#">
                            <ul class="list-unstyled brand-list">
                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1" checked disabled>
                                        <label class="form-check-label text-muted" for="productBrand1">
                                            {{translate('Show the copyright of the Matajer platform in your store')}}
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            {{translate('Activate the minimum order')}}
                                        </label>

                                        <input type="text" placeholder="1 (SDG)">


                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            {{translate('Overseas product pictures show one size')}}
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            {{translate('Activate the gift system in the store')}}
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            {{translate('Activate electronic payment fees (for reports)')}}
                                        </label>
                                    </div>
                                </li>


                            </ul>
                            <div style="text-align: end;">
                                <button class="btn btn-primary">{{translate('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">{{translate('Additional settings')}}</h4>
                        <form action="#">
                            <div class="card-header p-1">
                                <div class="head-label">
                                    {{translate('Default wheight in shipping')}}
                                </div>
                                <div class="dt-action-buttons text-end">
                                    <div class="dt-buttons d-inline-flex">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" value="0" placeholder="{{translate('Default wheight in shipping')}}">
                                            <span class="input-group-text">K.G</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: end;">
                                <button type="button" onclick="notAvailable()" class="btn btn-primary">{{translate('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">{{translate('Commercial Registration No')}}</h4>
                        <form action="#">
                            <div class="card-header p-1">
                                <div class="head-label">
                                    <input type="text" class="form-control" id="basicInput" placeholder="000000000">
                                </div>

                            </div>

                            <ul class="list-unstyled brand-list">
                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            {{translate('The commercial registration appears at the bottom of the store page')}}
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div style="text-align: end;">
                                <button type="button" onclick="notAvailable()" class="btn btn-primary">{{translate('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">{{translate('Languages')}}</h4>
                        <form action="#">
                            <ul class="list-unstyled brand-list">


                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1" checked disabled>
                                        <label class="form-check-label text-muted" for="productBrand1">
                                            {{translate('Arabic')}}
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2" onclick="notAvailable()">
                                        <input type="checkbox" class="form-check-input" id="productBrand1" disabled>
                                        <label class="form-check-label" for="productBrand1">
                                            {{translate('English')}}
                                        </label>
                                    </div>
                                </li>


                            </ul>
                            <div style="text-align: end;">
                                <button type="button" onclick="notAvailable()" class="btn btn-primary">{{translate('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i data-feather='alert-triangle'></i>{{translate('Store maintenance')}}
                        </h4>
                        <form action="#">
                            <ul class="list-unstyled brand-list">
                                <li>
                                    <div class="form-check mb-2" onclick="notAvailable()">
                                        <input type="checkbox" class="form-check-input" id="productBrand1" disabled>
                                        <label class="form-check-label" for="productBrand1">
                                            {{translate('Temporarily stopping the store for maintenance')}}
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div style="text-align: end;">
                                <button type="button" onclick="notAvailable()" class="btn btn-primary">{{translate('Save')}}</button>
                            </div>
                        </form>
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
@endsection