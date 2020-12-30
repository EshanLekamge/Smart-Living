<?php
include("dbconnect.php");
?>
<?php
$note = $_REQUEST['note'];  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src = "js/script-ContactUs.js">
</script>

<style>
body{
		background-image:url("images/sup2.png");
		background-repeat : no-repeat;
		background-attachment : fixed;
		background-position : center;
	}
h3{
	margin-left: 80px;
	}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 60%;
  height: 70%;
  margin-left: 80px;
}
</style>
</head>
<body>
</br>

<?php 
if($note =='success')
{
	echo "<h1>Form submitted successfully</h1>";
}?>


<h3>Contact Form </h3>

<form class= "contactform" action = "submit.php" method = "POST" name = "user">
<div class="container" >
 
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter the first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Enter the last name..">

    <label for="country">Country</label>
    <input type="text" id="ucountry" name="country" placeholder="Enter the country...">
	  
	<label for="email">Email Address</label>
    <input type="text"  name="emailAdress" placeholder="Enter the e-mail address..">
    
    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit"  onclick="fnValidateData()" name="btnsubmit" value ="submit">
  </form>
</div>

</body>
</html>