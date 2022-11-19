<div>
    <form class="auth-login-form mt-2" method="POST" wire:submit.prevent="save">
        <div class="mb-1">
            <label class="form-label" for="username">Email/Phone</label>
            <input class="form-control" id="username" type="text" wire:model="username" placeholder="email or phone" aria-describedby="username" autofocus="" tabindex="1" />
            @error('username') <small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label><a href="auth-forgot-password-cover.html"><small>Forgot Password?</small></a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input class="form-control form-control-merge" id="password" type="password" wire:model="password" placeholder="············" aria-describedby="password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            @error('password') <small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                <label class="form-check-label" for="remember-me"> Remember Me</label>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="4" type="submit">Sign in</button>
    </form>
</div>