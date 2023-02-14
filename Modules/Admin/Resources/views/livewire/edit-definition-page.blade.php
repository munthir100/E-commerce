<div>
    <form wire:submit.prevent="save">
        <div class="col-12" style="text-align: end;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" wire:model="is_active">
                <label class="form-check-label" for="inlineCheckbox1">Publish in store</label>
            </div>
        </div>
        <div class="mb-1">
            <label class="form-label" for="title">title</label>
            <input wire:model="title" type="text" class="form-control" id="title" placeholder="title">
            @error('title') <small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <label class="form-label" for="description">description</label>
            <textarea class="form-control" wire:model="description" placeholder="description" id="description"></textarea>

            @error('description') <small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="col-12" style="text-align: end;">
            <button class="btn btn-primary waves-effect waves-float waves-light" type="submit">save</button>
        </div>
    </form>
</div>