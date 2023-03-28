<div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-1">
                    <label class="form-label" for="basicInput">{{translate('Name')}}</label>
                    <input type="text" class="form-control" id="basicInput" placeholder="{{translate('Enter name')}}" wire:model="name">
                    @error('name')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput1">{{translate('Email')}}</label>
                    <input type="text" class="form-control" id="basicInput1" placeholder="{{translate('Enter email')}}" wire:model="email">
                    @error('email')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput2">{{translate('Phone')}}</label>
                    <input type="text" class="form-control" id="basicInput2" placeholder="{{translate('Enter phone')}}" wire:model="phone">
                    @error('phone')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>

            <div class="col-12" style="text-align: end;">
                <button class="btn btn-primary waves-effect waves-float waves-light" type="submit">
                    {{translate('Save')}}
                </button>
            </div>

        </div>
    </form>
</div>