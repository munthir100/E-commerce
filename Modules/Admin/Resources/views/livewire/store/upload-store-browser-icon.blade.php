<div>
    <form wire:submit.prevent="save">
        <div class="text-center">
            <input type="file" wire:model="browser_icon" id="browser_icon" hidden />
            <label for="browser_icon">
                <div class="profile-img">
                    <img src="{{ $browser_icon ? $browser_icon->temporaryUrl() : ($store->browser_icon ? asset('storage/' . $store->browser_icon) : asset('app-assets/images/custom/image-icon.png')) }}" class="rounded img-fluid" alt="Card image" style="width: 212px;height:212px;" wire:loading.class.add="opacity-25">

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