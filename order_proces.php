
<?php
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
$user_id = $_SESSION['user_id'];
$order_details = $_POST['order_details'];

// Simpan order ke database
$sql = "INSERT INTO orders (user_id, order_details) VALUES ('$user_id', '$order_details')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['order_success'] = "Terima kasih " . $_SESSION['username'] . ", sudah memesan!";
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
