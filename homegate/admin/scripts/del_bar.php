
<?php
include("config.php");

$bar_id = $_GET['bar_id'];

$sql= mysqli_query($mysqli, "DELETE FROM bar_item WHERE id='$bar_id'");

        if($sql){

            header("Location: ../view-bar-item.php?msg=Bar Item Deleted!");
            
        }else{
            
            header("Location: ../view-bar-item.php?msg=Something was wrong! Please check!");
            
        }

    





?>