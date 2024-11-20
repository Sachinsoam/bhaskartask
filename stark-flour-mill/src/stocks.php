<?php
include('db_connection.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch all stocks
$sql = "SELECT * FROM stocks";
$result = $conn->query($sql);
$stocks = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management | Flour Mill Accounting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Stock Management</h1>
        <div class="mt-4">
            <a href="add_stock.php" class="btn btn-success mb-3">Add New Stock</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Location</th>
                        <th>Expiration Date</th>
                        <th>Barcode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stocks as $stock): ?>
                    <tr>
                        <td><?php echo $stock['product_name']; ?></td>
                        <td><?php echo $stock['quantity']; ?></td>
                        <td><?php echo $stock['location']; ?></td>
                        <td><?php echo $stock['expiration_date']; ?></td>
                        <td><?php echo $stock['barcode']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
