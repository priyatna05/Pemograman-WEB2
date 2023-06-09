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

// Mengambil jumlah data dari tabel
$sql = "SELECT COUNT(*) AS total FROM tbl_mhs";
$result = $conn->query($sql);

// Memeriksa apakah query berhasil dijalankan
if ($result) {
    // Mendapatkan baris hasil query
    $row = $result->fetch_assoc();
    $totalData = $row['total'];

    echo "Jumlah data mahasiswa: " . $totalData;
} else {
    echo "Error saat mengambil data: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>