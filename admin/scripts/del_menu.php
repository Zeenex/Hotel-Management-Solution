
<?php
include("config.php");

$menu_id = $_GET['menu_id'];

$sql= mysqli_query($mysqli, "DELETE FROM menu_item WHERE id='$menu_id'");

        if($sql){

            header("Location: ../view-menu.php?msg=Menu Item Deleted!");
            
        }else{
            
            header("Location: ../view-menu.php?msg=Something was wrong! Please check!");
            
        }

    





?>