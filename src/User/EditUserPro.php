<?php
include_once 'config.php';

$recordId = $_GET['ID'];

$sql = "SELECT * FROM registereduser where Userid = $recordId";
$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				$name = $row["UserName"];
				$email = $row["UserEmail"];
				$password = $row["UserPassword"];
				$repassword = $row["UserPasswordre"];
				$address = $row["UserAddress"];
				$contact = $row["UserContactNo"];
				$id = $row["Userid"];
			}
		}
?>

<form action="submitUser.php" method="post">
<li>
User Name<input type = "text" name = "Username" value = <?php echo "$name"?>></br></br>
User Email<input type = "text" name = "Useremail" value = <?php echo "$email"?>></br></br>
User Password<input type = "text" name = "Userpassword" value = <?php echo "$password"?>></br></br>
</li>
<li>

Re Enter User Password<input type = "text" name = "Userpasswordre" value = <?php echo "$repassword"?>></br></br>
User Address<input type = "text" name = "Useraddress" value = <?php echo "$address"?>></br></br>
User Contact No<input type = "text" name = "UserContact" value = <?php echo "$contact"?>></br></br>
<input type = "hidden" name = "UserID" value = <?php echo "$id"?>>
</li>
<input type = "Submit" name = "Update">
</form>