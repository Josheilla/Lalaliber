<body bgcolor="#efc3ca">
<?php
    require("connection.php");
    $myobject = new myCon();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $book_id = $_POST["book_id"];

        $myobject->updateBook($price, $stock, $book_id);

		echo "<div style='text-align:center;'>";
        echo "<a href='book.php'>Go back</a>";
		echo "</div>";
        exit; 
		
    }

    $book_id = isset($_GET["a"]) ? $_GET["a"] : "";
    $price = isset($_GET["b"]) ? $_GET["b"] : "";
    $stock = isset($_GET["c"]) ? $_GET["c"] : "";
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
	<h3> Update Book </h3>
	<form action="updateBook.php" method="POST">
		<table>
			<tr>
				<td>Price: </td>
				<td><input type="text" value="<?php echo $price; ?>" name="price"></td>
			</tr>
			<tr>
				<td>Stock: </td>
				<td><input type="text" value="<?php echo $stock; ?>" name="stock"></td>
			</tr>
			<tr>
				<input type="hidden" value="<?php echo $book_id; ?>" name="book_id">
				<td><input type="submit" value="Update book"></td>
			</tr>
		</table>
	</form>
	</div>
<body>