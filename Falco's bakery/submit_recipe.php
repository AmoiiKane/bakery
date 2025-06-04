<?php
require_once 'db.php';

$stmt = $pdo->prepare("INSERT INTO recipes (item, ingredients, instructions) VALUES (?, ?, ?)");
$stmt->execute([
    $_POST['item'],
    $_POST['ingredients'],
    $_POST['instructions']
]);

header("Location: index.php?action=recipes");
?>
