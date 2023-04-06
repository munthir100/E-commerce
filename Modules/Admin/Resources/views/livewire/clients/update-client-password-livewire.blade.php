<div>
    <form id="editUserForm" class="row gy-1 pt-75" wire:submit.prevent="save" novalidate="novalidate">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="input-group form-password-toggle">
                    <input type="password" wire:model.lazy="password" class="form-control" id="basic-default-password" placeholder="{{__('Password')}}" aria-describedby="basic-default-password">
                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-small-4">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></span>
                </div>
                @error('password') <small class="text-danger"> {{$message}} </small> @enderror
            </div>


            <div class="col-md-6 col-12">
                <div class="input-group form-password-toggle">
                    <input wire:model.lazy="password_confirmation" type="password" class="form-control" id="basic-default-password" placeholder="{{__('Confirm Password')}}" aria-describedby="basic-default-password">
                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-small-4">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></span>
                </div>
                @error('password_confirmation') <small class="text-danger"> {{$message}} </small> @enderror
            </div>

        </div>









        <div class="col-12 text-end mt-2 pt-50">
            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">{{__('Submit')}}</button>
        </div>
    </form>
</div>