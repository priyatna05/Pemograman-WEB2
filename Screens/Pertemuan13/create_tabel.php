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

// Membuat tabel customer jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS customer (
    customerNumber INT(11) PRIMARY KEY,
    customerName VARCHAR(50),
    contactLastName VARCHAR(50),
    contactFirstName VARCHAR(50),
    phone VARCHAR(50),
    addressLine1 VARCHAR(50),
    addressLine2 VARCHAR(50),
    city VARCHAR(50),
    state VARCHAR(50),
    postalCode VARCHAR(15),
    country VARCHAR(50),
    salesRepEmployeeNumber INT(11),
    creditLimit DECIMAL(10,2)
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabel customer berhasil dibuat atau sudah ada.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>