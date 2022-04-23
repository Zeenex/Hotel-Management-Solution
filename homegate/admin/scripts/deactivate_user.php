
<?php
include("config.php");

if (isset($_GET['stop']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $stop_id){
        $stop_id = (int)$stop_id;        
        $sql= mysqli_query($mysqli, "UPDATE staff set status='inactive' WHERE id='$stop_id'");

        if($sql){
            echo "<script>";echo " alert('Staff was deactivated');window.location.href='../deactivate-staff.php';</script>";
            
        }else{

            echo "<script>";echo " alert('Staff was not deactivated');window.location.href='../deactivate-staff.php';</script>";
        }
     
    }


}



?>