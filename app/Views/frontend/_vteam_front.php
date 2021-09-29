<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>

<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Our Team</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ceo / bang iqbal -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text_align_center mt-5 heading_main">
                <h2>The Leaders
                </h2>
            </div>
        </div>
    </div>
    <section id="team_slider" class="team_member_img">
        <div class="container">
            <div class="row">
                <!--Bang Iqbal-->
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                        <?php foreach($ceo as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">

                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];?>
                            <?php if ($jabatan == "Regional Manager"): ?>

                            <img src="images/p1.png" alt="">
                            <h3>Iqbal Z. Mutaqin</h3>
                            <h4>Chief Executive Officer</h4>
                            <li><a href="https://www.instagram.com/iqbaloco/?hl=id"><i class="fa fa-instagram fa-2x"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <!--end bang iqbal-->
            </div>
    </section>
    

    <!-- chief / c-level-->
    <div class="container" style="display: flex;"> 
        <section id="team_slider" class="team_member_img">
        <div class="container" >
            <div class="row">
                <div class="col-pd-4" >
                    <div class="card">
                        <?php foreach($coo as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" />
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </section>
        <section id="team_slider" class="team_member_img">
            <div class="container" >
                <div class="row">
                    <div class="col-pd-4" >
                        <div class="card">
                            <?php foreach($cpo as $i):
                                $nama_anggota=$i['nama_anggota'];
                                $jabatan=$i['jabatan'];
                                $instagram_anggota=$i['instagram_anggota'];
                                $foto_anggota=$i['foto_anggota'];
                            ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" />
                            </a>
                                <?php else: ?>
                                <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <?php endif; ?>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x"></i></a></li>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
        </section>
        <section id="team_slider" class="team_member_img">
            <div class="container" >
                <div class="row">
                    <div class="col-pd-4" >
                        <div class="card">
                            <?php foreach($chro as $i):
                                $nama_anggota=$i['nama_anggota'];
                                $jabatan=$i['jabatan'];
                                $instagram_anggota=$i['instagram_anggota'];
                                $foto_anggota=$i['foto_anggota'];
                            ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" />
                            </a>
                                <?php else: ?>
                                <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <?php endif; ?>
                                <!-- <img src="images/p1.png" alt=""> -->
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x"></i></a></li>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
        </section>
        <section id="team_slider" class="team_member_img">
            <div class="container" >
                <div class="row">
                    <div class="col-pd-4" >
                        <div class="card">
                            <?php foreach($cmo as $i):
                                $nama_anggota=$i['nama_anggota'];
                                $jabatan=$i['jabatan'];
                                $instagram_anggota=$i['instagram_anggota'];
                                $foto_anggota=$i['foto_anggota'];
                            ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" />
                            </a>
                                <?php else: ?>
                                <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample"/>
                            </a>
                            <?php endif; ?>
                                <!-- <img src="images/p1.png" alt=""> -->
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x"></i></a></li>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
        </section>
    </div>

    <!-- SECRETARY -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Secretary
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($gsc as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                             <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];?>

                             <?php if ($jabatan == "Vice Secretary" OR $jabatan == "General Secretary"): ?>
                            <li class="list-group-item"><?php echo $nama_anggota ?> - <span> <?php echo $jabatan ?></span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                                     <?php endif; ?>
                             <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close SECRETARY Team-->

    <!-- Finance -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Finance
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($Headf as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($f as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                        <?php foreach($fu as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Finance Team-->

    <!-- Regional Coordinator -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Regional Coordinator
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($Headrc as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($rc as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                        <?php foreach($fu as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Regional Coordinator -->

    <!--Human resource Team-->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Human Resource Development
                    </h2>
                </div>
            </div>
        </div>

        <!-- HRD -->
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($Headhrd as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($hrd as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>

                            <li class="list-group-item">Andi Muhammad Al-Fayed - <span> Accounting</span> <a href=""><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Human Resource Recruitment
                    </h2>
                </div>
            </div>
        </div>
        <!-- HRR -->
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($Headhrr as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($hrr as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Human resource Team-->

    <!-- Busdev -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Bussines Development
                    </h2>
                </div>
            </div>
        </div>
        <!-- HRR -->
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($Headbs as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($bs as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end busdev -->

    <!--Media Team =================== -->

    <!-- Content -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Content Manager
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($HeadMedia as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($cm as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video  -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Video Editor
                    </h2>
                </div>
            </div>
        </div>
        <!-- HRR -->
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($PicV as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($v as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Graphic Designer  -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Graphic Designer	
                    </h2>
                </div>
            </div>
        </div>
        <!-- HRR -->
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($PicD as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($d as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Graphic Designer  -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Web Development	
                    </h2>
                </div>
            </div>
        </div>
        <!-- HRR -->
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($PicWD as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($wd as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--End Media Team =================== -->

    <!-- Education -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Education Project
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($HeadEdu as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($Edu as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Education Team-->
    
    <!-- Economy -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Economy Project
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($HeadEco as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($Eco as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Economy Team-->

    <!-- Social -->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Social Project
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($HeadSos as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                          </a>
                            <?php else: ?>
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/noimage.jpg" alt="white sample"/>
                          </a>
                          <?php endif; ?>
                            <!-- <img src="images/p1.png" alt=""> -->
                            <h3><?= $nama_anggota; ?></h3>
                            <h4><?= $jabatan; ?></h4>
                            <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($Sos as $i):
                            $nama_anggota=$i['nama_anggota'];
                            $jabatan=$i['jabatan'];
                            $instagram_anggota=$i['instagram_anggota'];
                            $foto_anggota=$i['foto_anggota'];
                        ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Social Team-->


<?= $this->endSection(); ?>
