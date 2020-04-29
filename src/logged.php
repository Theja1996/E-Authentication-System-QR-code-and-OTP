<?php 
session_start();
$user_first=$_SESSION['first_name'];
$user_last =$_SESSION['last_name'];
$user_mail =$_SESSION['email'];

require_once("connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer-master/PHPMailer-master/src/Exception.php');
require('PHPMailer-master/PHPMailer-master/src/PHPMailer.php');
require('PHPMailer-master/PHPMailer-master/src/SMTP.php');

echo "Before sent otp is : {$otp}";
	if(isset($_POST['send'])){
	$otp=random_int(1000, 100000);

	$_SESSION['otp']=$otp;

	$mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(true); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // "ssl" secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // 465 or 587
    $mail->IsHTML(true);
    $mail->Username = "nipun.testing11@gmail.com";
    $mail->Password = "Sadeepa@11";
    $mail->SetFrom("nipun.testing11@gmail.com");
    $mail->Subject = "One Time Password From Authentication System";
    $mail->Body = "Hey Welcome {$user_first} {$user_last}.. <br><br> Your Confirmation One Time Password is : {$otp}.. <br><br> Enter this OTP to mark your Attendance..<br><br>";
    $mail->AddAddress($user_mail);
    if(!$mail->Send()){
    	echo 'Error : ' . $mail->ErrorInfo;
    }else{
    	echo "sent succesfully and OTP is : {$otp}";
    	header('location:otp_confirmed.php');
    }
}


	/*REQUIRE_once("connection.php");

	if(isset($_POST['send'])){
		// WE CAN GENERATE RANDOM KEY BY     RAND(MIN,MAX)       OR          RANDOM_INT(MIN,MAX)
		$otp=random_int(1000, 100000);
		
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require('PHPMailer-master/PHPMailer-master/src/Exception.php');
	require('PHPMailer-master/PHPMailer-master/src/PHPMailer.php');
	require('PHPMailer-master/PHPMailer-master/src/SMTP.php');

	$mail = new PHPMailer(); // create a new object

    $mail->IsSMTP(true); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = "ssl"; // "ssl" secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // 465 or 587 // IF USE SSL BETTER TO USE 465 AS A PORT.. IF USE TSL, BETTER TO USE 587 AS A PORT
    $mail->IsHTML(true);
    $mail->Username = "nipun.testing11@gmail.com";
    $mail->Password = "Sadeepa@11";
    $mail->SetFrom("nipun.testing11@gmail.com");
    $mail->Subject = "OTP From Authentication System";
    $mail->Body = "Hey Welcome USER.. <br><br> Your Confirmation One Time Password is : {$otp}. <br><br> Enter this OTP to mark your Attendance..";
    $mail->AddAddress("nipunsadeepa10@gmail.com");
    if(!$mail->Send()){
    	echo 'Error : ' . $mail->ErrorInfo;
    }else{
    	echo "sent succesfully";
    }
	}	
*/
?> 
 
<!DOCTYPE html>
<html>
<head>
	<style>
		.logged{
			width:100%;
			height:700px;
			background: url("../img/8.jpg") no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size: cover;
			-o-background-size:cover;
			background-size:cover;
		}
		.details {
			padding-top:50px;
			font-size:40px;
			margin-bottom:30px;
			font-weight: bold;
			color:#110e49;
			margin-left:50px;
		}
		.send input{
			margin-top:30px;
			width:15%;
			height:50px;
			border: 2px solid blue;
			border-radius:20px;
			margin-left:70px;
		}
	
    </style>
	<title>Logged</title>
</head>
<body style="margin:0px;">
	<div class="logged">
		<div class="details">
			<?php  
			echo "Welcome {$user_first} {$user_last} to Authentification System. <br><br>	";

			echo  "You have confirmed your Account details. <br> Now try to mark the attendance by using One Time Password(OTP) which we send to your provided email address.";
			 ?>
		</div><!-- details -->

	<div class="send">
		<form action="logged.php" method="post">
			<input type="submit" name="send" value="Send A OTP">
			<!-- <input type="button" nmae="re-send" value="Re-Send A OTP"> -->
		</form>
	 </div><!-- send -->
	 <div class="details">
	 <?php  echo "&nbsp&nbsp&nbsp&nbsp Check your E-mail to get Confirmation key." ?>
	</div><!-- details -->
	
	
	</div><!-- logged -->

</body>
</html>