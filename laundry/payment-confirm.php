
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$name = $_GET['name'];
$nroom_number = $_GET['room_number'];
$ntotal = number_format($_GET['total']);
$ndate_checkin = $_GET['date_checkin'];
$ndate_checkout = $_GET['date_checkout'];


?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Assign Customer Rooms</h4>
                  <p class="card-category">End Process</p>
                </div>
                <div class="card-body">
                  <form action="scripts/room_s.php" method='post'>

                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                  <div class="tim-typo">
                    <h4>Room <?php echo $nroom_number; ?> has been successfully assigned to <?php echo $name; ?> for the below duration:</h4>
                    <h4>From: <?php echo $ndate_checkin; ?>  - To: <?php echo $ndate_checkout; ?></h4>
                    <h4>Total cost of room for the duration stated is  ₦<?php echo $ntotal; ?></h4>
                  </div>
                    
                  </div>

                    <div class="col-md-12">
                      <div class="places-buttons">
                        <div class="row">
                          <div class="col-md-6 ml-auto mr-auto text-center">
                            <h4 class="card-title">
                              Please confirm payment manually and continue below
                              
                            </h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="row">
                              <div class="col-md-4">
                                
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block">Print Reciept</button>
                              </div>
                              <div class="col-md-4">
                                
                              </div>
                            </div>
                          </div>
                        </div>
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