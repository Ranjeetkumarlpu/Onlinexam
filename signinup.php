<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" a href="style.css"/>
	<link rel="stylesheet" a href="css3\font-awesome.min.css"/>
</head>
<body bgcolor="yellow">

	<div class="container">
		
	<h1>Login Form</h1>
		<form method="post">
			<div class="form_input">
				USERNAME:
				<input type="text" name="txtun" placeholder="Enter your User id " required="">
			</div>
			<div class="form_input">
				PASSWORD: <input type="password" name="txtup" placeholder="Password" id="myInput"><br>
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
				
			</div>
			<input type="checkbox" name="chk">Remember Password?<br>
			<input type="submit" name="btn" value="Login" class="btn-login">
			
			<a href="signup.php" class="btn-login">New User| Sign Up |</a><br>
			<a href="">Forget Password ? </a>
		</form>
		
	</div>
	<?php
		if(isset($_POST["btn"]))
		{
			$d=$_POST['txtun'];
			$e=$_POST['txtup'];
	$con=mysqli_connect("localhost","root","","examonline");

			if($con)
			{
				$q="SELECT * FROM `signup` where userid='$d' and password='$e'";
				$r=mysqli_query($con,$q);
				$c=mysqli_num_rows($r);

				if($c>0)
				{
					
			echo "<script>alert('Login Successfully')</script>";
			header("Location:timer.php");
				
				}
				else
				{
					echo "<script>alert('Invalid Login')</script>";
				}
			}
			else
			{
				echo "<script>alert('Not Connected')</script>";
			}
	}

	?>
	<script>
		
   document.write(Date());
</script>
</body>
</html>
