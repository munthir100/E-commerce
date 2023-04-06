<div>
    <form id="editUserForm" class="row gy-1 pt-75" wire:submit.prevent="save" novalidate="novalidate">
        <input type="hidden" wire:model="created_by">
        <div class="col-12 col-md-6">
            <label class="form-label" for="name"> {{__('Name')}}</label>
            <input type="text" id="name" wire:model="name" class="form-control" placeholder="{{__('Name')}}" data-msg="{{__('Please enter your first name')}}">
            @error('name') <small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="email">{{__('Email')}}</label>
            <input type="text" id="email" wire:model="email" class="form-control" placeholder="{{__('Email')}}" data-msg="{{__('Please enter your last name')}}">
            @error('email') <small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="Phone">{{__('Phone')}}</label>
            <input type="number" id="Phone" wire:model="phone" class="form-control" placeholder="{{__('Phone')}}">
            @error('phone') <small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="birth_date">{{__('birth date')}}</label>
            <input type="date" id="birth_date" wire:model="birth_date" class="form-control">
            @error('birth_date') <small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="City">{{__('City')}}</label>
            <select class="form-select" id="basicSelect" wire:model="city_id">
                <option>Select city</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
            @error('city_id') <small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="gender">{{__('Gender')}}</label>
            <select class="form-select" id="basicSelect" wire:model="gender">
                <option value="" selected>{{__('select gender')}}</option>
                <option value="male">{{__('male')}}</option>
                <option value="female">{{__('female')}}</option>
            </select>
            @error('gender') <small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <label class="form-label" for="description">{{__('Description')}}</label>
            <textarea class="form-control" id="description" wire:model="description" rows="3" placeholder="{{__('Description')}}"></textarea>
            @error('description') <small class="text-danger">{{$message}}</small>@enderror
        </div>


        <div class="col-12 text-center mt-2 pt-50">
            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">{{__('Submit')}}</button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">
                {{__('Discard')}}
            </button>
        </div>
    </form>
</div>