
<?php
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
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Simpan data ke tabel users
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. <a href='login.html'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
