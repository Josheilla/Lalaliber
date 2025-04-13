<?php
	require("connection.php");
	$myobject = new myCon();
	
	if(isset($_GET["a"])){
		$staff = $_GET["a"];
		echo "<div style='text-align:center;'>";
		echo "You are about to delete this staff: ".$staff."<br><br>";
		echo "<a href='deleteStaff.php?b=".$staff."'>Yes</a><br><br>";
		echo "<a href='staff.php'>No</a><br>";
		echo "</div>";
	}
	
	if(isset($_GET["b"])){
		$staff = $_GET["b"];
		$myobject->delStaff($staff);
		echo "<div style='text-align:center;'>";
		echo "<a href='staff.php'>go back</a>";
		echo "</div>";
	}

?>
<body style='background-color: #efc3ca;'> </body>