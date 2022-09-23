
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
                  <h4 class="card-title">Add Bar Item</h4>
                  <p class="card-category">Start Process</p><br>
                  <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
                  <form action="scripts/add_bar.php" method='post'>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="b_cat" class="form-control">
                                <option>Select Bar Category</option>
                                <option value="Spirit">Spirit</option>
                                <option value="Wines">Wines</option>
                                <option value="Beer">Beer</option>
                                <option value="Soft Drinks">Soft Drinks</option>
                                <option value="Water">Water</option>
                                <option value="Cocktail">Cocktail</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bar Item</label>
                          <input type="text" name="b_item" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost</label>
                          <input type="text" name="b_cost" class="form-control">
                        </div>
                      </div>
                    </div>


                  

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Bar Item</button>
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