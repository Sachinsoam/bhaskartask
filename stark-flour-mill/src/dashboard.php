<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Flour Mill Accounting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Welcome to Flour Mill Accounting</h1>
        <div class="mt-4">
            <h2>Modules</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="stocks.php">Stock Management</a></li>
                <li class="list-group-item"><a href="financial_reports.php">Financial Reports</a></li>
                <li class="list-group-item"><a href="users.php">User Management</a></li>
            </ul>
        </div>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
