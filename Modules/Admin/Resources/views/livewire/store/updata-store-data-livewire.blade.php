<div>
    <form class="form" wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="first-name-column">{{translate('Store Name')}}</label>
                    <input type="text" id="first-name-column" class="form-control" placeholder="{{translate('Store Name')}}" wire:model="store_name" />
                    @error('store_name')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="last-name-column">{{translate('Store Link')}}</label>
                    <input type="text" id="last-name-column" class="form-control" placeholder="{{translate('Store Link')}}" wire:model="store_link" />
                    @error('store_link')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-12" style="text-align:end;">
                <button type="submit" class="btn btn-primary me-1">{{(translate('Save'))}}</button>
            </div>
        </div>
    </form>
</div>