
<?php

include("./header.php");
include("../config.php");

$store = mysqli_query($mysqli, "SELECT * FROM laundary_storage");


?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Store Items</h4>
                  <p class="card-category"> View store items availablility</p>
                  <a class="card-title" style="float: right" href="javascript:history.back(2)">Go Back</a>
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
                          Item Brand
                        </th>
                        <th>
                          Item Serial No
                        </th>
                        <th>
                          Item Qty
                        </th>
                        <th>
                          Item Cost
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

    $userpro = mysqli_query($mysqli, "SELECT * FROM laundary_storage where item_name = '".$item_name."'");

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
                            '.$row['item_brand'].'
                          </td>
                          <td>
                            '.$row['item_serial'].'
                          </td>
                          <td>
                            '.$row['item_qty'].'
                          </td>
                          <td>
                            ₦'.number_format($row['item_cost']).'
                          </td>
                          <td>
                            '.$row['item_stat'].'
                          </td>
                          <td>
                            '.$row['date_added'].'
                          </td>
                          <td>
                            <a href="laundary-item-edit.php?item_num='.$row['item_no'].'">Edit</a>
                          </td>
                        </tr>


                          ';


}   

  }else{
    echo "<script>";echo " alert('Please select a name');window.location.href='laundary-store-view.php';</script>";
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