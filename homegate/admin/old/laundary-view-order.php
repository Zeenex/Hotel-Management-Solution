
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
                  <h4 class="card-title ">Laundary Orders</h4>
                  <p class="card-category"> </p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Order Number
                        </th>
                        <th>
                          Customer Name
                        </th>
                        <th>
                          Item Description
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Date Added
                        </th>
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