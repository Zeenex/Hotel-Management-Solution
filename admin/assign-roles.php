
<?php

include("./header.php");
include("../config.php");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
$staffsql = mysqli_query($mysqli, "SELECT * FROM staff");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Change Staff Designation</h4>
                      <p class="card-category"></p><br>
                      <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
                  <form action="scripts/change_desc.php" method='post'>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="s_name" class="form-control">
                                <option>Select Staff</option>
                              <?php
                              while($rows=mysqli_fetch_array($staffsql)){

                              echo'
                              <option value="'.$rows['staff_name'].'">'.$rows['staff_name'].'</option>
                              ';
                              }

                              ?>
                                
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="s_roles" class="form-control">
                                <option>Select Staff Designation</option>
                                <option value="admin">admin</option>
                                <option value="accounting">Accounting</option>
                                <option value="restaurant">Restaurant</option>
                                <option value="reception">Reception</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="laundry">Laundry</option>
                                
                              </select>
                            </div>
                        </div>
                      </div>
                    </div>

                 

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Change Designation</button>
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