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
		
		echo "<h1><center>LaLaLiber Transaction Data</center></h1>";
		
		echo "<br><br>";
		
		echo "<h2><center>TRANSACTION</center></h2>";
		$query7 = $myobject->getAllTransaction();

		echo "<table>";
		echo "<th>Transaction ID</th><th>Book ID</th><th>Customer ID</th><th>Staff ID</th><th>Date</th><th>Total</th><th>Method</th>";

		foreach($query7 as $data){
			echo "<tr>";
			echo "<td>".$data["trx_id"]."</td>";
			echo "<td>".$data["book_id"]."</td>";
			echo "<td>".$data["cust_id"]."</td>";
			echo "<td>".$data["staff_id"]."</td>";
			echo "<td>".$data["date"]."</td>";
			echo "<td>".$data["total"]."</td>";
			echo "<td>".$data["method"]."</td>";
			

			echo "</tr>";
		}
		echo "</table>";
		
	?>
	</body>
</html>