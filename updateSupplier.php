<body bgcolor="#efc3ca">
<?php
	require("connection.php");
	$myobject = new myCon();
	

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$supplier_name = $_POST["supplier_name"];
		$title = $_POST["title"];
        $manufacturer = $_POST["manufacturer"];
		$phone_number = $_POST["phone_number"];
		$supplier_id = $_POST["supplier_id"];
        
        $myobject->updateSupplier($supplier_name, $title, $manufacturer, $phone_number, $supplier_id);
		
		echo "<div style='text-align:center;'>";
		echo "<a href='supplier.php'>Go back</a>";
		echo "</div>";
		exit; 
    }
	$supplier_id = isset($_GET["a"]) ? $_GET["a"] : "";
	$supplier_name = isset($_GET["b"]) ? $_GET["b"] : "";
	$title = isset($_GET["c"]) ? $_GET["c"] : "";
	$manufacturer = isset($_GET["d"]) ? $_GET["d"] : "";
	$phone_number = isset($_GET["e"]) ? $_GET["e"] : "";
	
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
	<h3> Update Supplier </h3>	
<form action ="updateSupplier.php" method="POST">
	<table>
	<tr>
	<td>Supplier Name: </td>
    <td><input type="text" value="<?php echo $supplier_name; ?>" name="supplier_name"></td>
	</tr>
	<tr>
	<td>Title: </td>
	<td><input type="text" value="<?php echo $title; ?>" name="title"></td>
	</tr>
	<tr>
	<td>Manufacturer: </td>
	<td><input type="text" value="<?php echo $manufacturer; ?>" name="manufacturer"></td>
	</tr>
	<tr>
	<td>Phone Number: </td>
	<td><input type="text" value="<?php echo $phone_number; ?>" name="phone_number"></td>
	</tr>
	<tr>
    <input type="hidden" value="<?php echo $supplier_id; ?>" name="supplier_id">
	<td><input type="submit" value="Update supplier"></td>
	</tr>
	</table>
</form>
