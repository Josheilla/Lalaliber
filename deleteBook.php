<?php
	require("connection.php");
	$myobject = new myCon();
	
	if(isset($_GET["a"])){
		$book = $_GET["a"];
		echo "<div style='text-align:center;'>";
		echo "You are about to delete this book: ".$book."<br><br>";
		echo "<a href='deleteBook.php?b=".$book."'>Yes</a><br><br>";
		echo "<a href='book.php'>No</a><br>";
		echo "</div>";
	}
	
	if(isset($_GET["b"])){
		$book = $_GET["b"];
		$myobject->delBook($book);
		echo "<div style='text-align:center;'>";
		echo "<a href='book.php'>go back</a>";
		echo "</div>";
	}
?>
<body style='background-color: #efc3ca;'> </body>
