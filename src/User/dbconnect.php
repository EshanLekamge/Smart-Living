<?php

$servername="localhost";
$username="root";
$password="";
$dbname="smarthomesystems";

$db_connect=mysqli_connect($servername,$username,$password,$dbname) or die();
//chech the connection

if(mysqli_connect_error()){
	echo "Failed to connect:".mysqli_connect_error();
}
//echo "connection successfull";

?>