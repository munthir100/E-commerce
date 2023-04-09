@extends('admin::Layouts.adminLayout')
@section('title','My store | Clients')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Show Client')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Clients')}}
                                </li>
                                <li class="breadcrumb-item">{{$client->user->name}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">

            <div class="row">

                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <img class="rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Generic placeholder image" height="64" width="64">
                        </div>
                        <div class="card-body">

                            <ul class="list-style-icons">
                                <li>
                                    <i data-feather="user"></i>
                                    {{__('name')}} : {{$client->user->name}}
                                </li>
                                <li>
                                    <i data-feather='mail'></i>
                                    <a href="mailto:{{$client->user->email}}">
                                        {{__('email')}}: {{$client->user->email}}
                                    </a>
                                </li>
                                <li>
                                    <i data-feather='phone-call'></i>
                                    <a href="tel:{{$client->user->phone}}">
                                        {{__('phone')}} : {{$client->user->phone}}
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="card" style="padding: 1rem;">
                        <ul class="list-style-icons">
                            <li class="mb-1">
                                <i data-feather='clock'></i>
                                {{__('created at')}} : {{$client->created_at}}
                            </li>
                            <li class="mb-1">
                                <i data-feather='map-pin'></i>
                                @if($client->city)
                                {{__('city')}}: {{$client->city->name}}
                                @else
                                {{__('None City Found')}}
                                @endif
                            </li>
                            <li class="mb-1">
                                <i data-feather='user'></i>
                                {{__('gender')}} :{{$client->gender}}
                                @if(!$client->gender)
                                {{__('N/A')}}
                                @endif
                            </li>
                            <li class="mb-1">
                                <i data-feather='clipboard'></i>
                                {{__('birth date')}} :{{$client->birth_date}}
                                @if(!$client->birth_date)
                                {{__('N/A')}}
                                @endif
                            </li>
                            <li class="mb-1">
                                <i data-feather='file-text'></i>
                                {{__('description')}} : {{$client->description}}
                                @if(!$client->description)
                                {{__('N/A')}}
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('orders')}}</h4>
                            </div>
                            <div class="table-responsive">
                                @if(!$orders)
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

                                                        <a class="dropdown-item" href="#">
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
                                <div class="col-2 mb-2 mt-3">
                                    <form method="GET" action="{{ route('admin.clients.show',$client->id) }}" class="mr-10">
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
            </div>
        </div>
    </div>
</div>
@endsection


@section('styles')
@endsection
@section('scripts')
@endsection