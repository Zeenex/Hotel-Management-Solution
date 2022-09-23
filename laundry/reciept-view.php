
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$inv_num = $_GET['inv_num'];

$order = mysqli_query($mysqli, "SELECT * FROM accounting_invoices WHERE inv_number='$inv_num'");
$order2 = mysqli_query($mysqli, "SELECT added_date,SUM(total) FROM accounting_invoices WHERE inv_number='$inv_num'");
while($rows=mysqli_fetch_array($order2)){$f_total = $rows['SUM(total)']; $final_total = number_format($f_total); $date_add = $rows['added_date']; $tax = number_format($f_total * 0.075); $gTotal = number_format($f_total + $tax); }

?>
      <div class="content">
  <div id="invoice-POS">
    
    <center id="top">
      <div class="logo" align="center"><img src="../assets/img/logo.png" width="150px" height="46.7px"></div>
      <div class="info"> 
        <h2>Reciept No: <?php echo $inv_num; ?></h2>
    <center id="mid">
         <p>Plot 6, Babafemi Osoba Crescent Off<br> Admiralty Road Lekki Phase 1</p>
         <p>info@homegate-ng.com</p>
         <p>Tel: 01-2708261 – 4,01- 2630045, 01 7730533 - 4</p>       
    </center>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->


    
    <div id="bot">

          <div id="table">
            <table>
              <tr class="tabletitle">
                <th>Item</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
              </tr>

                          <?php
                          while($rows=mysqli_fetch_array($order)){

                           
                            
                            ?>

                        <tr class="service">
                          <td>
                            <?php echo $rows['item_desc']; ?>
                          </td>
                          <td>
                            <?php echo $rows['quantity']; ?>
                          </td>
                          <td>
                            <?php echo $rows['price']; ?>
                          </td>
                          <td>
                            <?php echo $rows['total']; ?>
                          </td>
                        </tr>
                        <?php  } ?>


              <tr class="tabletitle">
                <td></td>
                <td></td>
                <td class="Rate"><b>Tax</b></td>
                <td class="payment">₦<?php echo $tax; ?></td>
              </tr>

              <tr class="tabletitle">
                <td></td>
                <td></td>
                <td class="Rate"><b>Total</b></td>
                <td class="payment">₦<?php echo $gTotal; ?></td>
              </tr>

            </table>
          </div><!--End Table-->

          <div id="legalcopy">
            <p class="legal"><strong>Thank you for your business!</strong>
            </p>
          </div>

        </div><!--End InvoiceBot-->

  </div><!--End Invoice-->
          <div class="row">
            <div class="col-sm-4"></div>
              <div class="col-sm-4"><button onclick="printContent('invoice-POS');" class="btn btn-primary btn-block">Print Reciept</button></div>
              <div class="col-sm-4"></div>
          </div>
      </div>

 <script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').location.reload();
}
</script>


<?php

include("./footer.php");

?>