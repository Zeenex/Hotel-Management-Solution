<?php

include("./header.php");

?> 




      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <h3 class="card-category">Manage Restaurant</h3>
          </div>
        </div>
        <hr>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="restaurant-kitchen-order.php">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/kitch.png" alt="">
                  </div>
                  <p class="card-category">Create Menu Order</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Create customer menu order
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="restaurant-view-orders.php">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/order.png" alt="">
                  </div>
                  <p class="card-category">View Orders</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View already generate menu order
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="restaurant-view-reciepts.php">
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
               <a href="#">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/order.png" alt="">
                  </div>
                  <p class="card-category"></p>
                  
                </div>
                <div class="card-footer">
                </div>
              </div>
            </a>
            </div>          </div>


        </div>
      </div>

      <?php

include("./footer.php");

?>