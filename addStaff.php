<?php
	require "connection.php";

	$myobject = new myCon();

	$staff_name = isset($_GET['staff_name']) ? $_GET['staff_name'] : "";
	$staff_id = isset($_GET['staff_id']) ? $_GET['staff_id'] : "";
	$position = isset($_GET['position']) ? $_GET['position'] : "";
	$shift = isset($_GET['shift']) ? $_GET['shift'] : "";
	$salary = isset($_GET['salary']) ? $_GET['salary'] : "";
	$phone_number = isset($_GET['phone_number']) ? $_GET['phone_number'] : "";


	if(isset($_GET['process'])){
		$result = $myobject->addStaff($staff_name, $staff_id, $position, $shift, $salary, $phone_number);

		if ($result) {
			echo "<div style='text-align:center;'>";
			echo "New staff data has been saved";
			echo "<br><a href='staff.php'>Go back</a>";
		} else {
			echo "Error occurred while adding the staff";
			echo "</div>";
		}
	}
?>
<head>
	<style>
		.container {
			width: 40%; 
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
<h3>Add Staff</h3>

<form action="" method="get">
    <table>
        <tr>
            <td width="130">Staff Name</td>
            <td><input type="text" value="<?php echo $staff_name; ?>" name="staff_name"></td>
        </tr>
        <tr>
            <td>Staff ID</td>
            <td><input type="text" value="<?php echo $staff_id; ?>" name="staff_id"></td>
        </tr>
		<tr>
            <td>Position</td>
            <td><input type="text" value="<?php echo $position; ?>" name="position"></td>
        </tr>
		<tr>
            <td>Shift</td>
            <td><input type="text" value="<?php echo $shift; ?>" name="shift"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="text" value="<?php echo $salary; ?>" name="salary"></td>
        </tr>
		<tr>
            <td>Phone Number</td>
            <td><input type="text" value="<?php echo $phone_number; ?>" name="phone_number"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Add" name="process"></td>
        </tr>
    </table>
</form>
