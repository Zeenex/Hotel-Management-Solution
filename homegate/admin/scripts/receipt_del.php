<?php
include("config.php");

$inv_num = $_GET['inv_num'];

$sql= mysqli_query($mysqli, "DELETE FROM accounting_invoices WHERE inv_number='$inv_num'");

        if($sql){

            header("Location: ../index.php?msg=Receipt Deleted!");
            
        }else{
            
            header("Location: ../index.php?msg=Something was wrong! Please check!");
            
        }

    





?>