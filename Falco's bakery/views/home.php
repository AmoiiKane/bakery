<h2>All Orders</h2>
<?php
$stmt = $pdo->query("SELECT * FROM orders ORDER BY pickup_date DESC");
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($orders):
?>
<table>
    <tr>
        <th>ID</th>
        <th>Customer</th>
        <th>Item</th>
        <th>Quantity</th>
        <th>Pickup Date</th>
        <th>Status</th>
    </tr>
    <?php foreach ($orders as $order): ?>
    <tr>
        <td><?= $order['id'] ?></td>
        <td><?= htmlspecialchars($order['customer_name']) ?></td>
        <td><?= htmlspecialchars($order['item']) ?></td>
        <td><?= $order['quantity'] ?></td>
        <td><?= $order['pickup_date'] ?></td>
        <td><?= $order['status'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>No orders yet.</p>
<?php endif; ?>
