<?php

include("./header.php");

?> 




      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <h3 class="card-category">Manage Kitchen</h3>
          </div>
        </div>
        <hr> 

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="kitchen-add-menu.php">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/menu.png" alt="">
                  </div>
                  <p class="card-category">Add Menu</p>                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Create different menu for customers
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="kitchen-view-orders.php">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/kitch.png" alt="">
                  </div>
                  <p class="card-category">View Orders</p>                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View orders generated for the kitchen
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="kitchen-view-reciept.php">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/order.png" alt="">
                  </div>
                  <p class="card-category">View Reciepts</p>                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View reciepts created for kitchen orders
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="kitchen-store.php">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/order.png" alt="">
                  </div>
                  <p class="card-category">Store Inventory</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Generate, Create store inventory
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