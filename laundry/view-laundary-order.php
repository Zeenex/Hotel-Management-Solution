
<?php

include("./header.php");
include("../config.php");

$lundsql = mysqli_query($mysqli, "SELECT * FROM laundary_order GROUP BY order_number");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Orders</h4>
                  <p class="card-category"></p><br>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <td>
                          Order Number
                        </td>
                        <td>
                          Customer Name
                        </td>
                        <td>
                          Item Description
                        </td>
                        <td>
                          Address
                        </td>
                        <td>
                          Date Added
                        </td>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($lundsql)) {
                          
                          echo'
                        <tr>
                          <td>
                           '.$row['order_number'].'
                          </td>
                          <td>
                            '.$row['c_name'].'
                          </td>
                          <td>
                            '.$row['item_desc'].'
                          </td>
                          <td>
                            '.$row['address'].'
                          </td>
                          <td class="text-primary">
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