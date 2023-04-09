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
                        <h2 class="content-header-title float-start mb-0">{{__('Orders')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item">{{__('Orders')}}
                                </li>
                                <li class="breadcrumb-item active">{{__('Order Details')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <section id="outline-button">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('Order Status')}}</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text mb-0">
                                    {{__('change order status')}} ( {{ $order->created_at->diffForHumans() }} )
                                </p>
                                <!-- Outline buttons -->
                                <div class="demo-inline-spacing">
                                    @foreach(['new', 'processing', 'ready', 'delivering', 'completed', 'rejected'] as $status)
                                    <button type="button" class="btn @if($order->status == $status) btn-primary @else btn-outline-primary @endif">{{ ucfirst(__($status)) }}</button>
                                    @endforeach

                                    <div class="col-lg-2 col-md-4">
                                        <livewire:admin::orders.change-status :order="$order" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-header">
                                <img class="rounded-circle" src="../../app-assets/images/custom/image-user.png" alt="Generic placeholder image" height="64" width="64">
                            </div>
                            <div class="card-body">

                                <ul class="list-style-icons">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        {{__('name')}} : <a href=" {{route('admin.clients.show',$order->client->id)}}">
                                            {{$order->client->user->name}}
                                        </a>
                                    </li>
                                    <li>
                                        <i data-feather='mail'></i>
                                        {{__('email')}}:
                                        <a href="mailto:{{$order->client->user->email}}">
                                            {{$order->client->user->email}}
                                        </a>
                                    </li>
                                    <li>
                                        <i data-feather='phone'></i>
                                        {{__('phone')}}: {{$order->client->user->phone}}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-header">
                                <img class="rounded-circle" src="data:image/png;base64,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" alt="Generic placeholder image" height="64" width="64">
                            </div>
                            <div class="card-body">

                                <ul class="list-style-icons">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        {{__('Shipping')}} : {{__('envoy')}}
                                    </li>
                                    <li>
                                        <i data-feather='mail'></i>
                                        {{__('Address')}}:{{$order->location->address}}
                                        </a>
                                    </li>
                                    <li>
                                        <i data-feather='phone'></i>
                                        {{__('phone')}}: {{$order->client->user->phone}}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-header">
                                <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnXkt97opgThQSHFHhwDvJBfDZnsGwhUpLSw&usqp=CAU" alt="Generic placeholder image" height="64" width="64">
                            </div>
                            <div class="card-body">

                                <ul class="list-style-icons mb-5">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        {{__('Payment Method')}} : {{__('cash on delivery')}}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                title: '{{translate("Warning!")}}',
                text: ' {{translate("Please upgrade your package becouse this feature is not available in your package!")}}',
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