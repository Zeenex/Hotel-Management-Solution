
<?php

include("./header.php");
include("../config.php");

$staffsql = mysqli_query($mysqli, "SELECT * FROM staff");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View All Staff</h4>
                  <p class="card-category"></p><br>
                  <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <td>
                          Staff Name
                        </td>
                        <td>
                          Username
                        </td>
                        <td>
                          Designation
                        </td>
                        <td>
                          Status
                        </td>
                        <td>
                          
                        </td>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($staffsql)) {
                          
                          echo'
                        <tr>
                          <td>
                           '.$row['staff_name'].'
                          </td>
                          <td>
                            '.$row['username'].'
                          </td>
                          <td>
                           '.$row['role'].'
                          </td>
                          <td>
                            '.$row['status'].'
                          </td>
                          <td>
                           <a onclick="return confirm(\'sure to disable !\');" href="scripts/disable_acct.php?email_id='.$row['id'].'"><i class="fa fa-pause"></i> </a>
                           &nbsp;&nbsp;
                           <a href="scripts/enable_acct.php?email_id='.$row['id'].'"><i class="fa fa-play" style="color: green"></i> </a>
                           &nbsp;&nbsp;
                           <a onclick="return confirm(\'sure to DELETE ACCOUNT !\');" href="scripts/del_acct.php?email_id='.$row['id'].'"><i class="fa fa-trash" style="color: red"></i> </a>
                          </td>
                        </tr>


                          ';


                            // code...
                          }

                        ?>




                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php

include("./footer.php");

?>