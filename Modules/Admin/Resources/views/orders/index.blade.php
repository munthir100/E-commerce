@extends('admin::Layouts.adminLayout')
@section('title',__('Orders'))

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Orders')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Orders')}}
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
                                        <input type="text" class="form-control" placeholder="{{__('search ..')}}" aria-describedby="button-addon2">
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
                                            {{__('Add New Order')}}
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            @if($orders->isEmpty())
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
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{__('Order number')}}</th>
                                        <th>{{__('Client')}}</th>
                                        <th>{{__('Date')}}</th>
                                        <th>{{__('Payment')}}</th>
                                        <th>{{__('Shipping')}}</th>
                                        <th>{{__('Total')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th>{{__('Actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->client->user->name}}</td>
                                        <td>{{$order->created_at->diffForhumans()}}</td>
                                        <td>{{__('Cash on delivery')}}</td>
                                        <td> <i data-feather="truck"></i> </td>
                                        <td>{{$order->price}}</td>
                                        <td>
                                            @if($order->status == 'new')
                                            {{__('new')}}
                                            @elseif($order->status == 'processing')
                                            {{__('processing')}}
                                            @elseif($order->status == 'ready')
                                            {{__('ready')}}
                                            @elseif($order->status == 'delivering')
                                            {{__('delivering')}}
                                            @elseif($order->status == 'completed')
                                            {{__('completed')}}
                                            @else($order->status == 'rejected')
                                            {{__('rejected')}}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('admin.orders.show',$order->id)}}">
                                                        <i data-feather="eye" class="me-50"></i>
                                                        <span>{{__('Show')}}</span>
                                                    </a>

                                                    <a class="dropdown-item" href="{{route('admin.orders.destroy',$order->id)}}">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>{{__('Delete')}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-2 mb-2 mt-4">
                                <form method="GET" action="#" class="mr-10">
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
<!-- Add new client modal  -->
<div class="modal fade" id="addclient" tabindex="-1" aria-labelledby="referEarnTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-refer-earn">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">{{__('Add Client Information')}}</h1>
                    <p>{{__('Adding client details will receive a privacy audit.')}}</p>
                </div>
                <livewire:admin::clients.store-client-livewire />
            </div>
        </div>
    </div>
</div>
<!--/ Add new client modal  -->
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/animate/animate.min.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css">
@endsection
@section('scripts')
<script src="../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="../../app-assets/vendors/js/extensions/polyfill.min.js"></script>
<script src="../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
<script>
    var warning = $('#new-order');
    if (warning.length) {
        warning.on('click', function() {
            Swal.fire({
                title: '{{__("Warning!")}}',
                text: ' {{__("Please upgrade your package becouse this feature is not available in your package!")}}',
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