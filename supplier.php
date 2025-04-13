<html>
	<head>
		<style>
			table {
				width: 100%;
				border: 1px solid black;
				border-collapse: collapse;
				background-color: #e8ccd7;
			}
			th, td {
				padding: 8px;
				text-align: left;
				border: 1px solid black;
			}
			th {
				background-color: #daabb5;
				text-align: center;
			}
		</style>
	</head>
	<body style="background-color: #efc3ca;">
	<?php
		require("connection.php");
		
		$myobject = new myCon();

		echo "<br>";
		
		echo "<h1><center>LaLaLiber Supplier Data</center></h1>";
		
		echo "<br><br>";
		
		echo "<h2><center>SUPPLIER</center></h2>";
		$query4 = $myobject->getAllSupplier();

		echo "<table>";
		echo "<th>Supplier Name</th><th>Supplier ID</th><th>Title</th><th>Manufacturer</th><th>Phone Number</th><th>Action</th>";

		foreach($query4 as $data){
			echo "<tr>";
			echo "<td>".$data["supplier_name"]."</td>";
			echo "<td>".$data["supplier_id"]."</td>";
			echo "<td>".$data["title"]."</td>";
			echo "<td>".$data["manufacturer"]."</td>";
			echo "<td>".$data["phone_number"]."</td>";
			echo "<td>
				<a href='deleteSupplier.php?a=".$data["supplier_name"]."'>Delete</a><br>
				<a href='updateSupplier.php?a=".$data["supplier_id"]."&b=".$data["supplier_name"]."&c=".$data["title"]."&d=".$data["manufacturer"]."&e=".$data["phone_number"]."'>Update</a><br>
			</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<table>";
			echo "<th><center><a href='addSupplier.php'>Add Another Supplier</a></center></th>";
		echo "</table>";
	?>
	</body>
</html>