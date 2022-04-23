
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$order_num = $_GET['order_num'];

$order = mysqli_query($mysqli, "SELECT menu_list,quantity FROM kitchen_orders WHERE order_number='$order_num'");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Order Number <?php echo $order_num; ?></h4>
                  <p class="card-category">View order</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                <div class="card-body py-lg-5">
                  <form action="scripts/room_s.php" method='post'>
                            <div class="row">
                              <div class="col-md-4">
                                <img src="../assets/img/logo-inv.png">
                              </div>
                              <div class="col-md-4">
                                
                              </div>
                              <div class="col-md-4">
                                
                              </div>
                            </div>

                       <div class="row py-lg-4">
                          <div class="col-lg-8 col-md-10 ml-auto mr-auto ">
                            <div class="row">
                    <table class="table table-hover">
                      <tbody>
                          <?php
                          while($rows=mysqli_fetch_array($order)){

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
                              <div class="col-md-4"></div>
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