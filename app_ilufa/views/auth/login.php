<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo ADMIN_ASSETS ?>images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo ADMIN_ASSETS ?>images/favicon.png" type="image/x-icon">
    <title>iLuFA | Login Member</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS ?>css/responsive.css">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="#"><img class="img-fluid for-light" src="<?php echo ADMIN_ASSETS ?>images/logo/ilufa_login.png" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo ADMIN_ASSETS ?>images/logo/logo_dark.png" alt="looginpage"></a></div>
                        <div class="login-main">
                            
                            <!-- <h1><?php echo lang('login_heading'); ?></h1> -->
                            <!-- <p><?php echo lang('login_subheading'); ?></p> -->

                            <div id="infoMessage"><?php echo $message; ?></div>

                            <?php echo form_open("auth/login"); ?>

                            <p>
                                <?php echo lang('login_identity_label', 'identity'); ?>
                                <?php echo form_input($identity); ?>
                            </p>

                            <p>
                                <?php echo lang('login_password_label', 'password'); ?>
                                <?php echo form_input($password); ?>
                            </p>

                            <p>
                                <?php echo lang('login_remember_label', 'remember'); ?>
                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                            </p>


                            <p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

                            <?php echo form_close(); ?>

                            <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="<?php echo ADMIN_ASSETS ?>js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js-->
        <script src="<?php echo ADMIN_ASSETS ?>js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="<?php echo ADMIN_ASSETS ?>js/icons/feather-icon/feather.min.js"></script>
        <script src="<?php echo ADMIN_ASSETS ?>js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="<?php echo ADMIN_ASSETS ?>js/config.js"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="<?php echo ADMIN_ASSETS ?>js/script.js"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>