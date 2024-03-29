<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="{{('Restone')}} admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, {{('Restone')}} admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Reset Password Page - {{('Restone')}} - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="blank-page">
<!-- BEGIN: Content-->
@livewireScripts
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Reset Password basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="#" class="brand-logo">
                            <img class="top-logo" src="{{asset('frontend/assets/img/logo.png')}}" alt="logo" width="50" height="50"/>

                                <h2 class="brand-text text-primary ms-1">{{('Restone')}}</h2>
                            </a>

                            <h4 class="card-title mb-1">Reset Password 🔒</h4>
                            <p class="card-text mb-2">Your new password must be different from previously used
                                passwords</p>
                            <livewire:admin::auth.reset-passwordform :token="$token" :email="$email"/>


                            <p class="text-center mt-2">
                                <a href="{{route('admin.login')}}"> <i data-feather="chevron-left"></i> Back to login </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Reset Password basic -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../app-assets/js/core/app-menu.js"></script>
<script src="../../app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../app-assets/js/scripts/pages/auth-reset-password.js"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
