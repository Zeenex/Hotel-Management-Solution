<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["l_cat"])  && isset($_POST["l_item"]) && isset($_POST["l_cost"])){

	$item_cat1 = $_POST['l_cat'];
	$item1 = $_POST['l_item'];
	$item_cost1 = $_POST['l_cost'];


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM laundary_item WHERE item_desc='".$item1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{


			$sql = "INSERT INTO laundary_item (item_desc,category,cost,update_date) VALUES('$item1','$item_cat1','$item_cost1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../laundry-add-item.php?msg=A New Laundry Item Has Been Added!");
				
			}else{

				header("Location: ../laundry-add-item.php?msg=There was an error, please check!");
				
			}

		}else{

			header("Location: ../laundry-add-item.php?msg=This item already exist on record!");
		}



} else{

	header("Location: ../laundry-add-item.php?msg='Required All fields!");
}

}

?>