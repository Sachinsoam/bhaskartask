<?php
// index.php

// Include database connection file
include('db_connection.php');

// Optionally, you can query the database to get stats for the homepage, like stock levels
$result = $conn->query("SELECT COUNT(*) AS total_products FROM stocks");
$stock = $result->fetch_assoc();

// Example data for homepage (you can modify it as per your needs)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flour Mill Accounting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Welcome to Flour Mill Accounting System</h1>
        <div class="mt-3">
            <p>Total Products in Stock: <?php echo $stock['total_products']; ?></p>
        </div>
        
        <!-- Links to other pages -->
        <div class="mt-4">
            <a href="stocks.php" class="btn btn-primary">Stock Management</a>
            <a href="users.php" class="btn btn-secondary">User Management</a>
            <a href="financial_reports.php" class="btn btn-info">Financial Reports</a>
            <a href="login.php" class="btn btn-danger">Login</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
