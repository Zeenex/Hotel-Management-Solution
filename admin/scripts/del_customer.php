<?php
include("config.php");

$cus_id = $_GET['cus_id'];

$sql= mysqli_query($mysqli, "DELETE FROM customers WHERE id='$cus_id'");

        if($sql){

            header("Location: ../view-room.php?msg=Customer Account Deleted!");
            
        }else{
            
            header("Location: ../view-room.php?msg=Something was wrong! Please check!");
            
        }

    





?>