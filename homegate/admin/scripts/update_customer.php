<?php

include("config.php");


if(isset($_POST["submit"])){


	$c_id1 = $_POST['c_id'];
	$faddress1 = $_POST['faddress'];
	$state1 = $_POST['state'];
	$c_nationality1 = $_POST['c_nationality'];	
	$p_number1 = $_POST['p_number'];
	$profession1 = $_POST['profession'];
	$vehicle_no1 = $_POST['vehicle_no'];
	$visit1 = $_POST['visit'];
	$duration1 = $_POST['duration'];
	$travel_from1 = $_POST['travel_from'];
	$travel_to1 = $_POST['travel_to'];	
	$p_option1 = $_POST['p_option'];




			$sql = "UPDATE customers SET address='$faddress1',state='$state1',nationality='$c_nationality1',passport='$p_number1',profession='$profession1',vehicle='$vehicle_no1',nature_visit='$visit1',duration='$duration1',travel_from='$travel_from1',travel_to='$travel_to1',pay_option='$p_option1' WHERE id='$c_id1'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../add-customer.php?msg=Customer Details updated!");
				//echo "<script>";echo " alert('Customer Details created. Proceed to Add Room ');window.location.href='../assign_room.php';</script>";

			}else{

				
				header("Location: ../add-customer.php?msg=There was an error, please check!");
				//echo "<script>";echo "<script>";echo " alert('There was an error, please check');window.location.href='../checkin.php';</script>";
			}





}

?>