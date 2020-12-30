<?php
include_once 'dbconnectpage.php';

$recordId = $_GET['ID'];

$sql = "SELECT * FROM searchproducts where ProductID = $recordId";
$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				$name = $row["ProductName"];
				$description = $row["ProductDes"];
				$price = $row["PPrice"];
				$quantity = $row["PQuantity"];
				$image = $row["Product_IMG"];
				$id = $row["ProductID"];
			}
		}
?>
<center>
<form action="Submitsearchitems.php" method="post">
<li>
Item Name<input type = "text" size="50" name = "ItemName" value = <?php echo "$name"?>></br></br>
Item Description<input type = "text" name = "ItemDescription" value = <?php echo "$description"?>></br></br>
Price<input type = "text" name = "ItemPrice" value = <?php echo "$price"?>></br></br>
</li>
<li>
Quantity<input type = "text" name = "Quantity" value = <?php echo "$quantity"?>></br></br>
Img<input type = "text" name = "Image" value = <?php echo "$image"?>></br></br>
<input type = "hidden" name = "ID" value = <?php echo "$id"?>></br></br>
</li>
<input type = "Submit" name = "Update">
</form>
</center>
