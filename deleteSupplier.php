<?php
	require("connection.php");
	$myobject = new myCon();
	
	if(isset($_GET["a"])){
		$supplier = $_GET["a"];
		echo "<div style='text-align:center;'>";
		echo "You are about to delete this supplier: ".$supplier."<br><br>";
		echo "<a href='deleteSupplier.php?b=".$supplier."'>Yes</a><br><br>";
		echo "<a href='supplier.php'>No</a><br>";
		echo "</div>";
	}
	
	if(isset($_GET["b"])){
		$supplier = $_GET["b"];
		$myobject->delSupplier($supplier);
		echo "<div style='text-align:center;'>";
		echo "<a href='supplier.php'>go back</a>";
		echo "</div>";
	}

?>
<body style='background-color: #efc3ca;'> </body>