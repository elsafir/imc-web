<!-- <?php

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
            $toEmail = 'murizazs28@gmail.com'; //Alamat Penerima Email
            $emailSubject = 'Pesan Website Dari '.$name;
            $htmlContent = '
              <div style="width:100%;height:100%;">
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
?> -->
