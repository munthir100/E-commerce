<div>
    <form class="auth-register-form mt-2" method="POST" wire:submit.prevent="register">
        <div class="mb-1">
            <label for="register-username" class="form-label">name</label>
            <input type="text" class="form-control" wire:model="name" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus />
            @error('name') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-1">
            <label for="register-email" class="form-label">Email</label>
            <input type="text" class="form-control" wire:model="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
            @error('email') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-email" class="form-label">phone</label>
            <input type="number" class="form-control" wire:model="phone" placeholder="0123456789" aria-describedby="register-email" tabindex="2" />
            @error('phone') <small class="text-danger">{{$message}}</small> @enderror
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">Password</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            @error('password') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                <label class="form-check-label" for="register-privacy-policy">
                    I agree to <a href="#">privacy policy & terms</a>
                </label>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
    </form>
</div>