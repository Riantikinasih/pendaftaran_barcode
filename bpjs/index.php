<?php
require_once 'config.php';
date_default_timezone_set("Asia/Jakarta");
$sql ="SELECT count(*) as total FROM contoh WHERE tanggal >= CURDATE()-1 && tanggal < (CURDATE() + INTERVAL 1 DAY)";
// echo mysqli_result($sql, 0); 

$result=mysqli_query($mysqli,$sql);
$data=mysqli_fetch_assoc($result);

$hasil = (float)$data['total'];
// echo $hasil;

$sql_date = "SELECT * FROM open_close WHERE id = '1'";
$result_date=mysqli_query($mysqli,$sql_date);
$data_date=mysqli_fetch_assoc($result_date);

$open_date = $data_date['open'];
$close_date = $data_date['close'];
$limit = $data_date['limit'];
// echo $open_date .'<br>'. $close_date;

$today_open = strtotime($data_date['open']);
$today_close = strtotime($data_date['close']);

$hasil_limit = (float)$data_date['limit'];

// echo $today_open;

?>

<?php
// date_default_timezone_set("Asia/Jakarta");

// if($today_open > date("Y-m-d H:i:s")){
//     header('Location: open.php');
// }elseif ($today_close < date("Y-m-d H:i:s")) {
//     header('Location: close.php');
// }elseif($hasil < 17){
//     header('Location: daftar.php');
// }else{
//     header('Location: tutup.php');
// }

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
            background-size: cover; 
              }
        .wrapper{ width: 350px; padding: 20px; margin:30px auto;}

        .modal-header-warning {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #f0ad4e;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
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

  <?php 

  if($hasil < $hasil_limit){
        $button = '<a href="daftar.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Daftar</a>';
    }else{
        $button = '<button type="button" class="btn btn-success btn-lg active" data-toggle="modal" data-target="#myModal">Daftar</button>';
        
    }
    
    
    $date_now = strtotime(date("Y-m-d H:i:s"));
    // $open_close = ($today_close *$today_open)/$date_now;
    // $real_open_close = $today_close + $today_open;
    // $real_date = $real_open_close - $date_now;
    // echo number_format($date_now);
    // echo '<br>'.number_format($open_close);
    // echo '<br>' . $real_date;
//    echo $today_open . ' <br> ' . $today_close . '<br>'. $date_now;
    if( $date_now < $today_close || $date_now < $today_open ){
        echo '
        <div class="row">
        <div class="col-lg-2"> 
        </div>  

            <div class="col-lg-8"> 
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Pendaftaran dibuka..</h3></div>
                                <div id="tablePanelBody" class="panel-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Tanggal & jam</th>
                                            </tr>
                                            <tr>
                                                <td>Pendaftaran ditutup</td>
                                                <td>'. $close_date.'</td>                    
                                            </tr>

                                            
                                        </table>'.$button.'
                                       
                                </div>
                                
                            <div>
                        <div>
            </div>  
        <div class="col-lg-2"> 
        </div> 
    </div>';
    }else{
        echo '
        <div class="row">
        <div class="col-lg-2"> 
        </div>  

            <div class="col-lg-8"> 
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Mohon maaf pendaftaran tutup....!!</h3></div>
                                <div id="tablePanelBody" class="panel-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Pembukaan Daftar</th>
                                                <th>Pemnutupan Daftar</th>
                                                <th>Kuota pasien</th>
                                            </tr>
                                            <tr>
                                                <td>Informasi Pendaftran</td>
                                                <td>'.$open_date.'</td>
                                                <td>'.$close_date.'</td>
                                                <td>'.$limit.'</td>
                                            </tr>
                                        </table>
                                </div>
                            <div>
                        <div>
            </div>  
        <div class="col-lg-2"> 
        </div> 
    </div>';
    }
  ?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header modal-header-warning">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><i class="glyphicon glyphicon-hand-right"></i> Maaf Pendaftaran sudah Closed...</h3>
        </div>
        <div class="modal-body">
          <p>Kuota saat ini sudah mencapai limit yaitu<b> <?php echo $limit;?> </b>Pasien
          <br>Silakan Daftar kembali sesuai dengan jadwal Dokter gigi klinik
          <br><br> Terima Kasih...</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>

<!-- <script>
function myFunction() {
  alert("Maaf...! I pendaftran sudah closed Silakan daftar kembali besok");
}
</script> -->
</body>
</html>