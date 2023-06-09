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
$sql = "SHOW TABLES LIKE 'tbl_mhs'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tabel tbl_mhs sudah ada";
} else {
    // Membuat tabel jika belum ada
    $createTableSql = "CREATE TABLE tbl_mhs (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(50) NOT NULL,
        nim VARCHAR(15) NOT NULL,
        jurusan VARCHAR(50) NOT NULL
    )";

    if ($conn->query($createTableSql) === TRUE) {
        echo "Tabel tbl_mhs berhasil dibuat";
    } else {
        echo "Error saat membuat tabel: " . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>