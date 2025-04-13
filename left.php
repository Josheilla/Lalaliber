<?php
	require "connection.php";
	$myobject = new myCon();
	
	if(isset($_GET['emp_id'])){
		$emp_id = $_GET['emp_id'];
		$result = $myobject->login($emp_id,'');
	}
?>
<html>
	<head>
		<style> 
			a {
			text-decoration: none;
			color: black;
			}
			ul {
			font-size: 14px;
			}
		</style>
	</head>
	<body bgcolor="#daabb5">
	<a href="homepage.php" target="homepage">Homepage</a></br></br>
		<ul>
			<li><a href="book.php" target="homepage">Book</a></li>
			<li><a href="publisher.php" target="homepage">Publisher</a></li>
			<li><a href="supplier.php" target="homepage">Supplier</a></li>
			<li><a href="staff.php" target="homepage">Staff</a></li>
			<li><a href="customer.php" target="homepage">Customer</a></li>
			<li><a href="transaction.php" target="homepage">Transaction</a></li>
		</ul></a></br>
	</body>
</html>