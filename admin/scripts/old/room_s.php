<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["room"])  && isset($_POST["cname"]) && isset($_POST["duration"]) && isset($_POST["c_in_date"]) && isset($_POST["c_out_date"])){

	$room1 = $_POST['room'];
	$cname1 = $_POST['cname'];
	$duration1 = $_POST['duration'];
	$c_in_date1 = $_POST['c_in_date'];	
	$c_out_date1 = $_POST['c_out_date'];
	

$roomsql = mysqli_query($mysqli, "SELECT * FROM rooms where room_number = '$room1'");
 while($rows=mysqli_fetch_array($roomsql)){$Rcost = $rows['cost'];$Rtype = $rows['room_type'];}


$total = $Rcost * $duration1;



	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM assign_room WHERE customer_name='".$cname1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{


			mysqli_query($mysqli, "UPDATE rooms SET status='Booked' WHERE room_number = '$room1'");
			mysqli_query($mysqli, "UPDATE ccheck SET status='Active' WHERE name = '$cname1'");

			$sql = "INSERT INTO assign_room (room_number,room_type,cost,customer_name,check_In,check_out,duration_stay,total_cost,update_date) VALUES('$room1','$Rtype','$Rcost','$cname1','$c_in_date1','$c_out_date1','$duration1','$total',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				header("Location: ../payment-confirm.php?name=$cname1&room_number=$room1&room_type=$Rtype&total=$total&date_checkin=$c_in_date1&date_checkout=$c_out_date1");

			}else{

				
				
				echo " alert('There was an error, please check');window.location.href='../checkin.php';</script>";
			}

		}else{

			echo " alert('This customer already exist on record');window.location.href='../assign_room.php';</script>";
		}



} else{

	header("Location: ../checkin.php");
}

}

?>