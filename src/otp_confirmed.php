<?php 
session_start();
$user_first=$_SESSION['first_name'];
$user_last =$_SESSION['last_name'];
$user_mail =$_SESSION['email'];
echo "otp is : {$_SESSION['otp']}";
 	 
	if(isset($_POST['confirm'])){
		if($_POST['confirmed_otp']==$_SESSION['otp']){
			echo "OTP Matched";
			header('location:qr.php');
		}
		else{ echo "Your entered OTP key doesn't match. Please try again"; }
	}

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.page{
			width:100%;
			height:700px;
			background: url("../img/8.jpg") no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size: cover;
			-o-background-size:cover;
			background-size:cover;
		}
		.confirmed_otp{
			padding-top:80px;
			margin-left:100px;
			font-size:40px;	
			color:#110e49;
		}
		.confirmed_otp input{
			margin-top:30px;
			width:15%;
			height:50px;
			border: 2px solid blue;
			border-radius:20px;
			margin-left:70px;
		}
	</style>
	<title>After Confirm OTP</title>
</head>
<body style="margin:0px;">
	<div class="page">	
	<div class="confirmed_otp">
<?php 	
		echo "Hey {$user_first} {$user_last}. <br><br> Please enter your confirmation OTP key in here."; 
 ?>
	<form action="otp_confirmed.php" method="post">
		Enter the OTP : <input type="text" name="confirmed_otp" required>
						<input type="submit" name="confirm">
	</form>
		</div> <!-- confirmed_otp -->

</div><!-- page -->
</body>
</html>