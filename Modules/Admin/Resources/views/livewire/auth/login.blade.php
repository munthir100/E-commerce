<div>
    <form wire:submit.prevent="save">
        @csrf
        <div class="mb-1">
            <label class="form-label" for="username">{{__('Email/Phone')}}</label>
            <input class="form-control" id="username" type="text" wire:model.defer="username" placeholder="{{__('Email/Phone')}}" aria-describedby="username" autofocus="" tabindex="1" />
            @error('username') <small class="text-danger">{{translate($message)}}</small>@enderror
        </div>
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">{{__('Password')}}</label><a href="{{route('admin.forgetPassword')}}"><small>{{__('Forgot Password?')}}</small></a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input class="form-control form-control-merge" id="password" type="password" wire:model.defer="password" placeholder="············" aria-describedby="password" tabindex="2" />
                <span class="input-group-text cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
            </div>
            @error('password') <small class="text-danger">{{translate($message)}}</small>@enderror
        </div>
        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                <label class="form-check-label" for="remember-me"> {{__('Remember Me')}}</label>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="4" type="submit">{{__('Sign in')}}</button>
    </form>
</div>