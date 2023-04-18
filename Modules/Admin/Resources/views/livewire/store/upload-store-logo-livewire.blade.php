<div>
    <form wire:submit.prevent="save">
        <div class="text-center">
            <input type="file" wire:model.defer="logo" id="logo" hidden />
            <label for="logo">
                <div class="profile-img">
                    <img src="{{ $logo ? $logo->temporaryUrl() : ($store->logo ? asset('storage/' . $store->logo) : asset('app-assets/images/custom/image-icon.png')) }}" class="rounded img-fluid" alt="Card image" style="width: 212px;height:212px;" wire:loading.class.add="opacity-25">

                </div>
            </label>
            <br>
            <p class="text-danger">{{ __('width: 512px , height: 512px , max size of image : 5MB , Jpg , JPEG , PNG') }}</p>
        </div>
        <button type="submit" class="btn btn-primary">
            <span>{{__('Save')}}</span>
        </button>
    </form>
</div>