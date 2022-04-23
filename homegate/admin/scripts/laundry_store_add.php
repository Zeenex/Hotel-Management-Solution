<?php

include("config.php");


if(isset($_POST["submit"])){

	$item_name1 = $_POST['item-name'];
	$item_type1 = $_POST['item-type'];
	$item_cat1 = $_POST['item-cat'];
	$item_cond1 = $_POST['item-cond'];
	$item_sku1 = $_POST['item-sku'];
	$item_serial1 = $_POST['item-serial'];
	$item_isbn1 = $_POST['item-isbn'];
	$item_color1 = $_POST['item-color'];
	$manuf_date1 = $_POST['manuf-date'];	
	$expiry_date1 = $_POST['expiry-date'];
	$item_cost1 = $_POST['item-cost'];
	$item_warranty1 = $_POST['item-warranty'];
	$unit_measure1 = $_POST['unit-measure'];
	$item_qty1 = $_POST['item-qty'];

	$total_item_cost1 = $item_cost1 * $item_qty1;


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM laundary_storage WHERE item_name='".$item_name1."' || item_serial = '".$item_serial1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{

			$sql = "INSERT INTO laundary_storage (item_name,item_type,item_category,item_condition,item_sku,item_serial,item_isbn,item_color,manuf_date,exp_date,unit_cost,warranty,unit_measure,quantity,total_item_cost,date_added) VALUES('$item_name1','$item_type1','$item_cat1','$item_cond1','$item_sku1','$item_serial1','$item_isbn1','$item_color1','$manuf_date1','$expiry_date1','$item_cost1','$item_warranty1','$unit_measure1','$item_qty1','$total_item_cost1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../laundry-store-add.php?msg=Item Added to Store!");				

			}else{

				header("Location: ../laundry-store-add.php?msg=There was an error, please check!");
				
			}

		}else{
			header("Location: ../laundry-store-add.php?msg=This item already in store!");
			
		}





}

?>