
<?php
include("../config.php");
include("./header.php");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
$room_id = $_GET['room_id'];

$uroom = mysqli_query($mysqli, "SELECT * FROM rooms WHERE id = '$room_id'");
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Rooms Record</h4>
                      <p class="card-category"></p><br>
                      <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">

<?php                  
while($row=mysqli_fetch_array($uroom))
{
  echo'
                  <form action="scripts/update_room.php" method="post">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                          <label class="bmd-label-floating">Room Type</label>
                          <input type="text" name="r_type" value="'.$row['room_type'].'" class="form-control">
                          <input type="hidden" name="r_id" value="'.$room_id.'" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Room Number</label>
                          <input type="text" name="r_number" value="'.$row['room_number'].'"class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost</label>
                          <input type="text" name="r_cost" value="'.$row['cost'].'" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="building" class="form-control">
                                <option value="'.$row['building'].'">'.$row['building'].'</option>
                                <option value="Building A">Building A</option>
                                <option value="Building B">Building B</option>
                                <option value="Building C">Building C</option>
                                <option value="Building D">Building D</option>
                                
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select  name="building_floor" class="form-control">
                                <option value="'.$row['floor'].'">'.$row['floor'].'</option>
                                <option value="Ground Floor">Ground Floor</option>
                                <option value="Floor 1">Floor 1</option>
                                <option value="Floor 2">Floor 2</option>
                                <option value="Floor 3">Floor 3</option>
                                
                              </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">Cost</label>
                          <input type="text" name="r_cost" class="form-control"> -->
                        </div>
                      </div>
                    </div>
                  

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Update Room</button>
                    <div class="clearfix"></div>
                  </form>
                  ';

}
?>
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