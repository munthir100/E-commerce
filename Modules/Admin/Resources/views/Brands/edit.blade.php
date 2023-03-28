@extends('admin::Layouts.adminLayout')
@section('title','My store | Products')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{translate('Edit Brand')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{translate('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{translate('Edit Brand')}}
                                </li>
                                <li class="breadcrumb-item">{{$brand->name}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <section class="bootstrap-select">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                    <livewire:admin::brands.update-brand-livewire :categories="$categories" :brand="$brand" />
                                    </div>
                                </div>
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

@endsection

@section('scripts')

@endsection
