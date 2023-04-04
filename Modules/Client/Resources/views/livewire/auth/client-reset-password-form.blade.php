<div>
    <form class="auth-register-form mt-2" method="POST" wire:submit.prevent="clientResetPassword">
        <div class="mb-1">
            <label for="register-username" class="form-label">Token Code</label>
            <input type="text" class="form-control" wire:model="token" placeholder="johndoe"
                   aria-describedby="register-username" tabindex="1" autofocus/>
            @error('token') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">New Password</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model="new_password"
                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                       aria-describedby="register-password" tabindex="3"/>
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            @error('new_password') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">Confirm Password</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model="new_password_confirmation"
                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                       aria-describedby="register-password" tabindex="3"/>
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            @error('new_password_confirmation') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
    </form>
</div>
