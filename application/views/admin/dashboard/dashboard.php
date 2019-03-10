<?php $no = 1; ?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>email</th>
                                        <th>nama</th>
                                        <th>password</th>
                                        <th>view</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($users as $item){?>

                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $item->email;?></td>
                                        <td><?php echo $item->nama;?></td>
                                        <td class="denied"><?php echo $item->password;?></td>
                                        <td><a href="<?php echo base_url('Admin/getUser/').$item->id?>" class="btn btn-dark">Detail</a></td>
                                    </tr>

                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>  |
                                    Modified by <a href="https://www.degitgitagitya.com/">De Gitgit Agitya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>