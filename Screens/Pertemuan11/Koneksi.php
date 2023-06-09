<?php
$servername = "localhost";
$username = "id20382953_yatna05";
$password = "@Priyatna14";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";

// Menutup koneksi
$conn->close();
?>
