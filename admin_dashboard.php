<?php
session_start();
require 'db_connection.php';  // Koneksi ke database

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.html");
    exit;
}

// Query untuk mendapatkan semua pesanan
$result = $conn->query("SELECT * FROM orders");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['admin_username']; ?>!</h1>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                <li><a href="tracking.php">Track Order</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="orders">
        <h2>Orders</h2>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    <th>Product Name</th>
                    <th>Order Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>
