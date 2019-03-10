<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/10/2019
 * Time: 2:58 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/css/font-face.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/font-awesome-4.7/css/font-awesome.min.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/font-awesome-5/css/fontawesome-all.min.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/mdi-font/css/material-design-iconic-font.min.css">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/bootstrap-4.1/bootstrap.min.css">

    <!-- Vendor CSS-->
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/animsition/animsition.min.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/wow/animate.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/slick/slick.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/select2/select2.min.css">
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/vendor/perfect-scrollbar/perfect-scrollbar.css">

    <!-- Main CSS-->
    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>public/admin/css/theme.css">


    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="<?php echo base_url('Admin/home')?>">
                        <img width="50px" src="<?php echo base_url()?>public/admin/images/icon/logo.png" alt="logo" />
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
                    <li>
                        <a href="<?php echo base_url('Admin/home')?>">
                            <i class="fas fa-table"></i>Pendaftar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/beranda')?>">
                            <i class="fas fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/news')?>">
                            <i class="fas fa-newspaper"></i>News</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/contact')?>">
                            <i class="fas fa-address-book"></i>Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/logout')?>">
                            <i class="fas fa-window-close"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="<?php echo base_url('Admin/home')?>">
                <img width="50px" src="<?php echo base_url()?>public/admin/images/icon/logo.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li>
                        <a href="<?php echo base_url('Admin/home')?>">
                            <i class="fas fa-table"></i>Pendaftar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/beranda')?>">
                            <i class="fas fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/news')?>">
                            <i class="fas fa-newspaper"></i>News</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/contact')?>">
                            <i class="fas fa-address-book"></i>Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/logout')?>">
                            <i class="fas fa-window-close"></i>Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="header-button">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->