<?php
 include_once("connection.php"); 

	
	extract ($_POST);
	$query = "SELECT * FROM user WHERE Registration='$inputregno' AND Password='$inputpwrd' " ;
	$result =mysqli_query($connection,$query);
	// $row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)){
		echo "You are a user";
		 header('location:qr.php');
	}
	else{
			
			header('location:index.php');
			
	}
  ?>