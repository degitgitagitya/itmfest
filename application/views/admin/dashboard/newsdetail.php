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
                            <?php echo $news[0]->judul?>
                        </div>
                        <div class="card-body">

                            <img src="<?php echo base_url()?>public/uploads/<?php echo $news[0]->gambar?>" alt="<?php echo $news[0]->gambar?>">

                            <p>

                                <?php echo $news[0]->isi?>

                            </p>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END PAGE CONTAINER-->

</div>
