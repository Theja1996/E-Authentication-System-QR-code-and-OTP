<?php 
include_once("connection.php");
		
if(isset($_POST['submit'])){
		if($_POST['pwrd']==$_POST['re_pwrd']){
			$r = $_POST['registration'];
			$fn= $_POST['first_name'];
			$ln= $_POST['last_name'];
			$f = $_POST['faculty'];
			$d = $_POST['department'];
			$e = $_POST['email'];
			$p = $_POST['pwrd'];
			$hp= sha1($p);

			$query1="INSERT INTO system_db (registration_no ,first_name ,last_name ,faculty ,department ,email , password, encrypted_password)
					VALUES('$r', '$fn', '$ln', '$f', '$d', '$e', '$p', '$hp')";
			$result=mysqli_query($con,$query1);
			if($result){
				//echo "query success";
			}
			else {
				echo "query failed";
			}
		}
		else{
			echo "Password doesn't matched";
		}
}
		
			

		function a(){
			header('location:newacc.php');
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Details</title>
	<style type="text/css">
		.confirm{
			width:100%;
			height:700px;
			background: url("../img/8.jpg") no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size: cover;
			-o-background-size:cover;
			background-size:cover;
		}
		.confirm h1{
			font-style:italic;
			font-size:70px;
			padding-left:50px;
			padding-top:50px;
			color:#2a4c75;
			margin-top: 0px;
		}
		.confirm p{
			font-size:30px;
			font-weight:bold;
			font-style: italic;
			padding-left:10px;
			color:#1b0636;
		}
		.confirm form input,button{
			width:20%;
			height:70px;
			color:#3a7075;
			font-size:30px;
			font-weight:bold;
			font-style: italic;
			margin-top:10px;
			border:4px double #4265b3;
			border-radius:60px;
			background-color:#d5d4dc;
			margin-left:100px;
		} 
	</style>
</head>
<body style="margin:0px;">
	<div class="confirm">
	<h1>Welcome to the Authentication System</h1>
	<p>Please Check the details which you entered before creating in Account in the System <br><br>
	<?php 
		echo "Your Full Name is : {$fn} {$ln}... <br><br>
			  Your Registration Number is : {$r}... <br><br>
			  Your Faculty is : {$f}... <br><br>
			  Your Department is : {$d}... <br><br>
			  Your E-mail Address is : {$e}...";
	 ?>
	 </p> 
	<!-- if you want to do something when click submit, use onsubmit() function in form tag -->
	<form action="log_in.php" method="post" >
		<input type="submit" name="ok" value="Confirmed">
		<!-- <button name="back" onclick="a();">Back</button> -->
	</form>
</div><!-- confirm -->
</body>
</html>

