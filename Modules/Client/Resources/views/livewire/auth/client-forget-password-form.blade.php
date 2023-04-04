<div>
    <form onsubmit="event.preventDefault(); setTimeout(function() { $('#forgetPassword').modal('hide'); $('#userResetPasswordModal').modal('show'); }, 1000);" class="auth-forgot-password-form mt-2" wire:submit.prevent="resetClientPassword">
        <div class="mb-1">
            <label for="forgot-password-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="forgot-password-email"
                   wire:model="email" placeholder="example@email.com"
                   aria-describedby="forgot-password-email" tabindex="1" autofocus/>
            @error('email') <span class="text-danger"> {{$message}} </span>@enderror
        </div>
        <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
    </form>
</div>
