<?php
$servername = "localhost";
$username = "id20382953_yatna05";
$password = "@Priyatna14";
$dbname = "id20382953_priyatna";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah tabel sudah ada
$sql = "SHOW TABLES LIKE 'tabel_barang'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tabel tabel_barang sudah ada";
} else {
    // Membuat tabel jika belum ada
    $createTableSql = "CREATE TABLE IF NOT EXISTS tabel_barang (
                id_barang INT(11) AUTO_INCREMENT PRIMARY KEY,
                nama_barang VARCHAR(255) NOT NULL,
                harga_barang INT(11) NOT NULL,
                stok INT(11) NOT NULL
    )";

    if ($conn->query($createTableSql) === TRUE) {
        echo "Tabel tabel_barang berhasil dibuat";
    } else {
        echo "Error saat membuat tabel: " . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>