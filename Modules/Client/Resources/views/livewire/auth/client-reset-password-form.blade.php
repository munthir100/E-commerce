<div>
    <form class="auth-register-form mt-2" method="POST" wire:submit.prevent="clientResetPassword">
        <div class="mb-1">
            <label class="form-label">{{__('Token Code')}}</label>
            <input type="number" class="form-control" wire:model="token" placeholder="{{__('Token Code')}}" autofocus/>
            @error('token') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">{{__('New Password')}}</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model="new_password"
                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                       aria-describedby="register-password" tabindex="3"/>
                <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
            </div>
            @error('new_password') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">{{__('Confirm Password')}}</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model="new_password_confirmation"
                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                       aria-describedby="register-password" tabindex="3"/>
                <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
            </div>
            @error('new_password_confirmation') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <button class="btn btn-primary w-100" tabindex="5">{{__('Reset')}}</button>
    </form>
</div>
