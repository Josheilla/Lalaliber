<?php
	require("connection.php");
	$myobject = new myCon();
	
	if(isset($_GET["a"])){
		$publisher = $_GET["a"];
		echo "<div style='text-align:center;'>";
		echo "You are about to delete this publisher: ".$publisher."<br><br>";
		echo "<a href='deletePublisher.php?b=".$publisher."'>Yes</a><br><br>";
		echo "<a href='publisher.php'>No</a><br>";
		echo "</div>";
	}
	
	if(isset($_GET["b"])){
		$publisher = $_GET["b"];
		$myobject->delPublisher($publisher);
		echo "<div style='text-align:center;'>";
		echo "<div style='text-align:center;'>";
		echo "<a href='publisher.php'>go back</a>";
		echo "</div>";
	}

?>
<body style='background-color: #efc3ca;'> </body>