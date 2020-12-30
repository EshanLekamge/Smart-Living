<?php
   include_once 'config.php';
?>

<?php 
$recordID = $_GET['ID'];
//attempt insert query execution
$sql = "DELETE from registereduser where UserId = '$recordID'";
if(mysqli_query($conn, $sql)){
   header("Location:Admin.Member.php");
}
else{
    echo "<script> alert('Try Again') </script>";
}

//close connection
mysqli_close($conn);

?>