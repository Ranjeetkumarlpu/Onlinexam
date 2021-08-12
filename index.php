<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
   * {
      box-sizing: border-box;
   }
   body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: url();
   }
   nav {
      font-size: 20px;
      background-color: rgb(136, 22, 182);
      color: #cccccc;
      height: 75px;
   }
   ul {
      position: fixed;
      right:10px;
   }
   ul li {
      display: inline;
      padding-right: 30px;
      font-weight: 500;
      color: rgb(251, 255, 0);
   }
   ul li a
   {
   	text-decoration: none;
   	display: inline;
      padding-right: 30px;
      font-weight: 500;
      color: rgb(251, 255, 0);
   }
   .logo {
      width: 75%;
      margin-left: auto;
      margin-right: auto;
      color: white;
      float: left;
      font-size: 30px;
      padding-left: 20px;
      padding-top: 20px;
   }
   
      footer {
      color: white;
      position: fixed;
      width: 100%;
      bottom: 0;
      margin-left: auto;
      margin-right: auto;
      font-size: 30px;
      height: 100px;
      padding: 20px;
      background-color: rgb(9, 141, 101);
      text-align: center;
   }
   footer a
   {
      text-decoration: none;
      color:white;
      display: inline;
      padding-right: 25px;
      font-weight: 400;
      color: rgb(251, 255, 0);
   
   }
</style>
</head>
<body onload="autoslide()">
<nav>
<div class="logo">
ONLINE EXAMINATION
</div>
<ul>
<li><a href="#">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="signinup.php">Login</a></li>
</ul>
</nav>
<img src="1.jpg" id="pic" height="500px" width="1365px"></img>
<script>
var a=1;
function nextpic()
{
if(a>=7)
{
a=1;
}
else
{
a=a+1;
}

document.getElementById("pic").src=a+".jpg";
}

function autoslide()
{
setInterval(nextpic,3000);
}
</script> 

<footer>
Copyright © 2021 Online Examination<br>
<a href="contact.html">Contact Us</a>
<a href="about.html">About Us</a>
<a href="">Disclaimer</a>
<a href="">Terms & Conditions </a>
<a href="">Privacy Policy</a>
</footer>
</body>
</html>