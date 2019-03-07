<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 5:16 PM
 */

?>


<div class="news">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <?php foreach ($news as $item){ ?>


                    <div class="news_items">

                        <!-- News Item -->
                        <div class="news_item">
                            <div class="news_image_container">
                                <div class="news_image"><img src="<?php echo base_url()?>public/news/<?php echo $item->gambar?>" alt="<?php echo $item->gambar?>"></div>
                            </div>
                            <div class="news_body">
                                <div class="news_title"><a href="#"><?php echo $item->judul?></a></div>
                                <div class="news_info">
                                    <ul>

                                        <li><span><?php echo $item->tanggal?></span></li>
                                    </ul>
                                </div>
                                <div class="news_text">
                                    <p><?php echo $item->isi;?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>
