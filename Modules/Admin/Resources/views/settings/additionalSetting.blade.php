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
                        <h2 class="content-header-title float-start mb-0">Statistics Cards</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Cards</a>
                                </li>
                                <li class="breadcrumb-item active">Statistics Cards
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
                        <h4 class="card-title">Additional settings</h4>
                        <form action="#">
                            <ul class="list-unstyled brand-list">
                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1" checked disabled>
                                        <label class="form-check-label text-muted" for="productBrand1">
                                            Show the copyright of the Matajer platform in your store
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            Activate the minimum order
                                        </label>

                                        <input type="text" placeholder="1 (SDG)">


                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            Overseas product pictures show one size
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            Activate the gift system in the store
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            Activate electronic payment fees (for reports)
                                        </label>
                                    </div>
                                </li>


                            </ul>
                            <div style="text-align: end;">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">Additional settings</h4>
                        <form action="#">
                            <div class="card-header p-1">
                                <div class="head-label">
                                    Default wheight in shipping
                                </div>
                                <div class="dt-action-buttons text-end">
                                    <div class="dt-buttons d-inline-flex">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="Default wheight">
                                            <span class="input-group-text">K.G</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: end;">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">Commercial Registration No</h4>
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
                                            The commercial registration appears at the bottom of the store page
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div style="text-align: end;">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">Languages</h4>
                        <form action="#">
                            <ul class="list-unstyled brand-list">


                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1" checked disabled>
                                        <label class="form-check-label text-muted" for="productBrand1">
                                            Arabic
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            English
                                        </label>
                                    </div>
                                </li>


                            </ul>
                            <div style="text-align: end;">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i data-feather='alert-triangle'></i>Store maintenance
                        </h4>
                        <form action="#">
                            <ul class="list-unstyled brand-list">
                                <li>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="productBrand1">
                                        <label class="form-check-label" for="productBrand1">
                                            Temporarily stopping the store for maintenance
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div style="text-align: end;">
                                <button class="btn btn-primary">Save</button>
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