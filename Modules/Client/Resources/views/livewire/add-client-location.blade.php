<div>
    <div id="clientLocation" class="mt-2">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="selectOldLocation" wire:ignore>
                    <div class="row custom-options-checkable g-1">
                        @if($locations)
                        @foreach($locations as $location)
                        <div class="col-md-3">
                            <input class="custom-option-item-check" type="radio" name="location_id" id="{{$location->id}}" wire:model.defer="location_id" value="{{$location->id}}">
                            <label class="custom-option-item text-center p-1" for="{{$location->id}}">
                                <i data-feather="{{ $location->address_type === 'House' ? 'home' : ($location->address_type === 'Work' ? 'briefcase' : 'map') }}"></i>
                                @if($location->address_type === 'House' || $location->address_type === 'Work')
                                <span class="custom-option-item-title h4 d-block">{{__($location->address_type)}}</span>
                                @else
                                <span class="custom-option-item-title h4 d-block">{{$location->address_type}}</span>
                                @endif
                                <small>{{$location->address}}</small>
                            </label>
                        </div>
                        @endforeach
                        @endif
                        <div class="col-md-3" data-bs-target="#addNewLocation" data-bs-toggle="modal">
                            <label class="custom-option-item text-center" style="padding: 2.8rem;">
                                <i data-feather="plus"></i>
                                <small>{{__("Add New Address")}}</small>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">{{__('save')}}</button>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="addNewLocation" tabindex="-1" aria-labelledby="addNewLocationTitle" aria-hidden="true" wire:ignore>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="newLocation">
                    <div id="map" style="height: 270px;"></div>
                    <form id="checkout-address" class="list-view" wire:submit.prevent="save">
                        <!-- Checkout Customer Address Left starts -->
                        <div class="card">
                            <div class="card-header flex-column align-items-start">
                                <h4 class="card-title">{{__("Add New Address")}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-2">
                                            <label class="form-label" cfor="checkout-name">{{__("Full Name:")}}</label>
                                            <input type="text" id="checkout-name" class="form-control" wire:model.defer="name" placeholder="{{__('name')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-2">
                                            <label class="form-label" cfor="checkout-number">{{__("Mobile Number:")}}</label>
                                            <input type="number" id="checkout-number" class="form-control" wire:model.defer="phone" placeholder="{{__('phone')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-2">
                                            <label class="form-label" cfor="checkout-city">{{__("Full Adress:")}}</label>
                                            <input type="text" id="checkout-city" class="form-control" wire:model.defer="address" placeholder="{{__('address')}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-2">
                                            <label class="form-label" cfor="add-type">{{__("Address Type:")}}</label>
                                            <select class="form-select" id="add-type" wire:model.defer="address_type">
                                                <option value="">{{__("Select address type")}}</option>
                                                <option value="home">{{__("House")}}</option>
                                                <option value="work">{{__("Work")}}</option>
                                                <option value="other">{{__("Other Address")}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" id="latitude" name="latitude" wire:model.defer="latitude">
                                    <input type="hidden" id="longitude" name="longitude" wire:model.defer="longitude">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-next delivery-address">{{__("Save And Deliver Here")}}</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Checkout Customer Address Left ends -->


                    </form>
                </div>
            </div>
        </div>
    </div>


</div>