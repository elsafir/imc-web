<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>  

    <!-- section -->
    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>IMC Makassar</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



    <section class="community">
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-5">
                    <img src="images/logo-backgound.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab accusamus iste,
                        explicabo repellendus aliquid commodi! Officia id accusantium ipsa repellendus tempore
                        obcaecati, eveniet distinctio veniam suscipit sequi! Explicabo quo eaque neque rem, blanditiis
                        sequi voluptate non possimus ratione eligendi reprehenderit, in dicta soluta iure vel temporibus
                        sit sed laborum.</p>
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
                        <?php 
                       foreach($mc as $i):

                          $region=$i['region'];
                          $nama_anggota=$i['nama_anggota'];
                          $jabatan=$i['jabatan'];
                          $foto_anggota=$i['foto_anggota'];
                      ?>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item"><?php echo $nama_anggota ?> - [<?php echo $jabatan ?>]
                        </ul>
                        <?php endforeach;?>
                    </div>
                </div>
                 

    </section>
    <!--end section-->

    <?= $this->endSection(); ?> 