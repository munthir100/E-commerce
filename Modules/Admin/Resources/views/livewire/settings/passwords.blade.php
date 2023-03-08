<div>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <form wire:submit.prevent="updatePassword">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput">cuttent password</label>
                    <input type="text" class="form-control" id="basicInput" placeholder="Enter name" wire:model="password">
                    @error('password')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput1">passwords</label>
                    <input type="text" class="form-control" id="basicInput1" placeholder="Enter email" wire:model="new_password">
                    @error('new_password')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput2">passwords confirmation</label>
                    <input type="text" class="form-control" id="basicInput2" placeholder="Enter phone" wire:model="new_password_confirmation">
                    @error('new_password_confirmation')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>

            <div class="col-12" style="text-align: end;">
                <button class="btn btn-primary waves-effect waves-float waves-light" type="submit">
                    Save
                </button>
            </div>

        </div>
    </form>
</div>