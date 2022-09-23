
<?php

include("./header.php");
include("../config.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `laundary_customer` WHERE name LIKE '%".$valueToSearch."%' GROUP BY c_name";
    $search_result = filterTable($query);
    
} else {

        $query = "SELECT * FROM `laundary_customer` GROUP BY c_name";
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
                  <h4 class="card-title">All Laundary Customers</h4>
                  <p class="card-category">List of all registered customers</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                <div class="card-body">
                  <form class="form-sample" action="<?PHP $_PHP_SELF ?>" method='post'>

                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type  name to Search</label>
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
                            <td> Order No </td>
                            <td> Name </td>
                            <td> Address </td>
                            <td> Date Created </td>

                          </tr>
                        </thead>
                        <tbody>
                              <?php

                                while($rows=mysqli_fetch_array($search_result)){

                              echo'
                              <tr>
                              <td>'.$rows['order_number'].'</td>
                              <td>'.$rows['c_name'].'</td>
                              <td>'.$rows['address'].'</td>
                              <td>'.$rows['added_date'].'</td>
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