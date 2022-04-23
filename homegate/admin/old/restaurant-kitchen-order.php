
<?php

include("./header.php");
include("../config.php");

$menu_item_sides = mysqli_query($mysqli, "SELECT * FROM menu_item WHERE category='Sides'");
$menu_item_break = mysqli_query($mysqli, "SELECT * FROM menu_item WHERE category='Breakfast'");
$menu_item_main = mysqli_query($mysqli, "SELECT * FROM menu_item WHERE category='Main'");
$menu_item_swallow = mysqli_query($mysqli, "SELECT * FROM menu_item WHERE category='Swallow'");
$menu_item_soup = mysqli_query($mysqli, "SELECT * FROM menu_item WHERE category='Soup'");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 class="card-title">Place a Kitchen Order</h4>
                  <p class="card-category">Start Process</p>
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
                                          Menu List
                                        </th>
                                      </thead>
                                      <tbody> 

                                        <tr>
                                          <td></td>
                                          <td><h4><label class="bmd-label-floating"><b>Sides</b></label><br></h4></td>
  
                                        </tr>                                       
                          <?php
                          while($rows=mysqli_fetch_array($menu_item_sides)){
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
                                          <td><h4><label class="bmd-label-floating"><b>Main</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($menu_item_main)){
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
                                          <td><h4><label class="bmd-label-floating"><b>Soup</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($menu_item_soup)){
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
                                          <td><h4><label class="bmd-label-floating"><b>Swallow</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($menu_item_swallow)){
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
                                          <td><h4><label class="bmd-label-floating"><b>Breakfast</b></label><br></h4></td>
  
                                        </tr> 

                          <?php
                          while($rows=mysqli_fetch_array($menu_item_break)){
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

                         <form action="scripts/menu_order.php" method='post'>

                    <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <input type="hidden" name="staff" class="form-control" value="Admin">
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
                                    Menu Item
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

                                      foreach($_GET['checkbox'] as $menu_id){
                                          $menu_id = (int)$menu_id;        
                                          $sql= mysqli_query($mysqli, "SELECT * FROM menu_item WHERE id = '$menu_id'");

                                          while($rows=mysqli_fetch_assoc($sql)){

                                           echo '
                                            <tr>
                                              <td>
                                                <input type="text" readonly style="border: none;" name="menu[]" value='.$rows['item'].'>
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
                                                <input type="text" readonly class="num2" style="border: none;" name="price_items[]" value='.$rows['price'].'>
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