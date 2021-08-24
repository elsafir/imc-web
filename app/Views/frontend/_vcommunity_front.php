<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>
<!-- CONTENT -->
<!-- CONTENT -->
<!-- CONTENT -->
    <!-- section -->
    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="full">
                        <?php foreach($jrr as $i):

                          $region=$i['region'];
                      ?>
                        <h3>IMC <?php echo $region ?></h3>
                        <?php endforeach;?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <section class="community">
        <br><br>

        <?php foreach($jrr as $i):
        $foto_region=$i['foto_region'];
        ?>

        <div class="">
            <center>
                <img src="/img/<?php echo $foto_region; ?>" class="img-fluid mb-2" style="width: 500px;"/>
            </center>
        </div>
        <?php endforeach;?>



        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-13">
                    <?php
                       foreach($jrr as $i):

                          $tentang_region=$i['tentang_region'];
                      ?>
                    <p class="lead" style="text-align: justify;"><?php echo $tentang_region ?>
                    </p>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>


    <!--section 1-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text_align_center mb-3 heading_main">
                <h2>Avengers Regional
                </h2>
            </div>
        </div>
    </div>

    <section id="team" class="team_member_img">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Muhammad Ilyas Arradya</h3>
                            <h4>Regional Manager</h4>
                            <li><a href=""><i class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="mt-3 staff-box">
                         <?php
                       foreach($mc as $i):

                          $nama_anggota=$i['nama_anggota'];
                          $jabatan=$i['jabatan'];
                      ?>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item"><?php echo $nama_anggota ?> - [<?php echo $jabatan ?>]
                        </ul>
                        <?php endforeach;?>
                </div>
            </div>


        </div>
    </section>
    <!--end section-->
<?= $this->endSection(); ?>
