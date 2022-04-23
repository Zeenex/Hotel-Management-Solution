
<?php
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
include("./header.php");
include("../config.php");

$item_clothing = mysqli_query($mysqli, "SELECT * FROM laundary_item WHERE category='Clothing'");
$item_household = mysqli_query($mysqli, "SELECT * FROM laundary_item WHERE category='HouseHold'");
$staff_query = mysqli_query($mysqli, "SELECT * FROM staff");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 class="card-title">Create a Laundary Order</h4>
                      <p class="card-category"></p><br>
                      <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                    </div>

                  </div>
                </div>
                <div class="card-body">



                    <div class="row">
                      <div class="col-md-4">
                        <form method="get" action="#">
                        <div class="form-group">

                          
                                  <div class="table-responsive" style="height: 450px; overflow-y: auto;">
                                    <table class="table table-hover">
                                      <thead class="text-primary">
                                        <td>
                                          
                                        </td>
                                        <td>
                                          Laundary Items
                                        </td>
                                      </thead>
                                      <tbody> 

                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Clothing</b></label><br></h4></td>
  
                                        </tr>                                       
                          <?php
                          while($rows=mysqli_fetch_array($item_clothing)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item_desc']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['cost']; ?>
                                          </td>
                                        </tr>
                              

                        <?php  } ?>
                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Household</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($item_household)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item_desc']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['cost']; ?>
                                          </td>
                                        </tr>
                                      

                        <?php  } ?>


                                      </tbody>
                                    </table>
                                  </div>                          


                        </div>
                        <button type="submit" name="itemsubmit" formaction="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-primary pull-left">Add Items</button>

                        </form>
                      </div>
                      <div class="col-md-8"> 

                         <form action="scripts/laundry_order.php" method='post'>

                    <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <input type="hidden" name="staff" class="form-control" value="Admin">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <input type="text" name="l_address" class="form-control" placeholder="Address">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <input type="text" name="l_name" class="form-control" placeholder="Customer Name">
                        </div>
                      </div>
                       </div>
                    </div>

                        <div class="form-group">
                          <form>
                          
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <thead class="">
                                  <td>
                                    Item
                                  </td>
                                  <td>
                                    Qty
                                  </td>
                                  <td>
                                    Price
                                  </td>
                                </thead>
                                <tbody>

                             <?php
                                  if (isset($_GET['itemsubmit']) && isset($_GET['checkbox'])) {

                                      foreach($_GET['checkbox'] as $item_id){
                                          $item_id = (int)$item_id;        
                                          $sql= mysqli_query($mysqli, "SELECT * FROM laundary_item WHERE id = '$item_id'");

                                          while($rows=mysqli_fetch_assoc($sql)){

                                           echo '
                                            <tr>
                                              <td>
                                                <input type="text" readonly style="border: none;" name="item[]" value="'.$rows['item_desc'].'">
                                              </td>
                                              <td>
                                            
                                                  <select class="form-control" name="qty[]">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                  </select>
                                                 
                                              </td>
                                              <td>
                                                <input type="text" readonly class="num2" style="border: none;" name="cost_items[]" value="'.$rows['cost'].'">
                                              </td>
                                            </tr>

                             ';

                                          }

                                       
                                      }


                                  }

                             ?>
                                </tbody>
                              </table>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary pull-right">Calculate Total and Place Order</button>
                            </form>
                        </div>
                        
</form>
                      
                      </div>

                    </div>

                  

                    <div class="clearfix"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php

include("./footer.php");

?>