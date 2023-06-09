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

// Membuat tabel
$sql = "CREATE TABLE tblnilai (
    nim VARCHAR(9) PRIMARY KEY,
    nama_mhs VARCHAR(30),
    matakuliah VARCHAR(20),
    uts FLOAT(5,2),
    uas FLOAT(5,2),
    tugas FLOAT(5,2),
    jmlhadir INT(2)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel tblnilai berhasil dibuat";
} else {
    echo "Error saat membuat tabel: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
