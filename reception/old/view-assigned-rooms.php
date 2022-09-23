
<?php

include("./header.php");
include("../config.php");

$roomsql = mysqli_query($mysqli, "SELECT * FROM assign_room");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Assigned Rooms</h4>
                  <p class="card-category"> Check room availablility</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Room
                        </th>
                        <th>
                          Room Type
                        </th>
                        <th>
                          Room Cost
                        </th>
                        <th>
                          Customer Name
                        </th>
                        <th>
                          Check-In
                        </th>
                        <th>
                          Check-Out
                        </th>
                        <th>
                          Total Cost
                        </th>
                        <th>
                          Date Updated
                        </th>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($roomsql)) {
                          
                          echo'
                        <tr>
                          <td>
                           '.$row['room_number'].'
                          </td>
                          <td>
                            '.$row['room_type'].'
                          </td>
                          <td>
                            '.$row['cost'].'
                          </td>
                          <td>
                            '.$row['customer_name'].'
                          </td>
                          <td>
                            '.$row['check_In'].'
                          </td>
                          <td>
                            '.$row['check_out'].'
                          </td>
                          <td>
                            '.$row['total_cost'].'
                          </td>
                          <td class="text-primary">
                            '.$row['update_date'].'
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