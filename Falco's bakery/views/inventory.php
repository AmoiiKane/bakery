<h2>Inventory</h2>

<form method="post" action="submit_inventory.php">
    <label>Ingredient</label>
    <input type="text" name="ingredient" required>

    <label>Quantity</label>
    <input type="number" step="0.01" name="quantity" required>

    <label>Unit</label>
    <input type="text" name="unit" required>

    <input type="submit" value="Add Ingredient">
</form>

<?php
$stmt = $pdo->query("SELECT * FROM inventory ORDER BY ingredient ASC");
$inventory = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($inventory):
?>
<table>
    <tr>
        <th>Ingredient</th>
        <th>Quantity</th>
        <th>Unit</th>
    </tr>
    <?php foreach ($inventory as $item): ?>
    <tr>
        <td><?= htmlspecialchars($item['ingredient']) ?></td>
        <td><?= $item['quantity'] ?></td>
        <td><?= $item['unit'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>No inventory items.</p>
<?php endif; ?>
