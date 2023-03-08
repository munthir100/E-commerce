<div>
    <form class="form" wire:submit.prevent="save">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-1">
                    <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="store_desc" rows="3" placeholder="Description">{{$store->store_desc ?? null}}</textarea>
                    @error('store_desc')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-2">

                <div class="input-group" data-bs-toggle="modal" data-bs-target="#storeAddress">
                    <button class="btn btn-light" type="button">
                        <i data-feather='map-pin'></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Button on both side" wire:model="city_id" aria-label="Amount">
                    <button class="btn btn-primary" type="button">Select</button>
                </div>
            </div>
        </div>
        <div class="col-12" style="text-align: end;">
            <button type="submit" class="btn btn-primary me-1">Save</button>
        </div>
    </form>

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
                    <livewire:admin::store-city />
                </div>
            </div>
        </div>
    </div>
    <!--/ add new card modal  -->

</div>