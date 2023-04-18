<div>
    <form wire:submit.prevent="save">
        <div class="col-12" style="text-align: end;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" wire:model.defer="is_active">
                <label class="form-check-label" for="inlineCheckbox1">Publish in store</label>
            </div>
        </div>

        <div class="mb-1">
            <label class="form-label" for="disabledSelect">Tax Number</label>
            <input wire:model.defer="number" type="text" class="form-control" id="basicInput" placeholder="Enter title">
            @error('number')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="col-12" style="text-align: end;">
            <button class="btn btn-primary" type="submit">save</button>
        </div>
    </form>
</div>