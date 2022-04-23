<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["room_num"])  && isset($_POST["c_in_date"]) && isset($_POST["c_out_date"])){

	$name1 = $_POST['fname'];
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
	$room_num1 = $_POST['room_num'];
	$c_in_date1 = $_POST['c_in_date'];
	$c_out_date1 = $_POST['c_out_date'];
	$p_option1 = $_POST['p_option'];

	$roomsql = mysqli_query($mysqli, "SELECT * FROM rooms where room_number = '$room_num1'");
	 while($rows=mysqli_fetch_array($roomsql)){$Rcost = $rows['cost'];$Rtype = $rows['room_type'];}


	$total = $Rcost * $duration1;

			mysqli_query($mysqli, "UPDATE rooms SET status='Reserved' WHERE room_number = '$room_num1'");

			$sql = "INSERT INTO customers (name,address,state,nationality,passport,profession,vehicle,nature_visit,duration,travel_from,travel_to,room_num,room_cost,total_cost,check_in_date,check_out_date,pay_option,add_date,month,year,status) VALUES('$name1','$faddress1','$state1','$c_nationality1','$p_number1','$profession1','$vehicle_no1','$visit1','$duration1','$travel_from1','$travel_to1','$room_num1','$Rcost','$total','$c_in_date1','$c_out_date1','$p_option1',NOW(),MONTHNAME(CURRENT_DATE),YEAR(CURRENT_DATE),'Reserved')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../create-reserve.php?msg=Reservation created!");
				//echo "<script>";echo " alert('Customer Details created. Proceed to Add Room ');window.location.href='../assign_room.php';</script>";

			}else{

				
				header("Location: ../create-reserve.php?msg=There was an error, please check!");
				//echo "<script>";echo "<script>";echo " alert('There was an error, please check');window.location.href='../checkin.php';</script>";
			}



} else{

	header("Location: ../create-reserve.php?msg='Room Details Fields Required!");
	//header("Location: ../checkin.php");
}

}

?>