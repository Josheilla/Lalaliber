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
		
		echo "<h1><center>LaLaLiber Staff Data</center></h1>";
		
		echo "<br><br>";
		
		echo "<h2><center>STAFF</center></h2>";
		$query5 = $myobject->getAllStaff();

		echo "<table>";
		echo "<th>Name</th><th>Staff ID</th><th>Position</th><th>Shift</th><th>Salary</th><th>Phone Number</th><th>Action</th>";

		foreach($query5 as $data){
			echo "<tr>";
			echo "<td>".$data["staff_name"]."</td>";
			echo "<td>".$data["staff_id"]."</td>";
			echo "<td>".$data["position"]."</td>";
			echo "<td>".$data["shift"]."</td>";
			echo "<td>".$data["salary"]."</td>";
			echo "<td>".$data["phone_number"]."</td>";
			echo "<td>
				<a href='deleteStaff.php?a=".$data["staff_name"]."'>Delete</a><br>
				<a href='updateStaff.php?a=".$data["staff_id"]."&b=".$data["staff_name"]."&c=".$data["position"]."&d=".$data["shift"]."&e=".$data["salary"]."&f=".$data["phone_number"]."'>Update</a><br>
			</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<table>";
			echo "<th><center><a href='addStaff.php'>Add Another Staff</a></center></th>";
		echo "</table>";
		
	?>
	</body>
</html>