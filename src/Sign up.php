<!DOCTYPE html>
<html>
    <head>
	
	 <?php
     include_once 'config.php';
	 ?>
         
		 <title>Simple Smart Living</title>
         <link rel="stylesheet" type ="text/css" href="styles/styles-MProcess-Signup.css" />

		 <script src = "js/scripts-MProcess-Signup.js">
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
		<li><a href = "#">Signup</a></li>
    </ul>

    <hr><br><br>
	
	<fieldset>
    <legend> <h1 id = "sign"> Sign In </h1> </legend>
	
	<p id = "par1" >Please fill in this form to create an account.</p>
    
    <img class = "profic"  src = "images/accounticon.jpg" width="170" length="140"><br><br>
     
	
    
    <form method = "POST" action="submitAddMember.php"  onsubmit = "return checkPassword()">
     Name <input class = "height" type = "text"  name= "Name"  placeholder = "Enter Name" size = "70" required><br><br>
     Email <input class = "height" type = "email"  name= "email" placeholder = "Enter Email" size = "70" pattern = "[0-9a-zA-Z%+_-]+@[a-zA-Z]+\.[a-z]{2-3}" required><br><br>
     Password <input id = "pwd" type = "password"  name= "password" placeholder = "Enter Password" maxlength = "10" size = "69" required ><br><br>
	 Confirm Password <input id = "pwdreturn"  type = "password"  name= "passwordre" placeholder = "Re-enter Password" maxlength = "10" size = "70" required><br><br> 
     Address  <textarea name="address" class = "height" cols="65" rows="1" placeholder = "Enter Address"  required> </textarea><br><br>
     Contact No <input class = "height" type = "phone"  name= "ContactNo"  placeholder = " Enter Contact No"  maxlength = "10" size = "66" pattern = "[0-9]{10}" required><br><br>
     
     <a  href ="https://accounts.google.com/ServiceLogin/identifier?elo=1&flowName=GlifWebSignIn&flowEntry=AddSession&TL=APDPHBAwkWta-wTvVgUtHJt9kIK1GFy7HEs0ZxnU_eYY_FKRqbHmwbS0BUdlmqsx" required><img class = "link" src = "images/th.jpg" height= "50"  length = "2000" > </a>
     <a  href="https://www.facebook.com/login.php" required><img class = "link" src = "images/facebook.png" height = "50"> </a><br><br>
     Accept privacy policies and terms <input id = "check" type = "checkbox" name = "chekbox" onclick="enableButton()" required ><br>
     <input id = "sbmt" type = "submit" name = "sign In" value = "Sign In" onclick="enableButton()" required >
     
    </form>
	</fieldset>
    
	</body>
	
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
		<h1 "copyright">Copyright @ 2019 Smart Living, All Rights Reserved.</h1>
	</div>
	</footer>









