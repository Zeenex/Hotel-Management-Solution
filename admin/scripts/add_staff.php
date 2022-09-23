<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["s_roles"])  && isset($_POST["s_name"]) && isset($_POST["username"]) && isset($_POST["password"])){

	$s_roles1 = $_POST['s_roles'];
	$s_name1 = $_POST['s_name'];
	$username1 = $_POST['username'];
	$password1 = md5($_POST['password']);


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM staff WHERE username='".$username1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{


			$sql = "INSERT INTO staff (staff_name,username,password,role) VALUES('$s_name1','$username1','$password1','$s_roles1')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				header("Location: ../add-staff.php?msg=Staff Added and Assigned!");
				//echo "<script>"; echo " alert('Staff Added and Assigned');window.location.href='../add-staff.php';</script>";

			}else{

				
				header("Location: ../add-staff.php?msg=There was an error, please check!");
				//echo "<script>"; echo " alert('There was an error, please check');window.location.href='../add-staff.php';</script>";
			}

		}else{
			header("Location: ../add-staff.php?msg=This customer already exist on record!");
			//echo "<script>"; echo " alert('This customer already exist on record');window.location.href='../add-staff.php';</script>";
		}



} else{
	header("Location: ../add-staff.php?msg=Fill all required fields!");
	//header("Location: ../add-staff.php");
}

}

?>