<?php
require_once("connection.php");
session_start();
require("php-qrcode-detector-decoder-master/php-qrcode-detector-decoder-master/lib/QrReader.php");
//$files=scandir('php-qrcode-detector-decoder-master/php-qrcode-detector-decoder-master/tests/qrcodes');
// echo "<pre>";
// print_r($files);
// echo "</pre>";

// foreach($files as $file){
// 	if($file=='.' || $file=='..'){
// 		continue;
// 	}else{
// $qrcode= new QrReader('php-qrcode-detector-decoder-master/php-qrcode-detector-decoder-master/tests/qrcodes/'.$file);
// $text=$qrcode->text();
// echo $text."<br><br><br>";
// }
// }


 ?>

<!DOCTYPE html>
<html>
<head>
<title>	QR Code Authentification</title>
<style>
	.qr{
		width:100%;
		height:700px;
		background: url("../img/8.jpg") no-repeat center center fixed;
		-webkit-background-size:cover;
		-moz-background-size: cover;
		-o-background-size:cover;
		background-size:cover;
		font-size:40px;
		padding-top:200px;
		padding-left:50px;
	}
	.qr input{
		width:30%;
		height:40px;
		margin-left:40px;
		border:2px solid blue;
		border-radius:15px;
	}
	.submit input{
		width:15%;
		height:50px;
		margin-left:450px;
		margin-top:80px;
		border:2px solid blue;
		border-radius:10px;
	}
</style>
</head>

<body class="qr">
	<form action="qr_confirmed.php" method="post">
	Enter the Lecture code which is held now : <input type="text" name="lec" required><br>
	Enter the date  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="date" name="date" required><br>
											<div class="submit">
											   <input type="submit" name="submit_lec">
											</div><!-- submit -->
	</form>	
	 <p>
		IS21213=Personal Productivity 
	</p>	 		
					  
</body>
</html>