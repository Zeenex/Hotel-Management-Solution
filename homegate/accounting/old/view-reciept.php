
<?php

include("./header.php");
include("../config.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `accounting_invoices` WHERE inv_number LIKE '%".$valueToSearch."%'  GROUP BY inv_number";
    $search_result = filterTable($query);
    
} else {

        $query = "SELECT * FROM `accounting_invoices` GROUP BY inv_number";
        $search_result = filterTable($query);
}

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
                  <h4 class="card-title">All Reciepts</h4>
                  <p class="card-category">Start Process</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                <div class="card-body">
                  <form class="form-sample" action="<?PHP $_PHP_SELF ?>" method='post'>

                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type Reciept Number to Search</label>
                          <input type="text" name="valueToSearch" class="form-control">
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
                        <thead>
                          <tr>

                            <th> Reciept No </th>
                            <th> Order Source </th>
                            <th> Ordered by </th>
                            <th> Item Description </th>
                            <th> Quantity</th>
                            <th> Added Month</th>
                            <th>  </th>

                          </tr>
                        </thead>
                        <tbody>
                              <?php

                                while($rows=mysqli_fetch_array($search_result)){

                              echo'
                              <tr>
                              <td>'.$rows['inv_number'].'</td>
                              <td>'.$rows['source'].'</td>
                              <td>'.$rows['staff'].'</td>
                              <td>'.$rows['item_desc'].'</td>
                              <td>'.$rows['quantity'].'</td>
                              <td>'.$rows['month'].'</td>
                              <td><a href="reciept-view.php?inv_num='.$rows['inv_number'].'">View Reciept</a></td>
                              </tr>
                              ';
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