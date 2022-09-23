
<?php

include("./header.php");
include("../config.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT inv_number,source,staff,item_desc,quantity,month,SUM(total) FROM `accounting_invoices` WHERE inv_number LIKE '%".$valueToSearch."%'  GROUP BY inv_number";
    $search_result = filterTable($query);
    
} else {

        $query = "SELECT inv_number,source,staff,item_desc,quantity,month,SUM(total) FROM `accounting_invoices` GROUP BY inv_number";
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
                  <p class="card-category"></p><br>
                  <a href="./filter-reciept-num.php" class="btn btn-info pull-right"><i class="fa fa-filter" style="color: white"></i>Filter By Number  </a><a href="./filter-reciept-dept.php" class="btn btn-warning pull-right"><i class="fa fa-filter" style="color: white"></i>Filter By Dept  </a><a href="./filter-reciept-mnth.php" class="btn btn-info pull-right"><i class="fa fa-filter" style="color: white"></i>Filter By Month  </a> 
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
                        <thead class="text-primary">
                          <tr>

                            <td> Reciept No </td>
                            <td> Order Source </td>
                            <td> Ordered by </td>
                            <td> Item Description </td>
                            <td> Quantity</td>
                            <td> Total</td>
                          
                            <td>  </td>

                          </tr>
                        </thead>
                        <tbody>
                              <?php

                                while($rows=mysqli_fetch_array($search_result)){
                                  $f_total = $rows['SUM(total)']; $final_total = number_format($f_total);
                              echo'
                              <tr>
                              <td>'.$rows['inv_number'].'</td>
                              <td>'.$rows['source'].'</td>
                              <td>'.$rows['staff'].'</td>
                              <td>'.$rows['item_desc'].'</td>
                              <td>'.$rows['quantity'].'</td>
                              <td>'.$final_total.'</td>

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