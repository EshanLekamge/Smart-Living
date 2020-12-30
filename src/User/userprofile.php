<?php
session_start();

//$user=$_POST['Name'];
 //$user=$_SESSION['admin'];

?>

<?php
	include_once 'config.php';
?>


<html>
<head>	
		<link rel="stylesheet" type="text/css" href="styles/style-User-Profile.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<style>
		td{
			table-colspan :2px ;
		}
	</style>
</head>
<body>

<header>
           <!--<div class="header-right">
                <a class="active" href="home.html">Home</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div> -->
</header>

<h1 class ="hedding" align ="center">...User Profile...</h1>
<form class="form1">

	<div>
		<center>
		<h2>USER PROFILE</h2>
		<img src="images/Profile-512.png" class="icon"><br>
	<div class="TEXT">
	<br/>
		
		
		<table border = "1" width = "100%">
   
	<div class = "text">	
		<?php
		
      $sql = "SELECT * FROM registereduser where UserName='pubudu'";  //where Name='$user'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
      //output data of each row
	while($row = $result -> fetch_assoc() ){
		
			
		
		echo "Name :- " .$row["UserName"]."<br><br>";
		 echo "Email :-  " .$row["UserEmail"]."<br><br>";
		 echo "Password :-  " .$row["UserPassword"]."<br><br>";
		 echo "Address :-  " .$row["UserAddress"]."<br><br>";
		 echo "Contact No :-  " .$row["UserContactNo"]."<br><br>";
		 
		 $id = $row["id"];
		
	 }
	  
	 }
	 else {
	    echo " 0 result" ;
	 }
	 
	 echo"</table>";
	 $conn->close();
	 

       ?>
	 </div> 
		<center>
        <?php echo "<button type = 'submit'><a href = 'EditUserPro.php?ID=$id'>Edit</a></button>" ;?>
		</center>
		
		<center>
		***
		</center>
		
		
		</center>
	</div>

</form>


 <!--<footer style="height:fit-content; background-color: #1a1a1a;">
                <div class="footer-container">
                    <div class="footer-element">
                        <a href="#">About us</a>
                        <a href="#">Contact us</a>
                        <a href="#">Terms & Conditions</a>
                    </div>
        
                    <div class="footer-element">
                        <a href="#">Login</a>
                        <a href="#">Registration</a>
                    </div>
        
                    <div class="logo-footer">
                        <img src="" alt="logo">
                    </div>
                </div>
                <center>
                    <p style="font-weight: bold; font-size:12px">©2019 copyright chatty Inc.</p>
                </center>
            </footer> -->

</body>
</html>
