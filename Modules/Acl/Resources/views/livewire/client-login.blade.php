<div>
    <form class="auth-login-form mt-2" method="POST" wire:submit.prevent="login">
        <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input type="text" class="form-control" wire:model="username" placeholder="email or phone number" autofocus />
            @error('username')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="login-password">Password</label>
                <a href="#">
                    <small id="forgetPassword" onclick="$('#userLoginModal').modal('hide');$('#forgetPassword').modal('show');">Forgot Password?
                    </small>
                </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            @error('password')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
    </form>
</div>