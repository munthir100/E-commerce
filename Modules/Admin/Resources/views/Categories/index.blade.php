@extends('admin::Layouts.adminLayout')
@section('title', __('Categories'))
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Categories') }}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Categories') }}
                                </li>
                            </ol>
                        </div>
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
                                    <h4 class="card-title">{{__('Important Note') }}</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{__('If you deactivate any category, the products and sub-categories related to this category will disappear from customers in your store.') }}
                                    </p>
                                </div>
                                <div class="table-responsive">
                                    @if($categories->isEmpty())
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
                                                <th>{{__('Name')}}</th>
                                                <th>{{__('Status')}}</th>
                                                <th>{{__('Actions')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allCategories as $category)
                                            <tr id="row-{{$category->id}}">

                                                <td>{{$category->title}}</td>

                                                @if($category->is_active)
                                                <td><span class="badge rounded-pill badge-light-primary me-1">{{__('Active')}}</span></td>
                                                @else
                                                <td><span class="badge rounded-pill badge-light-secondary me-1">{{__('Not Active')}}</span></td>
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
                                                                <span>{{__('Edit')}}</span>
                                                            </a>
                                                            <livewire:admin::categories.delete-category-livewire :category="$category" />
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--/ Basic Tree -->

                        <!-- Custom Icons Tree -->
                        <div class="col-md-4">
                            <div class="card">
                                <button data-bs-toggle="modal" data-bs-target="#addCategory" class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>
                                        <i data-feather="plus"></i>
                                        {{__('Add New Category')}}</span>
                                </button>
                                <div class="card-header">
                                    <h4 class="card-title">{{__('Categories Tree')}}</h4>
                                </div>

                                <div class="card-body">
                                    <div id="jstree-basic">
                                        <ul role="group" class="jstree-children">
                                            @forelse($categories as $category)
                                            <li data-jstree='{"icon" : "far fa-folder"}' id="row-{{$category->id}}">
                                                {{ $category->title }}
                                                @if(count($category->children) > 0)
                                                @include('admin::Categories.subcategories', ['subcategories' => $category->children])
                                                @endif
                                            </li>
                                            @empty
                                            <li>
                                                {{__('no categories yet')}}
                                            </li>
                                            @endforelse
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
                <h1 class="text-center mb-1" id="addCategoryTitle">{{__('Add new Category')}}</h1>
                <p class="text-center">{{__('Add your Categories for your store')}}</p>

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
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/jstree.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/ext-component-tree.css')}}">

@endsection

@section('scripts')
<script src="{{asset('app-assets/vendors/js/extensions/jstree.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/ext-component-tree.js')}}"></script>

<script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-select2.js')}}"></script>
@endsection