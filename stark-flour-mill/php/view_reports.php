<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM stock");
$stocks = $stmt->fetchAll();

$stmt = $pdo->query("SELECT * FROM transactions");
$transactions = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Reports</title>
</head>
<body>
    <h1>Stock Report</h1>
    <ul>
        <?php foreach ($stocks as $stock): ?>
            <li><?= "{$stock['pack_size']} - {$stock['quantity']} units available, purchased at {$stock['purchase_price']} USD/unit" ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Transaction Report</h1>
    <ul>
        <?php foreach ($transactions as $transaction): ?>
            <li><?= "User ID: {$transaction['user_id']}, Sold: {$transaction['sold_quantity']} units, Total: {$transaction['total_price']} USD, Status: {$transaction['payment_status']}" ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
