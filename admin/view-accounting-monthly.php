
<?php
error_reporting(E_ALL ^ E_NOTICE);
include("./header.php");
include("../config.php");
/*$c_month = date('F');
$c_year = date("Y");*/


    $month1 = $_POST['month'];
    $year1 = $_POST['year'];
  
    $query1 =  mysqli_query($mysqli,"SELECT `source`,staff,SUM(total),added_date FROM `accounting_invoices` WHERE month = '$month1' and year = '$year1' GROUP BY `source`");
    $query2 =  mysqli_query($mysqli,"SELECT SUM(total) FROM `accounting_invoices` WHERE month = '$month1' and year = '$year1'");

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                              <div class="col-md-12" style="text-align: center;">
                                <div class="card-header-image"><img src="../assets/img/logo-inv.png"></div>
                                <p class="card-category">Plot 6, Babafemi Osoba Crescent Off Admiralty Road Lekki Phase 1</p>
                                <p class="card-category">Tel: 01-2708261 – 4,01- 2630045, 01 7730533 - 4</p>
                              </div>
                              <br>
                            <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-4" style="text-align: center;"><h4 class="card-category">Monthly Income Report</h4></div>
                              <div class="col-md-4">
                               <p class="card-category" style="text-align: center;">Date: <?php echo date("Y-m-d"); ?></p>
                              </div>
                            </div>
                </div>
                    <form class="form-sample" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>

                      <div class="row" >
                        <div class="col-md-3">
                                <div class="form-group row">
                                  
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                 <select name="month" class="form-control">
                                    <option>Select Month</option>
                                          <option value="January">January</option>
                                          <option value="February">February</option>
                                          <option value="March">March</option>
                                          <option value="April">April</option>
                                          <option value="May">May</option>
                                          <option value="June">June</option>
                                          <option value="July">July</option>
                                          <option value="August">August</option>
                                          <option value="September">September</option>
                                          <option value="October">October</option>
                                          <option value="November">November</option>
                                          <option value="December">December</option>
                              
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                 <select name="year" class="form-control">
                                    <option>Select Year</option>
                                          <option value="2022">2022</option>
                                          <option value="2023">2023</option>
                                          <option value="2024">2024</option>
                                          <option value="2025">2025</option>
                                          <option value="2026">2026</option>
                                          <option value="2027">2027</option>
                                          <option value="2028">2028</option>
                                          <option value="2029">2029</option>
                                          <option value="2030">2030</option>
                                          <option value="2031">2031</option>
                                          <option value="2032">2032</option>
                                          <option value="2033">2033</option>
                              
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group row">
                                  <div class="input-group-append">
                                     <button type="submit" name="submit_search" class="btn btn-primary mr-2">Submit</button>
                                  </div>
                                </div>
                        </div>

                      </div>
                  </form>


                            <div class="row py-lg-5">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">

                              <div class="table-responsive">
                                <table class="table">
                                  <thead class="text-primary">
                                    <tr>
                                      <td> <b>Description</b></td>
                                      <td> <b>Amount </b></td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                        <?php

                                          while($rows=mysqli_fetch_array($query1)){

                                            $f_cost = $rows['SUM(total)']; $final_cost = number_format($f_cost);

                                        echo'
                                        <tr>
                                        <td>'.$rows['source'].'</td>
                                        <td>'.$rows['SUM(total)'].'</td>
             

                                        </tr>
                                        ';
                                        }

                                       while($rows=mysqli_fetch_array($query2)){

                                            $c_cost = $rows['SUM(total)']; $fin_cost = number_format($c_cost);

                                        echo' 
                                        
                                    <tr>
                                      <td><b>Total</b></td>
                                      <td><b>'.$fin_cost.'</b></td>
                                    </tr>
                                    ';
                                        }

                                    ?>
                                  </tbody>
                                </table>
                              </div>

                              </div>
                              <div class="col-md-2"></div>
                            </div> 

                            <div class="row">
                              <div class="col-md-4">
                                
                              </div>
                              <!-- <div class="col-md-4"><button name="submit" class="btn btn-primary btn-block">Print</button></div> -->
                              <div class="col-md-4">
                               
                              </div>
                            </div>                    
                    <div class="clearfix"></div>
                  
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