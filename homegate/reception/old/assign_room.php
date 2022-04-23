
<?php

include("./header.php");
include("../config.php");

$useroom = mysqli_query($mysqli, "SELECT * FROM rooms where status = 'available'");
$customer = mysqli_query($mysqli, "SELECT * FROM ccheck WHERE status='Active'");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Assign Customer Rooms</h4>
                  <p class="card-category">Start Process</p>
                </div>
                <div class="card-body">
                  <form action="scripts/room_s.php" method='post'>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">                         
                      
                      <select class="form-control" name="room">
                        <option>Select Room</option>
                              <?php
                              while($rows=mysqli_fetch_array($useroom)){

                              echo'
                              <option value="'.$rows['room_number'].'">'.$rows['room_number'].' '.$rows['room_type'].' '.$rows['cost'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                      <input type="hidden" name="staff" class="form-control" value="<?php echo $username; ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                       
                      <select class="form-control" name="cname">
                        <option>Select Customer</option>
                              <?php
                              while($rows=mysqli_fetch_array($customer)){

                              echo'
                              <option value="'.$rows['name'].'">'.$rows['name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="duration" class="form-control">
                                <option>Duration of Stay (Days)</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                              </select>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label class="bmd-label-floating">Check-In Date</label>
                        <div class="form-group">
                          
                          <input type="date" name="c_in_date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label class="bmd-label-floating">Check-Out Date</label>
                        <div class="form-group">                          
                          <input type="date" name="c_out_date" class="form-control">
                        </div>
                      </div>

                    </div>

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Assign Room</button>
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