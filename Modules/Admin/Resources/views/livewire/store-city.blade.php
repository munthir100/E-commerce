<div>
    <!-- form -->
    <form id="storeAddressValidation" class="row" wire:submit.prevent="save">
        <div class="col-md-12 mb-1">
            <label class="form-label" for="selectLarge">{{translate('Select city')}}</label>
            <select class="form-select form-select-lg" id="select2-basic" wire:model="city_id">
                <option>{{translate('Select city')}}</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
            @error('city_id')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-1">{{translate('Submit')}}</button>
            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                {{translate('Cancel')}}
            </button>
        </div>
    </form>
</div>