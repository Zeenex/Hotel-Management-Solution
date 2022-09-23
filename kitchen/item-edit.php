
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$item_num = $_GET['item_num'];

$store = mysqli_query($mysqli, "SELECT * FROM kitchen_storage WHERE item_no = '$item_num'");



?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Store Items</h4>
                  <p class="card-category"> View store items availablility</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                
                <div class="card-body">
<?php                  
while($row=mysqli_fetch_array($store))
{
  echo'
                  <form action="scripts/kitchen_store_update.php" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Name</label>
                          <input type="text" readonly name="item_name" value="'.$row['item_name'].'" class="form-control">
                          <input type="hidden" readonly name="item_num" value="'.$row['item_no'].'" class="form-control">
                        </div>
                      </div>
              
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Brand</label>
                          <input type="text" name="item_brand" value="'.$row['item_brand'].'" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="item_qty" class="form-control">
                                <option value="'.$row['item_qty'].'">'.$row['item_qty'].'</option>
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
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Serial No.</label>
                          <input type="text" name="item_serial" value="'.$row['item_serial'].'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Cost</label>
                          <input type="text" name="item_cost" value="'.$row['item_cost'].'" class="form-control">
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
          </div>
        </div>
      </div>
<?php

include("./footer.php");

?>