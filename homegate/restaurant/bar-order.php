
<?php
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
include("./header.php");
include("../config.php");

$bar_item_spirit = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE category='Spirit'");
$bar_item_wines = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE category='Wines'");
$bar_item_beer = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE category='Beer'");
$bar_item_soft = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE category='Soft Drinks'");
$bar_item_water = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE category='Water'");
$bar_item_cock = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE category='Cocktail'");
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
                      <h4 class="card-title">Place a Bar Order</h4>
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
                                      <thead class="">
                                        <th>
                                          
                                        </th>
                                        <th>
                                          Bar List
                                        </th>
                                      </thead>
                                      <tbody> 

                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Spirit</b></label><br></h4></td>
  
                                        </tr>                                       
                          <?php
                          while($rows=mysqli_fetch_array($bar_item_spirit)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['price']; ?>
                                          </td>
                                        </tr>
                              

                        <?php  } ?>
                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Wines</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($bar_item_wines)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['price']; ?>
                                          </td>
                                        </tr>
                                      

                        <?php  } ?>

                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Beer</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($bar_item_beer)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['price']; ?>
                                          </td>
                                        </tr>
                                      

                        <?php  } ?>

                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Soft Drinks</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($bar_item_soft)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['price']; ?>
                                          </td>
                                        </tr>
                                      

                        <?php  } ?>

                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Water</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($bar_item_water)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['price']; ?>
                                          </td>
                                        </tr>
                                      

                        <?php  } ?>
                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Cocktail</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($bar_item_cock)){
                            ?>
                                        <tr>

                                          <td>
                                           <input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'>
                                          </td>
                                          <td>
                                           <?php echo $rows['item']; ?>
                                          </td>
                                          <td>
                                           <?php echo $rows['price']; ?>
                                          </td>
                                        </tr>
                                      

                        <?php  } ?>
                                      </tbody>
                                    </table>
                                  </div>                          


                        </div>
                        <button type="submit" name="menusubmit" formaction="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-primary pull-left">Add Items</button>

                        </form>
                      </div>
                      <div class="col-md-8"> 

                         <form action="scripts/bar_order.php" method='post'>

                    <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <input type="hidden" name="staff" class="form-control" value="<?php echo $username; ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        
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
                                    Bar Item
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
                                  if (isset($_GET['menusubmit']) && isset($_GET['checkbox'])) {

                                      foreach($_GET['checkbox'] as $bar_id){
                                          $bar_id = (int)$bar_id;        
                                          $sql= mysqli_query($mysqli, "SELECT * FROM bar_item WHERE id = '$bar_id'");

                                          while($rows=mysqli_fetch_assoc($sql)){

                                           echo '
                                            <tr>
                                              <td>
                                                <input type="text" readonly style="border: none;" name="menu[]" value="'.$rows['item'].'">
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
                                                <input type="text" readonly class="num2" style="border: none;" name="price_items[]" value="'.$rows['price'].'">
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