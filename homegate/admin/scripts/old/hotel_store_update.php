<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["item_name"])  && isset($_POST["item_brand"]) && isset($_POST["item_qty"]) && isset($_POST["item_serial"]) && isset($_POST["item_cost"])){

	$item_num = $_POST['item_num'];
	$item_name1 = $_POST['item_name'];
	$item_brand1 = $_POST['item_brand'];
	$item_qty1 = $_POST['item_qty'];
	$item_serial1 = $_POST['item_serial'];	
	$item_cost1 = $_POST['item_cost'];

	$total_item_cost1 = $item_cost1 * $item_qty1;

	$sql = "UPDATE hotel_storage SET item_name = '$item_name1',item_brand='$item_brand1',item_serial='$item_serial1',item_qty='$item_qty1',item_cost='$item_cost1',total_item_cost='$total_item_cost1',date_added=NOW() WHERE item_no = '$item_num'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				echo "<script>";echo " alert('Item successfully updated');window.location.href='../reception_store_view.php';</script>";

			}else{

				
				
				echo "<script>";echo "<script>";echo " alert('There was an error, please check');window.location.href='../reception_item_edit.php';</script>";
			}


} else{

	header("Location: ../reception_store_view.php");
}

}

?>