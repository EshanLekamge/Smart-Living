<?php
include("dbconnect.php");

$firstName =$_REQUEST['firstname'];
$lastName =$_REQUEST['lastname'];
$counrty =$_REQUEST['country'];
$email =$_REQUEST['emailAdress'];
$message=$_REQUEST['subject'];

//inserting datato table
$query= mysqli_query($db_connect, "INSERT INTO contactform(firstName, lastName, country, email, message) VALUES ('$firstName','$lastName','$counrty','$email','$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

header("location:contactForm.php?note=success");

?>
