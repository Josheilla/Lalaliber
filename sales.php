<?php
require("connection.php");

// Membuat objek koneksi
$myobject = new myCon();

// Fungsi untuk menampilkan pesan kesalahan
function showError($msg) {
    echo "<div style='color: red;'>Error: $msg</div>";
}

// Fungsi untuk menampilkan pesan sukses
function showSuccess($msg) {
    echo "<div style='color: green;'>Success: $msg</div>";
}

// Fungsi untuk mendapatkan daftar pesanan yang belum diproses
function getPendingOrders() {
    // Kode untuk mendapatkan pesanan yang belum diproses dari database
}

// Fungsi untuk mendapatkan daftar pesanan dalam proses pengiriman
function getProcessingOrders() {
    // Kode untuk mendapatkan pesanan dalam proses pengiriman dari database
}

// Fungsi untuk mendapatkan daftar pesanan yang telah selesai
function getCompletedOrders() {
    // Kode untuk mendapatkan pesanan yang telah selesai dari database
}

// Fungsi untuk mengonfirmasi pesanan
function confirmOrder($order_id) {
    // Kode untuk mengonfirmasi pesanan di database
}

// Fungsi untuk membatalkan pesanan
function cancelOrder($order_id) {
    // Kode untuk membatalkan pesanan di database
}

// Fungsi untuk mengatur pengiriman
function setDelivery($order_id) {
    // Kode untuk mengatur pengiriman di database
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
</head>
<body>
    <h1>Order Management</h1>

    <h2>Pending Orders</h2>
    <!-- Tabel untuk menampilkan pesanan yang belum diproses -->
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Book ID</th>
            <th>Date</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <!-- Loop untuk menampilkan pesanan yang belum diproses -->
        <?php foreach (getPendingOrders() as $order): ?>
            <tr>
                <td><?php echo $order['order_id']; ?></td>
                <td><?php echo $order['customer_id']; ?></td>
                <td><?php echo $order['book_id']; ?></td>
                <td><?php echo $order['date']; ?></td>
                <td><?php echo $order['total']; ?></td>
                <td>
                    <button onclick="confirmOrder(<?php echo $order['order_id']; ?>)">Confirm</button>
                    <button onclick="cancelOrder(<?php echo $order['order_id']; ?>)">Cancel</button>
                    <button onclick="setDelivery(<?php echo $order['order_id']; ?>)">Set Delivery</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Processing Orders</h2>
    <!-- Tabel untuk menampilkan pesanan yang sedang dalam proses pengiriman -->
    <table border="1">
        <!-- Sama seperti di atas, hanya untuk pesanan yang sedang diproses -->
    </table>

    <h2>Completed Orders</h2>
    <!-- Tabel untuk menampilkan pesanan yang telah selesai -->
    <table border="1">
        <!-- Sama seperti di atas, hanya untuk pesanan yang telah selesai -->
    </table>

    <script>
        // Fungsi untuk mengonfirmasi pesanan dengan Ajax
        function confirmOrder(order_id) {
            // Kode untuk mengirim permintaan Ajax ke server untuk mengonfirmasi pesanan
        }

        // Fungsi untuk membatalkan pesanan dengan Ajax
        function cancelOrder(order_id) {
            // Kode untuk mengirim permintaan Ajax ke server untuk membatalkan pesanan
        }

        // Fungsi untuk mengatur pengiriman dengan Ajax
        function setDelivery(order_id) {
            // Kode untuk mengirim permintaan Ajax ke server untuk mengatur pengiriman
        }
    </script>
</body>
</html>
