
<?php

include("./header.php");
include("../config.php");

$orders = mysqli_query($mysqli, "SELECT * FROM kitchen_orders WHERE added_date >= curdate() GROUP BY order_number");



?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Kitchen Orders</h4>
                  <p class="card-category"></p><br>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <td>
                          Order No
                        </td>
                        <td>
                          Source
                        </td>
                        <td>
                          Ordered By
                        </td>
                        <td>
                          Date
                        </td>
                        <td>
                          
                        </td>

                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($orders)) {                       
                          echo'
                        <tr>
                          <td>
                          '.$row['order_number'].'
                           
                          </td>
                          <td>
                            '.$row['source'].'
                          </td>
                          <td>
                           '.$row['staff'].'
                          </td>
                          <td>
                           '.$row['added_date'].'
                          </td>
                          <td>
                            <a href="order-view.php?order_num='.$row['order_number'].'">View</a>
                          </td>
                        </tr>


                          ';


                            // code...
                          }

                        ?>




                      </tbody>
                    </table>
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