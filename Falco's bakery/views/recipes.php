<h2>Recipe Manager</h2>

<form method="post" action="submit_recipe.php">
    <label>Item Name</label>
    <input type="text" name="item" required>

    <label>Ingredients (e.g., Flour:200g, Sugar:100g)</label>
    <textarea name="ingredients" rows="4" required></textarea>

    <label>Instructions</label>
    <textarea name="instructions" rows="4" required></textarea>

    <input type="submit" value="Save Recipe">
</form>

<?php
$stmt = $pdo->query("SELECT * FROM recipes ORDER BY item ASC");
$recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($recipes):
?>
<table>
    <tr>
        <th>Item</th>
        <th>Ingredients</th>
        <th>Instructions</th>
    </tr>
    <?php foreach ($recipes as $r): ?>
    <tr>
        <td><?= htmlspecialchars($r['item']) ?></td>
        <td><?= nl2br(htmlspecialchars($r['ingredients'])) ?></td>
        <td><?= nl2br(htmlspecialchars($r['instructions'])) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>No recipes added yet.</p>
<?php endif; ?>
