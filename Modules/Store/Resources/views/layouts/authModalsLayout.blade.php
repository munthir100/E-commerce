@yield('modals')


<div class="modal fade" id="forgetPassword" tabindex="-1" aria-labelledby="forgetPasswordTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title mb-1">{{translate('Forgot Password? 🔒')}}</h4>
                    <p class="card-text mb-2">{{translate('Enter your email and well send you instructions to reset your
                        password')}}</p>
                    <livewire:client::auth.client-forget-password-form />


                    <p class="text-center mt-2">
                        <a id="nextStepAuth" onclick="
                        $('#forgetPassword').modal('hide');
                        $('#userLoginModal').modal('show');
                        "> <i data-feather="chevron-left"></i> {{translate('Back to login')}} </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="userResetPasswordModal" tabindex="-1" aria-labelledby="userResetPasswordModalTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <h3 class="text-align-center">{{translate('Reset password')}}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Register basic -->
            <div class="card mb-0">
                <div class="card-body">

                    <livewire:client::auth.client-reset-password-form :store="$store"/>

                    <p class="text-center mt-2">
                        <span>{{translate('Already have an account?')}}</span>
                        <a href="#"
                           onclick="$('#userRegisterModal').modal('hide'); $('#userLoginModal').modal('show');">
                            <span>{{translate('Sign in instead')}}</span>
                        </a>
                    </p>

                </div>
            </div>
            <!-- /Register basic -->
        </div>
    </div>
</div>

<div class="modal fade" id="userRegisterModal" tabindex="-1" aria-labelledby="userRegisterModalTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <h3 class="text-align-center">{{translate('register')}}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Register basic -->
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title mb-1">{{translate('Adventure starts here 🚀')}}</h4>
                    <p class="card-text mb-2">{{translate('Make your app management easy and fun!')}}</p>

                    <livewire:acl::client-register :storeLink="$storeLink"/>

                    <p class="text-center mt-2">
                        <span>{{translate('Already have an account?')}}</span>
                        <a href="#"
                           onclick="$('#userRegisterModal').modal('hide'); $('#userLoginModal').modal('show');">
                            <span>{{translate('Sign in instead')}}</span>
                        </a>
                    </p>

                </div>
            </div>
            <!-- /Register basic -->
        </div>
    </div>
</div>

<div class="modal fade" id="userLoginModal" tabindex="-1" aria-labelledby="userLoginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <h3 class="text-align-center">{{translate('Login')}}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Login basic -->
            <div class="card mb-0">
                <div class="card-body">


                    <h4 class="card-title mb-1">{{translate('Welcome')}}</h4>
                    <p class="card-text mb-2">{{translate('Please sign-in to your account and start the adventure')}}</p>


                    <livewire:acl::client-login :storeLink="$storeLink"/>
                    <p class="text-center mt-2">
                        <span>{{translate('New on our platform?')}}</span>
                        <a href="#" onclick="$('#userLoginModal').modal('hide');$('#userRegisterModal').modal('show');">
                            <span>{{translate('Create an account')}}</span>
                        </a>
                    </p>


                </div>
            </div>
            <!-- /Login basic -->
        </div>
    </div>
</div>