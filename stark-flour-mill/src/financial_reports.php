<?php
include('db_connection.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Generate report function
function generateReport($type) {
    global $conn;
    $report_data = ""; // Logic to generate report data (e.g., query sales and purchases)
    
    // Example logic to generate a Profit & Loss report
    if ($type == 'profit_loss') {
        $sql_sales = "SELECT SUM(total_amount) FROM sales";
        $sql_purchases = "SELECT SUM(total_amount) FROM purchases";
        $sales_result = $conn->query($sql_sales);
        $purchases_result = $conn->query($sql_purchases);
        $sales_total = $sales_result->fetch_row()[0];
        $purchases_total = $purchases_result->fetch_row()[0];
        
        $report_data = "Sales: $sales_total, Purchases: $purchases_total, Profit: " . ($sales_total - $purchases_total);
    }

    // Insert into financial reports table
    $stmt = $conn->prepare("INSERT INTO financial_reports (report_type, report_data) VALUES (?, ?)");
    $stmt->bind_param("ss", $type, $report_data);
    $stmt->execute();
    $stmt->close();
    
    return $report_data;
}

// Generate profit & loss report
$report = generateReport('profit_loss');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Reports | Flour Mill Accounting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Financial Reports</h1>
        <div class="mt-4">
            <h2>Profit and Loss Report</h2>
            <p><?php echo $report; ?></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
