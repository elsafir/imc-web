<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>

    <!-- section -->
    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Events</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section-->

    <!--Section-->
    <section id="events">
        <div class="container">
            <?php
                          foreach($events as $i):
                          foreach($me as $j){}

                          $id_events=$i['id_events'];
                          $nama_anggota=$j['nama_anggota'];
                          $judul_events=$i['judul_events'];
                          $detail_events=$i['detail_events'];
                          $foto_events=$i['foto_events'];
                          $slug_e=$i['slug_e'];
                          $created_at=$i['created_at'];
                          $updated_at=$i['updated_at'];
                      ?>
            <div class="row justify-content-around  align-items-center">
                <div class="col-md-4 mb-3 mt-5">
                    <div class="container">
                        <?php if ($foto_events != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 300px; height: 300px;" loading="lazy"/><!-- yang baru -->
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 300px; height: 300px;" loading="lazy"/><!-- yang baru -->
                          </a>
                          <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="container">
                        <h1><?php echo $judul_events ?></h1>
                        <small>Created at : <?= $created_at; ?> | Updated at : <?= $updated_at; ?> - </small>
                        <p class="mt-3"><?php echo substr($detail_events, 0, 300); ?></p>
                        <div class="full" >
                            <a class="hvr-radial-out button-theme" href="<?= base_url('Chome/detailEvents/') ?>/<?php echo $slug_e; ?>">Read more</a>
                        </div>
                    </div>
                </div>
            </div>



            <?php endforeach;?>
            <?php echo $pager->links('bootstrap', 'bootstrap_pagination') ?>

             <br><br><br>

        </div>
    </section>
    <!--End Section-->

<?= $this->endSection(); ?>
