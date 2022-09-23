
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$order_num = $_GET['order_num'];

$order = mysqli_query($mysqli, "SELECT * FROM accounting_orders WHERE order_number='$order_num'");
$order2 = mysqli_query($mysqli, "SELECT added_date FROM accounting_orders WHERE order_number='$order_num'");
while($rows=mysqli_fetch_array($order2)){$date_add = $rows['added_date'];}

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                              <div class="col-md-12" style="text-align: center;">
                                <img src="../assets/img/logo-inv.png">
                                <p class="card-category">Plot 6, Babafemi Osoba Crescent Off Admiralty Road Lekki Phase 1</p>
                                <p class="card-category">Tel: 01-2708261 – 4,01- 2630045, 01 7730533 - 4</p>
                              </div>
                              <br>
                            <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-4" style="text-align: center;"><h4 class="card-category">Order No: <?php echo $order_num; ?></h4></div>
                              <div class="col-md-4" style="text-align:center;"><b><p class="card-category"><?php echo $date_add; ?></p></b></div>
                            </div>
                </div>
                <div class="card-body py-lg-5">
                  <form action="scripts/room_s.php" method='post'>

                       <div class="row py-lg-4">
                          <div class="col-lg-8 col-md-10 ml-auto mr-auto ">
                            <div class="row">
                    <table class="table table-hover">
                      <tbody>
                          <?php
                          while($rows=mysqli_fetch_array($order)){
                            $date_add = $rows['added_date'];
                            ?>

                        <tr>
                          <td>
                            <?php echo $rows['item_desc']; ?>
                          </td>
                          <td>
                            <?php echo $rows['quantity']; ?>
                          </td>

                        </tr>
                        <?php  } ?>
                      </tbody>
                    </table>
                            </div>
                          </div>
                        </div>

                            <div class="row">
                              <div class="col-md-4">
                                
                              </div>
                              <div class="col-md-4"><button name="submit" class="btn btn-primary btn-block">Print Order</button></div>
                              <div class="col-md-4">
                               
                              </div>
                            </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php

include("./footer.php");

?>