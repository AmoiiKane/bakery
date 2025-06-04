<?php
require_once 'db.php';

$stmt = $pdo->prepare("INSERT INTO inventory (ingredient, quantity, unit) VALUES (?, ?, ?)");
$stmt->execute([
    $_POST['ingredient'],
    $_POST['quantity'],
    $_POST['unit']
]);

header("Location: index.php?action=inventory");
?>
