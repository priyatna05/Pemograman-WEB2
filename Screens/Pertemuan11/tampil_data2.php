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
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama</th><th>NIM</th><th>Jurusan</th></tr>";

    // Menampilkan data ke dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["jurusan"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}

// Menutup koneksi
$conn->close();
?>