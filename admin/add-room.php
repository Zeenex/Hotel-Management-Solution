
<?php

include("./header.php");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Rooms</h4>
                      <p class="card-category"></p><br>
                      <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
                  <form action="scripts/add_room.php" method='post'>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="r_type" class="form-control">
                                <option>Room Type</option>
                                <option value="Business">Business</option>
                                <option value="Economy">Economy</option>
                                <option value="Business+">Business+</option>
                                <option value="Executive+">Executive+</option>
                                <option value="Executive">Executive</option>
                                <option value="Transist Suite">Transist Suite</option>
                                
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Room Number</label>
                          <input type="text" name="r_number" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost</label>
                          <input type="text" name="r_cost" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="building" class="form-control">
                                <option>Building Block</option>
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
                                <option>Floor</option>
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

                  

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Room</button>
                    <div class="clearfix"></div>
                  </form>
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