<div>
    <form class="auth-register-form mt-2" method="POST" wire:submit.prevent="save">
        <div class="row">
            <div class="col-lg-6 mb-1">
                <label class="form-label" for="name">name</label>
                <input class="form-control" id="name" type="text" wire:model="name" placeholder="johndoe" aria-describedby="name" autofocus="" tabindex="1" />
                @error('name') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-lg-6 mb-1">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" type="text" wire:model="email" placeholder="john@example.com" aria-describedby="email" tabindex="2" />
                @error('email') <small class="text-danger">{{$message}}</small>@enderror
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-1">
                <label class="form-label" for="phone">phone</label>
                <input class="form-control" id="phone" type="text" wire:model="phone" placeholder="+96612345678" aria-describedby="phone" autofocus="" tabindex="1" />
                @error('phone') <small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-lg-6 mb-1">
                <label class="form-label" for="store_link">store link</label>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="store_link" type="text" wire:model="store_link" placeholder="store name" aria-describedby="store_link" tabindex="3" />
                </div>
                @error('store_link') <small class="text-danger">{{$message}}</small>@enderror
            </div>

        </div>



        <div class="row">
            <div class="col-lg-6 mb-1">
                <label class="form-label" for="store_name">store name</label>
                <input class="form-control" id="store_name" type="text" wire:model="store_name" placeholder="johndoe" aria-describedby="store_name" autofocus="" tabindex="1" />
                @error('store_name') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-lg-6 mb-1">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="password" type="password" wire:model="password" placeholder="············" aria-describedby="password" tabindex="3" /><span class="input-group-text cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </div>
                @error('password') <small class="text-danger">{{$message}}</small>@enderror
            </div>
        </div>

        <div class="row">
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                    <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy & terms</a></label>
                </div>
            </div>
        </div>




        <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
    </form>
</div>