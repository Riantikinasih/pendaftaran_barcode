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

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.min.css" />
    <style type="text/css">
        body{ font: 14px sans-serif;
            background: url(gigi-background.jpg);
              background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;  }
        .wrapper{ width: 350px; padding: 20px; margin:30px auto;}
    </style>
    
</head>
<body>

<div class="container">
<div class="page-header" >
    <div class="row">
        <div class="col-lg-2"> 
        <img src="gigi.png" class="img-rounded" alt="Cinque Terre" width="100" height="120">  
        </div>
        <div class="col-lg-10"> 
        <h1>Klinik Sumber Waras</h1>  
        <p style="font: 16px sans-serif">Form pendaftaran ini khusus untuk periksa kedokter gigi</p>   
        </div>
    </div>
     
  </div>
    
  
    <div class="panel panel-default">
    <div class="panel-heading"><h4>Form Pendaftaran Pasien</h4></div>
    <div class="panel-body">
    <form action="action-daftar.php" method="post">
    <div class="form-group">
            <label>No Kartu Keluarga/NIK</label>
            <input type="text" name="no_kk" class="form-control" placeholder="Masukan No KK" />
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
	<div class="form-group">
            <label>Tgl Lahir</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Masukan Tgl lahir" />
        </div>
    
    <div class="form-group">
        <label>BPJS/Tunai</label>
        <select class="form-control placeholder" id="bpjs_tunai"  name="bpjs_tunai" title="Some placeholder text...">
        <option data-hidden="true">-- Pilih BPJS/Tunai--</option>
            <option value="BPJS">BPJS</option>
            <option value="Tunai">Tunai</option>
        </select>
    </div>

    <div class="form-group">
        <label>No BPJS</label>
        <input type="number" name="no_bpjs" class="form-control"  id="no_bpjs" placeholder="Masukan No Handphone" />
    </div>
    <div class="form-group">
        <label>Berat Badan</label>
        <input type="number" name="berat_badan" id="berat_badan" class="form-control" placeholder="Masukan Berat Badan" />
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-control placeholder" name ="jenis_kelamin" id="jenis_kelamin" title="Some placeholder text...">
        <option data-hidden="true">-- Pilih jenis kelamin--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Keluhan Utama</label>
        <input type="text" name="keluhan_utama" id="keluhan_utama" class="form-control" placeholder="Maukan keluhan anda" />
    </div>
    <div class="form-group">
        <label>Keluhan Tambahan</label>
        <input type="text" name="keluhan_tambahan" id="keluhan_tambahan" class="form-control" placeholder="Masukan keluhan tambahan" />
    </div>
    <div class="form-group">
	     <label>Faktor yang Memperingan</label>
	     <textarea name="faktor_memperingan" id="faktor_memperingan" class="form-control" rows="5"placeholder="Masukan faktor yang memperingan" ></textarea>
	</div> 
    <div class="form-group">
	     <label>Faktor yang Memperberat anda?</label>
	     <textarea name="faktor_meperberat" id="faktor_meperberat" class="form-control" rows="5"placeholder="Masukan faktor yang memperberat" ></textarea>
	</div> 
    <div class="form-group">
	     <label>Sudah minum obat apa saja?</label>
	     <textarea name="minum_obat" id="minum_obat"  class="form-control" rows="5"placeholder="Masukan jawaban anda" ></textarea>
	</div> 
    <div class="form-group">
	     <label>Ada persiapan obat apa saja dirumah?</label>
	     <textarea name="persiapan_obat" id="persiapan_obat" class="form-control" rows="5"placeholder="Masukan jawaban anda" ></textarea>
	</div>
    <div class="form-group">
	     <label>Riwayat penyakit sebelumnya?</label>
	     <textarea name="riwayat_penyakit" id="riwayat_penyakit" class="form-control" rows="5"placeholder="Masukan jawaban anda" ></textarea>
	</div>
    <div class="form-group">
        <label>Alergi obat</label>
        <select class="form-control placeholder" name="alergi_obat" id="alergi_obat" title="Some placeholder text...">
        <option data-hidden="true">Pilih statement</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select>
    </div>
    <div class="form-group">
	     <label>Informasi Tambahan</label>
	     <textarea name="informasi_tambahan" id="informasi_tambahan" class="form-control" rows="5"placeholder="Masukan Informasi Tambahan" ></textarea>
	</div> 
	<div class="form-group">
	     <label>Alamat</label>
	     <textarea name="alamat" id="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
	</div> 
	<div class="form-group">
            <label>No HP</label>
            <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Masukan No HP" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email Anda" />
        </div>

        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Daftar</button>

    </form>
    </div>
    <br>
</div>
</body>
</html>