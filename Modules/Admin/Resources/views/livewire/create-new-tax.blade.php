<div>
    <form method="post" wire:submit.prevent="save">

        <div class="modal-body">
            <div class="mb-1">
                <label class="form-label" for="selectLarge">Select country</label>
                <select class="form-select form-select-lg" id="selectLarge" wire:model="country_id">
                    <option>Select country</option>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                @error('country_id')<small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="input-group input-group-merge">
                <input type="number" wire:model="vat_value" class="form-control" placeholder="% vat value" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">%</span>
            </div>
            @error('vat_value')<small class="text-danger">{{$message}}</small>@enderror




        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>