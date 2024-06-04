<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Order Tracking</h1>
    </header>

    <section id="tracking">
        <h2>Track Your Order</h2>
        <form action="track_order.php" method="POST">
            <label for="order_id">Order ID:</label>
            <input type="text" id="order_id" name="order_id" required>
            <button type="submit">Track</button>
        </form>
    </section>
</body>
</html>
