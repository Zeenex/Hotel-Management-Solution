
<?php

include("./header.php");
include("../config.php");

$query1 =  mysqli_query($mysqli,"SELECT * FROM `accounting_orders` WHERE added_date >= curdate()");

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
                              <div class="col-md-4" style="text-align: center;"><h4 class="card-category">Daily Order Report</h4></div>
                              <div class="col-md-4">
                               <p class="card-category" style="text-align: center;">Date: <?php echo date("Y-m-d"); ?></p>
                              </div>
                            </div>
                </div>

                            <div class="row py-lg-5">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">

                              <div class="table-responsive">
                                <table class="table">
                                <thead class="text-primary">
                                  <tr>

                                    <td> Order No </td>
                                    <td> Order Source </td>
                                    <td> Staff </td>
                                    <td> Item Description </td>
                                    <td> Quantity</td>
                                    <td> Added Month</td>
                                    <td>  </td>

                                  </tr>
                                </thead>
                                  <tbody>
                                        <?php

                                          while($rows=mysqli_fetch_array($query1)){

                                        echo'
                                          <tr>
                                          <td>'.$rows['order_number'].'</td>
                                          <td>'.$rows['source'].'</td>
                                          <td>'.$rows['staff'].'</td>
                                          <td>'.$rows['item_desc'].'</td>
                                          <td>'.$rows['quantity'].'</td>
                                          <td>'.$rows['added_month'].'</td>
                                          <td><a href="order-view.php?order_num='.$rows['order_number'].'">View Order</a></td>
                                          </tr>
                                        ';
                                        }

                                        ?>
                                        

                                  </tbody>
                                </table>
                              </div>

                              </div>
                              <div class="col-md-2"></div>
                            </div> 

                   
                    <div class="clearfix"></div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">

            </div>
          </div>
        </div>
      </div>

<?php

include("./footer.php");

?>