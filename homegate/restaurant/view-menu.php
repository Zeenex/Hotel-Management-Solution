
<?php

include("./header.php");
include("../config.php");

$menuview = mysqli_query($mysqli, "SELECT * FROM menu_item");



?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Menu List</h4>
                  <p class="card-category"></p><br>

                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-black">
                        <th>
                          S/N
                        </th>
                        <th>
                          Menu Item
                        </th>
                        <th>
                          Menu Category
                        </th>
                        <th>
                          Unit Price
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                      </thead>
                      <tbody>

                        <?php
                        while ($row=mysqli_fetch_array($menuview)) {
                        
                          echo'
                        <tr>
                          <td>
                          '.$row['id'].'
                           
                          </td>
                          <td>
                          '.$row['item'].'
                           
                          </td>
                          <td>
                            '.$row['category'].'
                          </td>
                          <td>
                           '.$row['price'].'
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