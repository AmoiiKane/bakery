<?php
require_once 'db.php';

$stmt = $pdo->prepare("INSERT INTO orders (customer_name, item, quantity, pickup_date) VALUES (?, ?, ?, ?)");
$stmt->execute([
    $_POST['customer_name'],
    $_POST['item'],
    $_POST['quantity'],
    $_POST['pickup_date']
]);

header("Location: index.php?action=add_order");
?>