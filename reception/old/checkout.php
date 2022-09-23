
<?php

include("./header.php");
include("../config.php");


$customer1 = mysqli_query($mysqli, "SELECT * FROM ccheck WHERE status='Active'");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Customer Check-Out</h4>
                  <p class="card-category">Start Process</p>
                </div>
                <div class="card-body">
                  <form action="scripts/checkout_s.php" method='post'>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                      <select class="form-control" name="cname">
                        <option>Select Customer</option>
                              <?php
                              while($rows=mysqli_fetch_array($customer1)){

                              echo'
                              <option value="'.$rows['name'].'">'.$rows['name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                        </div>
                      </div>
                    </div>


                    <button type="submit" name="submit" class="btn btn-primary pull-right">Check-Out</button>
                    <div class="clearfix"></div>
                  </form>
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