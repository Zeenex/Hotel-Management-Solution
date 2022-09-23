
<?php

include("./header.php");
include("../config.php");

$roomsql = mysqli_query($mysqli, "SELECT * FROM rooms");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View All Rooms</h4>
                  <p class="card-category"></p><br>
                      <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <td>Room</td>
                        <td>Room Type</td>
                        <td>Building</td>
                        <td>Floor</td>
                        <td>Room Cost</td>
                        <td>Room Status</td>
                        <td>Date Updated</td>
                        <td></td>
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
                            '.$row['building'].'
                          </td>
                          <td>
                            '.$row['floor'].'
                          </td>
                          <td>
                            ₦'.number_format($row['cost']).'
                          </td>
                          <td class="text-primary">
                            '.$row['status'].'
                          </td>
                          <td>
                            '.$row['update_date'].'
                          </td>
                          <td>
                           <a href="./update-room.php?room_id='.$row['id'].'"><i class="fa fa-edit" style="color: green"></i></a>
                           &nbsp;&nbsp;
                           <a onclick="return confirm(\'sure to DELETE ROOM !\');" href="scripts/room_del.php?room_id='.$row['id'].'"><i class="fa fa-trash" style="color: red"></i> </a>
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