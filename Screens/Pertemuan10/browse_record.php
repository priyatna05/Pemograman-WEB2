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

// Query SQL untuk mengambil record dari tabel_barang
$sql = "SELECT * FROM tabel_barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Data Barang</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama Barang</th><th>Harga Barang</th><th>Stok</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_barang"] . "</td>";
        echo "<td>" . $row["nama_barang"] . "</td>";
        echo "<td>" . $row["harga_barang"] . "</td>";
        echo "<td>" . $row["stok"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada record.";
}

$conn->close();
?>
