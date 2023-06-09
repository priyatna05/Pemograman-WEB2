<?php
// Koneksi ke database
$servername = "localhost";
$username = "id20382953_yatna05";
$password = "@priyatna14";
$dbname = "id20382953_priyatna";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Input data dari pengguna
$nama_barang = $_POST['nama_barang'];
$harga_barang = intval($_POST['harga_barang']);
$stok = intval($_POST['stok']);

// Query SQL untuk menambahkan record ke tabel_barang
$sql = "INSERT INTO tabel_barang (nama_barang, harga_barang, stok)
        VALUES ('$nama_barang', $harga_barang, $stok)";

if ($conn->query($sql) === TRUE) {
    echo "Record berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>