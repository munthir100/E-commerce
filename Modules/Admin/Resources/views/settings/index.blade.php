@extends('admin::Layouts.adminlayout')
@section('title','My store | Settings')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Statistics Cards</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Cards</a>
                                </li>
                                <li class="breadcrumb-item active">Statistics Cards
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
            <!-- Statistics card section -->
            <section id="statistics-card">

                <h5> Account Settings</h5>

                <!-- Stats Vertical Card -->
                <div class="row">


                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.subscriptions')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-secondary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='unlock'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Subscriptions</h6>
                                    <p class="card-text">manage subscriptions</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <a href="{{route('admin.settings.profile')}}" class="text-muted">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-secondary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='user'></i>
                                        </div>
                                    </div>
                                    <h6 class="fw-bolder">Account Settings</h6>
                                    <p class="card-text">edit account settings</p>
                                </div>
                            </div>
                        </a>
                    </div>




                    <h5> Basic Settings</h5>

                    <!-- Stats Vertical Card -->
                    <div class="row">

                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="eye" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">36.9k</h2>
                                    <p class="card-text">Views</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="message-square" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">12k</h2>
                                    <p class="card-text">Comments</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="message-square" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">12k</h2>
                                    <p class="card-text">Comments</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="message-square" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">12k</h2>
                                    <p class="card-text">Comments</p>
                                </div>
                            </div>
                        </div>



                        <h5> Other Settings</h5>

                        <!-- Stats Vertical Card -->
                        <div class="row">

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-info p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="eye" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">36.9k</h2>
                                        <p class="card-text">Views</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <i data-feather="message-square" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder">12k</h2>
                                        <p class="card-text">Comments</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--/ Stats Vertical Card -->

            </section>
            <!--/ Statistics Card section-->

        </div>
    </div>
</div>
@endsection


@section('styles')

@endsection

@section('scripts')
@endsection