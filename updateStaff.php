<body bgcolor="#efc3ca">
<?php
	require("connection.php");
	$myobject = new myCon();
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$staff_name = $_POST["staff_name"];
		$position = $_POST["position"];
        $shift = $_POST["shift"];
		$salary = $_POST["salary"];
		$phone_number = $_POST["phone_number"];
		$staff_id = $_POST["staff_id"];
		
        $myobject->updateStaff($staff_name, $position, $shift, $salary, $phone_number, $staff_id);
		
		echo "<div style='text-align:center;'>";
		echo "<a href='staff.php'>Go back</a>";
		echo "</div>";
		exit; 
    }
	
	$staff_id = isset($_GET["a"]) ? $_GET["a"] : "";
	$staff_name = isset($_GET["b"]) ? $_GET["b"] : "";
	$position = isset($_GET["c"]) ? $_GET["c"] : "";
	$shift = isset($_GET["d"]) ? $_GET["d"] : "";
	$salary = isset($_GET["e"]) ? $_GET["e"] : "";
	$phone_number = isset($_GET["f"]) ? $_GET["f"] : "";
	
?>
</body>

<head>
	<style>
		.container {
			width: 30%; 
			margin: 0 auto; 
			padding: 20px;
			border: 1px solid black; 
			background-color: #ffe4e1;
		}

		h3 {
			text-align: center;
		}
	</style>
</head>
<body bgcolor="#efc3ca">
	<div class="container">
	<h3> Update Staff </h3>	

<form action ="updateStaff.php" method="POST">
	<table>
	<tr>
	<td>Staff Name: </td>
    <td><input type="text" value="<?php echo $staff_name; ?>" name="staff_name"></td>
	</tr>
	<tr>
	<td>Position: </td>
	<td><input type="text" value="<?php echo $position; ?>" name="position"></td>
	</tr>
	<tr>
	<td>Shift: </td>
	<td><input type="text" value="<?php echo $shift; ?>" name="shift"></td>
	</tr>
	<tr>
	<td>Salary: </td>
	<td><input type="text" value="<?php echo $salary; ?>" name="salary"></td>
	</tr>
	<tr>
	<td>Phone Number: </td>
	<td><input type="text" value="<?php echo $phone_number; ?>" name="phone_number"></td>
	</tr>
	<tr>
    <input type="hidden" value="<?php echo $staff_id; ?>" name="staff_id">
	<td><input type="submit" value="Update staff"></td>
	</tr>
	</table>
</form>
