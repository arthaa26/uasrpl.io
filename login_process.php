
<?php
// Mulai sesi
session_start();

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bucket_bunga";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$user = $_POST['username'];
$pass = $_POST['password'];

// Ambil data user dari database
$sql = "SELECT id, password FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        // Simpan riwayat login
        $user_id = $row['id'];
        $sql = "INSERT INTO login_history (user_id) VALUES ('$user_id')";
        $conn->query($sql);
        
        // Simpan sesi
        $_SESSION['username'] = $user;
        $_SESSION['login_success'] = "Login successful. Welcome, $user!";
        
        // Redirect ke index.html
        header("Location: index.php");
        exit();
    } else {
        // Password salah, munculkan popup
        echo "<script>alert('Invalid password. Please try again.');</script>";
        header("Location: login.html");
        exit();
    }
} else {
    // User tidak ditemukan, munculkan popup
    echo "<script>alert('Invalid username. Please try again.');</script>";
    header("Location: login.html");
    exit();
}
?>
