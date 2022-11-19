@extends('admin::Layouts.adminlayout')
@section('title','My store | Create new product')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Form Layouts</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Form Layouts</a>
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

            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple Column</h4>
                            </div>
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">

                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">product title</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column" />
                                            </div>
                                        </div>
                                        <div class="row col-md-6">

                                            <div class="col-md-4 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="last-name-column">product sku</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="city-column">quantity</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">wehight</label>
                                                    <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-md-6">
                                            <div class="col-md-6 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="city-column">price</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">product cost</label>
                                                    <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" />
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-12">
                                            <label class="form-label" for="select2-multiple">Category</label>
                                            <div class="input-group mb-1">
                                                <select class="form-select form-select-lg" id="selectLarge">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="button">Add</button>
                                            </div>
                                        </div>

                                        <div class="col-md-8 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="city-column">short description</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" maxlength="20" />
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="exampleFormControlTextarea1">description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Textarea"></textarea>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <button type="reset" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">

@endsection

@section('scripts')
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>

@endsection