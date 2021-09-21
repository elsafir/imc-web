<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>
  <!-- section -->

    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Program Kami</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

                  <?php
                       foreach($de as $i):

                          $id_events=$i['id_events'];
                          $nama_anggota=$i['nama_anggota'];
                          $judul_events=$i['judul_events'];
                          $detail_events=$i['detail_events'];
                          $foto_events=$i['foto_events'];
                          $linkdaftar_event=$i['linkdaftar_event'];
                      ?>
    <!--section-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="full">
                        <div class="text_align_center " id="events">
                            <h2><span><?php echo $judul_events; ?></span></h2>
                            <p style="16px"><b>- <?php echo $nama_anggota ?> -</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php if ($foto_events != NULL): ?>
                    <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 450px; height: 350px;object-fit: cover;object-position: center;border-radius:2px;"/>
                  </a>
                    <?php else: ?>
                      <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 450px; height: 350px;object-fit: cover;object-position: center;border-radius:2px;"/>
                  </a>
                  <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                    <p style="text-indent: 50px; text-align: justify; letter-spacing: 0;font-size:17px;font-family: 'Poppins', sans-serif;"><?php echo $detail_events; ?></p>
            </div>

            <div class="container-btnevent">
                <a href="<?php echo $linkdaftar_event; ?>">
                    Form Pendaftaran
                </a>
            </div>
        </div>
    </section>
    <!--close section-->
     <?php endforeach;?>
        <?= $this->endSection(); ?>
