@yield('modals')

<div class="modal fade" id="forgetPassword" tabindex="-1" aria-labelledby="forgetPasswordTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title mb-1">Forgot Password? 🔒</h4>
                    <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>

                    <form class="auth-forgot-password-form mt-2" action="auth-reset-password-basic.html" method="POST">
                        <div class="mb-1">
                            <label for="forgot-password-email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="forgot-password-email" name="forgot-password-email" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" autofocus />
                        </div>
                        <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
                    </form>

                    <p class="text-center mt-2">
                        <a id="nextStepAuth" onclick="
                        $('#forgetPassword').modal('hide');
                        $('#userLoginModal').modal('show');
                        "> <i data-feather="chevron-left"></i> Back to login </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="userRegisterModal" tabindex="-1" aria-labelledby="userRegisterModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <h3 class="text-align-center">register</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Register basic -->
            <div class="card mb-0">
                <div class="card-body">

                    <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
                    <p class="card-text mb-2">Make your app management easy and fun!</p>


                    <livewire:acl::client-register :storeLink="$storeLink" />
                    <p class="text-center mt-2">
                        <span>Already have an account?</span>
                        <a href="#" onclick="$('#userRegisterModal').modal('hide'); $('#userLoginModal').modal('show');">
                            <span>Sign in instead</span>
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
                <h3 class="text-align-center">Login</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Login basic -->
            <div class="card mb-0">
                <div class="card-body">


                    <h4 class="card-title mb-1">Welcome to Vuexy! 👋</h4>
                    <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>


                    <livewire:acl::client-login />
                    <p class="text-center mt-2">
                        <span>New on our platform?</span>
                        <a href="#" onclick="$('#userLoginModal').modal('hide');$('#userRegisterModal').modal('show');">
                            <span>Create an account</span>
                        </a>
                    </p>



                </div>
            </div>
            <!-- /Login basic -->
        </div>
    </div>
</div>



<div class="modal fade" id="forgetPassword" tabindex="-1" aria-labelledby="forgetPasswordTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-header bg-transparent">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-content">
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title mb-1">Forgot Password? 🔒</h4>
                    <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>

                    <form class="auth-forgot-password-form mt-2" action="auth-reset-password-basic.html" method="POST">
                        <div class="mb-1">
                            <label for="forgot-password-email1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="forgot-password-email1" name="forgot-password-email1" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" autofocus />
                        </div>
                        <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
                    </form>

                    <p class="text-center mt-2">
                        <a id="nextStepAuth" onclick="
                        $('#forgetPassword').modal('hide');
                        $('#userLoginModal').modal('show');
                        "> <i data-feather="chevron-left"></i> Back to login </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>