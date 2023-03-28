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
                        <h2 class="content-header-title float-start mb-0">{{translate('Show Client')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{translate('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{translate('Clients')}}
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
                                    {{$client->user->name}} : {{translate('name')}}
                                </li>
                                <li>
                                    <i data-feather='mail'></i>
                                    <a href="mailto:{{$client->user->email}}">
                                        {{$client->user->email}} : {{translate('email')}}
                                    </a>
                                </li>
                                <li>
                                    <i data-feather='phone-call'></i>
                                    <a href="tel:{{$client->user->phone}}">
                                        {{$client->user->phone}} : {{translate('phone')}}
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
                                {{$client->created_at}} : {{translate('created at')}}
                            </li>
                            <li class="mb-1">
                                <i data-feather='map-pin'></i>
                                @if($client->city)
                                {{$client->city->name}} : {{translate('city')}}
                                @else
                                {{translate('None City Found')}}
                                @endif
                            </li>
                            <li class="mb-1">
                                <i data-feather='user'></i>
                                {{$client->gender}} : {{translate('gender')}}
                            </li>
                            <li class="mb-1">
                                <i data-feather='clipboard'></i>
                                {{$client->birth_date}} : {{translate('birth date')}}
                            </li>
                            <li class="mb-1">
                                <i data-feather='file-text'></i>
                                {{$client->description}} : {{translate('description')}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{translate('Shipping adressess')}}</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{translate('Project')}}</th>
                                            <th>{{translate('Client')}}</th>
                                            <th>{{translate('Users')}}</th>
                                            <th>{{translate('Status')}}</th>
                                            <th>{{translate('Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <div class="alert alert-danger">
                                                <span class="text-danger">
                                                    {{translate('soon')}}
                                                </span>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{translate('orders')}}</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{translate('Project')}}</th>
                                            <th>{{translate('Client')}}</th>
                                            <th>{{translate('Users')}}</th>
                                            <th>{{translate('Status')}}</th>
                                            <th>{{translate('Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <div class="alert alert-danger">
                                                <span class="text-danger">
                                                    {{translate('soon')}}
                                                </span>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
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
