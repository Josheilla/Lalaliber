<?php
	require("connection.php");
	$myobject = new myCon();
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$cust_id = isset($_POST["cust_id"]) ? $_POST["cust_id"] : ""; // Ubah dari supplier_id menjadi customer_id
		$buy = isset($_POST["buy"]) ? $_POST["buy"] : "";// Kolom pembelian
        $status = isset($_POST["status"]) ? $_POST["status"] : ""; // Kolom status
        
        if ($status == 'approve') {
            // Jika tombol "approve" diklik, lakukan update status menjadi "approve"
            $myobject->updateStatus($cust_id, $status);
        }
        // Jika ada perubahan lain yang perlu disimpan, tambahkan logika penyimpanan di sini
        
		echo "<a href='index.php'>Go back</a>";
		exit; 
    }
	$cust_id = isset($_GET["a"]) ? $_GET["a"] : ""; // Ubah dari supplier_id menjadi customer_id
	$buy = isset($_GET["b"]) ? $_GET["b"] : ""; // Kolom pembelian
	$status = isset($_GET["c"]) ? $_GET["c"] : ""; // Kolom status
	
?>
	

<form action ="approval.php" method="POST"> <!-- Ubah nama file action menjadi updatePurchase.php -->
	<table>
	<tr>
	<td>Customer ID: </td> <!-- Ubah dari Supplier Name menjadi Customer ID -->
    <td><input type="text" value="<?php echo $cust_id; ?>" name="cust_id"></td> <!-- Ubah dari supplier_name menjadi customer_id -->
	</tr>
	<tr>
	<td>Buy: </td> <!-- Ubah dari Title menjadi Buy -->
	<td><input type="text" value="<?php echo $buy; ?>" name="buy"></td> <!-- Ubah dari title menjadi buy -->
	</tr>
	<tr>
	<td>Status: </td>
	<td>
        <select name="status">
            <option value="not approve yet" <?php if ($status == 'Not Approval Yet') echo 'selected'; ?>>Not Approval Yet</option>
            <option value="approve" <?php if ($status == 'Approve') echo 'selected'; ?>>Approve</option>
        </select>
    </td>
	</tr>
	<tr>
    <input type="hidden" value="<?php echo $cust_id; ?>" name="customer_id">
	<td><input type="submit" value="Approve" name="approve"></td> <!-- Tambahkan tombol "approve" -->
	</tr>
	</table>
</form>
