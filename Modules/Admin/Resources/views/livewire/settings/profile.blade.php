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
                    <label class="form-label" for="basicInput">{{__('Name')}}</label>
                    <input type="text" class="form-control" id="basicInput" placeholder="{{__('Enter name')}}" wire:model.defer="name">
                    @error('name')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput1">{{__('Email')}}</label>
                    <input type="text" class="form-control" id="basicInput1" placeholder="{{__('Enter email')}}" wire:model.defer="email">
                    @error('email')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput2">{{__('Phone')}}</label>
                    <input type="text" class="form-control" id="basicInput2" placeholder="{{__('Enter phone')}}" wire:model.defer="phone">
                    @error('phone')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>

            <div class="col-12" style="text-align: end;">
                <button class="btn btn-primary waves-effect waves-float waves-light" type="submit">
                    {{__('Save')}}
                </button>
            </div>

        </div>
    </form>
</div>