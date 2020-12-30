<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Sign up -->
    <link rel="stylesheet" type="text/css" href="styles/head.css">

    <!--Menu -->
    <link rel="stylesheet" type="text/css" href="styles/menu.css">

    <!-- footer -->
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
	
	<link rel="stylesheet" type="text/css" href="styles/new.css">
	
	

    <style>
	    
        body {
            background-color: rgb(105, 102, 102);
            overflow-x: hidden;
        }
    </style>

</head>


<body>

    <div class="head">
        <text>Smart Living</text>
        <button id="login"><a href="Admin.Dashboard.html"> EXIT </a></button>
    </div>
    <div class="menubar">
        <ul id="menu">
            <li id="menubar">
              <a class="active">MEMBERS</a>
            </li>
            <li id="menubar">
              <a href="Smart Systems Product-Page.php">PRODUCTS</a>
            </li>
            <li id="menubar">
              <a href="Smart Systems Home-Page.php">Home</a>
            </li>
            <li id="menubar">
              <a href="Smart Systems Systems-Page.html">Smart Systems</a>
            </li>
			</li>
            <li id="menubar">
              <a href="ContactUS.php">Contact US</a>
            </li>
		</ul>	
    </div>

    <div class "data">
    <table  border = "1" width = "80%">
	<tr>
	  <th> User ID </th>
	  <th> User Name </th>
	  <th> User Email </th>
	  <th> User Password </th>
	  <th> User Passwordre </th>
	  <th> User Address</th>
	  <th> User ContactNo</th>
	  <th> Delete </th>
	  
	</tr>
    <?php
       include_once 'config.php';
    ?>
	
	<?php
      $sql = "SELECT * from registereduser";
	  $result = $conn -> query ($sql);
     if ($result->num_rows > 0) {
      //output data of each row
      while($row =$result -> fetch_assoc() ){
	    $id = $row ["UserId"];
        echo "<tr><td>" .$row["UserId"]."</td>";
        echo "<td>" .$row["UserName"]."</td>";	
        echo "<td>" .$row["UserEmail"]."</td>";	
        echo "<td>" .$row["UserPassword"]."</td>";	
        echo "<td>" .$row["UserPasswordre"]."</td>";	
        echo "<td>" .$row["UserAddress"]."</td>";
		echo "<td>" .$row["UserContactNo"]."</td>";
        echo "<td><button type= 'submit'> <a href ='delete.php?ID=$id'> Delete </a> </td></tr>";      		
	
	  }
	  
	 }
	 else {
	    echo " 0 result" ;
	 }
	 
	 echo"</table>";
	 $conn->close();
	 
	?>
	
	</div>
	

  <!--fotter -->
  <footer>
    <div id="foot">

      <div id="inform">

         <p>Copyright @ 2019 Smart Living, All Rights Reserved By
               <a href="#">Smart Living</a>
         </p>

      </div>
    </div>
  </footer>

</body>

</html>