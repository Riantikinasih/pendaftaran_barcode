<?php
    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', TRUE);
    include_once('config.php');
    $title = 'Update Open-Close Pendaftaran';


    $open = $close = $limit = '';
    $openerr = $closeerr = $limiterr ='';

    if (isset($_POST['submit'])) {
        $idopen = $_POST['idopen'];
        //position
        if (empty(trim($_POST['open']))) {
          $openerr = "please fill in the open";
        }else {
            $open = $_POST['open'];
            $open = date('Y-m-d H:i:s', strtotime($open));
        }
    
        // job description
        if (empty(trim($_POST['close']))) {
          $closeerr = "please fill in the close";
        }else {
            $close = $_POST['close'];
            $close = date('Y-m-d H:i:s', strtotime($close));
        }
        

         // job description
         if (empty(trim($_POST['limit']))) {
            $limiterr = "please fill in the limit";
          }else {
            $limit = trim($_POST['limit']);
          }
        
      
        if (!empty($close) && !empty($open)) {
          $sql = "UPDATE open_close SET close='$close', open='$open', limit='$limit' where id='$idopen'";
          $result = mysqli_query($mysqli, $sql);
      
          if (!$result) {
            die(mysqli_error($mysqli));
          }
        header('Location: index.php');
      }

    }

    $idopen = $_GET['idopen'];
    $sql = "SELECT * FROM open_close WHERE id = '{$idopen}'";
    $result = mysqli_query($mysqli, $sql);
    if (!$result) die('Error: Data not Available');

    $data = mysqli_fetch_array($result);

    function is_select($var, $val) {
      if ($var == $val) return 'selected="selected"';
      return false;
    }
    // include_once('../include/header-admin.php');
?>

<div class="row">
      <div class="column side">

      </div>

      <div class="column middle">
          <h2>OPEN-CLOSE Form</h2>
          <p>please fill in your position in the following form</p>
          
          <div class="container">
            <form action="open_close.php" method="post" enctype="multipart/form-data">
            
              <!-- open -->
              <div class="row">
                <div class="col-25">
                  <label for="position">open</label>
                </div>
                <div class="col-75">
                  <input type="datetime" id="open" value="<?php echo $data['open'] ?>" name="open" placeholder="Your position..">
                  <span class="error"><?php echo $openerr; ?></span>
                </div>
              </div>

                <!-- close -->
                <div class="row">
                <div class="col-25">
                  <label for="close">close</label>
                </div>
                <div class="col-75">
                  <input type="datetime" id="close" value="<?php echo $data['close'] ?>" name="close" placeholder="Your position..">
                  <span class="error"><?php echo $closeerr; ?></span>
                </div>
              </div>

                <!-- Limit -->
                <div class="row">
                <div class="col-25">
                  <label for="close">Limit</label>
                </div>
                <div class="col-75">
                  <input type="text" id="limit" value="<?php echo $data['limit'] ?>" name="limit" placeholder="Your position..">
                  <span class="error"><?php echo $limiterr; ?></span>
                </div>
              </div>
         

              <div class="row">
                <input type="hidden" name="idopen" value="<?php echo $data['id'];?>" >
                <input type="submit" name="submit" value="Edit" value="Submit">
              </div>
              </form>
            </div>
      </div>
      <div class="column side">

        </div>
  </div>