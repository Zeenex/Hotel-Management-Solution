
<?php

include("./header.php");
include("../config.php");

$query1 =  mysqli_query($mysqli,"SELECT source,staff,SUM(total) FROM `accounting_invoices` WHERE added_date >= curdate() GROUP BY source");
$query2 =  mysqli_query($mysqli,"SELECT SUM(total) FROM `accounting_invoices` WHERE added_date >= curdate()");

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
                              <div class="col-md-4" style="text-align: center;"><h4 class="card-category">Daily Income Report</h4></div>
                              <div class="col-md-4">
                               <p class="card-category" style="text-align: center;">Date: <?php echo date("Y-m-d"); ?></p>
                              </div>
                            </div>
                </div>

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

                                            $fin_cost = number_format($rows['SUM(total)']);

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