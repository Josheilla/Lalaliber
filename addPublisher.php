<?php
require "connection.php";

$myobject = new myCon();

$publisher_name = isset($_GET['publisher_name']) ? $_GET['publisher_name'] : "";
$publisher_id = isset($_GET['publisher_id']) ? $_GET['publisher_id'] : "";
$address = isset($_GET['address']) ? $_GET['address'] : "";
$phone_number = isset($_GET['phone_number']) ? $_GET['phone_number'] : "";

if(isset($_GET['process'])){
    $result = $myobject->addPublisher($publisher_name, $publisher_id, $address, $phone_number);

    if ($result) {
		echo "<div style='text-align:center;'>";
        echo "New publisher data has been saved";
        echo "<br><a href='publisher.php'>Go back</a>";
    } else {
        echo "Error occurred while adding the publisher";
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
<h3>Add Publisher</h3>

<form action="" method="get">
    <table>
        <tr>
            <td width="130">Publisher Name</td>
            <td><input type="text" value="<?php echo $publisher_name; ?>" name="publisher_name"></td>
        </tr>
        <tr>
            <td>Publisher ID</td>
            <td><input type="text" value="<?php echo $publisher_id; ?>" name="publisher_id"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" value="<?php echo $address; ?>" name="address"></td>
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
