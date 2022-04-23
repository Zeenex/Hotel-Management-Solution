<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["cname"])){


	$cname1 = $_POST['cname'];


$roomsql = mysqli_query($mysqli, "SELECT * FROM assign_room where customer_name = '$cname1'");
 while($rows=mysqli_fetch_array($roomsql)){$Croom_number = $rows['room_number'];}


mysqli_query($mysqli, "UPDATE rooms SET status='Avaliable' WHERE room_number = '$Croom_number'");

$sql = "UPDATE ccheck SET status='Inactive' WHERE name = '$cname1'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				echo "<script>";echo " alert('Customer Checkout Complete');window.location.href='../checkout.php';</script>";

			}else{

				
				
				echo "<script>"; echo " alert('There was an error, please check');window.location.href='../checkout.php';</script>";
			}




} else{

	header("Location: ../checkout.php");
}

}else{

	header("Location: ../checkout.php");
}

?>