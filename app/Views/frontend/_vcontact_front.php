<?= $this->extend('frontend/_vtemplate_front'); ?>

<?= $this->section('content_front'); ?>

<!-- FORM Contact mail SMTP-->
<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $hp = $_POST['hp'];
    $message = $_POST['message'];


    if(!empty($email) && !empty($name) && !empty($hp) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{

            //Untuk Tampilan di Subjek dan penerima email
            $toEmail = 'murizazs28@gmail.com'; //Alamat Penerima Email jgn lupa samain di sendemail pada xampp kalau localhost kalau Domain samain dengan Domain EMail
            $emailSubject = 'Pesan Website Dari '.$name;
            $htmlContent = '
              <div style="width:100%;height:100%; class="hihi">
                <div style="width:90%;height:100%;margin:auto;background-color:#002147;color:white;padding:1em;">
                    <h2 style="margin:0!important;background-color:#ffc107;color:black!important;font-weight:bolder;font-size:20px;text-align:center;padding:2em;border-radius:0 0 3px 3px;">Form Kontak Website IMC</h2>
                    <h3>Nama:</h3><p style="background:linear-gradient(rgba(162, 162, 162,0.8),rgba(162, 162, 162,0.6));padding:.7em;">'.$name.'</p>
                    <h3>Email:</h3><p style="background:linear-gradient(rgba(162, 162, 162,0.8),rgba(162, 162, 162,0.6));padding:.7em;">'.$email.'</p>
                    <h3>Nomor HP:</h3><p style="background:linear-gradient(rgba(162, 162, 162,0.8),rgba(162, 162, 162,0.6));padding:.7em;">'.$hp.'</p>
                    <h3>Message:</h3><p style="background:linear-gradient(rgba(162, 162, 162,0.8),rgba(162, 162, 162,0.6));padding:.7em;">'.$message.'</p>
                    <div style="width:40%;height:100%;margin:auto;padding:1.3em 1.1em;border-radius:2px;background-color:#ffc107;text-align:center!important;">
                      <a href="www.imc.com" style="text-decoration:none!important;font-weight:bolder;color:black!important;text-align:center!important;">Kunjungi Website IMC</a>
                    </div>
                    <div style="width:100%;height:100%;margin:auto;color:white;padding:1em;text-align:center;padding-top:2em;">
                      <p style="opacity:0.8;">
                      Copyright &copy; 2021  All Rights Reserved by <br/>
                      <span style="text-align:center;">IM Connect</span>
                      </br/>
                      </p>
                    </div>
                </div>
              </div>
              '; // Isi & Tampilan Body Email

              //Pengaturan untuk email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            //Send EMail
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim ke Email Kami !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}
?>
<!-- section -->
<section class="inner_banner">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="full">
						<h3>Contact us</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- end section -->

	<!--section-->
	<section class="contact">
		<div class="container">
			<div class="mb-5 mt-5">
				<div class="row">
					<div class="col-md-12 text_align_center">
						<h2><span>We'd Love to hear from YOU </span></h2>
					</div>
					<div class="col-md-12 text_align_center">
						<P>Whether you have a question or want to have a collaboration with us, Our team is ready to
							answer
							all
							your questions.</P>
					</div>

				</div>
			</div>

			<div class="container text_align_center" id="contact_request">
				<div class="row">
					<div class="col-md-4 mb-3">
						<div class="card">
							<div class="card-body">
								<a href=""><img src="images/undraw_work_together_h63l.png" alt=""
										class="img-fluid rounded-circle w-50 mb-4"></a>
								<h1 class="text-bold">Have A Question about Imconnect Center?
								</h1>
								<p>Kolaborasi, Donasi, Kerjasama, dll
								</p>
								<a class="btn btn-outline-blue" href="register.html">Contact >></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<div class="card">
							<div class="card-body">
								<a href=""><img src="images/undraw_team_chat_y27k.png" alt=""
										class="img-fluid rounded-circle w-50 mb-3"></a>
								<h1 class="text-bold">Have A Question about Regional Imconnect?
								</h1>
								<p>Event, Program, dll
								</p>
								<a class="btn btn-outline-blue" href="register.html">Contact >></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<div class="card">
							<div class="card-body">
								<a href=""><img src="images/undraw_programmer_imem.png" alt=""
										class="img-fluid rounded-circle w-50 mb-3"></a>
								<h1 class="text-bold">Have A Question about Member Imconnect?
								</h1>
								<p> Keuntungan, Pembukaan pendaftaran
								</p>
								<a class="btn btn-outline-blue" href="register.html">Contact >></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="contact_map ">
			<div class="container">
				<div class="mb-3 mt-5 text_align_center">
					<div class="row">
						<div class="col-md-12 text_align_center heading_main">
							<h2><span>Send & Find Us</span></h2>
						</div>
					</div>
				</div>
				<div class="row justify-content-around flex-md-row">

					<div class="col-md-6 mt-3 mb-5 contact-left">
						<!-- <h3>Feedback</h3> -->
						<?php if(!empty($statusMsg)){ ?>
            <p style="position:absolute;top:-3em;left:1em;" class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        		<?php } ?>
						<!-- email.php ada di bagian atas atau ada juga di assets/php/ -->
						<!-- <?= base_url('/assets/php/email.php') ?> -->
						<form action="" method="post">
							<input type="text" name="name" placeholder="Nama Lengkap" required />
							<input type="email" name="email" placeholder="Email" required="" />
							<input type="number" name="hp" placeholder="No Telepon exp: 08xx" required="" />
							<textarea placeholder="Message" name="message" required=""></textarea>
							<a href="#"><input type="submit" name="submit" value="send" /></a>
						</form>
					</div>

					<div class="col-md-6">
						<div class="">
							<div class="map mb-3">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.889379520269!2d106.74588231449381!3d-6.278271663203761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f041cc181323%3A0x199da4dfd2465e64!2sJl.%20Amal%20Bakti%20No.43%2C%20RT.7%2FRW.2%2C%20Rengas%2C%20Kec.%20Ciputat%20Tim.%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015412!5e0!3m2!1sid!2sid!4v1596289261037!5m2!1sid!2sid"
									width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""
									aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
					</div>

					<div class="sosmed">
						<div class="sosmed-out">
						<ul>
							<a href="https://www.instagram.com/imconnectid/">
								<li class="list-group-item ig"><i class="fa fa-instagram fa-2x"></i>
									@imconnectid
								</li>
							</a>
							<a href="https://www.facebook.com/imconnectid/">
								<li class="list-group-item fb">
									<i class="fa fa-facebook-square fa-2x"></i> Indonesia Milennial
									Connect
								</li>
							</a>
							<a href="https://www.youtube.com/IndonesiaMillennialConnect">
								<li class="list-group-item yt">
									<i class="fa fa-youtube fa-2x"></i> Indonesia Millenial Connect
								</li>
							</a>
							<a href="https://wa.me/6281298151717">
								<li class="list-group-item wa">
									<i class="fa fa-whatsapp fa-2x"></i> +62 812 - 9815 - 1717
								</li>
							</a>
							<a href="mailto:indonesiamillennialconnect@gmail.com">
								<li class="list-group-item email" id="email">
									<i class="fa fa-envelope fa-2x"></i>
									indonesiamillennialconnect <br> @gmail.com
								</li>
							</a>
						</ul>
					</div>
				</div>

					<!-- <div class="col-md-12 mt-3 mb-5 d-flex sosmed">
						<ul class="list-group list-group-flush">
							<a href="">
								<li class="list-group-item"><i class="fa fa-instagram fa-2x"></i>
									@imconnectid
								</li>
							</a>
							<a href="">
								<li class="list-group-item">
									<i class="fa fa-facebook-square fa-2x"></i> Indonesia Milennial
									Connect
								</li>
							</a>
							<a href="">
								<li class="list-group-item">
									<i class="fa fa-whatsapp fa-2x"></i> +62 812 - 9815 - 1717
								</li>
							</a>
							<a href="">
								<li class="list-group-item" id="email">
									<i class="fa fa-envelope fa-2x"></i>
									indonesiamillennialconnect <br> @gmail.com
								</li>
							</a>
							<a href="">
								<li class="list-group-item">
									<i class="fa fa-youtube fa-2x"></i> Indonesia Millenial Connect
								</li>
							</a>
						</ul>
					</div> -->
				</div>
			</div>
		</section>

		<!-- section sosmed -->
		<!-- <div class="container text_align_center" id="card-hover">
			<div class="mb-5 mt-5 text_align_center">
				<div class="row">
					<div class="col-md-12 text_align_center heading_main">
						<h2><span>Also Get Our Latest Content on Social Media </span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-5 email-contact">
					<div class="card">
						<div class="card-body">
							<a href=""><img src="images/pngfind.com-contact-icons-png-99256.png" alt=""
									class="img-fluid rounded-circle w-50 mb-3"></a>
							<h3>Contact Us Through Email
							</h3>
							<p>indonesiamillenialconnect@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-5">
					<div class="card">
						<div class="card-body">
							<a href=""><img src="images/PinClipart.com_transformers-clip-art_617291.png" alt=""
									class="img-fluid rounded-circle w-50 mb-3"></a>
							<h3>Find More About Us Trough Instagram
							</h3>
							<p>@imconnectorg</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-5">
					<div class="card">
						<div class="card-body">
							<a href=""><img
									src="images/kisspng-social-media-facebook-computer-icons-linkedin-logo-facebook-icon-5aba7f669c0a94.0492483615221717506392.png"
									alt="" class="img-fluid rounded-circle w-50 mb-3"></a>
							<h3>Visit Us On Facebook
							</h3>
							<p>Indonesia Millenial Connect</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-5">
					<div class="card">
						<div class="card-body">
							<a href=""><img src="images/NicePng_youtube-live-png_856029.png" alt=""
									class="img-fluid rounded-circle w-50 mb-3"></a>
							<h3>Visit Us On Facebook
							</h3>
							<p>Indonesia Millenial Connect</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->

	</section>
	<!--end section-->

	<!-- section
	<div class="section layout_padding contact_section" style="background:#f6f6f6;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="full float-right_img">
						<img src="images/img10.png" alt="#">
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="contact_form">
						<form action="contact.html">
							<fieldset>
								<div class="full field">
									<input type="text" placeholder="Your Name" name="your name" />
								</div>
								<div class="full field">
									<input type="email" placeholder="Email Address" name="Email" />
								</div>
								<div class="full field">
									<input type="phn" placeholder="Phone Number" name="Phone number" />
								</div>
								<div class="full field">
									<textarea placeholder="Massage"></textarea>
								</div>
								<div class="full field">
									<div class="center"><button>Send</button></div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- end section -->


<?= $this->endSection(); ?>
