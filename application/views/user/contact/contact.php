<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 11:36 AM
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
    <link href="<?php echo base_url() ?>public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/styles/contact_responsive.css">
    <link rel="icon" href="<?php echo base_url() ?>public/images/logo.png">
</head>
<body>

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
    <!-- <div class="home_background" style="background-image: url(<?php echo base_url() ?>public/images/index.jpg)"></div> -->
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>public/images/index.jpg" data-speed="0.8"></div>

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
                                                <li><a href="<?php echo base_url() ?>">Home</a></li>
                                                <li><a href="<?php echo base_url('about') ?>">About Us</a></li>
                                                <!--<li><a href="speakers.html">Speakers</a></li>-->
                                                <li><a href="<?php echo base_url('event') ?>">Events</a></li>
                                                <li><a href="<?php echo base_url('news') ?>">News</a></li>
                                                <li class="active"><a href="<?php echo base_url('contact') ?>">Contact</a></li>
                                                <?php if (isset($_SESSION['login'])){ ?>

                                                    <li><a href="<?php echo base_url('Home/logout')?>">Log Out</a></li>

                                                <?php } else {?>

                                                    <li><a href="<?php echo base_url('Login')?>">Log In</a></li>

                                                <?php } ?>
                                            </ul>
                                        </nav>
                                        <div class="header_extra ml-auto">

                                            <?php if (isset($_SESSION['login'])){ ?>

                                                <div class="button header_button"><a href="#">Profile</a></div>

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
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page">Contact</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="<?php echo base_url()?>">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="contact_map_background">

            <!-- Contact Map -->
            <div class="contact_map">

                <!-- Google Map -->
                <div class="map">
                    <div id="google_map" class="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Get in touch</div>
                        <form action="<?php echo base_url('Pesan') ?>" method="post" class="contact_form" id="contact_form">
                            <input type="text" class="contact_input" placeholder="Name" name="nama" required="required">
                            <input type="email" class="contact_input" placeholder="E-mail" name="email" required="required">
                            <input type="text" class="contact_input" placeholder="Subject" name="judul" required="required">
                            <textarea name="isi" id="contact_textarea" class="contact_textarea contact_input" placeholder="Message" required="required"></textarea>
                            <button class="button contact_button"><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="contact_info_container">
                        <div>
                            <a href="#">
                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="logo_image"><div><img src="<?php echo base_url() ?>public/images/logo.png" alt=""></div></div>
                                    <div class="logo_content">
                                        <div id="logo_text" class="logo_text logo_text_not_ie">ITM Festival 2019</div>
                                        <div class="logo_sub">April 29 - Mei 2, 2019 - Gedung Ahmad Sanusi</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="contact_info_list_container">
                            <ul class="contact_info_list">
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="contact_info_icon text-center"><img src="<?php echo base_url() ?>public/images/contact_1.png" alt=""></div></div>
                                    <div class="contact_info_text">Gd. Nu'man Soemantri FPIPS Lt. 2
                                        Jl. Dr. Setiabudhi No. 229
                                        Kota Bandung, 40154</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="contact_info_icon text-center"><img src="<?php echo base_url() ?>public/images/contact_2.png" alt=""></div></div>
                                    <div class="contact_info_text">0855 2444 7142</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="contact_info_icon text-center"><img src="<?php echo base_url() ?>public/images/contact_3.png" alt=""></div></div>
                                    <div class="contact_info_text">itmfestofficial@gmail.com</div>
                                </li>
                            </ul>
                        </div>
                        <div class="contact_info_pin"><div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
