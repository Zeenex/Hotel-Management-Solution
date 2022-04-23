
<?php

include("./header.php");
include("../config.php");

$store = mysqli_query($mysqli, "SELECT * FROM restaurant_storage");


?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Store Items</h4>
                  <p class="card-category"> </p><br>
                </div>
                
                <div class="card-body">

                    <form class="form-sample" action="<?PHP $_PHP_SELF ?>" method='post'>

                      <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                     <select name="item_name" class="form-control">
                        <option>Select Item</option>
                              <?php
                              while($rows=mysqli_fetch_array($store)){

                              echo'
                              <option value="'.$rows['item_name'].'">'.$rows['item_name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                    </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                        <div class="input-group-append">
                           <button type="submit" name="submit" class="btn btn-primary mr-2">View</button>
                        </div>
                          </div>
                        </div>

                      </div>
              </form>

                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          S/N
                        </th>
                        <th>
                          Item Name
                        </th>
                        <th>
                          Item Type
                        </th>
                        <th>
                          Condition
                        </th>
                        <th>
                          Serial Number
                        </th>
                        <th>
                          Item Cost
                        </th>
                        <th>
                         Quantity
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Date Added
                        </th>
                        </thead>
                      <tbody>
               <?php

 if(isset($_POST["submit"])){



  if(isset($_POST["item_name"])){

    $item_name = $_POST['item_name'];

    $userpro = mysqli_query($mysqli, "SELECT * FROM restaurant_storage where item_name = '".$item_name."'");

                while($row=mysqli_fetch_array($userpro)){


                          echo'
                        <tr>
                          <td>
                           '.$row['item_no'].'
                          </td>
                          <td>
                            '.$row['item_name'].'
                          </td>
                          <td>
                            '.$row['item_type'].'
                          </td>
                          <td>
                            '.$row['item_condition'].'
                          </td>
                          <td>
                            '.$row['item_serial'].'
                          </td>
                          <td>
                            ₦'.number_format($row['unit_cost']).'
                          </td>
                          <td>
                            '.$row['quantity'].'
                          </td>
                          <td>
                            '.$row['item_stat'].'
                          </td>
                          <td>
                            '.$row['date_added'].'
                          </td>
                          
                        </tr>


                          ';


}   

  }else{
    echo "<script>";echo " alert('Please select a name');window.location.href='kitchen-store-view.php';</script>";
  }
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