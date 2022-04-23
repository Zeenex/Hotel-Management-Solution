
<?php
include("config.php");

$laun_id = $_GET['laun_id'];

$sql= mysqli_query($mysqli, "DELETE FROM laundary_item WHERE id='$laun_id'");

        if($sql){

            header("Location: ../view-laundry.php?msg=Item Deleted!");
            
        }else{
            
            header("Location: ../view-laundry.php?msg=Something was wrong! Please check!");
            
        }

    





?>