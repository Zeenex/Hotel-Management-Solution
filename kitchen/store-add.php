
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
                  <h4 class="card-title">Add Store Item</h4>
                  <p class="card-category"></p><br>
                  <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
                  <form action="scripts/kitchen_store_add.php" method='post'>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Name</label>
                          <input type="text" name="item-name" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Type</label>
                                <select  name="item-type" class="form-control">
                                <option>---</option>
                                <option value="Ingredients">Ingredients</option>
                                <option value="Grains">Grains</option>
                                <option value="Tubers">Tubers</option>
                                <option value="Cooking Items">Cooking Items</option>
                              </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                                <select  name="item-cat" class="form-control">
                                <option>---</option>
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
                                <option>---</option>
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
                                <input type="text" name="item-sku" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Serial Number</label>
                                <input type="text" name="item-serial" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ISBN</label>
                                <input type="text" name="item-isbn" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Color</label>
                                <input type="text" name="item-color" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Manufactured</label>
                                <input type="date" name="manuf-date" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Expiry Date</label>
                                <input type="date" name="expiry-date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Item Cost</label>
                                <input type="text" name="item-cost" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Warranty</label>
                                <select  name="item-warranty" class="form-control">
                                <option>---</option>
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
                                <option>---</option>
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
                                <option>Item Quantity</option>
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
                  <button type="submit" name="submit" class="btn btn-primary pull-right">Add Item</button>
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