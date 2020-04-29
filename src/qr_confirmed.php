<?php
session_start();
require_once("connection.php");
require("php-qrcode-detector-decoder-master/php-qrcode-detector-decoder-master/lib/QrReader.php");
echo "path is : {$_SESSION['qr_code_path']}";
?>


 

 <!DOCTYPE html>
 <html>
 <head>
 	<style>
 		.main{
 			width:100%;
 			height:700px;
 			background: url("../img/8.jpg") no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size: cover;
			-o-background-size:cover;
			background-size:cover;
		}
 		.qr{
 			width:60%;
 			height:700px;
 			background-color:rgba(146, 160, 166,0.4);
 		}
 		.qr img{
 			padding-top:150px;
 		}
 		.qr input{
 			margin-top:20px;
 			width:20%;
 			height:50px;
 			border: 2px solid blue;
 			border-radius:20px;
 		}
 	</style>
 	<title>QR Code</title>
 </head>
 <body>
 	<div class="main">
 		<center>
 	<div class="qr">
 		<center>
 <?php 
 	if(isset($_POST['submit_lec'])){
		$sql="SELECT * FROM qr_codes WHERE lecture_code='{$_POST['lec']}'";
		$result=mysqli_query($con,$sql);
		$_SESSION=mysqli_fetch_assoc($result);
		echo "<img src='qr_images/qrcode-IS21213.png'>";
		echo "<img src='{$_SESSION['qr_code_path']}'>";
		echo "<img src='qr_code_path'>";
	}
 ?>
 </center>
 <form action="qr_scan.php" method="post">
 	<input type="submit" name="scan" value="Scan">
 </form>
 	 </div><!-- qr -->
 	 </center>
 	</div><!-- main -->
 </body>
 </html>