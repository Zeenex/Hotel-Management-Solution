<?php

include("./header.php");

?> 




      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <h3 class="card-category">Manage Laundary</h3>
          </div>
        </div>
        <hr>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="laundary-add-item.php">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/reserve.png" alt="">
                  </div>
                  <p class="card-category">Add Lundary Item</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Create laundary items for use
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="laundary-create-order.php">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/recept.png" alt="">
                  </div>
                  <p class="card-category">Request Lundary</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Create a laundary order for customer
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="laundary-view-order.php">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/order.png" alt="">
                  </div>
                  <p class="card-category">View Orders</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View generate laundary orders
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="laundary-view-reciept.php">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/order.png" alt="">
                  </div>
                  <p class="card-category">View Reciepts</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View generated reciepts for orders
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="laundary-store.php">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                 
                  <div class="card-icon">
                    <img src="../assets/img/icons/order.png" alt="">
                  </div>
                  <p class="card-category">Store Inventory</p>
                 
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Create store inventory for laundary items
                  </div>
                </div>
              </div>
            </a>
            </div>
          </div>


        </div>
      </div>

      <?php

include("./footer.php");

?>