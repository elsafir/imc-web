<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>    
<!-- CONTENT -->
<!-- CONTENT -->
<!-- CONTENT -->
<br><br><br>
    <!-- section -->
    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>IMC <?= $regionn['region']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <section class="community">

        <div class="">
            <center> <img src="/img/logo-backgound.png" style="width:700px;" alt="" class="img-fluid"></center>
        </div>

        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-13">
                    <p class="lead" style="text-align: justify;"><?= $regionn['latarbelakang']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

  
    <!--section 1-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text_align_center mb-3 heading_main">
                <h2>Avengers Regional
                </h2>
            </div>
        </div>
    </div>

    <section id="team" class="team_member_img">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Muhammad Ilyas Arradya</h3>
                            <h4>Regional Manager</h4>
                            <li><a href=""><i class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="mt-3 staff-box">
                        <ul class="list-group list-group-flush">

                            <?php foreach($mc as $m): ?>
                                <li class="list-group-item"><a href="#" style="width:20px;"> <i class="fa fa-instagram" ></i></a> <?= $m['nama_anggota'] ?> - <small><?= $m['jabatan']; ?> </small></li> 
                            <!-- <li class="list-group-item">Muh. Yusril Hardiansyah. B. S.P - General Secretary
                            </li>
                            <li class="list-group-item">Luthfiania Andriani - Staff of Education</li>
                            <li class="list-group-item">Dian Sukma Putri - Social Project Manager</li>
                            <li class="list-group-item">Nurul Inayah - Staff of Social</li> -->
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
    <!--end section-->
<?= $this->endSection(); ?>

