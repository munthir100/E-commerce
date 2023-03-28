<div>
    <form class="form" method="POST" wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('instagram')}}" aria-label="Username" wire:model="instagram_link" value="{{$store->instagram_link ?? null}}" aria-describedby="basic-addon1">
                </div>
                @error('instagram_link') <small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('snapchat')}}" aria-label="Username" wire:model="snapchat_link" value="{{$store->snapchat_link ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('tweeter')}}" aria-label="Username" wire:model="twitter_link" value="{{$store->twitter_link ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('facebook')}}" aria-label="Username" wire:model="facebook_user" value="{{$store->facebook_user ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <i class="fab fa-whatsapp"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('whatsapp')}}" aria-label="Username" wire:model="whatsapp_number" value="{{$store->whatsapp_number ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <i class="fab fa-telegram"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('telegram')}}" aria-label="Username" wire:model="telegram_link" value="{{$store->telegram_link ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <i class="fab fa-tiktok"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('tiktok')}}" aria-label="Username" wire:model="tiktok_link" value="{{$store->tiktok_link ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                            <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('phone number')}}" aria-label="Username" wire:model="phone_number" value="{{$store->phone_number ?? null }}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <i class="fab fa-google-play"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('google play')}}" aria-label="Username" wire:model="google_play_link" value="{{$store->google_play_link ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-light" id="basic-addon1">
                        <i class="fab fa-apple"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="{{translate('apple store')}}" aria-label="Username" wire:model="apple_store_link" value="{{$store->apple_store_link ?? null}}" aria-describedby="basic-addon1">
                </div>
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">{{translate('Save')}}</button>
            </div>
        </div>
    </form>

</div>