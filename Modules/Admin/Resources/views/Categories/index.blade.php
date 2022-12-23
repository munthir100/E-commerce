@extends('admin::Layouts.adminlayout')
@section('title','My store | Categories')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Tree</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Extensions</a>
                                </li>
                                <li class="breadcrumb-item active">Tree
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html">
                                <i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html">
                                <i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html">
                                <i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html">
                                <i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <livewire:alerts.alert>
                <!-- Tree section -->
                <section class="basic-custom-icons-tree">
                    <div class="row">
                        <!-- Basic Tree -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Table Basic</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                                        can use any example of below table for your table and it can be use with any type of bootstrap tables.
                                    </p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allCategories as $category)
                                            <tr>

                                                <td>{{$category->title}}</td>

                                                @if($category->is_active)
                                                <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                                @else
                                                <td><span class="badge rounded-pill badge-light-secondary me-1">Not Active</span></td>
                                                @endif
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{route('admin.categories.edit',$category->id)}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50">
                                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                </svg>
                                                                <span>Edit</span>
                                                            </a>
                                                            <livewire:admin::categories.delete-category-livewire :category="$category" />
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
                        <!--/ Basic Tree -->

                        <!-- Custom Icons Tree -->
                        <div class="col-md-4">
                            <div class="card">
                                <button data-bs-toggle="modal" data-bs-target="#addCategory" class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>
                                        <i data-feather="plus"></i>
                                        Add New Record</span>
                                </button>
                                <div class="card-header">
                                    <h4 class="card-title">Basic</h4>
                                </div>

                                <div class="card-body">
                                    <div id="jstree-basic">
                                        <ul role="group" class="jstree-children">
                                            @foreach($categories as $category)
                                            <li data-jstree='{"icon" : "far fa-folder"}'>
                                                {{ $category->title }}
                                                @if(count($category->children) > 0)
                                                @include('admin::Categories.subcategories', ['subcategories' => $category->children])
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Custom Icons Tree -->
                    </div>
                </section>



                <!--/ Tree section -->

        </div>
    </div>
</div>
<!-- Add new Category modal  -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 mx-50 pb-5">
                <h1 class="text-center mb-1" id="addCategoryTitle">Add new Category</h1>
                <p class="text-center">Add your Categories for your store</p>

                <!-- form -->
                <livewire:admin::categories.store-category-livewire :categories="$allCategories" />
                <!-- End form -->

            </div>
        </div>
    </div>
</div>




<!--/ Add new Category modal  -->
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/jstree.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-tree.css">

@endsection

@section('scripts')
<script src="../../../app-assets/vendors/js/extensions/jstree.min.js"></script>
<script src="../../../app-assets/js/scripts/extensions/ext-component-tree.js"></script>

<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>
@endsection