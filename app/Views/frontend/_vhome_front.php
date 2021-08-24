<?= $this->extend('frontend/_vtemplate_front'); ?>


<?= $this->section('content_front'); ?>

<div id="modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1><b>NEW EVENT!!!</b></h1>
             <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
            <!--  <h4 class="modal-title">Cara Membuat Auto Pop Up Responsive Menggunakan Bootstrap</h4> -->
          </div>
          <div class="modal-body">
            <!-- <img src="/assets/images/Poster.png" style="width: 465px; height:400px"> -->
            <?php
                       foreach($et as $i):

                          $slug_e=$i['slug_e'];
                          $nama_anggota=$i['nama_anggota'];
                          $judul_events=$i['judul_events'];
                          $detail_events=$i['detail_events'];
                          $foto_events=$i['foto_events'];
                      ?>
            <div class="text_align_center">
                <h2><span style="font-weight: bold;"><?php echo $judul_events; ?></span></h2>
                 <p><b>- <?php echo $nama_anggota ?> -</b></p><br>
                 <?php if ($foto_events != NULL): ?>
                    <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                  </a>
                    <?php else: ?>
                      <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                  </a>
                  <?php endif; ?>  <br>

                <p><?php echo substr($detail_events, 0, 90); ?></p>
                <a class="btn btn-outline-blue" href="<?= base_url('Chome/detailEvents/') ?>/<?php echo $slug_e; ?>">Read More >></a>
            </div>
            <?php endforeach;?>


          </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide"
                        style="background-image:url(/assets/images/company-profile/desain\ logo.png);">
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(/assets/images/Poster.png);">
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(/assets/images/sinergi.png);">
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class=" section tabbar_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_menu">
                        <ul>
                            <li><a href="#"><span class="icon icon-color"><img src="/assets/images/i4.png"
                                            alt="#" /></span><span>Social</span></a></li>
                            <li><a href="#"><span class="icon icon-color"><img src="/assets/images/i2.png"
                                            alt="#" /></span><span>Education</span></a></li>
                            <li><a href="#"><span class="icon icon-color"><img src="/assets/images/i3.png"
                                            alt="#" /></span><span>Economy</span></a></li>
                            <li><a href="#"><span class="icon"><img src="/assets/images/i5.png"
                                            alt="#" /></span><span>Location</span></a></li>
                            <li><a href="#"><span class="icon"><img src="/assets/images/i6.png"
                                            alt="#" /></span><span style="color:white!important;">Email</span></a></li>
                            <li><a href="#"><span class="icon"><img
                                            src="/assets/images/kisspng-computer-icons-portable-network-graphics-email-cli-navy-blue-phone-41-icon-free-navy-blue-phone-ico-5c498dabea4809.9820699415483242679596.png"
                                            alt="#" /></span><span style="color:white!important;">Call
                                        Us</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <section class="about-us" id="parallax_1">
        <div class="container layout_padding padding_bottom-0 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="/assets/images/company-profile/IMC - background full colour.jpg" alt="#" class="img-fluid image-home">
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left mt-3">
                            <h2><span>Get To </span> Know Us</h2>
                        </div>
                        <div class="full">
                            <p>Indonesia Millenial Connect merupakan wadah pengembangan diri bagi pemuda
                                pemudi di
                                seluruh Indonesia, berfokus kepada tiga bidang yang menjadi faktor
                                penentu kesejahteraan
                                dalam pemberdayaan masyarakat yaitu pendidikan, sosial, dan ekonomi.</p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme mb-5" href="about.html">About more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!--section-->
    <section id="parallax_2">
        <div class="container mt-5">
            <div class="row justify-content-around flex-md-row-reverse align-items-center">
                <div class="col-md-4 mb-5 mt-5">
                    <div class="container">
                        <img src="/assets/images/p1.png" alt="" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="container">
                        <p class="lead speech_leader_word text-center">"Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit.
                            Voluptatibus ea sit
                            adipisci. Rerum
                            assumenda necessitatibus corrupti quasi facere quibusdam vero laudantium, et
                            reprehenderit
                            sint
                            accusantium nihil, architecto expedita doloremque ullam."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->

    <!--section-->
    <section id="card-hover" class="parallax_3">
        <div class="container mt-5 text_align_center">
            <div class="row">
                <div class="col-md-12 heading_main heading_main text_align_center">
                    <h2>Popular Events</h2>
                </div>
            </div>


            <div class="row">
                <?php
                       foreach($me as $i):

                          $slug_e=$i['slug_e'];
                          $nama_anggota=$i['nama_anggota'];
                          $judul_events=$i['judul_events'];
                          $detail_events=$i['detail_events'];
                          $foto_events=$i['foto_events'];
                      ?>

                <div class="col-md-4 mb-5 mt-3 p-3">
                    <div class="container">

                        <a href="">
                            <div class="card ">
                                <div class="card-body">
                                    <?php if ($foto_events != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;"/>
                          </a>
                          <?php endif; ?>
                                    <h3 class="lead"><?php echo $judul_events ?></h3>
                                    <p><b>- <?php echo $nama_anggota ?> -</b></p>
                                    <p><?php echo substr($detail_events, 0, 90); ?></p>
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
    <!--end section-->



    <!--start section-->
    <section id="parallax_5">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-5">
                    <img src="/assets/images/WhatsApp Image 2020-08-17 at 22.42.50.jpeg" t="#" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="full">
                        <div class="heading_main text_align_center mt-5">
                            <h2><span>Milenial Peduli </span> Sesama</h2>
                        </div>
                        <div class="full text-center">
                            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Vero, ipsa
                                excepturi! Quam quaerat atque reprehenderit dolorum repellat quos
                                quisquam, perferendis
                                possimus sed itaque. Perferendis non minus odio, cupiditate consectetur
                                magnam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->

    <!-- section -->
    <section class="video_container" id="parallax_6">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_main text_align_center mt-5">
                        <h2><span>Content means </span> everything</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6 mx-auto" id="video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class=" embed-responsive-item" width="1280" height="720"
                            src="https://youtube.com/embed/cvmLMbNIOPc" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!--Start Section-->
    <section id="parallax_6">
        <div class="container mt-5">
            <div class="row justify-content-around flex-md-row-reverse align-items-center">
                <div class="col-md-5">
                    <div class="container">
                        <img src="/assets/images/insta-poster.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="text_align_center">
                        <h2><span>"Ikuti Kami Di Social Media Untuk Mendapatkan Informasi Mengenai
                                Events, Volunteer dan
                                perkembangan Indonesia Millenial Connect"</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Section-->

<?= $this->endSection(); ?>
