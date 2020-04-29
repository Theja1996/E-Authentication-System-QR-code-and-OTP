<?php 
require_once("connection.php");
session_start();
$r =$_SESSION['registration_no'];
$fn=$_SESSION['first_name'];
$ln=$_SESSION['last_name'];
$d =$_SESSION['department'];
$l =$_SESSION['lecture_code'];
$dt=$_SESSION['date'];

//Attendance should include as 0 or 1
	/*
	if(scanQr=ok){
		$a=1;
		$sql="INSERT INTO final_db(registration_no ,first_name ,last_name ,department ,lecture_code ,lecture_date , attendance_status)
					VALUES('$r', '$fn', '$ln', '$d', '$l', '$dt' , '$a' )"; 
	}
	else{
		$a=0;
		$sql="INSERT INTO final_db(registration_no ,first_name ,last_name ,department ,lecture_code, attendance_status)
					VALUES('$r', '$fn', '$ln', '$d', '$l', '$a' )";
	}
	*/

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<style>
 		.all{
 			width:100%;
			height:700px;
			background: url("../img/8.jpg") no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size: cover;
			-o-background-size:cover;
			background-size:cover;
 		}
 	</style>
 	<title>Finalize</title>
 </head>
 <body>
 	<div class="all">
 	<?php 
 	echo "<h1>Hey {$fn} {$ln}.<br>You have mark the attedance for {$l} lecture at {$dt}</h1>";
 	 ?>
 	 <h2>Click Redirect button to go to initial interface for New User</h2>
 	 <form action="index.php" method="post">
 	 	<input type="submit" name=""re_direct" value="Redirect">
 	 </form>
 	 </div>
 </body>
 </html>