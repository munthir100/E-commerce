<div>
    <form class="auth-reset-password-form mt-2" wire:submit.prevent="resetPassword">
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="reset-password-new">New Password</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="reset-password-new" wire:model="new_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="reset-password-new" tabindex="1" autofocus />
                <span class="input-group-text cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
                @error('new_password') <span class="error"> {{$message}} </span> @enderror

            </div>
        </div>
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="reset-password-confirm">Confirm Password</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="reset-password-confirm" wire:model="new_password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="reset-password-confirm" tabindex="2" />
                <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                @error('new_password_confirmation') <span class="error"> {{$message}} </span> @enderror
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="3">Set New Password</button>
    </form>
</div>