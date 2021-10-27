<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>
  <!-- section -->

    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="full">
                        <h3>Detail Program</h3>
                    </div>

                </div>
            </div>
        </div>
    </section>

                  <?php
                  $no=1;
                       foreach($dp as $i):

                          $id_program=$i['id_program'];
                          $jenis_program=$i['jenis_program'];
                          $nama_anggota=$i['nama_anggota'];
                          $judul_program=$i['judul_program'];
                          $detail_program=$i['detail_program'];
                          $foto_program=$i['foto_program'];
                      ?>
    <!--section-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="full">
                        <div class="text_align_center " id="events">
                            <h2><span><?php echo $judul_program; ?></span></h2>
                            <p><b>- <?php echo $nama_anggota ?> -</b></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4"></div> -->
                <div class="col-md-4 imagedetailevent">
                    <?php if ($foto_program != NULL): ?>
                    <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/<?php echo $foto_program; ?>" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                  </a>
                    <?php else: ?>
                      <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                  </a>
                  <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row textdetailevent">
                    <p style="text-indent: 50px; text-align: justify; letter-spacing: 1px;"><?php echo $detail_program; ?></p>
            </div>

        </div>
    </section>
    <!--close section-->
     <?php endforeach;?>
        <?= $this->endSection(); ?>
