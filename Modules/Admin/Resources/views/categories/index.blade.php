@extends('admin::layouts.adminLayout')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0" wire:click="t">Bootstrap Tables</h2>
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
                        <button data-bs-toggle="modal" data-bs-target="#addCategory" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">



            <section class="basic-custom-icons-tree">
                <div class="row">
                    <!-- Basic Tree -->
                    <div class="col-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Categories</h4>
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
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($user->categories as $category)
                                        <tr>
                                            <td>Peter Charls</td>
                                            <td>
                                                <span class="badge rounded-pill badge-light-primary me-1">Active</span>
                                            </td>
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
                                                        <a class="dropdown-item" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50">
                                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                            </svg>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            </svg>
                                                            <span>Delete</span>
                                                        </a>
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
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom Icons</h4>
                            </div>
                            <div class="card-body">
                                <div id="jstree-custom-icons" class="jstree jstree-2 jstree-rtl jstree-default" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="j2_1" aria-busy="false">
                                    <ul class="jstree-container-ul jstree-children" role="group">
                                        <li role="none" id="j2_1" class="jstree-node  jstree-closed"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="1" aria-expanded="false" id="j2_1_anchor"><i class="jstree-icon jstree-themeicon far fa-folder jstree-themeicon-custom" role="presentation"></i>css</a></li>
                                        <li role="none" id="j2_4" class="jstree-node  jstree-open"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="1" aria-expanded="true" id="j2_4_anchor"><i class="jstree-icon jstree-themeicon far fa-folder jstree-themeicon-custom" role="presentation"></i>img</a>
                                            <ul role="group" class="jstree-children">
                                                <li role="none" id="j2_5" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="2" id="j2_5_anchor"><i class="jstree-icon jstree-themeicon far fa-file-image text-success jstree-themeicon-custom" role="presentation"></i>bg.jpg</a></li>
                                                <li role="none" id="j2_6" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="2" id="j2_6_anchor"><i class="jstree-icon jstree-themeicon far fa-file-image text-success jstree-themeicon-custom" role="presentation"></i>logo.png</a></li>
                                                <li role="none" id="j2_7" class="jstree-node  jstree-leaf jstree-last"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="2" id="j2_7_anchor"><i class="jstree-icon jstree-themeicon far fa-file-image text-success jstree-themeicon-custom" role="presentation"></i>avatar.png</a></li>
                                            </ul>
                                        </li>
                                        <li role="none" id="j2_8" class="jstree-node  jstree-open"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="1" aria-expanded="true" id="j2_8_anchor"><i class="jstree-icon jstree-themeicon far fa-folder jstree-themeicon-custom" role="presentation"></i>js</a>
                                            <ul role="group" class="jstree-children">
                                                <li role="none" id="j2_9" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="2" id="j2_9_anchor"><i class="jstree-icon jstree-themeicon fab fa-node-js text-warning jstree-themeicon-custom" role="presentation"></i>jquery.js</a></li>
                                                <li role="none" id="j2_10" class="jstree-node  jstree-leaf jstree-last"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="2" id="j2_10_anchor"><i class="jstree-icon jstree-themeicon fab fa-node-js text-warning jstree-themeicon-custom" role="presentation"></i>app.js</a></li>
                                            </ul>
                                        </li>
                                        <li role="none" id="j2_11" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="1" id="j2_11_anchor"><i class="jstree-icon jstree-themeicon fab fa-html5 text-danger jstree-themeicon-custom" role="presentation"></i>index.html</a></li>
                                        <li role="none" id="j2_12" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="1" id="j2_12_anchor"><i class="jstree-icon jstree-themeicon fab fa-html5 text-danger jstree-themeicon-custom" role="presentation"></i>page-one.html</a></li>
                                        <li role="none" id="j2_13" class="jstree-node  jstree-leaf jstree-last"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" role="treeitem" aria-selected="false" aria-level="1" id="j2_13_anchor"><i class="jstree-icon jstree-themeicon fab fa-html5 text-danger jstree-themeicon-custom" role="presentation"></i>page-two.html</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Custom Icons Tree -->
                </div>
            </section>




        </div>
    </div>
</div>
<!-- add new card modal  -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 mx-50 pb-5">
                <h1 class="text-center mb-1" id="addNewCardTitle">Add New Category</h1>
                <p class="text-center">Add card for future billing</p>
                <!-- form -->
                <livewire:admin::categories.category-form />
            </div>
        </div>
    </div>
</div>
<!--/ add new card modal  -->

@endsection