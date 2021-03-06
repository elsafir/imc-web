<?= $this->extend('frontend/_vtemplate_front'); ?>


<?= $this->section('content_front'); ?>

<div id="modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1><b>NEW EVENT!!!</b></h1>
             <button type="button" class="btn btn-dark" data-dismiss="modal" >Close</button>
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
                 <p>
                     <!-- <b>- 
                         <//?php echo $nama_anggota ?> 
                         -
                        </b> -->
                    </p>
                    <br>
                 <?php if ($foto_events != NULL): ?>
                    <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 250px;height: 250px;margin-top: -2em" loading="lazy"/><!-- yang baru -->
                  </a>
                    <?php else: ?>
                      <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                    <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 250px;height: 250px;margin-top: -2em" loading="lazy"/><!-- yang baru -->
                  </a>
                  <?php endif; ?>  <br>

                <p><?php echo substr($detail_events, 0, 90); ?></p>
                <a class="btn btn-outline-blue" href="<?= base_url('Chome/detailEvents/') ?>/<?php echo $slug_e; ?>" style="border:1px solid black">Read More >></a>
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
                            <li><a href="Chome/menuProgram/sosial"><span class="icon icon-color"><img src="/assets/images/i4.png"
                                            alt="#" loading="lazy"/></span><span>Social</span></a></li><!-- yang baru -->
                            <li><a href="/Chome/menuProgram/edukasi"><span class="icon icon-color"><img src="/assets/images/i2.png"
                                            alt="#" loading="lazy"/></span><span>Education</span></a></li><!-- yang baru -->
                            <li><a href="/Chome/menuProgram/ekonomi"><span class="icon icon-color"><img src="/assets/images/i3.png"
                                            alt="#" loading="lazy"/></span><span>Economy</span></a></li><!-- yang baru -->
                            <li><a href="https://www.google.com/maps/search/Jl.+Amal+Bakti+No.43+RT.7%2FRW.2,+Rengas+Kec.+Ciputat+Tim.+Kota+Tangerang+Selatan,+Banten+15412/@-6.278277,106.748071,16z?hl=id"><span class="icon"><img src="/assets/images/i5.png"
                                            alt="#" loading="lazy"/></span><span>Location</span></a></li><!-- yang baru -->
                            <li><a href="/Chome/contact"><span class="icon"><img src="/assets/images/i6.png"
                                            alt="#" loading="lazy"/></span><span style="color:white!important;">Email</span></a></li><!-- yang baru -->
                            <li><a href="https://wa.me/6282299924484"><span class="icon"><img
                                            src="/assets/images/kisspng-computer-icons-portable-network-graphics-email-cli-navy-blue-phone-41-icon-free-navy-blue-phone-ico-5c498dabea4809.9820699415483242679596.png"
                                            alt="#" loading="lazy"/></span><span style="color:white!important;">Call
                                        Us</span></a></li><!-- yang baru -->
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
                <div class="col-md-6 gettoknow">
                    <img src="/assets/images/company-profile/IMC - background full colour.jpg" alt="#" class="img-fluid image-home">
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left mt-3">
                            <h2><span>Get To </span> Know Us</h2>
                        </div>
                        <div class="full">
                            <p style="text-align:justify; text-indent: 0.5in;">Indonesia Millennial Connect merupakan organisasi non profit yang concern pada pengembangan diri bagi pemuda/i Indonesia baik yang berada di dalam maupun luar negeri, berfokus kepada tiga bidang yang menjadi faktor penentu kesejahteraan dalam pemberdayaan masyarakat yaitu pendidikan, sosial, dan ekonomi.??</p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme mb-5" href="/Chome/about">About more</a>
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
                <!-- <div class="col-md-4 mb-5 mt-5">
                    <div class="container">
                        <img src="/assets/images/p1.png" alt="" class="img-fluid rounded-circle imagep_2">
                    </div>
                </div> -->
                <div class="col-md-6 mb-5 mt-5">
                    <div class="container mt-5 mb-5">
                        <p class="lead speech_leader_word text-center">"Satu-satunya batasan untuk meraih mimpi kita adalah keragu-raguan kita akan hari ini. Marilah kita maju dengan keyakinan yang aktif dan kuat." <br> - Franklin Roosevelt</p>
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
                          $created_at=$i['created_at'];
                          $updated_at=$i['updated_at'];
                      ?>

                <div class="col-md-4 mb-5 mt-3 p-3 mobile2">
                    <div class="container">
                        <a href="">
                            <div class="card" style="height:500px;">
                                <div class="card-body" style="height:520px;">
                                    <?php if ($foto_events != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;" loading="lazy"/><!-- yang baru -->
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 420px; height: 250px;" loading="lazy"/><!-- yang baru -->
                          </a>
                          <?php endif; ?>
                                    <h3 class="lead"><?php echo $judul_events ?></h3>
                                    <p><small><?=substr($created_at, 0,10); ?></small></p>
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
        <div class="container pb-5">
            <div class="row mt-5 mb-5 ">
                <div class="col-md-5 mt-5">
                    <img src="/img/WhatsApp Image 2021-10-04 at 14.45.17.jpeg" t="#" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="full">
                        <div class="heading_main text_align_center mt-5">
                            <h2><span>Milenial </span> Merajut Kasih</h2>
                        </div>
                        <div class="full text-center" style="padding-right: 50px; padding-left: 50px;">
                            <p class="lead" style="text-align:justify; text-indent: 0.5in;">Millenial Merajut Kasih merupakan kegiatan Aksi Sosial dan IMC Tanggap Bencana yang bertujuan untuk membantu saudara-saudara kita yang terkena dampak dari pandemi COVID-19 dan juga saudara-saudara kita yang perekonomianya masih terkendala. Bantuan sosial yang diberikan dalam bentuk sumbangan bahan pokok makanan bagi wilayah Sekitar Jakarta, Bandung, Makassar, Medan, Surabaya, Malang, Palembang, dan Yogyakarta.</p>
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
                        <h2><p>"Ikuti Kami Di Sosial Media Untuk Mendapatkan Informasi Mengenai
                                Events, Volunteer dan perkembangan Indonesia Millenial Connect"</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Section-->

<?= $this->endSection(); ?>
