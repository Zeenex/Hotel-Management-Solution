
<?php

include("./header.php");
include("../config.php");

$dash = mysqli_query($mysqli, "SELECT * FROM staff WHERE status='active'");
$staff_count = ($row = mysqli_num_rows($dash));

$dash1 = mysqli_query($mysqli, "SELECT * FROM accounting_orders WHERE added_date >= curdate() GROUP BY order_number");
$order_count = ($row = mysqli_num_rows($dash1));

$dash2 = mysqli_query($mysqli, "SELECT * FROM accounting_invoices WHERE added_date >= curdate() GROUP BY inv_number");
$receipt_count = ($row = mysqli_num_rows($dash2));

$dash3 = mysqli_query($mysqli, "SELECT * FROM customers");
$customer_count = ($row = mysqli_num_rows($dash3));
?>



      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card ">

              <!--<img src="../images/slide_6.jpg" alt="">-->

            </div>
          </div>
        </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">manage_accounts</i>
                  </div>
                  <p class="card-category">Active Staff</p>
                  <h3 class="card-title"><?php echo $staff_count; ?>
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">manage_accounts</i>Active Staff Online
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">receipt_long</i>
                  </div>
                  <p class="card-category">Today's Order</p>
                  <h3 class="card-title"><?php echo $order_count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">receipt_long</i> Total number of orders generated today
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">receipt</i>
                  </div>
                  <p class="card-category">Today's Receipt</p>
                  <h3 class="card-title"><?php echo $receipt_count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">receipt</i>Total number of receipt generated today
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people</i>
                  </div>
                  <p class="card-category">Cutomers</p>
                  <h3 class="card-title"><?php echo $customer_count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">people</i> Total number of registered customers
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

<?php

include("./footer.php");

?>