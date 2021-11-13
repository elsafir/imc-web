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
                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                            <?php if ($jabatan == "Chief Executive Officer"): ?>
                                <div class="card-body text-center">
                                <?php if ($foto_anggota != NULL): ?>
                                    <a href="/img/<?php echo $foto_anggota; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                                    <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" style=" width: 270px; height: 270px;" loading="lazy"/><!-- yang baru -->
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
                                <?php endif; ?>
                            <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <!--end bang iqbal-->
            </div>
    </section>


    <!-- chief / c-level-->
    <div class="container teamdown" style="display: flex;">
        <section id="team_slider" class="team_member_img">
        <div class="container" >
            <div class="row">
                <div class="col-pd-4" >
                    <div class="card">
                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                            <?php if ($jabatan == "Chief Operating Officer"): ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="/img/<?php echo $foto_anggota; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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
                        <?php endif; ?>
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
                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                            <?php if ($jabatan == "Chief Human Resources Officer"): ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="/img/<?php echo $foto_anggota; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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
                        <?php endif; ?>
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
                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                            <?php if ($jabatan == "Chief Project Officer"): ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="/img/<?php echo $foto_anggota; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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
                        <?php endif; ?>
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
                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                            <?php if ($jabatan == "Chief Marketing Officer"): ?>
                        <div class="card-body text-center">
                        <?php if ($foto_anggota != NULL): ?>
                            <a href="/img/<?php echo $foto_anggota; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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
                        <?php endif; ?>
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
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "General Secretary"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample" loading="lazy"/><!-- yang baru -->
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Secretary"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close SECRETARY Team-->

    <!-- Finance -->
    <section id="team" class="team_member_img mt-5">
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
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Finance"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample" loading="lazy"/><!-- yang baru -->
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Finance"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php if ($jabatan == "Funding"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Finance Team-->

    <!-- Organization Development -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Organization Development
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Organization Development"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample" loading="lazy"/><!-- yang baru -->
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Organization Development"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Organization Development Team-->

    <!-- Regional Coordinator -->
    <section id="team" class="team_member_img mt-5">
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
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Regional Coordinator"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Regional Coordinator"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Regional Coordinator Team-->

    <!-- Human Resources Development -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Human Resources Development
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Human Resources Development"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Human Resources Development"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Human Resources Development Team-->

    <!-- Human Resources Recruitment -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Human Resources Recruitment
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Human Resources Recruitment"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Human Resources Recruitment"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Human Resources Recruitment Team-->

    <!-- Education Project -->
    <section id="team" class="team_member_img mt-5">
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
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Education Project"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Education Project"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Education Project Team-->

    <!-- Social Project -->
    <section id="team" class="team_member_img mt-5">
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
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Social Project"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Social Project"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Social Project Team-->

    <!-- Economy Project -->
    <section id="team" class="team_member_img mt-5">
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
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Economy Project"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Economy Project"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Economy Project Team-->

    <!-- Business Development -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Business Development
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Business Development"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Business Development"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php if ($jabatan == "Funding"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Business Development Team-->

    <!-- Public Relation -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Public Relation
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Public Relation"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Public Relation"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php if ($jabatan == "Funding"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Public Relation Team-->

    <!-- Content Manager -->
    <section id="team" class="team_member_img mt-5">
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
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Head Media"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Content Manager"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Content Manager Team-->

    <!-- Graphic Designer -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Graphic Designer
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "PIC Graphic Designer"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Graphic Designer"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Graphic Designer Team-->

    <!-- Video Editor -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Video Editor
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "PIC Video Editor"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Video Editor"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Video Editor Team-->

    <!-- Web Development -->
    <section id="team" class="team_member_img mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Web Development
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "PIC Web Development"): ?>
                            <div class="card-body text-center">
                                <img src="/img/<?php echo $foto_anggota; ?>" alt="white sample"/>
                                <h3><?= $nama_anggota; ?></h3>
                                <h4><?= $jabatan; ?></h4>
                                <li><a href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i
                                            class="fa fa-instagram fa-2x mt-3"></i></a></li>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                        <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                        <?php if ($jabatan == "Web Development"): ?>
                            <li class="list-group-item"><?= $nama_anggota; ?> - <span> <?= $jabatan; ?></span> <a
                                    href="https://www.instagram.com/<?= $instagram_anggota; ?>"><i class="fa fa-instagram"></i></a></li>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Web Development Team-->



<?= $this->endSection(); ?>
