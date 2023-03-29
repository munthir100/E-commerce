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
            <livewire:alerts.alert>

                <section id="vat">
                    <div class="row" id="basic-table">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom p-1 bg-light">
                                    <div class="head-label">
                                        <h4 class="card-title">Vat</h4>
                                    </div>
                                    <div class="dt-action-buttons text-end">
                                        <div class="dt-buttons d-inline-flex">
                                            <a data-bs-toggle="modal" data-bs-target="#addaTax" href="#" class="dt-button create-new btn btn-primary waves-effect waves-float waves-light">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg>Add a tax
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="cardMaster border rounded p-1">
                                    <div class="d-flex justify-content-between flex-sm-row ">
                                        <div class="card-information">
                                            <h6>The tax number of the establishment</h6>
                                        </div>
                                        <div class="card-information">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#establishmentTaxNumber" class="btn btn-outline-primary"> Set </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="cardMaster border rounded p-1">
                                    <div class="d-flex justify-content-between flex-sm-row ">
                                        <div class="card-information">
                                            <h6>Mildred Wagner</h6>
                                        </div>
                                        <div class="card-information">
                                            <div class="form-check form-check-primary form-switch">
                                                <input type="checkbox" checked="" class="form-check-input" id="customSwitch3">
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="cardMaster border rounded p-1">
                                    <div class="d-flex justify-content-between flex-sm-row ">
                                        <div class="card-information">
                                            <h6>Calculating the tax on shipping services</h6>
                                        </div>
                                        <div class="card-information">
                                            <div class="form-check form-check-primary form-switch">
                                                <input type="checkbox" class="form-check-input">
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="cardMaster border rounded p-1">
                                    <div class="d-flex justify-content-between flex-sm-row ">
                                        <div class="card-information">
                                            <h6>Show product prices including tax</h6>
                                        </div>
                                        <div class="card-information">
                                            <div class="form-check form-check-primary form-switch">
                                                <input type="checkbox" class="form-check-input">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                
                                <livewire:admin::list-vats-livewire :vats="$vats"/>


                            </div>
                        </div>
                    </div>
                </section>

        </div>
    </div>
</div>


<div class="modal fade" id="addaTax" tabindex="-1" aria-labelledby="addaTaxTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addaTaxTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <livewire:admin::create-new-tax />
        </div>
    </div>
</div>

<div class="modal fade" id="establishmentTaxNumber" tabindex="-1" aria-labelledby="establishmentTaxNumberTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="establishmentTaxNumberTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <livewire:admin::establishment-tax-number />
        </div>
    </div>
</div>
@endsection


@section('styles')

@endsection

@section('scripts')
@endsection