@extends('client::layouts.clientLayout')
@section('title','soon')
@section('content')
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{__('Shipping Addresses')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Shipping Addresses')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">
            <livewire:alerts.alert>
                <div class="row" id="basic-table">
                    <div id="clientLocation" class="mt-2">
                        <div class="card">
                            <div class="card-body">

                                <div class="row custom-options-checkable g-1">
                                    @if($locations)
                                    @foreach($locations as $location)
                                    <div class="col-md-3" id="row-{{$location->id}}">
                                        <label class="custom-option-item text-center p-1" for="{{$location->id}}">
                                            <i data-feather="{{ $location->address_type === 'House' ? 'home' : ($location->address_type === 'Work' ? 'briefcase' : 'map') }}"></i>
                                            @if($location->address_type === 'House' || $location->address_type === 'Work')
                                            <span class="custom-option-item-title h4 d-block">{{__($location->address_type)}}</span>
                                            @else
                                            <span class="custom-option-item-title h4 d-block">{{$location->address_type}}</span>
                                            @endif
                                            <small>{{$location->address}}</small>
                                            <br>
                                            <span>
                                                <livewire:client::delete-client-shipping-address :store="$store" :location="$location" />
                                            </span>
                                        </label>
                                    </div>
                                    @endforeach
                                    @endif
                                    <div class="col-md-3" data-bs-target="#addNewLocation" data-bs-toggle="modal">
                                        <label class="custom-option-item text-center" style="padding: 4rem;">
                                            <i data-feather="plus"></i>
                                            <small>{{__("Add New Address")}}</small>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </div>
</div>

<div class="modal fade" id="addNewLocation" tabindex="-1" aria-labelledby="addNewLocationTitle" aria-hidden="true" wire:ignore>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div id="newLocation">

                <livewire:client::add-shipping-address :store="$store" />
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/maps/map-leaflet.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/maps/leaflet.min.css')}}">
@endsection
@section('scripts')

<script src="{{asset('app-assets/vendors/js/maps/leaflet.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/maps/map-leaflet.js')}}"></script>
@endsection