<?php
	include_once 'dbconnectpage.php';
	
?>

<?php
$iname = $_POST["ItemName"];
$idescription = $_POST["ItemDescription"];
$iprice = $_POST["ItemPrice"];
$iquantity = $_POST["Quantity"];
$iimage = $_POST["Image"];
$id = $_POST["ID"];

$sql = "UPDATE searchproducts SET ProductName = '$iname', ProductDes = '$idescription', PPrice = '$iprice', PQuantity = '$iquantity', Product_IMG = '$iimage' WHERE ProductID = '$id'";
if(mysqli_query($conn, $sql)){
	header("Location:Smart Systems Home-Page.php");
}
else{
	 echo "<script> alert('Try again')</script>";
	 }
	 
mysqli_close($conn);

?>