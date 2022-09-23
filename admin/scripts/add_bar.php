<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["b_cat"])  && isset($_POST["b_item"]) && isset($_POST["b_cost"])){

	$b_cat1 = $_POST['b_cat'];
	$b_item1 = $_POST['b_item'];
	$b_cost1 = $_POST['b_cost'];


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM bar_item WHERE item='".$m_item1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{


			$sql = "INSERT INTO bar_item (item,category,price,update_date) VALUES('$b_item1','$b_cat1','$b_cost1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../add-bar-item.php?msg=A New Bar Item Has Been Added!");
				

			}else{

				
				header("Location: ../add-bar-item.php?msg=There was an error, please check!");
				
			}

		}else{
			header("Location: ../add-bar-item.php?msg=This bar item already exist on record!");
			
		}



} else{
	header("Location: ../add-bar-item.php?msg=Fill all required fields!");
	
}

}

?>