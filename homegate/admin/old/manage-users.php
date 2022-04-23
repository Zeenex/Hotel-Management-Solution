<?php

include("./header.php");

?> 




      <div class="content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <h3 class="card-category">Manage Users</h3>
          </div>
        </div>
        <hr>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="add-staff.php">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/staff.png" alt="">
                  </div>
                  <p class="card-category">Add Staff</p>                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Create staff login credential
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="assign-roles.php">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/users.png" alt="">
                  </div>
                  <p class="card-category">Assign Roles</p>                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Create roles for each staff added
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="view-staff.php">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/users.png" alt="">
                  </div>
                  <p class="card-category">View Staff</p>                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> View all created staff
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a href="deactivate-staff.php">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">                  
                  <div class="card-icon">
                    <img src="../assets/img/icons/staff.png" alt="">
                  </div>
                  <p class="card-category">Deactivate Staff</p>                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <i class="material-icons">local_offer</i> Deactive already existing user
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