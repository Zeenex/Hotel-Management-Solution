<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["s_roles"])  && isset($_POST["s_name"])){

	$s_roles1 = $_POST['s_roles'];
	$s_name1 = $_POST['s_name'];
	

        $sql= mysqli_query($mysqli, "UPDATE staff set role='$s_roles1' WHERE staff_name='$s_name1'");

        if($sql){
            header("Location: ../assign-roles.php?msg=Staff designation changed!");
            //echo "<script>";echo " alert('Your designation has been changed');window.location.href='../assign-roles.php';</script>";
            
        }else{
            header("Location: ../assign-roles.php?msg=There was an error, please check!");
            //echo "<script>";echo " alert('Your designation was not changed');window.location.href='../assign-roles.php';</script>";
        }



} else{
    header("Location: ../assign-roles.php?msg=Fill all required fields!");
	//header("Location: ../add-staff.php");
}

}

?>