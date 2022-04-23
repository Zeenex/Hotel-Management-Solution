
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$item_num = $_GET['item_num'];

$store = mysqli_query($mysqli, "SELECT * FROM restaurant_storage WHERE item_no = '$item_num'");



?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Store Items</h4>
                  <p class="card-category"> View store items availablility</p>
                </div>
                
                <div class="card-body">
<?php                  
while($row=mysqli_fetch_array($store))
{
  echo'
                  <form action="scripts/restaurant_store_update.php" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Name</label>
                          <input type="text" readonly name="item-name" value="'.$row['item_name'].'" class="form-control">
                          <input type="hidden" readonly name="item_num" value="'.$row['item_no'].'" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Type</label>
                                <select  name="item-type" class="form-control">
                                <option value="'.$row['item_type'].'">'.$row['item_type'].'</option>
                                <option value="Cutlery">Cutlery</option>
                                <option value="Glasswares">Glasswares</option>
                                <option value="Plateware">Plateware</option>
                                <option value="Decorations">Decorations</option>
                                <option value="Drinks">Drinks</option>
                              </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                                <select  name="item-cat" class="form-control">
                                <option value="'.$row['item_category'].'">'.$row['item_category'].'</option>
                                <option value="Orderable">Orderable</option>
                                <option value="Non-Orderable">Non-Orderable</option>
                                <option value="Vendor Pack">Vendor Pack</option>                              

                              </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Condition</label>
                                <select  name="item-cond" class="form-control">
                                <option value="'.$row['item_condition'].'">'.$row['item_condition'].'</option>
                                <option value="New">New</option>
                                <option value="Used">Used</option>                            

                              </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">SKU Code</label>                                
                                <input type="text" name="item-sku" value="'.$row['item_sku'].'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Serial Number</label>
                                
                                <input type="text" name="item-serial" value="'.$row['item_serial'].'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ISBN</label>
                                
                                <input type="text" name="item-isbn" value="'.$row['item_isbn'].'" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Color</label>
                                
                                <input type="text" name="item-color" value="'.$row['item_color'].'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Manufactured</label>
                                
                                <input type="text" name="manuf-date" value="'.$row['manuf_date'].'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Expiry Date</label>
                                
                                <input type="text" name="expiry-date" value="'.$row['exp_date'].'" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Cost</label>
                                
                                <input type="text" name="item-cost" value="'.$row['unit_cost'].'" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Warranty</label>
                                <select  name="item-warranty" class="form-control">
                               <option value="'.$row['warranty'].'">'.$row['warranty'].'</option>
                                <option value="1year">1year</option>
                                <option value="2years">2years</option>
                                <option value="3years">3years</option>

                              </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Unit of Measure</label>
                                <select  name="unit-measure" class="form-control">
                                <option value="'.$row['unit_measure'].'">'.$row['unit_measure'].'</option>
                                <option value="Weight(gram)">Weight(gram)</option>
                                <option value="Weight(ounces)">Weight(ounces)</option>
                                <option value="Volume(litre)">Volume(litre)</option>
                                <option value="Volume(gallon)">Volume(gallon)</option>  
                                <option value="Length(yard)">Length(yard)</option>  
                                <option value="Length(Inch)">Length(Inch)</option>

                              </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantity</label>
                              <select  name="item-qty" class="form-control">
                                <option value="'.$row['quantity'].'">'.$row['quantity'].'</option>
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