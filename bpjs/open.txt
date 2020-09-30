
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
        <p style="font: 16px sans-serif">Data Pendaftar</p>   
        </div>
    </div>
     
  </div>

  <div class="row">
    <div class="col-lg-2"> 
    </div>  

        <div class="col-lg-8"> 
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Data Pendaftar Online</h3></div>
                            <div id="tablePanelBody" class="panel-body">
                                    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include 'config.php';
                                        $daftar = mysqli_query($mysqli,"SELECT * FROM contoh");
                                        while($row = mysqli_fetch_array($daftar))
                                        {
                                            echo "<tr>
                                            <td>".$row['nama']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['tanggal']."</td>
                                            
                                        </tr>";
                                        }
                                    ?>
                                    </tbody>
                                       

                                        <script>
                                            $(document).ready(function(){
                                                $('#tabel-data').DataTable();
                                            });
                                        </script>
                                    </table>

                            </div>
                        <div>
                    <div>
        </div>  
    <div class="col-lg-2"> 
    </div> 
    </div>
</div>
</body>
</html>