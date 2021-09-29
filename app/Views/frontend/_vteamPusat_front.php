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

    <!-- Slider Leader -->
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
                        <div class="card-body text-center">
                            <?php foreach($jr2 as $i):
                                    $nama_anggota=$i['nama_anggota'];
                                    $jabatan=$i['jabatan'];
                                    $foto_anggota=$i['foto_anggota'];
                                    $instagram_anggota=$i['instagram_anggota'];?>

                            <?php if ($jabatan == "Chief Executive Officer"): ?>        
                            <img src="/img/<?php echo $foto_anggota; ?>" alt="">
                            <h3><?php echo $nama_anggota ?></h3>
                            <h4><?php echo $jabatan ?></h4>
                            <li><a href="<?php echo $instagram_anggota ?>"><i
                                        class="fa fa-instagram fa-2x"></i></a></li>
                            <?php endif; ?>
                            <?php endforeach ?>            
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <!--end bang iqbal-->
            </div>
    </section>

    <!--Secretary-->
    <section id="team" class="team_member_img bph_team">
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
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Septia Darmawaty</h3>
                            <h4>General Secretary</h4>
                            <li><a href=""><i class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class=" staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Abdurrahman Al-Fatih Ifdal - <span> Vice Secretary I</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Yuli Fitrianingsih - <span> Vice Secretary II</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--close Secretary-->


    <!--CFO-->
    <section id="team" class="team_member_img cfo_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Financial Officer
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Shabrina Alma Basalamah</h3>
                            <h4>Chief Financial Officer</h4>
                            <li><a href=""><i class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class=" staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Andi Muhammad Al-Fayed - <span> Accounting</span> <a href=""><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CFO-->

    <!--Marketing Team-->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Marketing Team
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Diajeng Anjalna Gakusha</h3>
                            <h4>Chief Marketing Officer</h4>
                            <li><a href="https://www.instagram.com/diajenganjalna/?hl=id"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kiki Nur Aisyah - <span> Public Relation</span> &nbsp; <a
                                    href="https://www.instagram.com/kikinur22/?hl=id"><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-group-item">Griselda - <span> Public Relation</span> <a
                                    href="https://www.instagram.com/seldasinurat/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="list-group-item">Muhammad Thaufiq A. - <span> Public Relation</span> <a
                                    href="https://www.instagram.com/thaufiqarr/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Mohammad Azhar Almanfaluti - <span> Business Development</span>
                                <a href="https://www.instagram.com/azharalff/?hl=id"><i class="fa fa-instagram"></i>
                                </a></li>
                            </li>
                            <li class="list-group-item">Aniza Fitria - <span> Business Development</span> <a
                                    href="https://www.instagram.com/anizafitria28/?hl=id"> <i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-group-item">Rafli Alviansyah - <span> Business Development</span> <a
                                    href="https://www.instagram.com/raflialvian99/?hl=id"> <i
                                        class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Marketing Team-->

    <!--Human Resource-->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Human Resource
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Eldira Puspa Juwita</h3>
                            <h4>Human Resource Officer</h4>
                            <li><a href=""><i class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Jilan Farah - <span> Secretary of Human Resource</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Hanny M. Dhea - <span> Human Resource Recruitment</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Yogi Dwi Indah S. - <span> Human Resource Recruitment</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Rudi Chandra A. - <span> Human Resource Recruitment</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Muhammad Chandra S. - <span> Human Resource Development</span>
                                <a href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Nur Afifa K. A. Chaniago - <span> Human Resource
                                    Development</span> <a href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Andika Karuniawan R. - <span> Human Resource Development</span>
                                <a href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Human Resource-->

    <!--Technology Team-->
    <section id="team" class="team_member_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Technology Team
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Andika Pratama Zaid</h3>
                            <h4>Chief Technology Officer</h4>
                            <li><a href="https://www.instagram.com/andika.zaid/?hl=id"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Fachri Zaini - <span> Content Manager</span> <a
                                    href="https://www.instagram.com/fachrizaini/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Rosalina Fajar Y. - <span> Content Manager</span> <a
                                    href="https://www.instagram.com/rfyuniar/?hl=id"><i class="fa fa-instagram"></i></a>
                            </li>
                            </li>
                            <li class="list-group-item">Fajri Yusuf - <span> Graphic Designer</span> <a href=""><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Hardiyanti Sukmarini - <span> Graphic Designer</span> <a
                                    href="https://www.instagram.com/hardiyantisr/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Ina Yosia Wijaya - <span> Graphic Designer</span> <a href=""><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">George Muhammad I. - <span> Graphic Designer</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Farros Ghifari - <span> Video Editor</span> <a
                                    href="https://www.instagram.com/farros.1011/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Fakhriza Sidqi W. Fauzi - <span> Video Editor</span> <a
                                    href="https://www.instagram.com/fakhrizafauzi/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Muhammad Hanief S. - <span> Video Editor</span> <a
                                    href="https://www.instagram.com/refimhs/?hl=id"><i class="fa fa-instagram"></i></a>
                            </li>
                            </li>
                            <li class="list-group-item">Adellya Pangestu P. - <span> Web Developer</span> <a
                                    href="https://instagram.com/adelpngstu?igshid=ihb9oj27s1qy"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Ridwan Satrio H. - <span> Web Developer</span> <a href=""><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Rizky Arief Saputro - <span> Web Developer</span> <a
                                    href="https://www.instagram.com/rizkyariefs_/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Technology Team-->

    <!--Economy-->
    <section id="team" class="team_member_img project_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Project Of Economy
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Arfi Silmi</h3>
                            <h4>Project Officer of Economy</h4>
                            <li><a href="https://www.instagram.com/arfi_silmi/?hl=id"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dwi Nuryani - <span> Staff of Economy</span> <a
                                    href="https://www.instagram.com/dwinuryaniii/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Rallyanta Tarigan - <span> Staff of Economy</span> <a
                                    href="https://www.instagram.com/rallyanta/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Dinna Amalia Dadi S. - <span> Staff of Economy</span> <a
                                    href="https://www.instagram.com/dinna.ads27/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Raihan Azmi Azhari T. - <span> Staff of Economy</span> <a
                                    href="https://www.instagram.com/raihanazmii/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Economy-->

    <!--Education-->
    <section id="team" class="team_member_img project_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Project Of Education
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Fita Fajria</h3>
                            <h4>Project Officer of Education</h4>
                            <li><a href="https://www.instagram.com/fitafjr/?hl=id"><i
                                        class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Ahmad Sulthan Aulia - <span> Staff of Education</span> <a
                                    href="https://www.instagram.com/ahmadsulthan/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Ivory Saraswati - <span> Staff of Education</span> <a
                                    href="https://www.instagram.com/ivrys_/?hl=id"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-group-item">Kenny Fatavia - <span> Staff of Education</span> <a
                                    href="https://www.instagram.com/kenny_fatavia/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Marcella Putri W. - <span> Staff of Education</span> <a
                                    href="https://www.instagram.com/marcellawijayaa/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Zam Zam Jamaludin - <span> Staff of Education</span> <a
                                    href="https://www.instagram.com/azmlmbert19/?hl=id"><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Education-->

    <!--Social-->
    <section id="team" class="team_member_img project_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_align_center mb-3 heading_main">
                    <h2> Project Of Social
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images/p1.png" alt="">
                            <h3>Ridha Alamsyah Yoisangadji</h3>
                            <h4>Project Officer of Social</h4>
                            <li><a href=""><i class="fa fa-instagram fa-2x mt-3"></i></a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-box">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Anugrah Ramadhan B. - <span> Staff of Social</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Jamilatunnisa - <span> Staff of Social</span> <a href=""><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Rio Rinaldo - <span> Staff of Social</span> <a href=""><i
                                        class="fa fa-instagram"></i></a></li>
                            </li>
                            <li class="list-group-item">Yasinta Mega Alfina - <span> Staff of Social</span> <a
                                    href=""><i class="fa fa-instagram"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--close Social-->



<?= $this->endSection(); ?>
