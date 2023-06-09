<?php
// Koneksi ke database
$servername = "localhost"; 
$username = "id20382953_yatna05";
$password = "@Priyatna14";
$dbname = "id20382953_priyatna";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memproses form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["nama"];

    // Mengeksekusi query untuk mencari data berdasarkan nama
    $query = "SELECT * FROM tbl_mhs WHERE nama LIKE '%$search%'";
    $result = mysqli_query($conn, $query);

    // Menampilkan hasil pencarian
    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Hasil Pencarian:</h3>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nama</th><th>NIM</th><th>Jurusan</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nama"]."</td>";
            echo "<td>".$row["nim"]."</td>";
            echo "<td>".$row["jurusan"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Data tidak ditemukan.";
    }

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>