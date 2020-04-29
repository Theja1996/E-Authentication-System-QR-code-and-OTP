<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<style type="text/css">
.main{
	width:100%;
	height:700px;
	background: url("../img/8.jpg ") no-repeat center center fixed;
	-webkit-background-size:cover;
	-moz-background-size: cover;
	-o-background-size:cover;
	background-size:cover;
}
.main input{
	width:40%;
	height:200px;
	font-size:50px;
	color:#3a7075;
	font-weight:bold;
	font-style: italic;
	margin-top:200px;
	border:4px double #4265b3;
	border-radius:60px;
	background-color:#d5d4dc;
}
.newAcc input{
	margin-right:50px;
	margin-left:100px;
	float:left;
}
	</style>

	<title>Main Page</title>
</head>
<body>
	<div class="main">
		<div class="newAcc">
		<form action="new_acc.php" method="post">
			<input type="submit" name="newAcc" value="Create New Account">
		</form>
	</div><!-- newAcc -->
	<div class="login">
		<form action="log_in.php" method="post">
			<input type="submit" name="login" value="Login To Account">
		</form>
	</div><!-- login -->

	</div><!-- main -->

</body>
</html>

 