<?php
session_start();
require 'db_connection.php';  // Pastikan Anda telah membuat koneksi database

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.html");
    exit;
}

// Hapus pesanan jika ada permintaan
if (isset($_GET['delete'])) {
    $order_id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->bind_param("i", $order_id);
    $stmt->execute();
    $stmt->close();
}

$result = $conn->query("SELECT orders.id, users.username, orders.product_name, orders.order_date 
                        FROM orders JOIN users ON orders.user_id = users.id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Win Bucket</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="admin_orders.php">Manage Orders</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="orders">
        <h2>Order List</h2>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Username</th>
                    <th>Product Name</th>
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this order?');">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>

<?php
$conn->close();
?>
