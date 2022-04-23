<?php

include("config.php");


if(isset($_POST["submit"])){



  $rstaff1 = $_POST['staff'];
  $address1 = $_POST['l_address'];
  $name1 = $_POST['l_name'];
  $inv_num = mt_rand(1000, 99999);
  $ord_num = mt_rand(100, 9999);
  $source1 = 'Admin';



  if (isset($_POST['item']))
  {      
            
          
            foreach($_POST['item'] as $row => $value){

                $item=$_POST['item'][$row];
                $quantity=$_POST['qty'][$row];
                $price_items=$_POST['cost_items'][$row];                
                $sale_price =$quantity * $price_items;
                $sale_price1 = array($sale_price);
                $total_price = array_sum($sale_price1);
                

                
                mysqli_query($mysqli, "INSERT INTO laundary_order(order_number,source,c_name,staff,item_desc,quantity,address,added_date) VALUES ('".$ord_num."','".$source1."','".$name1."','".$rstaff1."','".$item."','".$quantity."','".$address1."',NOW())");

                mysqli_query($mysqli, "INSERT INTO accounting_orders(order_number,source,staff,item_desc,quantity,added_month,added_year,added_date) VALUES ('".$ord_num."','".$source1."','".$rstaff1."','".$item."','".$quantity."',MONTHNAME(CURRENT_DATE),YEAR(CURRENT_DATE),NOW())");

                mysqli_query($mysqli, "INSERT INTO accounting_invoices(inv_number,source,staff,item_desc,quantity,price,total,month,year,added_date) VALUES ('".$inv_num."','".$source1."','".$rstaff1."','".$item."','".$quantity."','".$price_items."','".$total_price."',MONTHNAME(CURRENT_DATE),YEAR(CURRENT_DATE),NOW())");

                mysqli_query($mysqli, "INSERT INTO laundary_customer(order_number,c_name,address,added_date) VALUES ('".$ord_num."','".$name1."','".$address1."',NOW())");

                $sql = "INSERT INTO laundary_invoices(inv_number,source,c_name,staff,item_desc,quantity,cost,total,added_date) VALUES ('".$inv_num."','".$source1."','".$name1."','".$rstaff1."','".$item."','".$quantity."','".$price_items."','".$total_price."',NOW())";

      $result = mysqli_query($mysqli, $sql);

      if($result){

        header("Location: ../laundary-order.php?msg=Order Created!");

      }else{

        
        header("Location: ../laundary-order.php?msg=There was an error, please check!");

      }

}
}





}

?>