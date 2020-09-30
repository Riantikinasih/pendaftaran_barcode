<?php
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);
require_once 'config.php';
include "phpqrcode/qrlib.php"; 

$no_kk = $nama = $tgl_lahir = $bpjs_tunai = $no_bpjs = $berat_badan = $jenis_kelamin = $keluhan_utama = $keluhan_tambahan = $faktor_memperingan = $faktor_meperberat = $minum_obat = $persiapan_obat = $riwayat_penyakit = $alergi_obat = $informasi_tambahan = $alamat = $no_hp = $email =''; 
$no_kkerr = $namaerr = $tgl_lahirerr = $bpjs_tunaierr = $no_bpjserr = $berat_badanerr = $jenis_kelaminerr = $keluhan_utamaerr = $keluhan_tambahanerr = $faktor_memperinganerr = $faktor_meperberaterr = $minum_obaterr = $persiapan_obaterr = $riwayat_penyakiterr = $alergi_obaterr = $informasi_tambahanerr = $alamaterr = $no_hperr = $emailerr = '';
if (isset($_POST['submit'])) {

    //nama
    if (empty(trim($_POST['nama']))) {
      $namaerr = "please fill in the name";
    }else {
      $nama = trim($_POST['nama']);
    }

   //kk
   if (empty(trim($_POST['no_kk']))) {
    $no_kkerr = "please fill in the NO kk";
  }else {
    $no_kk = trim($_POST['no_kk']);
  }
    //tgl_lahir
    if (empty(trim($_POST['tgl_lahir']))) {
        $tgl_lahirerr = "please fill in the birthday";
      }else {
        $tgl_lahir = trim($_POST['tgl_lahir']);
      }

    //bpjs_tunai
    if (empty(trim($_POST['bpjs_tunai']))) {
        $bpjs_tunaierr = "please fill in the bpjs tunai";
      }else {
        $bpjs_tunai = trim($_POST['bpjs_tunai']);
      }

    //no_bpjs
    if (empty(trim($_POST['no_bpjs']))) {
        $no_bpjserr = "please fill in the bpjs id";
      }else {
        $no_bpjs = trim($_POST['bpjs_tunai']);
      }

    //berat_badan
    if (empty(trim($_POST['berat_badan']))) {
        $berat_badanerr = "please fill in the Berat Badan";
      }else {
        $berat_badan = trim($_POST['berat_badan']);
      }

    //jenis_kelamin
    if (empty(trim($_POST['jenis_kelamin']))) {
        $jenis_kelaminerr = "please fill in the Gender";
      }else {
        $jenis_kelamin = trim($_POST['jenis_kelamin']);
      }

    //keluhan_utama
    if (empty(trim($_POST['keluhan_utama']))) {
        $keluhan_utamaerr = "isi keluhan utama";
      }else {
        $keluhan_utama = trim($_POST['keluhan_utama']);
      }

    //keluhan_tambahan
    if (empty(trim($_POST['keluhan_tambahan']))) {
        $keluhan_tambahanerr = "please fill in the keluhan tambahan";
      }else {
        $keluhan_tambahan = trim($_POST['keluhan_tambahan']);
      }

    //faktor_memperingan
    if (empty(trim($_POST['faktor_memperingan']))) {
        $faktor_memperinganerr = "silahkan mengisi faktor yang memperingan";
      }else {
        $faktor_memperingan = trim($_POST['faktor_memperingan']);
      }

    //faktor_meperberat
    if (empty(trim($_POST['faktor_meperberat']))) {
        $faktor_meperberaterr = "silahkan mengisi faktor yang meperberat";
      }else {
        $faktor_meperberat = trim($_POST['faktor_meperberat']);
      }

    //minum_obat
    if (empty(trim($_POST['minum_obat']))) {
        $minum_obaterr = "silakan isi";
      }else {
        $minum_obat = trim($_POST['minum_obat']);
      }

    //persiapan_obat
    if (empty(trim($_POST['persiapan_obat']))) {
        $persiapan_obaterr = "please fill in the bpjs id";
      }else {
        $persiapan_obat = trim($_POST['persiapan_obat']);
      }
 
    //riwayat_penyakit
    if (empty(trim($_POST['riwayat_penyakit']))) {
        $riwayat_penyakiterr = "silahkan mengisi riwayat penyakit";
      }else {
        $riwayat_penyakit = trim($_POST['riwayat_penyakit']);
      }

    //alergi_obat
    if (empty(trim($_POST['alergi_obat']))) {
        $alergi_obaterr = "please fill in alergi obat";
      }else {
        $alergi_obat = trim($_POST['alergi_obat']);
      }
 
    //informasi_tambahan
    if (empty(trim($_POST['informasi_tambahan']))) {
        $informasi_tambahanerr = "please fill in the information";
      }else {
        $informasi_tambahan = trim($_POST['informasi_tambahan']);
      }

    //alamat
    if (empty(trim($_POST['alamat']))) {
        $alamaterr = "please fill in the alamat";
      }else {
        $alamat = trim($_POST['alamat']);
      }      

    //no_hp
    if (empty(trim($_POST['no_hp']))) {
        $no_hperr = "please fill in the ";
      }else {
        $no_hp = trim($_POST['no_hp']);
      }      

    //email
    if (empty(trim($_POST['email']))) {
        $emailerr = "please fill in the email";
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
    $myRandomString = date('Ymdhis'). generateRandomString(8);

    

    //insert to table
    if (!empty($nama) && !empty($no_bpjs)) {
      $sql = "INSERT INTO daftar (id, no_kk, nama, tgl_lahir, bpjs_tunai, no_bpjs, berat_badan, jenis_kelamin, keluhan_utama, keluhan_tambahan, faktor_memperingan, faktor_meperberat, minum_obat, persiapan_obat, riwayat_penyakit, alergi_obat, informasi_tambahan, alamat, no_hp, email) 
      VALUES ('{$myRandomString}', '{$no_kk}', '{$nama}', '{$tgl_lahir}', '{$bpjs_tunai}', '{$no_bpjs}', '{$berat_badan}', '{$jenis_kelamin}', '{$keluhan_utama}', '{$keluhan_tambahan}', '{$faktor_memperingan}', '{$faktor_meperberat}', '{$minum_obat}', '{$persiapan_obat}', '{$riwayat_penyakit}', '{$alergi_obat}', '{$informasi_tambahan}', '{$alamat}', '{$no_hp}', '{$email}')";
      $result = mysqli_query($mysqli, $sql);
      

      if (!$result) {
        die(mysqli_error($mysqli));
      }
      
    //   header('Location: contoh.php');
    }

    $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
    if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);
    $isiqrcode = '{"nama":"'.$nama.'","id":"'.$myRandomString.'"}';
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