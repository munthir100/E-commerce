<div>
    <form class="form" wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="first-name-column">{{__('Store Name')}}</label>
                    <input type="text" id="first-name-column" class="form-control" placeholder="{{__('Store Name')}}" wire:model.defer="store_name" />
                    @error('store_name')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="last-name-column">{{__('Store Link')}}</label>
                    <input type="text" id="last-name-column" class="form-control" placeholder="{{__('Store Link')}}" wire:model.defer="store_link" />
                    @error('store_link')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-12" style="text-align:end;">
                <button type="submit" class="btn btn-primary me-1">{{(translate('Save'))}}</button>
            </div>
        </div>
    </form>
</div>