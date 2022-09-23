<?php

include("./header.php");

?> 




      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <h3 class="card-category">Manage Accounting</h3>
          </div>
        </div>
        <hr>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="accounting-view-daily.php">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">Generate Daily Income</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Generate all incomes for each day
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="accounting-view-order.php">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">View Orders</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View all orders generated
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="accounting-view-reciept.php">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">View Reciepts</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View and Print all invoices generated
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="accounting-view-monthly.php">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">Generate Monthly Income</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Generate all incomes from all departments
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