
<?php
include("../config.php");
include("./header.php");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
$bar_id = $_GET['bar_id'];
$umenu = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE id = '$bar_id'");
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Bar</h4>
                  <p class="card-category">Start Process</p><br>
                  <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
<?php                  
while($row=mysqli_fetch_array($umenu))
{
  echo'

                  <form action="scripts/update_bar.php" method="post">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="b_cat" class="form-control">
                                <option value="'.$row['category'].'">'.$row['category'].'</option>
                                <option value="Sides">Sides</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Main">Main</option>
                                <option value="Swallow">Swallow</option>
                                <option value="Soup">Soup</option>
                                
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Menu Item</label>
                          <input type="text" name="b_item" value="'.$row['item'].'" class="form-control">
                          <input type="hidden" name="b_id" value="'.$bar_id.'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost</label>
                          <input type="text" name="b_cost" value="'.$row['price'].'" class="form-control">
                        </div>
                      </div>
                    </div>


                  

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Update Bar</button>
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