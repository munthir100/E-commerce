<div>
    <form class="auth-register-form mt-2" method="POST" wire:submit.prevent="register">
        <div class="mb-1">
            <label for="register-username" class="form-label">{{__('Name')}}</label>
            <input type="text" class="form-control" wire:model.defer="name" placeholder="{{__('Name')}}" aria-describedby="register-username" tabindex="1" autofocus />
            @error('name') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-1">
            <label for="register-email" class="form-label">{{__('Email')}}</label>
            <input type="text" class="form-control" wire:model.defer="email" placeholder="{{__('Email')}}" aria-describedby="register-email" tabindex="2" />
            @error('email') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-email" class="form-label">{{__('phone')}}</label>
            <input type="number" class="form-control" wire:model.defer="phone" placeholder="{{__('phone')}}" aria-describedby="register-email" tabindex="2" />
            @error('phone') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">{{__('Password')}}</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model.defer="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
            </div>
            @error('password') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                <label class="form-check-label" for="register-privacy-policy">
                    {{__('I agree to')}} <a href="#">{{__('privacy policy & terms')}}</a>
                </label>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="5">{{__('Sign up')}}</button>
    </form>
</div>