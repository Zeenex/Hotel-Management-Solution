<?php

include("./header.php");

?> 

      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <h3 class="card-category">Manage Reciepts</h3>
          </div>
        </div>
        <hr>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="./filter-reciept-num.php">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">Filter Reciepts by Number</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Generate orders by reciepts number
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="./filter-reciept-dept.php">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">Filter Reciepts by Department</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Generate monthly reciepts by each departments
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="./filter-reciept-mnth.php">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">Filter Reciepts by Month</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Generate all reciepts by month
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a href="daily-reciept.php">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <img src="../assets/img/icons/receipt_long.png" alt="">
                  </div>
                  <p class="card-category">Generate Daily Reciepts</p>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Generate all reciepts for the day
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