<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTOH</title>
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
    <form action="proses.php" method="post">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="email" />
    </div>
    
        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>

        <br>


    </form>
    </div>
    <br>
</div>
</body>
</html>