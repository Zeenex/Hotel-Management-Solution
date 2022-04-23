<?php

include("config.php");


if(isset($_POST["submit"])){



  $rstaff1 = $_POST['staff'];
  $inv_num = mt_rand(1000, 99999);
  $ord_num = mt_rand(100, 9999);
  $source1 = 'Restaurant';



  if (isset($_POST['menu']))
  {      
            
          
            foreach($_POST['menu'] as $row => $value){

                $menu=$_POST['menu'][$row];
                $quantity=$_POST['qty'][$row];
                $price_items=$_POST['price_items'][$row];                
                $sale_price =$quantity * $price_items;
                $sale_price1 = array($sale_price);
                $total_price = array_sum($sale_price1);
                $total = array_sum($total_price);

                
mysqli_query($mysqli, "INSERT INTO kitchen_orders(order_number,source,staff,item_desc,quantity,added_date) VALUES ('".$ord_num."','".$source1."','".$rstaff1."','".$menu."','".$quantity."',NOW())");

mysqli_query($mysqli, "INSERT INTO accounting_orders(order_number,source,staff,item_desc,quantity,added_month,added_year,added_date) VALUES ('".$ord_num."','".$source1."','".$rstaff1."','".$menu."','".$quantity."',MONTHNAME(CURRENT_DATE),YEAR(CURRENT_DATE),NOW())");
mysqli_query($mysqli, "INSERT INTO accounting_invoices(inv_number,source,staff,item_desc,quantity,price,total,month,year,added_date) VALUES ('".$inv_num."','".$source1."','".$rstaff1."','".$menu."','".$quantity."','".$price_items."','".$total_price."',MONTHNAME(CURRENT_DATE),YEAR(CURRENT_DATE),NOW())");              

$sql = "INSERT INTO kitchen_invoices(inv_number,source,staff,item_desc,quantity,price,total,added_date) VALUES ('".$inv_num."','".$source1."','".$rstaff1."','".$menu."','".$quantity."','".$price_items."','".$total_price."',NOW())";

      $result = mysqli_query($mysqli, $sql);

      if($result){

        header("Location: ../kitchen-order.php?msg=Order placed!");

      }else{

        
        header("Location: ../kitchen-order.php?msg=There was an error, please check!");
      }

}
}





}

?>