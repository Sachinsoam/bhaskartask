<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pack_size = $_POST['pack_size'];
    $quantity = $_POST['quantity'];
    $purchase_price = $_POST['purchase_price'];

    $sql = "INSERT INTO stock (pack_size, quantity, purchase_price) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pack_size, $quantity, $purchase_price]);

    echo "Stock added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Stock</title>
</head>
<body>
    <h1>Add Stock</h1>
    <form method="POST">
        <label>Pack Size:</label>
        <select name="pack_size" required>
            <option value="5kg">5kg</option>
            <option value="10kg">10kg</option>
            <option value="50kg">50kg</option>
        </select><br>
        <label>Quantity:</label>
        <input type="number" name="quantity" required><br>
        <label>Purchase Price:</label>
        <input type="number" step="0.01" name="purchase_price" required><br>
        <button type="submit">Add Stock</button>
    </form>
</body>
</html>
