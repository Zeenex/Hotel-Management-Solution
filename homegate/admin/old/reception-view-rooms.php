
<?php

include("./header.php");
include("../config.php");

$roomsql = mysqli_query($mysqli, "SELECT * FROM rooms");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Rooms</h4>
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
                          Status
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
                            ₦'.number_format($row['cost']).'
                          </td>
                          <td>
                            '.$row['status'].'
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