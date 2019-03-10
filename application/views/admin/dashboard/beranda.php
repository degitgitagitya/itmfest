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
                            Banner Home
                        </div>
                        <div class="card-body">

                            <img src="<?php echo base_url()?>public/uploads/<?php echo $gambar[0]->nama;?>" alt="<?php echo $gambar[0]->nama;?>">

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Option
                        </div>
                        <div class="card-body">

                            <p>Edit Gambar (maks 200kb)</p>

                            <p>Upload gambar (file jpg)</p>
                            <?php if (isset($errorevent3)){?>
                                <?php echo $errorevent3 ;?>
                            <?php }?>

                            <?php echo form_open_multipart('UploadUser/do_upload4');?>

                            <input type="file" name="userfile" size="20" />


                            <br /><br />

                            <input type="submit" class="btn btn-success" value="Edit" />

                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END PAGE CONTAINER-->

</div>
