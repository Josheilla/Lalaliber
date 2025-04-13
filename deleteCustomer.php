<?php
	require("connection.php");
	$myobject = new myCon();
	
	if(isset($_GET["a"])){
		$customer = $_GET["a"];
		echo "<div style='text-align:center;'>";
		echo "You are about to delete this customer: ".$customer."<br><br>";
		echo "<a href='deleteCustomer.php?b=".$customer."'>Yes</a><br><br>";
		echo "<a href='customer.php'>No</a><br>";
		echo "</div>";
	}
	
	if(isset($_GET["b"])){
		$customer = $_GET["b"];
		$myobject->delCustomer($customer);
		echo "<div style='text-align:center;'>";
		echo "<a href='customer.php'>go back</a>";
		echo "</div>";
	}

?>
<body style='background-color: #efc3ca;'> </body>