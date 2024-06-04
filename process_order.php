
<?php
session_start();
require 'db_connection.php';  // Pastikan Anda telah membuat koneksi database

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $product_name = $_POST['product_name'];

    $stmt = $conn->prepare("INSERT INTO orders (user_id, product_name) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $product_name);

    if ($stmt->execute()) {
        $_SESSION['order_success'] = "Order placed successfully!";
    } else {
        $_SESSION['order_success'] = "Failed to place order. Please try again.";
    }

    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit;
}
?>
