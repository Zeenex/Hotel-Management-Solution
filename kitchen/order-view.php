
<?php

include("./header.php");
include("../config.php");

error_reporting(E_ALL ^ E_NOTICE);
$order_num = $_GET['order_num'];

$order = mysqli_query($mysqli, "SELECT * FROM accounting_orders WHERE order_number='$order_num'");
$order2 = mysqli_query($mysqli, "SELECT added_date FROM accounting_orders WHERE order_number='$order_num'");
while($rows=mysqli_fetch_array($order2)){$date_add = $rows['added_date'];}

?>
      <div class="content">
  <div id="invoice-POS">
    
    <center id="top">
      <div class="logo" align="center"><img src="../assets/img/logo.png" width="150px" height="46.7px"></div>
      <div class="info"> 
        <h2>Order No: <?php echo $order_num; ?></h2>
    <center id="mid">
         <p>Plot 6, Babafemi Osoba Crescent Off<br> Admiralty Road Lekki Phase 1</p>
         <p>info@homegate-ng.com</p>
         <p>Tel: 01-2708261 – 4,01- 2630045, 01 7730533 - 4</p>       
    </center>
    
    <h2><?php echo $date_add; ?></h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->


    
    <div id="bot">

          <div id="table">
            <table>
              <tr class="tabletitle">
                <th>Item</th>
                <th>Qty</th>
              </tr>

                          <?php
                          while($rows=mysqli_fetch_array($order)){

                           $date_add = $rows['added_date'];
                            
                            ?>

                        <tr class="service">
                          <td>
                            <?php echo $rows['item_desc']; ?>
                          </td>
                          <td>
                            <?php echo $rows['quantity']; ?>
                          </td>
                        </tr>
                        <?php  } ?>





            </table>
          </div><!--End Table-->

          <div id="legalcopy">
            <p class="legal"><strong>Thank you for your order!</strong>
            </p>
          </div>

        </div><!--End InvoiceBot-->

  </div><!--End Invoice-->
          <div class="row">
            <div class="col-sm-4"></div>
              <div class="col-sm-4"><button onclick="printContent('invoice-POS');" class="btn btn-primary btn-block">Print Order</button></div>
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
