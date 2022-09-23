
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$order_num = $_GET['order_num'];
$inv_num = $_GET['inv_num'];

$order = mysqli_query($mysqli, "SELECT * FROM kitchen_orders WHERE order_number='$order_num'");

$order2 = mysqli_query($mysqli, "SELECT SUM(total) FROM kitchen_invoices WHERE inv_number='$inv_num'");
while($rows=mysqli_fetch_array($order2)){$f_total = $rows['SUM(total)']; $final_total = number_format($f_total);}

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
                              <div class="col-md-4" style="text-align: center;"><h4 class="card-category">Menu Order No: <?php echo $order_num; ?></h4></div>
                              <div class="col-md-4">
                               <p class="card-category" style="text-align: center;">Date: <?php echo date("Y-m-d"); ?></p>
                              </div>
                            </div>
                </div>
                <div class="card-body">
                  <form action="scripts/room_s.php" method='post'>
                        <div class="row py-lg-5">
                          <div class="col-md-6 ml-auto mr-auto text-center">
                            <h4 class="card-title">
                              
                              Total Cost is ₦<?php echo $final_total; ?><br><br>
                            </h4>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="row">
                    <table class="table table-hover">
                      <tbody>
                          <?php
                          while($rows=mysqli_fetch_array($order)){
                            $staff = $rows['staff'];
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
                        <div class="form-group">
                          
                        
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                       <b>Ordered By: <?php echo $staff; ?></b>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        
                        </div>
                      </div>
                       </div>
                            <div class="row">
                              <div class="col-md-4">
                                
                              </div>
                              <div class="col-md-4">
                                <button name="submit" class="btn btn-primary btn-block">Print Order</button>
                              </div>
                              <div class="col-md-4">
                                <button name="submit" class="btn btn-primary btn-block">Print Reciept</button>
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