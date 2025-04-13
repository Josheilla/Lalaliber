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
		
		echo "<h1><center>LaLaLiber Book Data</center></h1>";
		
		echo "<br><br>";
		
		echo "<h2><center>BOOKS</center></h2>";
		$query = $myobject->getAllBook();

		echo "<table>";
		echo "<th>Title</th><th>Book ID</th><th>Supplier ID</th><th>Author</th><th>Publisher ID</th><th>Publication Year</th><th>Price</th><th>Stock</th><th>Action</th>";

		foreach($query as $data){
			echo "<tr>";
			echo "<td>".$data["title"]."</td>";
			echo "<td>".$data["book_id"]."</td>";
			echo "<td>".$data["supplier_id"]."</td>";
			echo "<td>".$data["author"]."</td>";
			echo "<td>".$data["publisher_id"]."</td>";
			echo "<td>".$data["publication_year"]."</td>";
			echo "<td>".$data["price"]."</td>";
			echo "<td>".$data["stock"]."</td>";
			echo "<td>
				<a href='deleteBook.php?a=".$data["title"]."'>Delete</a><br>
				<a href='updateBook.php?a=".$data["book_id"]."&b=".$data["price"]."&c=".$data["stock"]."'>Update</a><br>
			</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<table>";
			echo "<th><center><a href='addBook.php'>Add Another Book</a></center></th>";
		echo "</table>";
	?>
	</body>
</html>