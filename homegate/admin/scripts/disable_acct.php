
<?php
include("config.php");

$email_id = $_GET['email_id'];

        $sql= mysqli_query($mysqli, "UPDATE staff set status='inactive' WHERE id='$email_id'");

        if($sql){
            header("Location: ../view-staff.php?msg=Account Disabled!");
            
        }else{
            header("Location: ../view-staff.php?msg=Something was wrong! Please check!");
            
        }


?>