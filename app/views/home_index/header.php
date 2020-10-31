 <?php 
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
  echo "
  <script>
  alert('Anda Belom Login');
  document.location.href='".BASEURL."/login'
  </script>
  ";
}?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $data['judul'];?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASEURL; ?>/assets/img/baz.png">
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
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/normalize.css">
    <!-- charts CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/c3.min.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="<?=BASEURL;?>/assets/js/vendor/modernizr-2.8.3.min.js"></script> </head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <?php 
    if($_SESSION['level']=='1'){
      $level = 'Superadmin';
    }
    elseif($_SESSION['level']=='2'){
      $level = 'Amil';
    }
    ?>
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="<?=BASEURL;?>/assets/img/message/1.jpg" alt="" />
                    </a>
                    <h3><?= $_SESSION['username'];?></h3>
                    <p><?= $level;?></p>
                    <strong>BAZ</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/home_index"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <?php if($_SESSION['level']=='2'){ ?>
                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Pembayaran/pembayaran"><i class="fa big-icon fa-clipboard"></i> <span class="mini-dn">Pembayaran Zakat</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>


                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Pembayar"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Muzakki</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Penerimaan"><i class="fa big-icon fa-clipboard"></i> <span class="mini-dn">Penyaluran Zakat</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>


                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Mustahik</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?=BASEURL;?>/Penerima" class="dropdown-item">Aktif</a>
                                <a href="<?=BASEURL;?>/Penerima/nonaktif" class="dropdown-item">Tidak Aktif</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-print"></i> <span class="mini-dn">Laporan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?=BASEURL;?>/Report/Pembayar" class="dropdown-item" target="blank">Data Pembayar</a>
                                <a href="<?=BASEURL;?>/Report/Penerima" class="dropdown-item" target="blank">Data Penerima</a>
                                <a href="<?=BASEURL;?>/Report/Zakat" class="dropdown-item" target="blank">Data Keuangan Zakat</a>
                                <a href="<?=BASEURL;?>/Report/Infak" class="dropdown-item" target="blank">Data Keuangan Infak</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Donasi"><i class="fa big-icon fa-clipboard"></i> <span class="mini-dn">Donasi</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Infak"><i class="fa big-icon fa-clipboard"></i> <span class="mini-dn">Infak</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Zakat"><i class="fa big-icon fa-clipboard"></i> <span class="mini-dn">Zakat</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Mesjid"><i class="fa big-icon fa-building"></i> <span class="mini-dn">Mesjid</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>


                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Web/lihat_contact"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Kritik & Saran</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <?php } else { ?>
                        <li class="nav-item">
                            <a href="<?=BASEURL;?>/Amil"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Amil</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <?php } ?>

                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="<?=BASEURL;?>/assets/img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">&nbsp;&nbsp;&nbsp;<?= $_SESSION['username'];?>&nbsp;&nbsp;&nbsp;</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                                </li>
                                                <li><a href="<?=BASEURL;?>/logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="dashboard.html">Dashboard v.1</a>
                                                </li>
                                                <li><a href="dashboard-2.html">Dashboard v.2</a>
                                                </li>
                                                <li><a href="analytics.html">Analytics</a>
                                                </li>
                                                <li><a href="widgets.html">Widgets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="inbox.html">Inbox</a>
                                                </li>
                                                <li><a href="view-mail.html">View Mail</a>
                                                </li>
                                                <li><a href="compose-mail.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="profile.html">Profile</a>
                                                </li>
                                                <li><a href="contact-client.html">Contact Client</a>
                                                </li>
                                                <li><a href="contact-client-v.1.html">Contact Client v.1</a>
                                                </li>
                                                <li><a href="project-list.html">Project List</a>
                                                </li>
                                                <li><a href="project-details.html">Project Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="captcha.html">Captcha</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="contact.html">Contacts</a>
                                                </li>
                                                <li><a href="review.html">Review</a>
                                                </li>
                                                <li><a href="order.html">Order</a>
                                                </li>
                                                <li><a href="comment.html">Comment</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->

