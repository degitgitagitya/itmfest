<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/10/2019
 * Time: 4:39 PM
 */
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $user[0]->nama." / ".$user[0]->email;?></h4>
                        </div>
                        <div class="card-body">
                            <p> Password : <?php echo $user[0]->password?> </p>
                            <p> No Telepon : <?php echo $user[0]->notelp?> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>PPPP (Putra Putri Praja Pariwisata)</h4>
                        </div>
                        <div class="card-body">
                            <p> Attachment Bukti Pembayaran :

                                <?php if ($user[0]->pembayaranevent1 == null){ ?>

                                    -

                                <?php }else { ?>

                                    <br>

                                    <img width="200px" src="<?php echo base_url() ?>public/uploads/<?php echo $user[0]->pembayaranevent1?>" alt="">

                                <?php } ?>

                            <p> Status : <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php if ($user[0]->event1 == 0){ ?>

                                        Belum melakukan pembayaran

                                    <?php }elseif($user[0]->event1 == 1) { ?>

                                        Sudah melakukan pembayaran

                                    <?php }elseif($user[0]->event1 == 2) { ?>

                                        Pendaftaran selesai

                                    <?php } ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event1/0"?>">Belum melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event1/1"?>">Sudah melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event1/2"?>">Pendaftaran selesai</a>
                                </div>
                            </div> </p>
                            <p> Attachment Pendaftaran :

                                <?php if ($user[0]->attachmentevent1 == null){ ?>

                                    -

                                <?php }else { ?>

                                    <a target="_blank" download href="<?php echo base_url()?>public/uploads/<?php echo $user[0]->attachmentevent1?>" class="btn btn-success"> Lihat </a> </p>

                                 <?php } ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Seminar</h4>
                        </div>
                        <div class="card-body">
                            <p> Attachment Bukti Pembayaran :

                                <?php if ($user[0]->pembayaranevent2 == null){ ?>

                                    -

                                <?php }else { ?>

                                    <br>

                                    <img width="200px" src="<?php echo base_url() ?>public/uploads/<?php echo $user[0]->pembayaranevent2?>" alt="">

                                <?php } ?>

                            <p> Status : <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php if ($user[0]->event2 == 0){ ?>

                                        Belum melakukan pembayaran

                                    <?php }elseif($user[0]->event2 == 1) { ?>

                                        Sudah melakukan pembayaran

                                    <?php }elseif($user[0]->event2 == 2) { ?>

                                        Pendaftaran selesai

                                    <?php } ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event2/0"?>">Belum melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event2/1"?>">Sudah melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event2/2"?>">Pendaftaran selesai</a>
                                </div>
                            </div> </p>

                            <p> Attachment Pendaftaran :

                                <?php if ($user[0]->attachmentevent2 == null){ ?>

                                    -

                                <?php }else { ?>

                                <a target="_blank" download href="<?php echo base_url()?>public/uploads/<?php echo $user[0]->attachmentevent2?>" class="btn btn-success"> Lihat </a> </p>

                                <?php } ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pesona Indonesia Cover Song Competition</h4>
                        </div>
                        <div class="card-body">
                            <p> Attachment Bukti Pembayaran :

                                <?php if ($user[0]->pembayaranevent3 == null){ ?>

                                    -

                                <?php }else { ?>

                                    <br>

                                    <img width="200px" src="<?php echo base_url() ?>public/uploads/<?php echo $user[0]->pembayaranevent3?>" alt="">

                                <?php } ?>

                            <p> Status : <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php if ($user[0]->event3 == 0){ ?>

                                        Belum melakukan pembayaran

                                    <?php }elseif($user[0]->event3 == 1) { ?>

                                        Sudah melakukan pembayaran

                                    <?php }elseif($user[0]->event3 == 2) { ?>

                                        Pendaftaran selesai

                                    <?php } ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event3/0"?>">Belum melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event3/1"?>">Sudah melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event3/2"?>">Pendaftaran selesai</a>
                                </div>
                            </div> </p>
                            <p> Attachment Pendaftaran :

                                <?php if ($user[0]->attachmentevent3 == null){ ?>

                                    -

                                <?php }else { ?>

                                <a target="_blank" download href="<?php echo base_url()?>public/uploads/<?php echo $user[0]->attachmentevent3?>" class="btn btn-success"> Lihat </a> </p>

                                <?php } ?>

                            </p>

                            <p>

                                Link Lagu :

                                <?php if ($user[0]->linklagu == null){ ?>

                                    -

                                <?php }else { ?>

                                <a target="_blank" class="btn btn-warning" href="<?php echo $user[0]->linklagu?>">Link</a>

                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Business Modal Canvas (BMC) Competition</h4>
                        </div>
                        <div class="card-body">
                            <p> Attachment Bukti Pembayaran :

                                <?php if ($user[0]->pembayaranevent4 == null){ ?>

                                    -

                                <?php }else { ?>

                                    <br>

                                    <img width="200px" src="<?php echo base_url() ?>public/uploads/<?php echo $user[0]->pembayaranevent4?>" alt="">

                                <?php } ?>

                            <p> Status : <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php if ($user[0]->event4 == 0){ ?>

                                        Belum melakukan pembayaran

                                    <?php }elseif($user[0]->event4 == 1) { ?>

                                        Sudah melakukan pembayaran

                                    <?php }elseif($user[0]->event4 == 2) { ?>

                                        Pendaftaran selesai

                                    <?php } ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event4/0"?>">Belum melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event4/1"?>">Sudah melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event4/2"?>">Pendaftaran selesai</a>
                                </div>
                            </div> </p>
                            <p> Attachment Pendaftaran :

                                <?php if ($user[0]->attachmentevent4 == null){ ?>

                                    -

                                <?php }else { ?>

                                <a target="_blank" download href="<?php echo base_url()?>public/uploads/<?php echo $user[0]->attachmentevent4?>" class="btn btn-success"> Lihat </a> </p>

                                <?php } ?>

                            </p>

                            Canvas :

                            <?php if ($user[0]->linkcanvas == null){ ?>

                                -

                            <?php }else { ?>

                                <a target="_blank" class="btn btn-warning" href="<?php echo $user[0]->linkcanvas?>">Link</a>

                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Photography Competition</h4>
                        </div>
                        <div class="card-body">
                            <p> Attachment Bukti Pembayaran :

                                <?php if ($user[0]->pembayaranevent5 == null){ ?>

                                    -

                                <?php }else { ?>

                                    <br>

                                    <img width="200px" src="<?php echo base_url() ?>public/uploads/<?php echo $user[0]->pembayaranevent5?>" alt="">

                                <?php } ?>

                            <p> Status : <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php if ($user[0]->event5 == 0){ ?>

                                        Belum melakukan pembayaran

                                    <?php }elseif($user[0]->event5 == 1) { ?>

                                        Sudah melakukan pembayaran

                                    <?php }elseif($user[0]->event5 == 2) { ?>

                                        Pendaftaran selesai

                                    <?php } ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event5/0"?>">Belum melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event5/1"?>">Sudah melakukan pembayaran</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Admin/changeStatus/').$user[0]->id."/event5/2"?>">Pendaftaran selesai</a>
                                </div>
                            </div> </p>
                            <p> Attachment Pendaftaran :

                                <?php if ($user[0]->attachmentevent5 == null){ ?>

                                    -

                                <?php }else { ?>

                                <a target="_blank" download href="<?php echo base_url()?>public/uploads/<?php echo $user[0]->attachmentevent5?>" class="btn btn-success"> Lihat </a> </p>

                                <?php } ?>

                            </p>

                            <p>

                                Foto Lomba :

                                <?php if ($user[0]->fotolomba == null){ ?>

                                    -

                                <?php }else { ?>

                                    <a target="_blank" class="btn btn-warning" href="<?php echo $user[0]->fotolomba?>">Link</a>

                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
    </div>
</div>
<!-- END PAGE CONTAINER-->

</div>
