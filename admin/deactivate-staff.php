
<?php

include("./header.php");
include("../config.php");



?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form name="form1" method="get" action="#">
              <div class="card">                
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Deactivate Staff</h4>
                  <p class="card-category"> Deactivate or Activate Staff Account</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          
                        </th>
                        <th>
                          Staff Name
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Designation
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                              <?php
                                      
                                    $staffsql = mysqli_query($mysqli, "SELECT * FROM staff");
                                      while($rows=mysqli_fetch_array($staffsql)){


  ?>
                            
                              <tr>
                              <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'></td>
                              <td><?php echo $rows['staff_name']; ?></td>
                              <td><?php echo $rows['username']; ?></td>
                              <td><?php echo $rows['role']; ?></td>
                              <td><?php echo $rows['status']; ?></td>                                                          
                            </tr>

                      <?php }?>




                      </tbody>
                    </table>
                  </div>
                </div>
                      <div class="row">
                        <div class="col-md-2">
                          <input name="stop" class="btn btn-danger m-2" formaction="scripts/deactivate_user.php" type="submit" id="stop" value="Deactivate">
                        </div>
                        <div class="col-md-2">
                          <input name="start" class="btn btn-primary m-2" method="post" formaction="scripts/activate_user.php" type="submit" id="start" value="Activate">
                        </div>
                        <div class="col-md-2">
                          
                        </div>
                        
         

                      </div>
              </div>

              </form>

            </div>
          </div>
        </div>
      </div>
<?php

include("./footer.php");

?>