<?php
include("config.php");

$cus_id = $_GET['cus_id'];

$sql= mysqli_query($mysqli, "UPDATE customers SET status='Booked' WHERE id='$cus_id'");

        if($sql){

            header("Location: ../customers.php?msg=Customer Account Enabled!");
            
        }else{
            
            header("Location: ../customers.php?msg=Something was wrong! Please check!");
            
        }

    





?>