
<?php

include("./header.php");
include("../config.php");

$ressql = mysqli_query($mysqli, "SELECT * FROM ccheck WHERE status='Reserved'");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Reservation</h4>
                  <p class="card-category"> Check room availablility</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Customer Name
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Nature of Visit
                        </th>
                        <th>
                          Nationality
                        </th>
                        <th>
                          Date Reserved
                        </th>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($ressql)) {
                          
                          echo'
                        <tr>
                          <td>
                           '.$row['name'].'
                          </td>
                          <td>
                            '.$row['address'].'
                          </td>
                          <td>
                            '.$row['nature_visit'].'
                          </td>
                          <td>
                            '.$row['nationality'].'
                          </td>
                          <td class="text-primary">
                            '.$row['add_date'].'
                          </td>
                        </tr>


                          ';

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