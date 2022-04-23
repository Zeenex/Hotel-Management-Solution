<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["r_type"])  && isset($_POST["r_number"]) && isset($_POST["r_cost"])){

	$room_type1 = $_POST['r_type'];
	$room_number1 = $_POST['r_number'];
	$room_cost1 = $_POST['r_cost'];
	$building1 = $_POST['building'];
	$building_floor1 = $_POST['building_floor'];


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM rooms WHERE room_number='".$room_number1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{


			$sql = "INSERT INTO rooms (room_number,room_type,building,floor,cost,update_date) VALUES('$room_number1','$room_type1','$building1','$building_floor1','$room_cost1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../add-room.php?msg=Room Added!");
				//echo "<script>"; echo " alert('Room Added');window.location.href='../add-room.php';</script>";

			}else{

				
				header("Location: ../add-room.php?msg=There was an error, please check!");
				//echo "<script>"; echo " alert('There was an error, please check');window.location.href='../add-room.php';</script>";
			}

		}else{

			header("Location: ../add-room.php?msg=This room already exist on record!");
			//echo "<script>"; echo " alert('This room already exist on record');window.location.href='../add-room.php';</script>";
		}



} else{
	header("Location: ../add-room.php?msg=Required All fields!");
	//header("Location: ../add-room.php");
}

}

?>