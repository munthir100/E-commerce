@extends('client::layouts.clientLayout')
@section('title','soon')
@section('content')
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Shop</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                </li>
                                <li class="breadcrumb-item active">Shop
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content-body">

            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Orders</h4>
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
                                        <td>
                                            <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" />
                                            <span class="fw-bold">Angular Project</span>
                                        </td>
                                        <td>Peter Charls</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
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
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../../../app-assets/images/icons/react.svg" class="me-75" height="20" width="20" alt="React" />
                                            <span class="fw-bold">React Project</span>
                                        </td>
                                        <td>Ronald Frest</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
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
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../../../app-assets/images/icons/vuejs.svg" class="me-75" height="20" width="20" alt="Vuejs" />
                                            <span class="fw-bold">Vuejs Project</span>
                                        </td>
                                        <td>Jack Obes</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
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
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../../../app-assets/images/icons/bootstrap.svg" class="me-75" height="20" width="20" alt="Bootstrap" />
                                            <span class="fw-bold">Bootstrap Project</span>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
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
@endsection