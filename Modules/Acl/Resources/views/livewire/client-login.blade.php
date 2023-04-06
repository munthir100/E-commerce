<div>
    <form class="auth-login-form mt-2" method="POST" wire:submit.prevent="login">
        <div class="mb-1">
            <label for="login-email" class="form-label">{{__('Username')}}</label>
            <input type="text" class="form-control" wire:model="username" placeholder="{{__('email or phone number')}}" autofocus />
            @error('username')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="login-password">{{__('Password')}}</label>
                <a href="#">
                    <small id="forgetPassword" onclick="$('#userLoginModal').modal('hide');$('#forgetPassword').modal('show');">{{__('Forgot Password?')}}
                    </small>
                </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                <span class="input-group-text cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
            </div>
            @error('password')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <button class="btn btn-primary w-100" tabindex="4">{{__('Sign in')}}</button>
    </form>
</div>