@extends('admin::Layouts.adminlayout')
@section('title','My store | Products')

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
            <livewire:alerts.alert>

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
                                        <a data-bs-toggle="modal" data-bs-target="#addNewBrand" href="#" class="dt-button create-new btn btn-primary">
                                            <span>
                                                <i data-feather="plus"></i>Add New Brand
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>number of products</th>
                                            <th>category</th>
                                            <th>status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($brands as $brand)
                                        <tr>
                                            <td>{{$brand->name}}</td>
                                            <td>{{$brand->number_of_products}}</td>
                                            <td>{{$brand->category->title}}</td>
                                            @if($brand->is_active == true)
                                            <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                            @else
                                            <td><span class="badge rounded-pill badge-light-secondary me-1">Not Active</span></td>
                                            @endif
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{route('admin.brands.edit',[$brand->id])}}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <livewire:admin::brands.delete-brand-livewire :brand="$brand" />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
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

<div class="modal fade" id="addNewBrand" tabindex="-1" aria-labelledby="addNewBrandTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewBrandTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <livewire:admin::brands.create-brand-livewire />
        </div>
    </div>
</div>
@endsection


@section('styles')

@endsection

@section('scripts')

@endsection