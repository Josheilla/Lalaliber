<body bgcolor="#efc3ca">
<?php
	require("connection.php");
	$myobject = new myCon();
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$publisher_name = $_POST["publisher_name"];
    $address = $_POST["address"];
	$phone_number = $_POST["phone_number"];
	$publisher_id = $_POST["publisher_id"];
	
	$myobject->updatePublisher($publisher_name, $address, $phone_number, $publisher_id);

		echo "<div style='text-align:center;'>";
        echo "<a href='publisher.php'>Go back</a>";
		echo "</div>";
        exit; 
    }
	
	$publisher_id = isset($_GET["a"]) ? $_GET["a"] : "";
	$publisher_name = isset($_GET["b"]) ? $_GET["b"] : "";
	$address = isset($_GET["c"]) ? $_GET["c"] : "";
	$phone_number = isset($_GET["d"]) ? $_GET["d"] : "";
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
	<h3> Update Publisher </h3>
<form action ="updatePublisher.php" method="POST">
	<table>
	<tr>
	<td>Publisher Name: </td>
    <td><input type="text" value="<?php echo $publisher_name; ?>" name="publisher_name"></td>
	</tr>
	<tr>
	<td>Address: </td>
	<td><input type="text" value="<?php echo $address; ?>" name="address"></td>
	</tr>
	<tr>
	<tr>
	<td>Phone Number: </td>
	<td><input type="text" value="<?php echo $phone_number; ?>" name="phone_number"></td>
	</tr>
	<tr>
    <input type="hidden" value="<?php echo $publisher_id; ?>" name="publisher_id">
	<td><input type="submit" value="Update publisher"></td>
	</tr>
	</table>
</form>
