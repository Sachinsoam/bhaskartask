<?php 
include 'includes/db.php'; 
include 'includes/header.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($name && $email) {
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->execute([$name, $email]);
        echo "<p>User added successfully!</p>";
    } else {
        echo "<p>Please fill all fields!</p>";
    }
}
?>
    <h1>Add New User</h1>
    <form method="post" action="add_user.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
