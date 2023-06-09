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

// Mengambil data dari tabel
$sql = "SELECT * FROM tbl_mhs";
$result = $conn->query($sql);

// Memeriksa apakah ada data yang diambil
if ($result->num_rows > 0) {
    echo "<h1>Data Mahasiswa</h1>";
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><th style='border: 1px solid black;'>ID</th><th style='border: 1px solid black;'>Nama</th><th style='border: 1px solid black;'>NIM</th><th style='border: 1px solid black;'>Jurusan</th></tr>";

    // Menampilkan data ke dalam tabel
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>" . $row["id"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["nama"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["nim"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["jurusan"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}

// Menutup koneksi
$conn->close();
?>