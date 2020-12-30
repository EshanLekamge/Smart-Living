<?php
	include_once 'config.php';
	
?>

<?php
$iname = $_POST["ItemName"];
$itype = $_POST["ItemType"];
$idescription = $_POST["ItemDescription"];
$iprogress = $_POST["Progress"];
$id = $_POST["ID"];

$sql = "UPDATE products SET name = '$iname', type = '$itype', description = '$idescription', progress = '$iprogress' WHERE id = '$id'";
if(mysqli_query($conn, $sql)){
	header("Location:Smart Systems Product-Page.php");
}
else{
	 echo "<script> alert('Try again')</script>";
	 }
	 
mysqli_close($conn);

?>