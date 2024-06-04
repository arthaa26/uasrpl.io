<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Win Bucket</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="order">
        <h2>Order Form</h2>
        <form action="process_order.php" method="POST">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
            <button type="submit">Submit Order</button>
        </form>
    </section>
</body>
</html>
