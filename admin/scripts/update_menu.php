<?php

include("config.php");


if(isset($_POST["submit"])){

	$m_id1 = $_POST['m_id'];
	$m_cat1 = $_POST['m_cat'];
	$m_item1 = $_POST['m_item'];
	$m_cost1 = $_POST['m_cost'];


			
			$sql = "UPDATE menu_item SET item='$m_item1',category='$m_cat1',price='$m_cost1' WHERE id='$m_id1'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../view-menu.php?msg=Menu Item updated!");

			}else{

		
				header("Location: ../view-menu.php?msg=There was an error, please check!");

			}





}

?>