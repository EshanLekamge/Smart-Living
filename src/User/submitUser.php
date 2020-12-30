<?php
	include_once 'config.php';
	
?>

<?php
$iname = $_POST["Username"];
$iemail = $_POST["Useremail"];
$ipassword = $_POST["Userpassword"];
$irepassword = $_POST["Userpasswordre"];
$iaddress = $_POST["Useraddress"];
$icontact = $_POST["UserContact"];
$id = $_POST["UserID"];


$sql = "UPDATE registereduser SET UserName = '$iname', UserEmail = '$iemail', UserPassword = '$ipassword', UserPasswordre = '$irepassword', UserAddress = '$iaddress', UserContactNo = '$icontct' WHERE Userid = '$id'";
if(mysqli_query($conn, $sql)){
	header("Location:userprofile.php");
}
else{
	 echo "<script> alert('Try again')</script>";
	 }
	 
mysqli_close($conn);

?>