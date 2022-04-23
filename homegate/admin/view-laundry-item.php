
<?php

include("./header.php");
include("../config.php");

$launview = mysqli_query($mysqli, "SELECT * FROM laundary_item");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];


?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Laundry Item List</h4>
                  <p class="card-category"> View all laundry items</p><br>
                  <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <td>
                          S/N
                        </td>
                        <td>
                          Laundry Item
                        </td>
                        <td>
                          Category
                        </td>
                        <td>
                          Unit Price
                        </td>
                        <td>
                          
                        </td>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($launview)) {
                        
                          echo'
                        <tr>
                          <td>
                          '.$row['id'].'
                           
                          </td>
                          <td>
                          '.$row['item_desc'].'
                           
                          </td>
                          <td>
                            '.$row['category'].'
                          </td>
                          <td>
                           '.$row['cost'].'
                          </td>
                          <td>
                            <a href="laundry-update-item.php?laun_id='.$row['id'].'"><i class="fa fa-edit" style="color: green"></i> </a>
                            &nbsp;&nbsp;
                            <a onclick="return confirm(\'sure to DELETE MENU !\');" href="scripts/laundry_del_item.php?laun_id='.$row['id'].'"><i class="fa fa-trash" style="color: red"></i> </a>
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
        </div>
      </div>
<?php

include("./footer.php");

?>