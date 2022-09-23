
<?php
include("config.php");

$room_id = $_GET['room_id'];

$sql= mysqli_query($mysqli, "DELETE FROM rooms WHERE id='$room_id'");

        if($sql){

            header("Location: ../view-room.php?msg=Room Deleted!");
            
        }else{
            
            header("Location: ../view-room.php?msg=Something was wrong! Please check!");
            
        }

    





?>