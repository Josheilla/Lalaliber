<?php
require "connection.php";

$myobject = new myCon();

$title 				= isset($_GET['title']) ? $_GET['title'] : "";
$book_id			= isset($_GET['book_id']) ? $_GET['book_id'] : "";
$supplier_id 		= isset($_GET['supplier_id']) ? $_GET['supplier_id'] : "";
$author 			= isset($_GET['author']) ? $_GET['author'] : "";
$publisher_id 		= isset($_GET['publisher_id']) ? $_GET['publisher_id'] : "";
$publication_year 	= isset($_GET['publication_year']) ? $_GET['publication_year'] : "";
$price 				= isset($_GET['price']) ? $_GET['price'] : "";
$stock 				= isset($_GET['stock']) ? $_GET['stock'] : "";

if(isset($_GET['process'])){
    $result = $myobject->addBook($book_id, $title, $supplier_id, $publisher_id, $author, $publication_year, $price, $stock);

    if ($result) {
		echo "<div style='text-align:center;'>";
        echo "New book data has been saved";
		echo "<br><a href='book.php'>go back</a>";
    } else {
        echo "Error occurred while adding the book";
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
<h3> Add Book </h3>

<form action="" method="get" align="center">
<table>
	<tr>
        <td width="130">Title</td>
        <td><input type="text" value="<?php echo $title; ?>" name="title"></td>
    </tr>
    <tr>
        <td>Book ID</td>
        <td><input type="text" value="<?php echo $book_id; ?>" name="book_id"></td>
    </tr>
    <tr>
        <td>Supplier ID</td>
        <td><input type="text" value="<?php echo $supplier_id; ?>" name="supplier_id"></td>
    </tr>
	<tr>
        <td>Author</td>
        <td><input type="text" value="<?php echo $author; ?>" name="author"></td>
    </tr>
    <tr>
        <td>Publisher ID </td>
        <td><input type="text" value="<?php echo $publisher_id; ?>" name="publisher_id"></td>
    </tr>
    <tr>
        <td>Publication Year</td>
        <td><input type="text" value="<?php echo $publication_year; ?>" name="publication_year"></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type="text" value="<?php echo $price; ?>" name="price"></td>
    </tr>
    <tr>
        <td>Stock</td>
        <td><input type="text" value="<?php echo $stock; ?>" name="stock"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Add" name="process"></td>
</table>
</form>
</div>
</body>