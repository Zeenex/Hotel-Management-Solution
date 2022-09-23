
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$order_num = $_GET['order_num'];

$order = mysqli_query($mysqli, "SELECT  * FROM laundary_order WHERE order_number='$order_num'");


?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Order Number: <?php echo $order_num; ?></h4>
                  <p class="card-category">End Process</p>
                  <a class="card-title" style="float: right" href="javascript:history.back()">Go Back</a>
                </div>
                <div class="card-body">
                  <form action="#" method='post'>
                        <div class="row">
                          <div class="col-md-6 ml-auto mr-auto text-center">
                            <h4 class="card-title">
                      
                              
                            </h4>
                          </div>
                        </div>
                    

                        <div class="row">
                          <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="row">
                    <table class="table table-hover">
                      <tbody>
                          <?php
                          while($rows=mysqli_fetch_array($order)){

                            $staff = $rows['staff'];
                            $cname = $rows['c_name'];
                            $address = $rows['address'];

                            ?>

                        <tr>
                          <td>
                            <?php echo $rows['item_desc']; ?>
                          </td>
                          <td>
                              <?php echo $rows['quantity']; ?>
                          </td>

                        </tr>
           <?php  } ?>                        
                      </tbody>
                    </table>
                            </div>
                          </div>
                        </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <b>Ordered By: <?php echo $staff; ?></b>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <b>Customer Name: <?php echo $cname; ?></b>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                        <b>Customer Address: <?php echo $address; ?></b>
                        </div>
                      </div>
                       </div>
                            <div class="row">
                              <div class="col-md-4">
                                
                              </div>
                              <div class="col-md-4">
                                <button name="submit" class="btn btn-primary btn-block">Print Order</button>
                              </div>
                              <div class="col-md-4">
                                
                              </div>
                            </div>



                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php

include("./footer.php");

?>