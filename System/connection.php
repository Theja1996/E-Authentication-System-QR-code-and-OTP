<?php 	
	$server="localhost";
	$user="root";
	$password="";
	$database="system";

	$connection=mysqli_connect($server,$user,$password,$database);
		if(!$connection){
			die("database error");
		}
?>