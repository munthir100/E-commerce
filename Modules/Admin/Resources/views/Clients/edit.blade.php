@extends('admin::Layouts.adminLayout')
@section('title','My store | Clients')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{translate('Edit Client')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{translate('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{translate('Edit Client')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                {{translate('Persional information')}}
                            </h4>
                        </div>
                        <div class="card-body">

                            <livewire:admin::clients.update-client-livewire :client="$client" />

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                {{translate('change client password')}}
                            </h4>
                        </div>
                        <div class="card-body">

                            <livewire:admin::clients.update-client-password-livewire :client="$client"/>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('styles')
@endsection
@section('scripts')
@endsection
