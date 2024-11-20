<?php 
include 'includes/db.php'; 
include 'includes/header.php'; 

$query = $pdo->query("SELECT * FROM users");
$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <h1>User List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
