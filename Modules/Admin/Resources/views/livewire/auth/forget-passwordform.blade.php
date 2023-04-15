<div>
    <form class="auth-forgot-password-form mt-2" wire:submit.prevent="save">
        <div class="mb-1">
            <label for="forgot-password-email" class="form-label">Email</label>
            <input type="text" class="form-control" id="forgot-password-email" wire:model="email"
                   placeholder="name@email.com" aria-describedby="forgot-password-email" tabindex="1" autofocus/>
            @error('email') <span class="error"> {{__($message)}} </span> @enderror
        </div>
        <button class="btn btn-primary w-100" tabindex="2">{{__('Send reset link')}}</button>
    </form>
</div>
