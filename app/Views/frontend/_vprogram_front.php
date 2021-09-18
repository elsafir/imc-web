<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>


    <!-- section -->
    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                              foreach($jp1 as $i):
                              $jenis_program=$i['jenis_program'];
                              ?>
                    <div class="full">
                        <h3><?php echo $jenis_program ?></h3>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

<br>
    <!--section-->
    <section class="program" id="economy">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                              <?php
                              foreach($jp1 as $i):
                              $tentang_jenis_program=$i['tentang_jenis_program'];
                              ?>
                                <div class=" mt-3 mb-3" style="text-align: justify;">
                                    <?php echo $tentang_jenis_program ?></>
                                </div>
                                <?php endforeach;?>
                            </div>

                            <?php
                       foreach($mp as $i):

                          $id_program=$i['id_program'];
                          $nama_anggota=$i['nama_anggota'];
                          $judul_program=$i['judul_program'];
                          $detail_program=$i['detail_program'];
                          $foto_program=$i['foto_program'];
                          $slug_p=$i['slug_p'];
                      ?>
                            <div class="col-md-4 mt-3 mb-3" id="row_1">
                                <div class="card" style="border-radius:10px!important;">
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
                                            <a class="btn btn-outline-blue" href="<?= base_url('Chome/detailProgram/') ?>/<?php echo $slug_p; ?>">Read More >></a>
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
<br><br><br>
    <?= $this->endSection(); ?>
