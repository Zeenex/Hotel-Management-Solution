
<?php

include("./header.php");
include("../config.php");

$orders = mysqli_query($mysqli, "SELECT * FROM `kitchen_invoices` WHERE `source`='Reception' AND added_date >= curdate() GROUP BY inv_number");



?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Reciepts</h4>
                  <p class="card-category"> View all daily reciept</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-black">
                        <th>
                          <b>Reciept No</b>
                        </th>
                        <th>
                          <b>Source</b>
                        </th>
                        <th>
                          <b>Ordered By</b>
                        </th>
                        <th>
                          <b>Date</b>
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($orders)) {                       
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
                           '.$row['added_date'].'
                          </td>
                          <td>
                            <a href="reciept-view.php?inv_num='.$row['inv_number'].'">View</a>
                          </td>
                          <td>
                            Print
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