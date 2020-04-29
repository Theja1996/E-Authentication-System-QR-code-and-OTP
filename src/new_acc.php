<html>
<head>
	<script type="text/javascript">
		function checking(reg,fn,ln,f,d,e,p,rp){
			if( reg.value.length==0 || fn.value.length==0 || ln.value.length==0 || f.value.length==0 || d.value.length==0 || e.value.length==0 || p.value.length==0 || rp.value.length==0){
				alert ("Fill all the details");
			}else{
				if(p.value.length==rp.value.length){
					header('location:confirm.php');
				}
			}else{
				alert("Password doesn't matched");
			}
		}
		function a(x){
		if(x.value.length==0){
			alert("fill reg");
		}else{
			alert("hjshsj");
		}
	}
	</script>
	<style type="text/css">

.newacc{
	width:100%;
	height:700px;
	background: url("../img/8.jpg") no-repeat center center fixed;
	-webkit-background-size:cover;
	-moz-background-size: cover;
	-o-background-size:cover;
	background-size:cover;
}
.newacc h1{
	padding-top:20px;
	padding-bottom:10px;
	margin-top:0;
	margin-left:60px;
	font-size:50px;
	font-style:italic;
	font-weight:bold;
}
.details input{
	width:28%;
	height:45px;
	margin-left:100px;
	margin-bottom:20px;
	border:2px solid blue;
	border-radius:25px;
	padding-left:50px;

}
.submission input{
	width:10%;
	height:40px;
	margin-left:120px;
	border:2px solid blue;
	border-radius:15px;
	display:inline-block;
	padding:0px;
}
	</style>
	<title>Create New Account</title>
</head>
<body style="margin:0px;">
	<div class="newacc">
		<h1>Welcome to Authentification System</h1>
		<div class="details">

		<form action="confirm.php" method="post">

			<input type="text" name="registration" placeholder="Your Registration Number"><br> 
		<!-- if you try document.getElementById function plz change the input tag's name as a ID -->
			<input type="text" name="first_name" placeholder="Your First Name" required><br>
			<input type="text" name="last_name" placeholder="Your Last Name" required><br>
			<input type="text" name="faculty" placeholder="Your Faculty" required><br>
			<input type="text" name="department" placeholder="Your Department" required><br>
			<input type="email" name="email" placeholder="E-mail"  required><br>
			<input type="password" name="pwrd" placeholder="Password" required><br>
			<input type="password" name="re_pwrd" placeholder="Re-enter password" required><br>
		<div class="submission">
			<input type="submit" name="submit">
			<input type="reset" name="reset" value="Reset All">
		</div><!-- submission -->
		</form>

	</div><!-- details -->	
	</div><!-- newAcc -->
</body>
</html>


	<!-- onsubmit="checking(document.getElementByName('registration'), document.getElementByName('first_name'), document.getElementByName('last_name'), document.getElementByName('faculty'), document.getElementByName('department'), document.getElementByName('email'), document.getElementByName('pwrd'), document.getElementByName('re_pwrd')
		)" -->