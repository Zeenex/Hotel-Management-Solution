<?php
session_start();
if (!isset($_SESSION["username"])) {

header("Location: ../index.php");
}

$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/fav.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Homegate Management Solution - Kitchen
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700|Work+Sans:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <style type="text/css">
    
    ul {
  list-style-type:none;
  margin:0;
  padding:0;
  font-size: 20px;
  line-height: 44px;
}
    #invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);padding:2mm;margin: 0 auto;width: 80mm;
  background: #FFF;
  padding-top: 20px;
}
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #bot{ /* Targets all id with 'col-' */
  border-bottom: 2px dotted #EEE;
  margin-bottom: 10px;
}

#top{min-height: 50px;}
#mid{min-height: 50px;} 
#bot{ min-height: 50px; margin-top: 30px}

/*#top .logo{
  
  height: 46.7px;
  width: 150px;
  background: url(../assets/img/logo.png) no-repeat;
  background-size: 100%;
}*/
#top h2{
  margin-top: 10px;
  font-size: 14px;
  font-weight: bold;
}
.clientlogo{
  float: left;
  height: 60px;
  width: 60px;
  background: url(../assets/img/logo.png) no-repeat;
  background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  text-align: center;
  margin: 0;
}
.info p{
  text-align: center;
  margin: 0;
  padding: 0;
  font-size: 12px;
}
.info-2{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
th{
  padding: 5px 0 5px 5px;
  //border: 1px solid #EEE
  font-weight: bold;
}
td{
  padding: 5px 0 5px 5px;
  //border: 1px solid #EEE
  font-size: 12px;
}
.tabletitle{
  padding: 5px;
  font-size: 12px;
  background: #EEE;
  text-align: center;

}
.service{border-bottom: 1px solid #EEE;font-size: 12px;text-align: center;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 30px;
  text-align: center;
}
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="https://homegate-ng.com" class="simple-text logo-normal">
          <img src="../assets/img/logo.png" alt="">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-menu" aria-expanded="false" aria-controls="ui-menu">
              
              <p><b>Manage Menu</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>              
              
            </a>
            <div class="collapse" id="ui-menu">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./add-menu.php"><i class="material-icons">menu</i><p>Add Menu</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./view-menu.php"><i class="material-icons">menu</i><p>View Menu</p></a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-order" aria-expanded="false" aria-controls="ui-order">              
              <p><b>Manage Orders</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-order">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./daily-orders.php"><i class="material-icons">receipt_long</i><p>Daily Orders</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./filter-order-num.php"><i class="material-icons">receipt_long</i><p>Filter by Number</p></a></li>                            

              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-reciept" aria-expanded="false" aria-controls="ui-reciept">              
              <p><b>Manage Reciepts</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-reciept">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./daily-reciept.php"><i class="material-icons">receipt</i><p>Daily Reciepts</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./filter-reciept-num.php"><i class="material-icons">receipt</i><p>Filter by Number</p></a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-store" aria-expanded="false" aria-controls="ui-store">              
              <p><b>Manage Store</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-store">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./store-add.php"><i class="material-icons">archive</i><p>Add Store Items</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./store-view.php"><i class="material-icons">archive</i><p>View Store Items</p></a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./change-pwd.php">
              <i class="material-icons">keys</i>
              <p>Password Reset</p>
            </a>
          </li>
        <li class="nav-item"> <a class="nav-link" href="../logout.php"><i class="material-icons">logout</i><p>Logout</p></a></li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Welcome | <b><?php echo ucfirst($username); ?></b></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <b>Kitchen</b>
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">                  
                  <a class="dropdown-item" href="../logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->