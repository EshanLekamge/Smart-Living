<?php
   include_once 'config.php';
?>

<?php 
echo $_POST["Name"];
$name = $_POST["Name"];
$email = $_POST["email"];
$Password = $_POST["password"];
$Passwordre = $_POST["passwordre"];
$Address = $_POST["address"];
$ContactNo = $_POST["ContactNo"];




//attempt insert query execution
$sql = "INSERT INTO  registereduser (UserName,UserEmail,UserPassword,UserPasswordre,UserAddress,UserContactNo) values ('$name','$email','$Password','$Passwordre','$Address','$ContactNo')";



if(mysqli_query($conn,$sql)){
   header("Location:Smart Systems Home-Page.php");
}
else{
    echo "<script> alert('Try Again') </script>";
}

//close connection
mysqli_close($conn);

?>