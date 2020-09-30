<?php


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



?>