<div>
    <form id="checkout-address" class="list-view" wire:submit.prevent="save">
        <!-- Checkout Customer Address Left starts -->
        <div class="card">
            <div class="card-header flex-column align-items-start">
                <h4 class="card-title">Add New Address</h4>
                <p class="card-text text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-2">
                            <label class="form-label" cfor="checkout-name">Full Name:</label>
                            <input type="text" id="checkout-name" class="form-control" wire:model.lazy="name" readonly placeholder="John Doe">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-2">
                            <label class="form-label" cfor="checkout-number">Mobile Number:</label>
                            <input type="number" id="checkout-number" class="form-control" wire:model.lazy="phone" readonly placeholder="0123456789">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-2">
                            <label class="form-label" cfor="checkout-city">Full Adress:</label>
                            <input type="text" id="checkout-city" class="form-control" wire:model.lazy="address" placeholder="Tokyo">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="mb-2">
                            <label class="form-label" cfor="add-type">Address Type:</label>
                            <select class="form-select" id="add-type" wire:model.lazy="address_type">
                                <option value="">Select address type</option>
                                <option value="home">Home</option>
                                <option value="work">Work</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="latitude" name="latitude" wire:model="latitude">
                    <input type="hidden" id="longitude" name="longitude" wire:model="longitude">
                    <div class="col-12">
                        <button class="btn btn-primary btn-next delivery-address">Save And Deliver Here</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Checkout Customer Address Left ends -->


    </form>
</div>