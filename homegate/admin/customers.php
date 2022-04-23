
<?php

include("./header.php");
include("../config.php");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ccheck` WHERE name LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
} else {

        $query = "SELECT * FROM `customers`";
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
                  <h4 class="card-title">All Customers</h4>
                  <p class="card-category"></p><br>
                  <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
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

                            <td> Name </td>
                            <td> Address </td>
                            <td> State </td>
                            <td> Nature of Visit</td>
                            <td> Travel From</td>
                            <td> Travel To</td>
                            <td> Room No</td>
                            <td> Duration</td>
                            <td> Check-In</td>
                            <td> Check-Out</td>
                            <td> Date Booked</td>
                            <td> </td>

                          </tr>
                        </thead>
                        <tbody>
                              <?php

                                while($rows=mysqli_fetch_array($search_result)){

                              echo'
                              <tr>
                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['address'].'</td>
                              <td>'.$rows['state'].'</td>
                              <td>'.$rows['nature_visit'].'</td>
                              <td>'.$rows['travel_from'].'</td>
                              <td>'.$rows['travel_to'].'</td>
                              <td>'.$rows['room_num'].'</td>
                              <td>'.$rows['duration'].'</td>
                              <td>'.$rows['check_in_date'].'</td>
                              <td>'.$rows['check_out_date'].'</td>
                              <td>'.$rows['add_date'].'</td>
                              <td>
                              <a href="update_customer.php?cus_id='.$rows['id'].'"><i class="fa fa-edit" style="color: green"></i> </a>
                               &nbsp;&nbsp;
                               <a onclick="return confirm(\'sure to disable !\');" href="scripts/disable_customer.php?cus_id='.$rows['id'].'"><i class="fa fa-pause"></i> </a>
                               &nbsp;&nbsp;
                               <a href="scripts/enable_customer.php?cus_id='.$rows['id'].'"><i class="fa fa-play" style="color: green"></i> </a>
                               &nbsp;&nbsp;
                               <a onclick="return confirm(\'sure to DELETE ACCOUNT !\');" href="scripts/del_customer.php?cus_id='.$rows['id'].'"><i class="fa fa-trash" style="color: red"></i> </a>
                              </td> 
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