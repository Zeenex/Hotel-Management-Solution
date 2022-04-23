
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$inv_number = $_GET['invnumber'];

$order = mysqli_query($mysqli, "SELECT menu_list, quantity,price,total FROM kitchen_invoices WHERE inv_number='$inv_number'");

$order2 = mysqli_query($mysqli, "SELECT SUM(total) FROM kitchen_invoices WHERE inv_number='$inv_number'");
while($rows=mysqli_fetch_array($order2)){$f_total = $rows['SUM(total)']; $final_total = number_format($f_total);}

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Menu Order</h4>
                  <p class="card-category">End Process</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                <div class="card-body">
                  <form action="scripts/room_s.php" method='post'>
                        <div class="row">
                          <div class="col-md-6 ml-auto mr-auto text-center">
                            <h4 class="card-title">
                              Your order has been created.<br><br>
                              Total Cost is ₦<?php echo $final_total; ?><br><br>
                            </h4>
                          </div>
                        </div>

                    <div class="col-md-12">
                      <div class="places-buttons">
                        <div class="row">
                          <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="row">
                    <table class="table table-hover">
                      <tbody>
                          <?php
                          while($rows=mysqli_fetch_array($order)){

                            ?>

                        <tr>
                          <td>
                            <?php echo $rows['menu_list']; ?>
                          </td>
                          <td>
                            <?php echo $rows['quantity']; ?>
                          </td>
                          <td>
                            <?php echo $rows['price']; ?>
                          </td>
                          <td>
                            ₦<?php 

                            $price = $rows['total'];
                            $f_price = number_format($price);

                            echo $f_price; ?>
                          </td>
                        </tr>
                        <?php  } ?>
                      </tbody>
                    </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="places-buttons">
                        <div class="row">
                          <div class="col-md-6 ml-auto mr-auto text-center">
                            <h4 class="card-title">
                              Please confirm payment manually and continue below
                              
                            </h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="row">
                              <div class="col-md-4">
                                
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block">Print Reciept</button>
                              </div>
                              <div class="col-md-4">
                                
                              </div>
                            </div>
                          </div>
                        </div>
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