<?php
	require "connection.php";

	$myobject = new myCon();

	$supplier_name = isset($_GET['supplier_name']) ? $_GET['supplier_name'] : "";
	$supplier_id = isset($_GET['supplier_id']) ? $_GET['supplier_id'] : "";
	$title = isset($_GET['title']) ? $_GET['title'] : "";
	$manufacturer = isset($_GET['manufacturer']) ? $_GET['manufacturer'] : "";
	$phone_number = isset($_GET['phone_number']) ? $_GET['phone_number'] : "";


	if(isset($_GET['process'])){
		$result = $myobject->addSupplier($supplier_name, $supplier_id, $title, $manufacturer, $phone_number);

		if ($result) {
			echo "<div style='text-align:center;'>";
			echo "New supplier data has been saved";
			echo "<br><a href='supplier.php'>Go back</a>";
		} else {
			echo "Error occurred while adding the supplier";
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
<h3>Add Supplier</h3>

<form action="" method="get">
    <table>
        <tr>
            <td width="130">Supplier Name</td>
            <td><input type="text" value="<?php echo $supplier_name; ?>" name="supplier_name"></td>
        </tr>
        <tr>
            <td>Supplier ID</td>
            <td><input type="text" value="<?php echo $supplier_id; ?>" name="supplier_id"></td>
        </tr>
		<tr>
            <td>Title</td>
            <td><input type="text" value="<?php echo $title; ?>" name="title"></td>
        </tr>
		<tr>
            <td>Manufacturer</td>
            <td><input type="text" value="<?php echo $manufacturer; ?>" name="manufacturer"></td>
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
