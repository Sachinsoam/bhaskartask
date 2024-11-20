<?php
$dsn = "mysql:host=db;dbname=accounting;charset=utf8mb4";
$username = "root";
$password = "rootpassword"; // Replace with the actual password from `docker-compose.yml`

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database accounting : " . $e->getMessage());
}
?>
