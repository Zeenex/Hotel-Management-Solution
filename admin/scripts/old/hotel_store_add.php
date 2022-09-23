<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["item_name"])  && isset($_POST["item_brand"]) && isset($_POST["item_qty"]) && isset($_POST["item_serial"]) && isset($_POST["item_cost"])){

	$item_name1 = $_POST['item_name'];
	$item_brand1 = $_POST['item_brand'];
	$item_qty1 = $_POST['item_qty'];
	$item_serial1 = $_POST['item_serial'];	
	$item_cost1 = $_POST['item_cost'];

	$total_item_cost1 = $item_cost1 * $item_qty1;


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM hotel_storage WHERE item_name='".$item_name1."' || item_serial = '".$item_serial1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{

			$sql = "INSERT INTO hotel_storage (item_name,item_brand,item_serial,item_qty,item_cost,total_item_cost,date_added) VALUES('$item_name1','$item_brand1','$item_serial1','$item_qty1','$item_cost1','$total_item_cost1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				echo "<script>";echo " alert('Item successfully added');window.location.href='../reception-store.php';</script>";

			}else{

				
				
				echo "<script>";echo "<script>";echo " alert('There was an error, please check');window.location.href='../reception-store-add.php';</script>";
			}

		}else{

			echo "<script>";echo " alert('This item already in store');window.location.href='../reception-store-add.php';</script>";
		}



} else{

	header("Location: ../reception-store-add.php");
}

}

?>