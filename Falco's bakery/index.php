<?php
require_once 'db.php';
$action = $_GET['action'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>At Falco's Bakery</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background: #fdf6f0;
            color: #333;
        }
        header {
            background: #3e2723;
            color: #fff;
            padding: 1em 2em;
            font-family: 'Playfair Display', serif;
            font-size: 1.8em;
        }
        nav {
            background: #5d4037;
            padding: 0.5em 2em;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 1.5em;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 2em;
            background: #fff3e0;
            min-height: 80vh;
            border-top: 5px solid #d7ccc8;
        }
        footer {
            background: #3e2723;
            color: #ccc;
            padding: 1em 2em;
            text-align: center;
        }
        form input, form select {
            padding: 0.5em;
            margin: 0.5em 0;
            width: 100%;
            max-width: 400px;
        }
        form input[type=submit] {
            background: #6d4c41;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        form input[type=submit]:hover {
            background: #8d6e63;
        }
    </style>
</head>
<body>
    <header>At Falco's Bakery</header>
    <nav>
        <a href="?action=home">Home</a>
        <a href="?action=add_order">Add Order</a>
        <a href="?action=inventory">Inventory</a>
        <a href="?action=recipes">Recipes</a>
    </nav>
    <main>
        <?php
        switch ($action) {
            case 'add_order':
                include 'views/add_order.php';
                break;
            case 'inventory':
                include 'views/inventory.php';
                break;
            case 'recipes':
                include 'views/recipes.php';
                break;
            default:
                include 'views/home.php';
        }
        ?>
    </main>
    <footer>
        &copy; <?= date("Y") ?> At Falco's Bakery. All rights reserved.
    </footer>
</body>
</html>
