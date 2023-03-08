@extends('admin::Layouts.adminLayout')
@section('title','My store | Orders')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Bootstrap Tables</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Table Bootstrap
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom p-1">
                            <div class="head-label">
                                <form action="#soon">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search .." aria-describedby="button-addon2">
                                        <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="submit">
                                            <i data-feather='search'></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="dt-action-buttons text-end">
                                <div class="dt-buttons d-inline-flex">
                                    <button id="new-order" class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>
                                            <i data-feather="plus"></i>
                                            Add New Order
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order number</th>
                                        <th>Client</th>
                                        <th>Date</th>
                                        <th>Payment</th>
                                        <th>Shipping</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$client->user->name}}</td>
                                        <td>{{$client->created_at->diffForhumans()}}</td>
                                        <td>{{$client->user->phone}}</td>
                                        <td>{{$client->user->email}}</td>
                                        <td>{{$client->number_of_orders}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('admin.clients.show',$client->id)}}">
                                                        <i data-feather="eye" class="me-50"></i>
                                                        <span>Show</span>
                                                    </a>

                                                    <a class="dropdown-item" href="{{route('admin.clients.edit',$client->id)}}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <div class="alert alert-danger">
                                        <span class="text-alert">
                                            <p>
                                                There Is No Orders Yet
                                            </p>
                                        </span>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->
        </div>
    </div>
</div>
<!-- Add new client modal  -->
<div class="modal fade" id="addclient" tabindex="-1" aria-labelledby="referEarnTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-refer-earn">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Add Client Information</h1>
                    <p>Adding client details will receive a privacy audit.</p>
                </div>
                <livewire:admin::clients.store-client-livewire />
            </div>
        </div>
    </div>
</div>
<!--/ Add new client modal  -->
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/animate/animate.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css">
@endsection
@section('scripts')
<script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/polyfill.min.js"></script>
<script src="../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
<script>
    var warning = $('#new-order');
    if (warning.length) {
        warning.on('click', function() {
            Swal.fire({
                title: 'Warning!',
                text: ' Please upgrade your package becouse this feature is not available in your package!',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            });
        });
    }
</script>
@endsection
