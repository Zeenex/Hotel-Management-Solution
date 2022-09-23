<?php
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Homegate Hotel Management</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <!--Made with love by Mutiullah Samim -->
   <link rel="icon" type="image/png" href="assets/img/fav.png">
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Hotel Manager</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><img src="images/gate_3.png"></span>
        </div>
      </div>
      <div class="card-body">
        <form action="controller/login.php" method='post' enctype="multipart/form-data">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="password">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn float-right login_btn">
          </div>
        </form>

      </div>
<div class="card-footer" style="font-size: 13px;">
        <div class="d-flex justify-content-center links">
          <h6 style="color: #ae2721"><?php echo $msg; ?></h6>
        </div>
        <div class="d-flex justify-content-center">
          
        </div>
      </div>
    </div>
  </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>