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
		
		echo "<h1><center>LaLaLiber Customer Data</center></h1>";
		
		echo "<br><br>";
		
		echo "<h2><center>CUSTOMER</center></h2>";
		$query6 = $myobject->getAllCustomer();
		
		echo "<table>";
		echo "<th>Name</th><th>Customer ID</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Action</th>";

		foreach($query6 as $data){
			echo "<tr>";
			echo "<td>".$data["cust_name"]."</td>";
			echo "<td>".$data["cust_id"]."</td>";
			echo "<td>".$data["email"]."</td>";
			echo "<td>".$data["phone_number"]."</td>";
			echo "<td>".$data["address"]."</td>";
			echo "<td>
				<a href='deleteCustomer.php?a=".$data["cust_name"]."'>Delete</a><br>
				<a href='updateCustomer.php?a=".$data["cust_id"]."&b=".$data["cust_name"]."&c=".$data["email"]."&d=".$data["address"]."&e=".$data["phone_number"]."'>Update</a><br>
			</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<table>";
			echo "<th><center><a href='addCustomer.php'>Add Another Customer</a></center></th>";
		echo "</table>";
		
	?>
	</body>
</html>