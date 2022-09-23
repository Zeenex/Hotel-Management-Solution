<?php
if(isset($_POST["submit"])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		include("../config.php");

		//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM staff WHERE username='".$username."' AND password='".$password."' AND status='active'");
		$numrows = mysqli_num_rows($query);
		if($numrows != 0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
				$role=$row['role'];
				$name=$row['name'];
				
				
			}
			
			if($role == 'admin'){
			    
			    if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../admin/index.php");
			}    

		}elseif ($role == 'reception') {
			    if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../reception/index.php");
			} 
		}elseif ($role == 'restaurant'){


			    if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../restaurant/index.php");
			}

		}elseif ($role == 'kitchen'){


			    if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../kitchen/index.php");
			}

		}elseif ($role == 'laundry'){


			    if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../laundry/index.php");
			}

		}elseif ($role == 'accounting'){


			    if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../accounting/index.php");
			}

}else{

	header("Location: ../index.php?msg=There is no role attached to this account!");
}

}


		else
		{
			
			header("Location: ../index.php?msg=Username or Password not found! or account is inactive!");
		}
	}
	else
	{
		
		header("Location: ../index.php?msg='Required All fields!");
	}
}



?>
