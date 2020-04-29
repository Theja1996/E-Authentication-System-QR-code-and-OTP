<?php  include_once('connection.php');

 if(isset($_POST['submit'])){
	
	$n=$_POST['name'];
	$d=$_POST['department'];
	$nu=$_POST['number'];
	$e=$_POST['email'];
	$p=$_POST['pwrd'];
	$rp=$_POST['re_pwrd'];

	if($p==$rp){
		$sql="INSERT INTO user (Name,Department,Registration,Email,Password) 
			VALUES('$n','$d','$nu','$e','$p')";
			mysqli_query($connection,$sql);   
	}
	else 
		echo "password wrong";
 }

if(isset($_POST['next'])){
	header('location:log_in.php');
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Created Account</title>
 </head>
 <body>
 	<form method='post' action=''>
 	<button name='next'>next</button>
 	<input type="button" name="back" value="back" onclick="history.back()">
 	</form>
 
 </body>
 </html>
