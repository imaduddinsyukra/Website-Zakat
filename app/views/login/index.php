<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Zakat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASEURL; ?>/assets_web/img/baz.png">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/font-awesome.min.css">
    <!-- adminpro icon CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/normalize.css">
    <!-- form CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/form.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="<?=BASEURL;?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <!-- Header top area start-->
        <div class="content-inner-all">

           
            <!-- login Start-->
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                <br><br><br>
                    <div class="row">

                        <div class="col-lg-4"></div>
                        <form id="adminpro-form" class="adminpro-form" method="POST" action="<?= BASEURL;?>/login/aksi_login">
                            <div class="col-lg-4">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="<?= BASEURL; ?>/assets_web/img/baz.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Username</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="username" placeholder="Username" autofocus="" />
                                                <i class="fa fa-user login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password" placeholder="Password" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">

                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg">Log in</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
            <!-- login End-->
        </div>
    </div>
</body>

</html>