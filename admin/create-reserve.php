
<?php
include("../config.php");
include("./header.php");
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];

$useroom = mysqli_query($mysqli, "SELECT * FROM rooms where status = 'available'");
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Reserve Booking</h4>
                      <p class="card-category"></p><br>
                      <h6 style="color: #d7f2c7"><?php echo $msg; ?></h6>
                </div>
                <div class="card-body">
                  <form action="scripts/reserve_s.php" method='post'>
                    <div class="row">
                      <div class="col-md-12">
                      <br><label><b>Personal Details</b></label>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input type="text" name="fname" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" name="faddress" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <div class="col-sm-12">
                              <select  name="state" class="form-control">
                                <option>State</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">Federal Capital Territory</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nationality</label>
                          <input type="text" name="c_nationality" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Passport No</label>
                          <input type="text" name="p_number" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Profession</label>
                          <input type="text" name="profession" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Car No</label>
                          <input type="text" name="vehicle_no" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <div class="col-sm-12">
                              <select  name="visit" class="form-control">
                                <option>Nature of Visit</option>
                                <option value="Business">Business</option>
                                <option value="Pleasure">Pleasure</option>
                              </select>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Travelling From</label>
                          <input type="text" name="travel_from" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Travelling To</label>
                          <input type="text" name="travel_to" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
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
                  </div>

                    <div class="row">
                      <div class="col-md-12">
                          <br><label><b>Room Details</b></label>
                          <div class="form-group">
                         <div class="row">                      
                            <div class="col-sm-4">
                              <label class="bmd-label-floating">Select Assigned Room</label>
                                <select class="form-control" name="room_num">
                                  <option>select below</option>
                                        <?php
                                        while($rows=mysqli_fetch_array($useroom)){

                                        echo'
                                        <option value="'.$rows['room_number'].'">'.$rows['room_number'].' '.$rows['room_type'].' '.$rows['cost'].'</option>
                                        ';
                                        }

                                        ?>
                            
                                </select>
                            </div>
                            <div class="col-sm-4">
                              <label class="bmd-label-floating">Check-In Date</label>
                              <div class="form-group">                                
                                <input type="date" name="c_in_date" class="form-control">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <label class="bmd-label-floating">Check-Out Date</label>
                              <div class="form-group">                          
                                <input type="date" name="c_out_date" class="form-control">
                              </div>
                            </div>

                          </div>

                          </div>                       
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                          <br><label><b>Payment Option</b></label>
                          <div class="form-group">
                         <div class="row">                      
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio"  name="p_option" value="Cash"> Cash </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" name="p_option" value="Cheque"> Cheque</label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" name="p_option" value="Transfer"> Transfer</label>
                              </div>
                            </div>

                          </div>
                          </div>                       
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Proceed</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">

            </div>
          </div>
        </div>
      </div>

<?php

include("./footer.php");

?>