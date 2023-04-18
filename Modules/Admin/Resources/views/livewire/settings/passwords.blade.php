<div>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <form wire:submit.prevent="updatePassword">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-1">
                    <label class="form-label" for="basicInput">{{__('Current Password')}}</label>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password" type="password" wire:model.defer="password" placeholder="············" aria-describedby="password" tabindex="2" />
                        <span class="input-group-text cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </span>
                    </div>
                    @error('password')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput1">{{__('New Password')}}</label>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password" type="password" wire:model.defer="new_password" placeholder="············" aria-describedby="password" tabindex="2" />
                        <span class="input-group-text cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </span>
                    </div>
                    @error('new_password')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label" for="basicInput2">{{__('New Password Confirmation')}}</label>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password" type="password" wire:model.defer="new_password_confirmation" placeholder="············" aria-describedby="password" tabindex="2" />
                        <span class="input-group-text cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </span>
                    </div>
                    @error('new_password_confirmation')<small class="text-danger">{{$message}}</small>@enderror
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