<!DOCTYPE html>
<html>
    <head>
         
		 <title>Simple Smart Living</title>
         <link rel="stylesheet" type ="text/css" href="styles/styles.css" />
		 
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

	<div class = "background-col">
	<h1><p style="color:red;">PRODUCTS</p></h1>
	<h2><em>newly available</em></h2>
	
	<ul>
	<div>
  <button id ="but1" onclick="badData('but1')"> <a  href="sensors.php">SENSOR</a>
   
  <button id ="but1" onclick="badData('but2')"> <a href="camera.php">CAMERA</a>

  <button id ="but1" onclick="badData('but3')"> <a href="security.php">SECURITY</a>

   <button id ="but1" onclick="badData('but4')"><a href="#">FURNITURE</a>
     </div>
	</ul>

	<?php
			include_once 'config.php';

			$sql="SELECT * FROM products WHERE type='furniture'";
			$result=$conn->query($sql);
			$count = 0;
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					$id = $row["id"];
		?>

		<div>

			<center><p><strong><cite><?php echo $row["name"];?></cite></strong></p></center>

			<img class ="logo" src="images/<?php echo $row["image"];?>" width="200" height="200" alt="pressure introduction Image">
				<div style="width:20%;"><?php echo $row["description"];?><br></div>

				Ordering progress:
				<progress value="<?php echo $row["progress"];?>" max="100"></progress>
				</br></br>
				
				<?php echo $id; ?>
			
				<?php echo "<button type = 'submit'><a href = 'EditProducts.php?ID=$id'>Edit</a></button>" ;?>

		</div>
			<?php
				}
			}
			else{
				echo"0 results";
			}

		?>

</body>
</div>

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







