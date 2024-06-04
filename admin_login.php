
<?php
session_start();
require 'db_connection.php';  // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa keberadaan admin dalam database
    $stmt = $conn->prepare("SELECT id, username, role FROM users WHERE username=? AND password=? AND role='admin'");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        // Jika login berhasil, set session dan arahkan ke halaman admin
        $row = $result->fetch_assoc();
        $_SESSION['admin_id'] = $row['id'];
        $_SESSION['admin_username'] = $row['username'];
        $_SESSION['admin_role'] = $row['role'];
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        $_SESSION['login_error'] = "Invalid username or password";
        header("Location: admin_login.html");
        exit;
    }
}
?>
