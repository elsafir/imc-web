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
                <img src="/img/<?php echo $foto_region; ?>" class="img-fluid mb-2" style="width: 500px;border-radius:5px;"/>
            </center>
        </div>
        <?php endforeach;?>



        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-13 tentang">
                    <?php
                       foreach($jrr as $i):

                          $tentang_region=$i['tentang_region'];
                      ?>
                    <p  style="text-align: justify;"><?php echo $tentang_region ?>
                    </p>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>


    <!--section EVENT REGIONAL-->
    <section id="card-hover" class="parallax_3">
        <div class="container mt-5 text_align_center">
            <div class="row " >
                <div class="col-md-12 heading_main heading_main text_align_center">
                    <h2>Events Regional</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach($er as $i):
                            $judul_events=$i['judul_events'];
                            $detail_events=$i['detail_events'];
                            $judul_events=$i['judul_events'];
                            $detail_events=$i['detail_events'];
                            $foto_events=$i['foto_events'];
                            $slug_e=$i['slug_e'];
                ?>
                <div class="col-md-4 mb-5 mt-3 p-3 mobile2 resp-event-ek">
                    <div class="container  ">
                        <a href="">
                            <div class="card ">
                                <div class="card-body">
                                    <?php if ($foto_events != NULL): ?>
                                        <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                            <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 200px;"/>
                                        </a>
                                    <?php else: ?>
                                        <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                            <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 200px;"/>
                                        </a>
                                    <?php endif; ?>
                                        <h3 class="lead"><?php echo $judul_events ?></h3>
                                        <p></p>
                                        <p style="font-size: 14px;"><?php echo substr($detail_events, 0, 90); ?></p>
                                        <a class="btn btn-outline-blue" href="<?= base_url('Chome/detailEvents/') ?>/<?php echo $slug_e; ?>">Read More >></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                 <?php endforeach;?>
            </div>
        </div>
    </section>

    <section>
    
    </section>
    <!--end section-->
    <!--end section-->
<?= $this->endSection(); ?>
