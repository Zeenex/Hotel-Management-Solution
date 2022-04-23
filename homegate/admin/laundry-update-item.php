
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
$laun_id = $_GET['laun_id'];

$launsql = mysqli_query($mysqli, "SELECT * FROM laundary_item WHERE id = '$laun_id'");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Laundary Item</h4>
                  <p class="card-category">Start Process</p><br>
                  <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
<?php                  
while($row=mysqli_fetch_array($launsql))
{
  echo'                  
                  <form action="scripts/laundry_update_item.php" method="post">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="l_cat" class="form-control">
                                <option value="'.$row['category'].'">'.$row['category'].'</option>
                                <option value="Clothing">Clothing</option>
                                <option value="HouseHold">HouseHold</option>
                                
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item </label>
                          <input type="text" name="l_item" value="'.$row['item_desc'].'" class="form-control">
                          <input type="hidden" name="l_id" value="'.$laun_id.'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost</label>
                          <input type="text" name="l_cost" value="'.$row['cost'].'" class="form-control">
                        </div>
                      </div>
                    </div>


                  

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Update Item</button>
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