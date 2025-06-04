<?php
require_once 'db.php';

$pdo->exec("
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100),
    item VARCHAR(100),
    quantity INT,
    pickup_date DATE,
    status VARCHAR(50) DEFAULT 'Pending'
);

CREATE TABLE IF NOT EXISTS inventory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ingredient VARCHAR(100),
    quantity FLOAT,
    unit VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item VARCHAR(100),
    ingredients TEXT,
    instructions TEXT
);
");

echo "Tables created successfully.";
?>
