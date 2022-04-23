<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["fname"])  && isset($_POST["faddress"]) && isset($_POST["state"]) && isset($_POST["c_nationality"]) && isset($_POST["p_number"]) && isset($_POST["profession"]) && isset($_POST["vehicle_no"]) && isset($_POST["visit"]) && isset($_POST["travel_from"]) && isset($_POST["travel_to"]) && isset($_POST["p_option"])){

	$name1 = $_POST['fname'];
	$faddress1 = $_POST['faddress'];
	$state1 = $_POST['state'];
	$c_nationality1 = $_POST['c_nationality'];	
	$p_number1 = $_POST['p_number'];
	$profession1 = $_POST['profession'];
	$vehicle_no1 = $_POST['vehicle_no'];
	$visit1 = $_POST['visit'];
	$travel_from1 = $_POST['travel_from'];
	$travel_to1 = $_POST['travel_to'];
	$p_option1 = $_POST['p_option'];


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM ccheck WHERE name='".$name1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{

			$sql = "INSERT INTO ccheck (name,address,state,nationality,passport,profession,vehicle,nature_visit,travel_from,travel_to,pay_option,add_date,status) VALUES('$name1','$faddress1','$state1','$c_nationality1','$p_number1','$profession1','$vehicle_no1','$visit1','$travel_from1','$travel_to1','$p_option1',NOW(),'Reserved')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				echo "<script>";echo " alert('Check-In Details created. Proceed to Add Room ');window.location.href='../reception-assign_room.php';</script>";

			}else{

				
				
				echo "<script>";echo "<script>";echo " alert('There was an error, please check');window.location.href='../reception-checkin.php';</script>";
			}

		}else{

			echo "<script>";echo " alert('This customer already exist on record');window.location.href='../reception-assign_room.php';</script>";
		}



} else{

	header("Location: ../checkin.php");
}

}

?>