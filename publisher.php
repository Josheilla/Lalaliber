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
		
		echo "<h1><center>LaLaLiber Publisher Data</center></h1>";
		
		echo "<br><br>";
		
		echo "<h2><center>PUBLISHER</center></h2>";
		$query3 = $myobject->getAllPublisher();

		echo "<table>";
		echo "<th>Publisher Name</th><th>Publisher ID</th><th>Address</th><th>Phone Number</th><th>Action</th>";

		foreach($query3 as $data){
			echo "<tr>";
			echo "<td>".$data["publisher_name"]."</td>";
			echo "<td>".$data["publisher_id"]."</td>";
			echo "<td>".$data["address"]."</td>";
			echo "<td>".$data["phone_number"]."</td>";
			echo "<td>
				<a href='deletePublisher.php?a=".$data["publisher_name"]."'>Delete</a><br>
				<a href='updatePublisher.php?a=".$data["publisher_id"]."&b=".$data["publisher_name"]."&c=".$data["address"]."&d=".$data["phone_number"]."'>Update</a><br>
			</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<table>";
			echo "<th><center><a href='addPublisher.php'>Add Another Publisher</a></center></th>";
		echo "</table>";
		
	?>
	</body>
</html>