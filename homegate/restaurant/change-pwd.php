
<?php

include("./header.php");
include("../config.php");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Reset Staff Password</h4>
                  <p class="card-category"></p><br>
                  <medium style="color: #11ba05; font-weight: bold"><?php echo $msg; ?></medium>
                </div>
                <div class="card-body">
                  <form action="scripts/change_pwd.php" method='post'>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                            <label>Type new password to reset</label>
                              <input type="password" name="password2" class="form-control">
                              <input type="hidden" name="user" value="<?php echo $username; ?>">
                            </div>
                        </div>
                      </div>
                    </div>

                 

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Password Reset</button>
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