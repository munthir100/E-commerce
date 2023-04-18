<div>
    <form method="post" wire:submit.prevent="save">

        <div class="modal-body">

            <div class="mb-1">
                <label class="form-label" for="basicInput">Establishment Tax Number</label>
                <input type="text" wire:model.defer="number" class="form-control" id="basicInput" placeholder="establishment tax number">
            </div>
            @error('number')<small class="text-danger">{{$message}}</small>@enderror




        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>