@extends('admin::Layouts.adminLayout')
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
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a>
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
            
        </div>
        <div class="content-body">
            <livewire:alerts.alert>
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Store Settings</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route("admin.settings.store-setting")}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Store Name</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="store_name" value="{{$store->store_name ?? null}}" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="last-name-column">Store Link</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="store_link" value="{{$store->store_link ?? null}}" />
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
                                    <livewire:admin::store-description />
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
                                    <form class="form" action="{{route("admin.settings.store-setting")}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i data-feather='instagram'></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="instagram" aria-label="Username" name="instagram_link" value="{{$store->instagram_link ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i data-feather='bell'></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="snapchat" aria-label="Username" name="snapchat_link" value="{{$store->snapchat_link ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i data-feather='twitter'></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="tweeter" aria-label="Username" name="twitter_link" value="{{$store->twitter_link ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i data-feather='facebook'></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="facebook" aria-label="Username" name="facebook_user" value="{{$store->facebook_user ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="whatsapp" aria-label="Username" name="whatsapp_number" value="{{$store->whatsapp_number ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i class="fab fa-telegram"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="telegram" aria-label="Username" name="telegram_link" value="{{$store->telegram_link ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i class="fab fa-tiktok"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="tiktok" aria-label="Username" name="tiktok_link" value="{{$store->tiktok_link ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i data-feather='phone-call'></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="phone" aria-label="Username" name="phone_number" value="{{$store->phone_number ?? null }}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i class="fab fa-google-play"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="google play" aria-label="Username" name="google_play_link" value="{{$store->google_play_link ?? null}}" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 mb-2">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text bg-light" id="basic-addon1">
                                                        <i class="fab fa-apple"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="apple store" aria-label="Username" name="apple_store_link" value="{{$store->apple_store_link ?? null}}" aria-describedby="basic-addon1">
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


@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
@endsection

@section('scripts')
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>
@endsection