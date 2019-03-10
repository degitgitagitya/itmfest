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
                            Add News
                        </div>
                        <div class="card-body card-block">
                            <?php echo form_open_multipart('UploadUser/do_upload5');?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-email" class=" form-control-label">Judul</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="hf-email" name="judul" placeholder="Judul Berita.." class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-password" class=" form-control-label">Isi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="isi" id="editor" placeholder="Isi Berita..">

                                        </textarea>
                                    </div>
                                </div>

                                <p>Upload Gambar Head Berita (jpg)</p>

                                <?php if (isset($errorevent2)){?>
                                    <?php echo $errorevent2 ;?>
                                <?php }?>


                                <input type="file" name="userfile" size="20" />

                                <br /><br />

                                <input type="submit" class="btn btn-success" value="upload" />

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END PAGE CONTAINER-->

</div>
