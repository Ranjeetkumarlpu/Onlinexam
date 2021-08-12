<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" a href="style1.css"/>
</head>
<body>

	<div id="xyz">
<form method="post">
	
            <h1>Registration Form</h1>
	<label><b>Name:</b></label>
	<input type="text" name="txt" placeholder="User Name" required=""><br><br>
	<label><b>E-mail Id:</b></label>
	<input type="text" name="emd" placeholder="xxx@gmail.com" required=""><br><br>
	<label><b>Mobile No:</b></label>
	<input type="text" name="mob" placeholder="+91 xxxxxxxxxx" required=""><br><br>
	<label><b>User id:</b></label>
	<input type="text" name="usd" placeholder="Create User Id" required=""><br><br>
	<label><b>Password:</b></label>
	<input type="password" name="pass" placeholder="Create Password" required=""><br><br>
	<button type="submit" name="btn" value="Submit" class="btn-login">SIGNUP</button><br><br>
	<a href="signinup.php">Are You Registered ? : Login</a>
	<a href="index.php">Cancel</a>
	
</form>
</div>
<?php
 if(isset($_POST["btn"]))
{
$a=$_POST["txt"];
$b=$_POST["emd"];
$c=$_POST["mob"];
$d=$_POST["usd"];
$e=$_POST["pass"];
$con=mysqli_connect("localhost","root","","examonline");
// echo "a=".$a."<br>";
// echo "b=".$b."<br>";
if($con)
{
$q="INSERT INTO `signup` (`Name`, `Email`, `Mobile`, `userid`, `password`) VALUES ('$a', '$b', '$c', '$d', '$e');";
// ` backquote
$r=mysqli_query($con,$q);
if($r)
{
echo "<script>alert('User Id & Password Send on E-mail Successfully')</script>";
}
else
{
echo "Not Added";
}
}
else
{
echo "Not connect";
}
mysqli_close($con);
}
?>

<?php
if(isset($_POST["btn"])){
$from="Online Exam";
$webmaster="Welcome Online Exam";
$to=$_POST["emd"];
$headers=$from."<".$to.">";
$message="Your Username is: ".$_POST["usd"]." and Your Password is : ".$_POST["pass"];
if(mail($headers,$webmaster,$message))
{
  
  }
else
{

}
}
?>
</body>
</html>