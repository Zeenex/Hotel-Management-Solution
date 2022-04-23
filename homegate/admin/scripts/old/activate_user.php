
<?php
include("config.php");

if (isset($_GET['start']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $stop_id){
        $stop_id = (int)$stop_id;        
        $sql= mysqli_query($mysqli, "UPDATE staff set status='active' WHERE id='$stop_id'");

        if($sql){
            echo "<script>";echo " alert('Staff was activated');window.location.href='../deactivate-staff.php';</script>";
            
        }else{

            echo "<script>";echo " alert('Staff was not activated');window.location.href='../deactivate-staff.php';</script>";
        }
     
    }


}



?>