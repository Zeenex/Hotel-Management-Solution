
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
                  <h4 class="card-title">Add Staff</h4>
                      <p class="card-category"></p><br>
                      <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
                  <form action="scripts/add_staff.php" method='post'>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="s_roles" class="form-control">
                                <option>Select Staff Designation</option>
                                <option value="admin">admin</option>
                                <option value="restaurant">Restaurant</option>
                                <option value="reception">Reception</option>
                                <option value="kitchen">Kitchen</option>
                                
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Staff Name</label>
                          <input type="text" name="s_name" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" name="password" class="form-control">
                        </div>
                      </div>
                    </div>

                  

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Staff</button>
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