
<?php

include("./header.php");
include("../config.php");

$orders = mysqli_query($mysqli, "SELECT inv_number,source,staff,SUM(total) FROM laundary_invoices GROUP BY inv_number");



?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Laundary Invoices</h4>
                  <p class="card-category"> View all laundary invoices</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-black">
                        <th>
                          Invoice
                        </th>
                        <th>
                          Source
                        </th>
                        <th>
                          Staff
                        </th>
                        <th>
                          Total
                        </th>
                        <th>
                          
                        </th>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($orders)) {
                        $f_total = $row['SUM(total)']; $final_total = number_format($f_total);                         
                          echo'
                        <tr>
                          <td>
                          '.$row['inv_number'].'
                           
                          </td>
                          <td>
                            '.$row['source'].'
                          </td>
                          <td>
                           '.$row['staff'].'
                          </td>
                          <td>
                            '.$final_total.'
                          </td>
                          <td>
                            <a href="reciept-view.php?inv_num='.$row['inv_number'].'">View</a>
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