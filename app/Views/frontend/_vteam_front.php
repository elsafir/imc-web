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
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                            <?php if ($jabatan == "Regional Manager"): ?>
                                <div class="card-body text-center">
                                <?php if ($foto_anggota != NULL): ?>
                                    <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                    <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" style=" width: 270px; height: 270px;" loading="lazy"/><!-- yang baru -->
                                </a>
                                    <?php else: ?>
                                    <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                    <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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
            </div>
    </section>


<!-- HEAD-->
    <div class="container" style="display: flex;">
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

                                <?php if ($jabatan == "General Secretary"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
                            </a>
                                <?php else: ?>
                                <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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

                                <?php if ($jabatan == "Head Finance"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
                            </a>
                                <?php else: ?>
                                <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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

                                <?php if ($jabatan == "Head Human Resource"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
                                </a>
                                <?php else: ?>
                                    <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" loading="lazy"/><!-- yang baru -->
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

                                <?php if ($jabatan == "Technology Manager"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
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
<!-- end HEAD-->

<!-- HEAD-->
<div class="container" style="display: flex;">
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

                                <?php if ($jabatan == "Head Marketing Communication"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
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

                                <?php if ($jabatan == "Head Social Project"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
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

                                <?php if ($jabatan == "Head Economy Project"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
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

                                <?php if ($jabatan == "Head Education Project"): ?>
                            <div class="card-body text-center">
                            <?php if ($foto_anggota != NULL): ?>
                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white">
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
<!-- end HEAD-->

<?= $this->endSection(); ?>
