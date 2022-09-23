
<?php

include("./header.php");
include("../config.php");

$mnth = date("F");

function filterTable($query)
{
    include("../config.php");
    $filter_Result = mysqli_query($mysqli, $query);
    return $filter_Result;
}

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Search Orders By Department</h4>
                  <p class="card-category"></p><br>

                </div>
                <div class="card-body">
                  <form class="form-sample" action="<?PHP $_PHP_SELF ?>" method='post'>

                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                      
                          <select name="valueToSearch" class="form-control">
                                <option>Select Department</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Reception">Reception</option>
                                <option value="Kitchen">Kitchen</option>
                                <option value="Laundry">Laundry</option>

                          </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                        <div class="input-group-append">
                           <button type="submit" name="search" class="btn btn-primary mr-2">Submit</button>
                        </div>
                          </div>
                        </div>

                      </div>
                      </form>

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <tr>

                            <td> Order No </td>
                            <td> Order Source </td>
                            <td> Staff </td>
                            <td> Item Description </td>
                            <td> Quantity</td>
                            <td> Added Month</td>
                            <td>  </td>

                          </tr>
                        </thead>
                        <tbody>
                              <?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = mysqli_query($mysqli, "SELECT * FROM accounting_orders WHERE source LIKE '%".$valueToSearch."%' AND  added_month = MONTHNAME(CURRENT_DATE) AND  added_year = YEAR(CURRENT_DATE) GROUP BY order_number");

                                while($rows=mysqli_fetch_array($query)){

                              echo'
                              <tr>
                              <td>'.$rows['order_number'].'</td>
                              <td>'.$rows['source'].'</td>
                              <td>'.$rows['staff'].'</td>
                              <td>'.$rows['item_desc'].'</td>
                              <td>'.$rows['quantity'].'</td>
                              <td>'.$rows['added_month'].'</td>
                              <td><a href="order-view.php?order_num='.$rows['order_number'].'">View Order</a></td>
                              </tr>
                              ';
                              }   
} else {

        echo '<tr><td>No record Searched </td></tr>';
}




                              ?>
                              

                        </tbody>
                      </table>


                    </div>
                  </div>
                </div>
              </div>
            </div>                      
                    <div class="clearfix"></div>
                  
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