<?php

include("config.php");


if(isset($_POST["submit"])){



	$l_id1 = $_POST['l_id'];
	$item_cat1 = $_POST['l_cat'];
	$item1 = $_POST['l_item'];
	$item_cost1 = $_POST['l_cost'];



			$sql = "UPDATE laundary_item SET item_desc='$item1',category='$item_cat1',cost='$item_cost1' WHERE id='$l_id1'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../view-laundry.php?msg=Laundry Item Updated!");
			

			}else{

				header("Location: ../view-laundry.php?msg=There was an error, please check!");
			}







}

?>