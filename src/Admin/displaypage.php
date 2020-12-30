<!DOCTYPE html>
<html>
    <head>
		<?php
			include_once 'dbconnectpage.php';
		?>
		 <title>Simple Smart Living</title>
         <link rel="stylesheet" type ="text/css" href="styles/style-displaypage.css" />
		 
		 
    </head>
    <body>
    <hr>
		
		<img class = "logo" src="images/LOGO.png" alt="Smart Home Systems" height = "150" width = "150"/>
		<h1 class = "title"><center>Smart Living</center></h1>
		<h3 class = "title2"><center>The Lifestyle You Deserve</center></h3>
		
    <hr>

	<ul class = "mainmenu">
        <li><a href = "Smart Systems Home-Page.php">Home</a></li>
		<li><a href = "Smart Systems Product-Page.php">Products</a></li>
        <li><a href = "Smart Systems Systems-Page.html">Home Systems</a></li>
    
    </ul>
	
	<form action = "displaypage.php" method = "post">
		
		<input type = "text" name = "SearchBar" width = "300" height = "25" placeholder = "Enter here to search" >
		<input type = "submit" name = "SearchButton" value = "Search Now">
	</form>

    <hr>
	
	<div class = "DisplayBackground">
	<center><h1>Search Results</h1></center>
	</br>
	<?php
		if(isset($_POST['SearchButton']))
		{
			$search = mysqli_real_escape_string($conn, $_POST['SearchBar']);
			$sql = "SELECT * FROM searchproducts WHERE ProductName LIKE '%$search%' OR ProductDes LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			$queryresult = mysqli_num_rows($result);
			
			if($queryresult > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$id = $row["ProductID"];
					echo"<h3>".$row['ProductName']."</h3>";
					echo"<h3>".$row['ProductDes']."</h3>";
					echo"<h3>RS:</h3><h3>".$row['PPrice']."</h3></br>";
					
					
				?>	
					
				
				<img src = "images/<?php echo $row["Product_IMG"];?>">
				<hr>
				<?php echo "<button type = 'submit'><a href = 'EditSearch.php?ID=$id'>Edit</a></button>" ;?>
				<?php
				}
				
			}
			else 
			{
					echo"<h1>There are no results matching your search!</h1>";	
			}
			
		}	
	?>
	
	</div>
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
