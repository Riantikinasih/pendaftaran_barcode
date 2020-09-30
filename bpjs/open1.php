
<?php
    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', TRUE);
    include_once('config.php');
    $title = 'open close';
    $no = 1;

    $sql = 'SELECT * FROM open_close';
    $result = mysqli_query($mysqli, $sql);

    
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

   
    
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
        <p style="font: 16px sans-serif">OPEN CLOSE</p>   
        </div>
    </div>
     
  </div>

  <div class="row">
    <div class="col-lg-2"> 
    </div>  

        <div class="col-lg-8"> 
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Data OPEN CLOSE Online</h3></div>
                            <div id="tablePanelBody" class="panel-body">
                                    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>Open</th>
                                            <th>CLOSE</th>
                                            <th>Limit Pasien</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysqli_fetch_array($result)): ?>
                                    <tr>
                                    
                                     
                                      <td><?php echo $row['close'];?></td>
                                      <td><?php echo $row['open'];?></td>
                                      <td><?php echo $row['limit'];?></td>
                                      <td>
                                        <a class="btn btn-default" href="open_close.php?idopen=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                        </td>
                                    </tr>
                                      <?php $no++; ?>
                                    <?php endwhile; ?>

                                  </table>
            
                    </div>