<?php

include("config.php");


if(isset($_POST["submit"])){

	$room_id1 = $_POST['r_id'];
	$room_type1 = $_POST['r_type'];
	$room_number1 = $_POST['r_number'];
	$room_cost1 = $_POST['r_cost'];
	$building1 = $_POST['building'];
	$building_floor1 = $_POST['building_floor'];


			$sql = "UPDATE rooms SET room_type = '$room_type1',room_number='$room_number1',cost = '$room_cost1',building = '$building1', floor = '$building_floor1' WHERE id='$room_id1'";			

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../view-room.php?msg=Room Updated!");
				

			}else{

				
				header("Location: ../view-room.php?msg=There was an error, please check!");
				
			}





}

?>