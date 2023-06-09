<?php
// Koneksi ke database
$servername = "localhost"; 
$username = "id20382953_yatna05";
$password = "@Priyatna14";
$dbname = "id20382953_priyatna";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat database jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat atau sudah ada.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menggunakan database yang sudah dibuat
mysqli_select_db($conn, $dbname);

// Membuat tabel 06TPLE005 jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS tbl_06TPLE005 (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    nim VARCHAR(15),
    alamat VARCHAR(100),
    email VARCHAR(50)
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabel 05TPLE006 berhasil dibuat atau sudah ada.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>