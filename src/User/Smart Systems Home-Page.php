<!DOCTYPE html>
<html>
    <head>
		<?php
		
		 include_once 'dbconnectpage.php';
		?>

         
		 <title>Simple Smart Living</title>
         <link rel="stylesheet" type ="text/css" href="styles/style-Home-Page.css" />
		 
		 
    </head>
    <body>
    <hr>
		
		<img class = "logo" src="images/LOGO.png" alt="Smart Home Systems" height = "150" width = "150"/>
		<h1 class = "title"><center>Smart Living</center></h1>
		<h3 class = "title2"><center>The Lifestyle You Deserve</center></h3>
		
    <hr>

    <ul class = "mainmenu">
        <li><a href = "#">Home</a></li>
        <li><a href = "AboutUs.php">About us</a></li>
		<li><a href = "contactus.php">Contact us</a></li>
		<li><a href = "Smart Systems Product-Page.php">Products</a></li>
        <li><a href = "Smart Systems Systems-Page.html">Home Systems</a></li>
        <li><a href = "Manufacturing Process.html">Manufacturing Process</a></li>
        <li><a href = "Upcoming.html">Upcoming Future Products</a></li>
		<li><a href = "userprofile.php">User Profile</a></li>
    </ul>

    <hr>
	
	<form action = "displaypage.php" method = "post">
		
		<input type = "text" name = "SearchBar" width = "300" height = "25" placeholder = "Enter here to search">
		<input type = "submit" name = "SearchButton" value = "Search Now">
	</form>
	
</br>



	<div class="slideshow">
	
	<img class="mySlidesb" src="images/2900 Wilshire-View03.jpg">
	<img class="mySlidesb" src="images/design-tech-homes-best-of-high-tech-homes-and-smart-home-technology-of-design-tech-homes.jpg">
	<img class="mySlidesb" src="images/290-0 Wilshire-Bird_Closeup.jpg">
	</div>
	
</br>


	
    <div class = "mainPageLinks">

        <center>
        <table width = "100%">
            <tr>
                <th background = "images/ManufacturinProcess.jpg" height = "500" width ="300" alt="Smart Home Systems" class = "links"><h2>OUR MANUFACTURING PROCESS</h2></th>
                <th background = "images/SmartSystems.jpg" height = "500" width ="300" alt="Smart Home Systems" class = "links"><h2>SMART HOME SYSTEMS</h2></th>
                <th background = "images/Upcomingtech.jpg" height = "500" width ="300" alt="Smart Home Systems" class = "links"><h2>UPCOMING PRODUCTS</h2></th>
                <th background = "images/WHOWEARE.jpg" height = "500" width ="300" alt="Smart Home Systems" class = "links"><h2>WHO WE ARE</h2></th>
            </tr>
        </table>
        </center>
    </div>

    <div class = "Products">
        <table background = "images/ProductBackgroundImages.jpg" alt="products" width = "100%" height = "400">
            <tr>
                <td><center><img src = "images/security-system.jpg" width = "300" height = "200" class = "Productsimg" alt="CCTV"/><h3>Security Systems</h3></center</td>
                <td><center><img src = "images/HomeCinema.jpg" width = "300" height = "200" class = "Productsimg" alt="CCTV"/><h3>Home Cinema Systems</h3></center</td>
                <td><center><img src = "images/DoorLock.jpg" width = "300" height = "200" class = "Productsimg" alt="CCTV"/><h3>Doors,Gates & Windows</h3></center</td>
                <td><center><img src = "images/Environment.png" width = "300" height = "200" class = "Productsimg" alt="CCTV"/><h3>Indor Environment Control</h3></center</td>
            </tr>
        </table>
    </div>
	</body>
	<script src = "js/script-smart-systems-home.js"></script>		
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









