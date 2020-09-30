<?php
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);
require_once 'config.php';
include "phpqrcode/qrlib.php"; 
$nama = $email ='';
$namaerr = $emailerr ='';
if (isset($_POST['submit'])) {

    //position
    if (empty(trim($_POST['nama']))) {
      $namaerr = "please fill in the position";
    }else {
      $nama = trim($_POST['nama']);
    }
 
    // job description
    if (empty(trim($_POST['email']))) {
      $emailerr = "please fill in the jobdesc";
    }else {
      $email = trim($_POST['email']);
    }

    function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    //usage 
    $myRandomString = generateRandomString(20);

    

    //insert to table
    if (!empty($nama) && !empty($email)) {
      $sql = "INSERT INTO contoh (nama, email, code) VALUES ('{$nama}', '{$email}', '{$myRandomString}')";
      $result = mysqli_query($mysqli, $sql);
      

      if (!$result) {
        die(mysqli_error($mysqli));
      }
      
    //   header('Location: phpmailer/coba.php');
    }

    $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
    if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);
    $isiqrcode = '{"nama":"'.$nama.'","code":"'.$myRandomString.'"}';
    //isi qrcode jika di scan
    $codeContents = $isiqrcode ;
    //nama file qrcode yang akan disimpan
    $namaFile=$_POST['nama'].".png";
    //ECC Level
    $level=QR_ECLEVEL_H;
    //Ukuran pixel
    $UkuranPixel=300;
    //Ukuran frame
    $UkuranFrame=4;

    QRcode::png($codeContents, $tempdir.$namaFile, $level, $UkuranPixel, $UkuranFrame); 

    echo '
    <div class="container">
    <div class="row">
    <div class="col-lg-4">  
    </div>
        <div class="col-lg-4"> 
                <br><br>
                <img src="'.$tempdir.$namaFile.'" class="img-rounded" width="200" height="200" /> 
            </div>
            <div class="col-lg-4">  
            </div>
        </div>
    </div>'; 

}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ngodingstudyclub@gmail.com';                 // SMTP username
    $mail->Password = 'ngodingstudyclub#1';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ngodingstudyclub@gmail.com', 'Team NSC2');
    $mail->addAddress($_POST['email'], $_POST['nama']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment($tempdir.$namaFile, $namaFile);    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Barqode Pendaftaran Ngantri Online';
    $mail->Body    = 'Selamat Pendaftaran Berhasil, Scan Barqode ini pada Saat datang ke klinik';
    $mail->AltBody = 'Thank You';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>