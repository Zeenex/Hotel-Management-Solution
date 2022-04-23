<?php

include("config.php");


if(isset($_POST["submit"])){

	$item_num = $_POST['item_num'];
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


	$sql = "UPDATE laundary_storage SET item_name = '$item_name1',item_type='$item_type1',item_category='$item_cat1',item_condition='$item_cond1',item_sku='$item_sku1',item_serial='$item_serial1',item_isbn='$item_isbn1',item_color='$item_color1',manuf_date='$manuf_date1',exp_date='$expiry_date1',unit_cost='$item_cost1',warranty='$item_warranty1',unit_measure='$unit_measure1',quantity='$item_qty1',total_item_cost='$total_item_cost1',date_added=NOW() WHERE item_no = '$item_num'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../view-laundry-store.php?msg=Item successfully updated!");
				

			}else{

				header("Location: ../view-laundry-store.php?msg=There was an error, please check!");
				
				
			}




}

?>