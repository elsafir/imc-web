<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>


    <!-- section -->


<br><br><br>
    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Program Kami - </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

                     
    <!--section-->
    <section class="program" id="economy">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading_main text_align_center mt-3 mb-3">
                                    <h4>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt debitis
                                        corrupti
                                        fugit
                                        soluta, ea quo nobis pariatur consequatur incidunt tempore nisi impedit
                                        provident
                                        cumque
                                        maiores! Nam unde maxime vero ullam."</h4>
                                </div>
                            </div>

                            <?php 
                       foreach($mp as $i):

                          $id_program=$i['id_program'];
                          $nama_anggota=$i['nama_anggota'];
                          $judul_program=$i['judul_program'];
                          $detail_program=$i['detail_program'];
                          $foto_program=$i['foto_program'];
                      ?>
                            <div class="col-md-4 mt-3 mb-3" id="row_1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text_align_center">
                                            <h2><span><?php echo $judul_program ?></span></h2> 
                                            <p><b>- <?php echo $nama_anggota ?> -</b></p>
                                           

                                            <?php if ($foto_program != NULL): ?>
                                                    <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                                    <img src="/img/<?php echo $foto_program; ?>" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                                                  </a>
                                                    <?php else: ?>
                                                      <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                                    <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                                                  </a>
                                                  <?php endif; ?> 
                                            <p><?php echo substr($detail_program, 0, 90); ?></p>
                                            <a class="btn btn-outline-blue" href="<?= base_url('Chome/detailProgram/') ?>/<?php echo $id_program; ?>">Read More >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             
                                <?php endforeach;?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close section-->

    <?= $this->endSection(); ?> 