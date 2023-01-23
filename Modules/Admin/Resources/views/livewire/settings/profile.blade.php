<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput">Name</label>
                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" wire:model="name">
                    @error('name')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput1">Email</label>
                    <input type="text" class="form-control" id="basicInput1" placeholder="Enter email" wire:model="email">
                    @error('email')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput2">Phone</label>
                    <input type="text" class="form-control" id="basicInput2" placeholder="Enter phone" wire:model="phone">
                    @error('phone')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>

            <div class="col-12" style="text-align: end;">
                <button whire:click="save" class="btn btn-primary waves-effect waves-float waves-light">
                    Save
                </button>
            </div>

        </div>
    </form>
</div>