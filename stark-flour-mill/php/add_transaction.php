<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $stock_id = $_POST['stock_id'];
    $sold_quantity = $_POST['sold_quantity'];
    $total_price = $_POST['total_price'];
    $payment_status = $_POST['payment_status'];

    $sql = "INSERT INTO transactions (user_id, stock_id, sold_quantity, total_price, payment_status) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $stock_id, $sold_quantity, $total_price, $payment_status]);

    echo "Transaction added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Transaction</title>
</head>
<body>
    <h1>Add Transaction</h1>
    <form method="POST">
        <label>User ID:</label>
        <input type="number" name="user_id" required><br>
        <label>Stock ID:</label>
        <input type="number" name="stock_id" required><br>
        <label>Sold Quantity:</label>
        <input type="number" name="sold_quantity" required><br>
        <label>Total Price:</label>
        <input type="number" step="0.01" name="total_price" required><br>
        <label>Payment Status:</label>
        <select name="payment_status">
            <option value="Pending">Pending</option>
            <option value="Paid">Paid</option>
        </select><br>
        <button type="submit">Add Transaction</button>
    </form>
</body>
</html>
