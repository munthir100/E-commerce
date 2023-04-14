@extends('admin::Layouts.adminLayout')
@section('title',translate('Settings'))

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Profile')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Profile')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">

            <livewire:alerts.alert>

                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    <livewire:admin::settings.profile />
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('Change password')}}</h4>
                                </div>
                                <div class="card-body">
                                    <livewire:admin::settings.passwords />
                                </div>
                            </div>
                        </div>
                    </div>
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