<?php

include("config.php");


if(isset($_POST["submit"])){

	$b_id1 = $_POST['b_id'];
	$b_cat1 = $_POST['b_cat'];
	$b_item1 = $_POST['b_item'];
	$b_cost1 = $_POST['b_cost'];


			
			$sql = "UPDATE bar_item SET item='$b_item1',category='$b_cat1',price='$b_cost1' WHERE id='$b_id1'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../view-bar-item.php?msg=Bar Item updated!");

			}else{

		
				header("Location: ../view-bar-item.php?msg=There was an error, please check!");

			}





}

?>