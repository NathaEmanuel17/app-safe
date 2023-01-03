<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Tela de Login - Tuba</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/vendors.min.css');?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-extended.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/colors.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/components.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/dark-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/bordered-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/semi-dark-layout.css');?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/css/core/menu/menu-types/vertical-menu.css');?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/css/plugins/forms/form-validation.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/authentication.css');?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo">
                            <img height="60" src="<?php echo base_url('assets/images/svg/safe-logo.svg');?>" alt="">
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid" src="<?php echo base_url('assets/images/capa-site.png');?>"
                                    alt="Capa Site" />
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Safe Desk</h2>
                                <small class="card-text mb-2">Informe os dados abaixo e tenha acesso a nossos
                                    serviços.</small>
                                <form class="auth-login-form mt-2" action="<?php echo base_url('login/auth')?>" method="POST">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">E-mail</label>
                                        <input class="form-control" id="login-email" type="text" name="email"
                                            placeholder="john@example.com" aria-describedby="login-email" autofocus=""
                                            tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">Senha</label>
                                        </div>

                                        <div class="input-group form-password-toggle mb-2">
                                            <input type="password" name="password" class="form-control"
                                                id="basic-default-password" placeholder="............"
                                                aria-describedby="basic-default-password">
                                            <span class="input-group-text cursor-pointer"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg></span>
                                        </div>
                                    </div>
                                    <?php if(session()->getFlashdata('msg')):?>
                                    <span class="alert alert-warning ">
                                        <?= session()->getFlashdata('msg') ?>
                                    </span>
                                    <?php endif;?>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="remember-me" type="checkbox"
                                                tabindex="3" />
                                            <label class="form-check-label" for="remember-me"> Lembrar Senha</label>
                                        </div>
                                    </div>
                                    <button style="background-color:#f5d149; color:black" class="btn w-100"
                                        tabindex="4">Entrar</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php base_url('assets/vendors/js/vendors.min.js');?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php base_url('assets/vendors/js/forms/validation/jquery.validate.min.js');?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php base_url('assets/js/core/app-menu.js');?>"></script>
    <script src="<?php base_url('assets/js/core/app.js');?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php base_url('assets/js/scripts/pages/auth-login.js');?>"></script>
    <!-- END: Page JS-->

    <script>
    $(window).on('load', function() {
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