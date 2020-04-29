<?php
session_start();
$path=$_SESSION['qr_code_path'];
$img_name=$_SESSION['image_name'];
echo "my new path is : {$path}";
require_once("connection.php");
require("php-qrcode-detector-decoder-master/php-qrcode-detector-decoder-master/lib/QrReader.php");
if(isset($_POST['scan'])){
 $files=scandir("qr_images");
 print_r($files);

foreach($files as $file){
 	if($file=='.' || $file=='..'){
	continue;
 	}else{
$qrcode= new QrReader('qr_images/'.$img_name);
 	$text=$qrcode->text(); //	RETURN DECODED CONTENT FROM QR CODE
 	echo $text."<br><br><br>";
 	}
 }
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>scanned</title>
</head>
<body>

</body>
</html> -->