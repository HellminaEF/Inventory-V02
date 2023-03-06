<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ====================Required meta tags==================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- ====================Title Page==================== -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/images/icon/8.png" />

    <!-- ====================Fontfaces CSS==================== -->
    <link href="<?= base_url(); ?>/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- ====================Bootstrap CSS====================-->
    <link href="<?= base_url(); ?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- ====================Vendor CSS==================== -->
    <link href="<?= base_url(); ?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- ====================Main CSS==================== -->
    <link href="<?= base_url(); ?>/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="<?= base_url(); ?>/images/icon/c4.png" alt="USSI_Inventory" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active">
                            <a class="js-arrow" href="<?= base_url('user') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="<?= base_url('u_barang') ?>">
                                <i class="fas fa-tachometer-alt"></i>Barang Inventaris</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="<?= base_url('comment') ?>">
                                <i class="fas fa-tachometer-alt"></i>Form Keluhan</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <?= $this->include('templates2/header'); ?>

        <?= $this->include('templates2/sidebar'); ?>

        <?= $this->renderSection('page-content'); ?>

    </div>

    <!-- ====================Jquery JS==================== -->
    <script src="<?= base_url(); ?>/vendor/jquery-3.2.1.min.js"></script>
    <!-- ====================Bootstrap JS==================== -->
    <script src="<?= base_url(); ?>/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- ====================Vendor JS==================== -->
    <script src="<?= base_url(); ?>/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url(); ?>/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url(); ?>/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url(); ?>/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url(); ?>/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/select2/select2.min.js">
    </script>

    <!-- ====================Main JS==================== -->
    <script src="<?= base_url(); ?>/js/main.js"></script>

</body>

</html>
<!-- end document-->