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
            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Store Settings</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route("admin.settings.store-setting")}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Store Name</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="store_name" value="{{$store->store_name}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Store Link</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name"  name="store_link" value="{{$store->store_link}}" />
                                            </div>
                                        </div>
                                        <div class="col-12" style="text-align: end;">
                                            <button type="submit" class="btn btn-primary me-1">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="input-file-browser">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Logo Of Store</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="text-center">
                                        <div class="profile-img">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" class="rounded img-fluid" alt="Card image">
                                        </div>
                                        <br>
                                        <p class="text-danger">width: 512px , height: 512px , max size of image : 5MB , Jpg , JPEG , PNG</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="input-file-browser">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icon of tab in browser</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="text-center">
                                        <div class="profile-img">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" class="rounded img-fluid" alt="Card image">
                                        </div>
                                        <br>
                                        <p class="text-danger">width: 512px , height: 512px , max size of image : 5MB , Jpg , JPEG , PNG</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="store-desc">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Store description</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route("admin.settings.store-setting")}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="store_desc"  rows="3" placeholder="Description">{{$store->store_desc}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-2">

                                        <div class="input-group" data-bs-toggle="modal" data-bs-target="#storeAddress">
                                            <button class="btn btn-light" type="button">
                                                <i data-feather='map-pin'></i>
                                            </button>
                                            <input type="text" class="form-control" placeholder="Button on both side" name="store_city" aria-label="Amount">
                                            <button class="btn btn-primary" type="button">Select</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" style="text-align: end;">
                                    <button type="submit" class="btn btn-primary me-1">Save</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="social-media-links">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Social media links</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route("admin.settings.store-setting")}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i data-feather='instagram'></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="instagram" aria-label="Username" name="instagram_link" value="{{$store->instagram_link}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i data-feather='bell'></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="snapchat" aria-label="Username" name="snapchat_link" value="{{$store->snapchat_link}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i data-feather='twitter'></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="tweeter" aria-label="Username" name="twitter_link" value="{{$store->twitter_link}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i data-feather='facebook'></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="facebook" aria-label="Username" name="facebook_user" value="{{$store->facebook_user}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i class="fab fa-whatsapp"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="whatsapp" aria-label="Username" name="whatsapp_number" value="{{$store->whatsapp_number}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i class="fab fa-telegram"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="telegram" aria-label="Username" name="telegram_link"  value="{{$store->telegram_link}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i class="fab fa-tiktok"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="tiktok" aria-label="Username" name="tiktok_link"  value="{{$store->tiktok_link}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i data-feather='phone-call'></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="phone" aria-label="Username" name="phone_number" value="{{$store->phone_number}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i class="fab fa-google-play"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="google play" aria-label="Username" name="google_play_link" value="{{$store->google_play_link}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text bg-light" id="basic-addon1">
                                                    <i class="fab fa-apple"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="apple store" aria-label="Username" name="apple_store_link" value="{{$store->apple_store_link}}" aria-describedby="basic-addon1">
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Save</button>
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

<!-- add new card modal  -->
<div class="modal fade" id="storeAddress" tabindex="-1" aria-labelledby="storeAddressTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-sm-5 mx-50 pb-5">
                <h1 class="text-center mb-1" id="storeAddressTitle">Select city</h1>
                <p class="text-center">Select your city</p>

                <!-- form -->
                <form id="storeAddressValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false">
                    <div class="demo-inline-spacing">
                        <div class="form-check form-check-inline col-12">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                            <label class="form-check-label" for="inlineRadio1">Checked</label>
                        </div>
                        <div class="form-check form-check-inline col-12">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                            <label class="form-check-label" for="inlineRadio1">Checked</label>
                        </div>
                        <div class="form-check form-check-inline col-12">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                            <label class="form-check-label" for="inlineRadio1">Checked</label>
                        </div>
                        <div class="form-check form-check-inline col-12">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                            <label class="form-check-label" for="inlineRadio1">Checked</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-1 mt-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ add new card modal  -->
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">

@endsection

@section('scripts')
@endsection
