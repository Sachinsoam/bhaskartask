<?php
$servername = getenv('MYSQL_HOST') ?: 'db'; // Fetch MySQL host from the environment or default to db
$username = 'root';
$password = 'root';
$dbname = 'flour_mill';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
