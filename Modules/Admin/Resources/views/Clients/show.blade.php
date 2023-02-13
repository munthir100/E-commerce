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
                        <h2 class="content-header-title float-start mb-0">Bootstrap Tables</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Table Bootstrap
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
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
                                    {{$client->user->name}} : name
                                </li>
                                <li>
                                    <i data-feather='mail'></i>
                                    <a href="mailto:{{$client->user->email}}">
                                        {{$client->user->email}} : email
                                    </a>
                                </li>
                                <li>
                                    <i data-feather='phone-call'></i>
                                    <a href="tel:{{$client->user->phone}}">
                                        {{$client->user->phone}} : phone
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
                                {{$client->created_at}} : created at
                            </li>
                            <li class="mb-1">
                                <i data-feather='map-pin'></i>
                                {{$client->city->name}} : city
                            </li>
                            <li class="mb-1">
                                <i data-feather='user'></i>
                                {{$client->gender}} : gender
                            </li>
                            <li class="mb-1">
                                <i data-feather='clipboard'></i>
                                {{$client->birth_date}} : birth date
                            </li>
                            <li class="mb-1">
                                <i data-feather='file-text'></i>
                                {{$client->description}} : description
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Shipping adressess</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <div class="alert alert-danger">
                                                <span class="text-danger">
                                                    soon
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
                                <h4 class="card-title">orders</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <div class="alert alert-danger">
                                                <span class="text-danger">
                                                    soon
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
