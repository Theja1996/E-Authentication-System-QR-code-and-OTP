<?php 	
	$server="localhost";
	$user="root";
	$password="";
	$database="authentification_system";

	$con=mysqli_connect( $server, $user ,$password ,$database);
		if(!$con){
			die("database error");
		}
  ?>
