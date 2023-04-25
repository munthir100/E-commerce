<div wire:ignore>
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
                            <input type="text" id="checkout-name" class="form-control" wire:model.defer="name" readonly placeholder="John Doe">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-2">
                            <label class="form-label" cfor="checkout-number">{{__("Mobile Number:")}}</label>
                            <input type="number" id="checkout-number" class="form-control" wire:model.defer="phone" readonly placeholder="0123456789">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-2">
                            <label class="form-label" cfor="checkout-city">{{__("Full Adress:")}}</label>
                            <input type="text" id="checkout-city" class="form-control" wire:model.defer="address" placeholder="Tokyo">
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