<?php
include_once 'config.php';

$recordId = $_GET['ID'];

$sql = "SELECT * FROM products where id = $recordId";
$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				$name = $row["name"];
				$type = $row["type"];
				$description = $row["description"];
				$progress = $row["progress"];
				$id = $row["id"];
			}
		}
?>

<form action="SubmitaAdditems.php" method="post">
<li>
<input type = "text" name = "ItemName" value = <?php echo "$name"?>>
<input type = "text" name = "ItemType" value = <?php echo "$type"?>>
<input type = "text" name = "ItemDescription" value = <?php echo "$description"?>>
</li>
<li>
<input type = "text" name = "Progress" value = <?php echo "$progress"?>>
<input type = "hidden" name = "ID" value = <?php echo "$id"?>>
</li>
<input type = "Submit" name = "Update">
</form>