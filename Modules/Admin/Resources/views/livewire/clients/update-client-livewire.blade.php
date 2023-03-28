<div>
    <form id="editUserForm" class="row gy-1 pt-75" wire:submit.prevent="save" novalidate="novalidate">
        <div class="col-12 col-md-6">
            <label class="form-label" for="name"> {{translate('Name')}}</label>
            <input type="text" id="name" wire:model="name" class="form-control" placeholder="{{translate('name')}}">
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="email">{{translate('Email')}}</label>
            <input type="text" id="email" wire:model="email" class="form-control" placeholder="{{translate('email')}}">
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="Phone">{{translate('Phone')}}</label>
            <input type="text" id="Phone" wire:model="phone" class="form-control">
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="birth_date">{{translate('birth date')}}</label>
            <input type="date" id="birth_date" wire:model="birth_date" class="form-control">
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="City">{{translate('City')}}</label>
            <select class="form-select" id="basicSelect" wire:model="city_id">
                <option>{{translate('Select city')}}</option>
            </select>
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label" for="gender">{{translate('Gender')}}</label>
            <select class="form-select" id="basicSelect" wire:model="gender">
                <option value="male">{{translate('male')}}</option>
                <option value="female">{{translate('female')}}</option>
            </select>
        </div>

        <div class="mb-1">
            <label class="form-label" for="description">{{translate('Description')}}</label>
            <textarea class="form-control" id="description" wire:model="description" rows="3" placeholder="{{translate('Description')}}"></textarea>
        </div>


        <div class="col-12 text-end mt-2 pt-50">
            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">{{translate('Submit')}}</button>
        </div>
    </form>
</div>