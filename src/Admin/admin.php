<?php

$servername="localhost";
$username="root";
$password="";
$dbname="smarthomesystems";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed");
}

?>
<?php

session_start();

	if (isset($_POST['btnlogin'])){
$name=$_POST['uname'];
$pass=$_POST['psw'];

    $sql="SELECT * FROM admin WHERE AdminName='$name' AND AdminPassword='$pass'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        $_SESSION["admin"] = $name;
		
		
        
    }else{
		echo "<script>alert('Invalid User Name or Password');</script>";
    }

    if(isset($_SESSION["admin"])) {
        echo "<script>alert('Logged Successfuly');window.location='Admin.Settings.php';</script>";
    }

}
?>





<!DOCTYPE html>
<html>
    <head>
	 <title>Simple Smart Living</title>
         <link rel="stylesheet" type ="text/css" href="styles/adstyles.css" />
		 <script src="js/adminScript.js">		 
		 
		 </script>
		 
		 
    </head>
    <body>
    <hr>
		
		<img class = "logo" src="images/LOGO.png" alt="Smart Home Systems" height = "150" width = "150"/>
		<h1 class = "title"><center>Smart Living</center></h1>
		<h3 class = "title2"><center>The Lifestyle You Deserve</center></h3>
		
    <hr>

    <ul class = "mainmenu">
        <li><a href = "Smart Systems Home-Page.php">Home</a></li>
        <li><a href = "AboutUs.php">About us</a></li>
		<li><a href = "contactus.php">Contact us</a></li>
		<li><a href = "Smart Systems Product-Page.php">Products</a></li>
        <li><a href = "Smart Systems Systems-Page.html">Home Systems</a></li>
        <li><a href = "Manufacturing Process.html">Manufacturing Process</a></li>
        <li><a href = "Upcoming.html">Upcoming Future Products</a></li>
		<li><a href = "login.php">Login</a></li>
		<li><a href = "Sign up.php">Signup</a></li>
    </ul>

    <hr>

<body>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<center>
<form method = "POST">
  <div class="container">
  <center>
  
 <img src="images\avatar.jpg" alt="avatar" style="width:40%;">
<h2>Admin Login </h2>
</center>
<br>  
    <form name='contact' onSubmit="return formValidation();">
    <label for="uname"><b>Username</b></label>
    <input type="text" id="var_Username" placeholder="Enter Username" name="uname"  required><br/>
	

    <label for="psw"><b>Password</b></label>
    <input type="password" id="var_id" placeholder="Enter Password" name="psw" required><br/>
	
    <button type="submit" onclick="fnValidateData()"name="btnlogin">Login</button><br>
	

  </div>
 <br/>
 <br/>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

</form>
</center>

</body>
</br>
</br>
</br>
</br>
<footer>
	<div class = "bottom">
		<center>
		<table class = "socialmedia" width = "80%">
			<tr>
				<th><img class = "social" src = "images/FacebookLogo.png"><br><a href ="http:\\www.facebook.com"/>Facebook</th>
				<th><img class = "social" src = "images/TwitterLogo.png"><br><a href ="http:\\www.twitter.com"/>Twitter</th>
				<th><img class = "social" src = "images/InstagramLogo.png"><br><a href ="http:\\www.instagram.com"/>Instagram</th>
				<th><img class = "social" src = "images/YouTubeLogo.png"><br><a href ="http:\\www.youtube.com"/>YouTube</th>
				<th><img class = "social" src = "images/GplusLogo.png"><br><a href ="http:\\www.google+.com"/>Google+</th>
				<th><img class = "social" src = "images/LinkedinLogo.png"><br><a href ="http:\\www.Linkedin.com"/>Linkedin</th>
				<th><img class = "social" src = "images/PinterestLogo.png"><br><a href ="http:\\www.Pinterest.com"/>Pinterest</th>
			</tr>
		</table>
		
		<p class = "footerdetails">The most trusted Company in the Smart-Home Industry for Decades.<p> 
		
		<table class = "contactdetails" width = "80%">
			<tr>
				<th><img class ="contacts" src ="images/emailLogo.png"><br>simplesmartliving@gmail.com</th>
				<th><img class ="contacts" src ="images/Tellogo.png"><br>+94115069829</th>
				<th><img class ="contacts" src ="images/addressLogo.png"><br>Sri Lanka Dahanayake Mw,<br>100 Independence Square,<br>Colombo 00700</th>
			</tr>
			
		</table>
		</center>
			
		
	</div>
	
	<div class = "copyright">
		<h2 "copyright">Copyright @ 2019 Smart Living, All Rights Reserved.</h2>
	</div>
	</footer>
</html>
