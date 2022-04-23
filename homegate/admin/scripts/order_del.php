<?php
include("config.php");

$order_num = $_GET['order_num'];

$sql= mysqli_query($mysqli, "DELETE FROM accounting_orders WHERE order_number='$order_num'");

        if($sql){

            header("Location: ../index.php?msg=Order Deleted!");
            
        }else{
            
            header("Location: ../index.php?msg=Something was wrong! Please check!");
            
        }

    





?>