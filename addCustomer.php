<?php
	require "connection.php";

	$myobject = new myCon();

	$cust_name = isset($_GET['cust_name']) ? $_GET['cust_name'] : "";
	$cust_id = isset($_GET['cust_id']) ? $_GET['cust_id'] : "";
	$email = isset($_GET['email']) ? $_GET['email'] : "";
	$phone_number = isset($_GET['phone_number']) ? $_GET['phone_number'] : "";
	$address = isset($_GET['address']) ? $_GET['address'] : "";


	if(isset($_GET['process'])){
		$result = $myobject->addCustomer($cust_name, $cust_id, $email, $phone_number, $address);

		if ($result) {
			echo "<div style='text-align:center;'>";
			echo "New customer data has been saved";
			echo "<br><a href='customer.php'>Go back</a>";
		} else {
			echo "Error occurred while adding the customer";
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
<h3>Add Customer</h3>

<form action="" method="get">
    <table>
        <tr>
            <td width="130">Customer Name</td>
            <td><input type="text" value="<?php echo $cust_name; ?>" name="cust_name"></td>
        </tr>
        <tr>
            <td>Customer ID</td>
            <td><input type="text" value="<?php echo $cust_id; ?>" name="cust_id"></td>
        </tr>
		<tr>
            <td>Email</td>
            <td><input type="text" value="<?php echo $email; ?>" name="email"></td>
        </tr>
		<tr>
            <td>Phone Number</td>
            <td><input type="text" value="<?php echo $phone_number; ?>" name="phone_number"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" value="<?php echo $address; ?>" name="address"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Add" name="process"></td>
        </tr>
    </table>
</form>
