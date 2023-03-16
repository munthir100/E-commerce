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

                            <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-1 mt-1">
                                <div class="head-label">
                                    <form method="GET" action="{{ route('admin.clients.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="search .." aria-describedby="button-addon2" name="q" value="{{ Request::get('q') }}">
                                            <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="submit">
                                                <i data-feather='search'></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="dt-action-buttons text-end">
                                <div class="dt-buttons d-inline-flex">
                                    <button data-bs-toggle="modal" data-bs-target="#addclient" class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>
                                            <i data-feather="plus"></i>
                                            Add New Record</span></button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>date of registerd</th>
                                        <th>phone</th>
                                        <th>email</th>
                                        <th>number of orders</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $client)
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
                                                    <a class="dropdown-item disabled" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-2 mb-2 mt-2">
                                <form method="GET" action="{{ route('admin.clients.index') }}" class="mr-10">
                                    <select class="form-select" name="per_page" onchange="this.form.submit()">
                                        <option value="10" {{ Request::get('per_page') == 10 ? 'selected' : '' }}>10 items</option>
                                        <option value="25" {{ Request::get('per_page') == 25 ? 'selected' : '' }}>25 items</option>
                                        <option value="50" {{ Request::get('per_page') == 50 ? 'selected' : '' }}>50 items</option>
                                        <option value="100" {{ Request::get('per_page') == 100 ? 'selected' : '' }}>100 items</option>
                                    </select>
                                </form>
                            </div>
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
@endsection
@section('scripts')
@endsection