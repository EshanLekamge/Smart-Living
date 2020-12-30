<!DOCTYPE html>
<html>
	<head>
		<?php
		include_once 'Config.php';
		?>
		 <title>Simple Smart Living</title>
         <link rel="stylesheet" type ="text/css" href="styles/styles-ContactUs.css" />
		
    </head>
    <body>
    <hr>
		
		<img class = "logo" src="images/LOGO.png" alt="Smart Home Systems" height = "150" width = "150"/>
		<h1 class = "title"><center>Smart Living</center></h1>
		<h3 class = "title2"><center>The Lifestyle You Deserve</center></h3>
		
    <hr>
	<center>
	<title>Contact Us Page</title>

<table border = "3" width ="100%" >
	<tr>
		<td>Id</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Country</td>
		<td>Email</td>
		<td>Message</td>
	</tr>
<?php
		$sql = "SELECT * FROM contactform";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc()){
			$id = $row["id"];
			echo"<tr><td>".$row["id"]."</td>";
			echo"<td>".$row["firstName"]."</td>";
			echo"<td>".$row["lastName"]."</td>";
			echo"<td>".$row["country"]."</td>";
			echo"<td>".$row["email"]."</td>";
			echo"<td>".$row["message"]."</td>";
			
		}
	}
	else
	{
		echo "0 results";
	}
	
	echo "</table>";
	$conn->close();
	?>
<hr>
	
	
<style>
body{
		background-image:url("images/sup2.png");

	}
h1{
		color: white;
		text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
		text-align: left;
		margin-left: 100px;
		font-size: 60px;
	}

h3{
	color: black;
	text-align: left;
	margin-left: 100px;
	font-size: 30px;
	}
	

.button1 {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right:1000px;
 
 }

</style>
	</head>
	<body>