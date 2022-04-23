<?php

include("./header.php");
include("../config.php");

$dash1 = mysqli_query($mysqli, "SELECT * FROM kitchen_orders WHERE added_date >= curdate() GROUP BY order_number");
$daily_count = ($row = mysqli_num_rows($dash1));

$dash2 = mysqli_query($mysqli, "SELECT * FROM kitchen_orders GROUP BY order_number");
$order_count = ($row = mysqli_num_rows($dash2));

$dash3 = mysqli_query($mysqli, "SELECT * FROM staff WHERE role='kitchen'");
$staff_count = ($row = mysqli_num_rows($dash3));
?>
      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card ">

             <!-- <img src="../images/slide_8.jpg" alt="">-->

            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-4">

            </div>
            <div class="col-8">

                                <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="#"><div class="card card-stats">
                                      <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                          <i class="material-icons">receipt_long</i>
                                        </div>
                                        <p class="card-category">Daily Order</p>
                                        <h3 class="card-title"><?php echo $daily_count; ?></h3>
                                      </div>
                                      <div class="card-footer">
                                        <div class="stats">
                                          <i class="material-icons">local_offer</i> Number of Orders Today
                                        </div>
                                      </div>
                                    </div></a>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="#"><div class="card card-stats">
                                      <div class="card-header card-header-info card-header-icon">
                                        <div class="card-icon">
                                          <i class="material-icons">receipt_long</i>
                                        </div>
                                        <p class="card-category">Total Orders</p>
                                        <h3 class="card-title"><?php echo $order_count; ?></h3>
                                      </div>
                                      <div class="card-footer">
                                        <div class="stats">
                                          <i class="material-icons">local_offer</i> Total Orders
                                        </div>
                                      </div>
                                    </div></a>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="#"><div class="card card-stats">
                                      <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                          <i class="material-icons">people</i>
                                        </div>
                                        <p class="card-category">Total Staff</p>
                                        <h3 class="card-title"><?php echo $staff_count; ?></h3>
                                      </div>
                                      <div class="card-footer">
                                        <div class="stats">
                                          <i class="material-icons">local_offer</i> No of staff in Resturant
                                        </div>
                                      </div>
                                    </div></a>
                                  </div>

                                </div>
            </div>

          </div>


        </div>
      </div>
<?php

include("./footer.php");

?>