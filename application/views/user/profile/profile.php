<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 3:43 PM
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/styles/news.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/styles/news_responsive.css">
    <link rel="icon" href="<?php echo base_url() ?>public/images/logo.png">


    <?php

        if (isset($sukses)){


            echo "<script type='application/javascript'>alert('$sukses')</script>";


        }


    ?>

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
                                                    <li><a href="<?php echo base_url() ?>">Home</a></li>
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
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page">Profile</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="<?php echo base_url()?>">Home</a></li>
                                    <li>News</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Contact -->
    <div class="news">
        <div class="container">

            <hr>

            <div class="row">

                <div class="col-12">

                    <h3>Nama</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <h4><?php echo $user[0]->nama?></h4>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <h3>Email</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <h4><?php echo $user[0]->email?></h4>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-12">

                    <h1 class="text-center">Konten Event</h1>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-12">

                    <h3>PPP (Putra Putri Praja Pariwisata)</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <?php if ($user[0]->event1 == 0){ ?>

                        <h3 style="color: red;">Status : Belum Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank" href="<?php echo base_url()?>public/prosedur/REGISTRATION FLOW PUTRA PUTRI PRAJA PARIWISATA 2019.pdf">Klik disini untuk prosedur pembayaran</a></h4>
                        <p>Upload Bukti Pembayaran (file jpg)</p>
                        <?php if (isset($errorevent1)){?>
                            <?php echo $errorevent1 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event1" name="event" hidden>
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event1 == 1){ ?>

                        <h3 style="color: blue;">Status : Sudah Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank"  href="<?php echo base_url()?>public/form/FORM_REGISTRASI_PPPP.docx">">Klik disini untuk download form pendaftaran</a></h4>
                        <p>Upload Form Pendaftaran (file pdf)</p>
                        <?php if (isset($errorevent1)){?>
                            <?php echo $errorevent1 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload2');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event1" name="event" hidden>
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event1 == 2){ ?>

                        <h3 style="color: green;">Status : Sudah Melakukan Pendaftaran</h3>

                    <?php }?>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-12">

                    <h3>Seminar</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <?php if ($user[0]->event2 == 0){ ?>

                        <h3 style="color: red;">Status : Belum Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank" href="<?php echo base_url()?>public/prosedur/REGISTRATION FLOW SEMINAR NASIONAL.pdf">Klik disini untuk prosedur pembayaran</a></h4>
                        <p>Upload Bukti Pembayaran (file jpg)</p>
                        <?php if (isset($errorevent2)){?>
                            <?php echo $errorevent2 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event2" name="event" hidden>
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event2 == 1){ ?>

                        <h3 style="color: blue;">Status : Sudah Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank"  href="<?php echo base_url()?>public/form/FORM_REGISTRATION_SEMINAR_NASIONAL.docx">Klik disini untuk download form pendaftaran</a></h4>
                        <p>Upload Form Pendaftaran (file pdf)</p>
                        <?php if (isset($errorevent2)){?>
                            <?php echo $errorevent2 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload2');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event2" name="event" hidden>
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event2 == 2){ ?>

                        <h3 style="color: green;">Status : Sudah Melakukan Pendaftaran</h3>

                    <?php }?>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-12">

                    <h3>Pesona Indonesia Cover Song Competition</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <?php if ($user[0]->event3 == 0){ ?>

                        <h3 style="color: red;">Status : Belum Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank" href="<?php echo base_url()?>public/prosedur/REGISTRATION FLOW PESONA INDONESIA COVER SONG COMPETITION.pdf">Klik disini untuk prosedur pembayaran</a></h4>
                        <p>Upload Bukti Pembayaran (file jpg)</p>
                        <?php if (isset($errorevent3)){?>
                            <?php echo $errorevent3 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event3" name="event" hidden>
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event3 == 1){ ?>

                        <h3 style="color: blue;">Status : Sudah Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank"  href="<?php echo base_url()?>public/form/FORM_REGISTRATION_COVER_SONG_COMPETITION.docx">Klik disini untuk download form pendaftaran</a></h4>
                        <p>Upload Form Pendaftaran (file pdf)</p>
                        <?php if (isset($errorevent3)){?>
                            <?php echo $errorevent3 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload3');?>

                        <input type="file" class="form-control-file" name="userfile" size="20" />

                        <input type="text" value="event3" name="event" hidden>
                        <input type="text" class="form-control-sm" name="linklagu" placeholder="Masukan Link Youtube">
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event3 == 2){ ?>

                        <h3 style="color: green;">Status : Sudah Melakukan Pendaftaran</h3>

                    <?php }?>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-12">

                    <h3>Business Modal Canvas (BMC) Competition</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <?php if ($user[0]->event4 == 0){ ?>

                        <h3 style="color: red;">Status : Belum Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank" href="<?php echo base_url()?>public/prosedur/REGISTRATION FLOW BUSINESS MODEL CANVAS (BMC) COMPETITION.pdf">Klik disini untuk prosedur pembayaran</a></h4>
                        <p>Upload Bukti Pembayaran (file jpg)</p>
                        <?php if (isset($errorevent4)){?>
                            <?php echo $errorevent4 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event4" name="event" hidden>
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event4 == 1){ ?>

                        <h3 style="color: blue;">Status : Sudah Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank"  href="<?php echo base_url()?>public/form/FORM_REGISTRATION_BMC_COMPETITION.docx">Klik disini untuk download form pendaftaran</a></h4>
                        <p>Upload Form Pendaftaran (file pdf)</p>
                        <?php if (isset($errorevent4)){?>
                            <?php echo $errorevent4 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload7');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event4" name="event" hidden>
                        <br>
                        <p>Canvas dimasukan ke dalam Google Drive dan cantumkan akses link pada kolom di bawah ini</p>
                        <input type="text" class="form-control-sm" name="linkcanvas" placeholder="Masukan Link Canvas">
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event4 == 2){ ?>

                        <h3 style="color: green;">Status : Sudah Melakukan Pendaftaran</h3>

                    <?php }?>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-12">

                    <h3>Photography Competition</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <?php if ($user[0]->event5 == 0){ ?>

                        <h3 style="color: red;">Status : Belum Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank" href="<?php echo base_url()?>public/prosedur/REGISTRATION FLOW PHOTOGRAPHY COMPETITION.pdf">Klik disini untuk prosedur pembayaran</a></h4>
                        <p>Upload Bukti Pembayaran (file jpg)</p>
                        <?php if (isset($errorevent5)){?>
                            <?php echo $errorevent5 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event5" name="event" hidden>
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event5 == 1){ ?>

                        <h3 style="color: blue;">Status : Sudah Melakukan Pembayaran</h3>
                        <h4 style="color: yellow;"><a download target="_blank"  href="<?php echo base_url()?>public/form/FORM_REGISTRATION_PHOTOGRAPHY_COMPETITION.docx">Klik disini untuk download form pendaftaran</a></h4>
                        <p>Upload Form Pendaftaran (file pdf)</p>
                        <?php if (isset($errorevent5)){?>
                            <?php echo $errorevent5 ;?>
                        <?php }?>

                        <?php echo form_open_multipart('UploadUser/do_upload6');?>

                        <input type="file" name="userfile" size="20" />

                        <input type="text" value="event5" name="event" hidden>
                        <br>
                        <p>Karya dimasukan ke dalam Google Drive dan cantumkan akses link pada kolom di bawah ini</p>
                        <input type="text" class="form-control-sm" name="fotolomba" placeholder="Masukan Link Karya">
                        <input type="text" value="<?php echo $user[0]->email?>" name="email" hidden>
                        <input type="text" value="<?php echo $user[0]->id?>" name="id" hidden>

                        <br /><br />

                        <input type="submit" class="btn btn-success" value="upload" />

                        </form>

                    <?php }elseif ($user[0]->event5 == 2){ ?>

                        <h3 style="color: green;">Status : Sudah Melakukan Pendaftaran</h3>

                    <?php }?>

                </div>

            </div>

            <hr>
        </div>
    </div>



