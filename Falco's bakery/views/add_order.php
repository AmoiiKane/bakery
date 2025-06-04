<h2>Add Order</h2>
<form method="post" action="submit_order.php">
    <label>Customer Name</label>
    <input type="text" name="customer_name" required>

    <label>Item</label>
    <input type="text" name="item" required>

    <label>Quantity</label>
    <input type="number" name="quantity" min="1" required>

    <label>Pickup Date</label>
    <input type="date" name="pickup_date" required>

    <input type="submit" value="Add Order">
</form>
