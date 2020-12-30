<!DOCTYPE html>
<html>
    <head>
         
		 	 <title>Simple Smart Living</title>
			<link rel="stylesheet" type ="text/css" href="styles/styles.css" />
								<!-- js file call -->
			<script type="text/javascript" src="js/scrpit-products.js"></script>  


    </head>
    <body>
    <hr>
		
		<img class = "logo" src="images/LOGO.png" alt="Smart Home Systems" height = "150" width = "150"/>
		<h1 class = "title"><center>Smart Living</center></h1>
		<h3 class = "title2"><center>The Lifestyle You Deserve</center></h3>
		
    <hr>

    <ul class = "mainmenu">
       <li class = "menu"><a href = "Smart Systems Home-Page.php">Home</a></li>
        <li class = "menu"><a href = "#">Products</a></li>
        <li class = "menu"><a href = "Smart Systems Systems-Page.html">Home Systems</a></li>
    </ul>

    <hr>
	
	<form action = "displaypage.php" method = "post">
		
		<input type = "text" name = "SearchBar" width = "300" height = "25" placeholder = "Enter here to search">
		<input type = "submit" name = "SearchButton" value = "Search Now">
	</form>
	
	<center>
	
	
	<h1><p style="color:red;">PRODUCTS</p></h1>
	<h2><em>newly available</em></h2>
	
	<div>
	<ul>
	<!-- js file call -->
	<button class ="button" id ="but1" onclick="location.href='sensors.php'">SENSOR</a>
   
	<button class ="button" id ="but1" onclick="location.href='camera.php'">CAMERA</a>

	<button class ="button" id ="but1" onclick="location.href='security.php'">SECURITY</a>

	<button class ="button" id ="but1" onclick="location.href='furniture.php'">FURNITURE</a>
   
	</ul>
	</div>
	</center>
	<!-- <img class ="logo" src="images/smart-home-3574541_1280.JPG" width="600" height="400" alt="product introduction Image">
	</br></br>
	<img class ="logo" src="images/shutterstock_617730761.png" width="600" height="400" alt="product introduction Image"> -->

	<!-- slide show -->
<center>
		
<div style="max-width:500px"> <!-- add photos -->   
  <img class="mySlides" src="images/homePage1.jpg" style="width:100%">
  <img class="mySlides" src="images/homePage2.jpg" style="width:100%">
  <img class="mySlides" src="images/homePage3.jpg" style="width:100%">
  <img class="mySlides" src="images/homePage4.jpg" style="width:100%">
  <img class="mySlides" src="images/homePage6.jpg" style="width:100%">

</div>



<?php
//print the date
// Print the array from getdate()
(getdate());
echo "<br><br>";

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?>

<script>
var myIndex = 0;
carousel();
</script>
</center>


<center>
	 <p style="background-color:white;font-size:20px;">What if all the devices in your life could connect to the internet? <br>
	Home automation is exactly what it sounds like:automating the ability to control items around the house.<br>There are many smart home product categories, so you can control everything
	from lights and temperature to locks and security in your home.<br>If you've already started connecting the various devices 
	and fixtures around your home, you'll know that there are a lot of ways to approach the problemSmart home gadgets let you do things
	such as turn your lights on using your smartphone, stream music to a speaker using Alexa, lock your doors remotely, clean your house,
	and much more.We will even walk through the latest products discussing smart home systems to get the best kit or product for your home.</p>
	</center>
	
	
	
 
	</body>
	
	<footer>
	<div class = "bottom">
		<center>
		<table class = "socialmedia" width = "80%">
			<tr>
				<th><img class = "social" src = "images/FacebookLogo.png"><br>Facebook</th>
				<th><img class = "social" src = "images/TwitterLogo.png"><br>Twitter</th>
				<th><img class = "social" src = "images/InstagramLogo.png"><br>Instagram</th>
				<th><img class = "social" src = "images/YouTubeLogo.png"><br>YouTube</th>
				<th><img class = "social" src = "images/GplusLogo.png"><br>Google+</th>
				<th><img class = "social" src = "images/LinkedinLogo.png"><br>Linkedin</th>
				<th><img class = "social" src = "images/PinterestLogo.png"><br>Pinterest</th>
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










