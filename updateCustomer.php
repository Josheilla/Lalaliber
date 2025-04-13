<body bgcolor="#efc3ca">
<?php
	require("connection.php");
	$myobject = new myCon();
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
	    $cust_name = $_POST["cust_name"];
		$email = $_POST["email"];
        $address = $_POST["address"];
		$phone_number = $_POST["phone_number"];
		$cust_id = $_POST["cust_id"];
        
        $myobject->updateCustomer($cust_name, $email, $address, $phone_number, $cust_id);

		echo "<div style='text-align:center;'>";
        echo "<a href='customer.php'>Go back</a>";
		echo "</div>";
        exit; 
    }
		
	$cust_id = isset($_GET["a"]) ? $_GET["a"] : "";
	$cust_name = isset($_GET["b"]) ? $_GET["b"] : "";
	$email = isset($_GET["c"]) ? $_GET["c"] : "";
	$address = isset($_GET["d"]) ? $_GET["d"] : "";
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
	<h3> Update Customer </h3>

<form action ="updateCustomer.php" method="POST">
	<table>
	<tr>
	<td>Customer Name: </td>
    <td><input type="text" value="<?php echo $cust_name; ?>" name="cust_name"></td>
	</tr>
	<tr>
	<td>Email: </td>
	<td><input type="text" value="<?php echo $email; ?>" name="email"></td>
	</tr>
	<tr>
	<td>Address: </td>
	<td><input type="text" value="<?php echo $address; ?>" name="address"></td>
	</tr>
	<tr>
	<td>Phone Number: </td>
	<td><input type="text" value="<?php echo $phone_number; ?>" name="phone_number"></td>
	</tr>
	<tr>
    <input type="hidden" value="<?php echo $cust_id; ?>" name="cust_id">
	<td><input type="submit" value="Update customer"></td>
	</tr>
	</table>
</form>
