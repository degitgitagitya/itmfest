<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 8:20 AM
 */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>ITM Festival 2019</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conference project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/styles/responsive.css">
    <link rel="icon" href="<?php echo base_url() ?>public/images/logo.png">
</head>
<body>

<div class="super_container">

    <!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <div class="logo menu_logo">
                <a href="<?php echo base_url();?>">
                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image"><div><img src="<?php echo base_url() ?>public/images/logo.png" alt=""></div></div>
                        <div class="logo_content">
                            <div class="logo_text logo_text_not_ie">ITM Festival 2019</div>
                            <div class="logo_sub">April 29 - Mei 2, 2019 - Gedung Ahmad Sanusi</div>
                        </div>
                    </div>
                </a>
            </div>
            <ul>
                <li class="menu_item"><a href="<?php echo base_url() ?>">Home</a></li>
                <li class="menu_item"><a href="<?php echo base_url('about') ?>">About us</a></li>
                <!--<li class="menu_item"><a href="#">Speakers</a></li>-->
                <li class="menu_item"><a href="<?php echo base_url('event') ?>">Events</a></li>
                <li class="menu_item"><a href="<?php echo base_url('news') ?>">News</a></li>
                <li class="menu_item"><a href="<?php echo base_url('contact') ?>">Contact</a></li>
                <?php if (isset($_SESSION['login'])){ ?>

                    <li class="menu_item"><a href="<?php echo base_url('Profile')?>">Profile</a></li>

                <?php } else {?>

                    <li class="menu_item"><a href="<?php echo base_url('Login/register')?>">Register</a></li>

                <?php } ?>
                <?php if (isset($_SESSION['login'])){ ?>

                    <li class="menu_item"><a href="<?php echo base_url('Home/logout')?>">Log Out</a></li>

                <?php } else {?>

                    <li class="menu_item"><a href="<?php echo base_url('Login')?>">Log In</a></li>

                <?php } ?>
            </ul>
        </div>
        <div class="menu_social">
            <div class="menu_social_title">Follow uf on Social Media</div>
            <ul>
                <li><a target="_blank" href="https://www.instagram.com/itmfest2019/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/putraputriprajapariwisata/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/channel/UCHKiNxaFUdvfrjXGfAT19OQ"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.facebook.com/itmfest"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="line://ti/p/@yrt2591b"><i class="fa fa-comment" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_background" style="background-image: url(<?php echo base_url() ?>public/uploads/<?php echo $gambar[0]->nama?>)"></div>
        <!--<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php /*echo base_url() */?>public/images/index.jpg" data-speed="0.8"></div>-->

        <!-- Header -->

        <header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <a href="<?php echo base_url(); ?>">
                                            <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                                <div class="logo_image"><div><img src="<?php echo base_url() ?>public/images/logo.png" alt=""></div></div>
                                                <div class="logo_content">
                                                    <div id="logo_text" class="logo_text logo_text_not_ie">ITM Festival 2019</div>
                                                    <div class="logo_sub">April 29 - Mei 2, 2019 - Gedung Ahmad Sanusi</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="header_social ml-auto">
                                        <ul>
                                            <li><a target="_blank" href="https://www.instagram.com/itmfest2019/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/putraputriprajapariwisata/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank" href="https://www.youtube.com/channel/UCHKiNxaFUdvfrjXGfAT19OQ"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank" href="https://www.facebook.com/itmfest"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank" href="line://ti/p/@yrt2591b"><i class="fa fa-comment" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_nav" id="header_nav_pin">
                    <div class="header_nav_inner">
                        <div class="header_nav_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                            <nav class="main_nav">
                                                <ul>
                                                    <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                                                    <li><a href="<?php echo base_url('about') ?>">About Us</a></li>
                                                    <!--<li><a href="speakers.html">Speakers</a></li>-->
                                                    <li><a href="<?php echo base_url('event') ?>">Events</a></li>
                                                    <li><a href="<?php echo base_url('news') ?>">News</a></li>
                                                    <li><a href="<?php echo base_url('contact') ?>">Contact</a></li>
                                                    <?php if (isset($_SESSION['login'])){ ?>

                                                        <li><a href="<?php echo base_url('Home/logout')?>">Log Out</a></li>

                                                    <?php } else {?>

                                                        <li><a href="<?php echo base_url('Login')?>">Log In</a></li>

                                                    <?php } ?>
                                                </ul>
                                            </nav>
                                            <div class="header_extra ml-auto">

                                                <?php if (isset($_SESSION['login'])){ ?>

                                                    <div class="button header_button"><a href="<?php echo base_url('Profile')?>">Profile</a></div>

                                                <?php } else {?>

                                                    <div class="button header_button"><a href="<?php echo base_url('Login/register')?>">Register</a></div>

                                                <?php } ?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_date">April 29 - Mei 2, 2019</div>
                            <div class="home_title">Indonesia Tourism Marketing Festival 2019</div>
                            <div class="home_location">Gedung Ahmad Sanusi</div>
                            <div class="home_text">ITMFest 2019 merupakan festival kelima dalam event tahunan yang dilaksanakan oleh
                                mahasiswa Manajemen Pemarasan Pariwisata, Universitas Pendidikan Indonesia.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <!--<div class="intro">
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

            <div class="intro_item">
                <div class="intro_image"><img src="<?php /*echo base_url() */?>public/images/intro_1.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Conference Program</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <div class="intro_item">
                <div class="intro_image"><img src="<?php /*echo base_url() */?>public/images/intro_2.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Supersessions</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <div class="intro_item">
                <div class="intro_image"><img src="<?php /*echo base_url() */?>public/images/intro_3.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">The Speakers</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <div class="intro_item">
                <div class="intro_image"><img src="<?php /*echo base_url() */?>public/images/intro_4.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Explore Sessions</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <div class="intro_item">
                <div class="intro_image"><img src="<?php /*echo base_url() */?>public/images/intro_5.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Directory</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <div class="intro_item">
                <div class="intro_image"><img src="<?php /*echo base_url() */?>public/images/intro_6.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Speakers Schedule</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

        </div>
    </div>-->


