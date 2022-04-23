<?php

include("config.php");


if(isset($_POST["submit"])){

if(isset($_POST["user"])  && isset($_POST["password2"])){

  $password21 = md5($_POST['password2']);
  $user1 = $_POST['user'];




$sql = "UPDATE staff SET password = '$password21' WHERE username='$user1'";

      $result = mysqli_query($mysqli, $sql);

      if($result){

        
        header("Location: ../change-pwd.php?msg=Password Updated!");
        

      }else{

        
        header("Location: ../change-pwd.php?msg=Something was wrong! Please check!");
        
      }

} else{

  
  header("Location: ../change-pwd.php?msg=Please insert all required fields!");

}



}

?>