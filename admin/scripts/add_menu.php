<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["m_cat"])  && isset($_POST["m_item"]) && isset($_POST["m_cost"])){

	$m_cat1 = $_POST['m_cat'];
	$m_item1 = $_POST['m_item'];
	$m_cost1 = $_POST['m_cost'];


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM menu_item WHERE item='".$m_item1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{


			$sql = "INSERT INTO menu_item (item,category,price,update_date) VALUES('$m_item1','$m_cat1','$m_cost1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../add-menu.php?msg=A New Menu Item Has Been Added!");
				

			}else{

				
				header("Location: ../add-menu.php?msg=There was an error, please check!");
				
			}

		}else{
			header("Location: ../add-menu.php?msg=This menu already exist on record!");
			
		}



} else{
	header("Location: ../add-menu.php?msg=Fill all required fields!");
	
}

}

?>