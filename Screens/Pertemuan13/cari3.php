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

// Memproses pencarian data
if (isset($_POST['search'])) {
    $searchKeyword = $_POST['searchKeyword'];
    $searchQuery = "SELECT * FROM tbl_06TPLE005 WHERE nama LIKE '%$searchKeyword%'";
} else {
    $searchQuery = "SELECT * FROM tbl_06TPLE005";
}

// Eksekusi query
$result = mysqli_query($conn, $searchQuery);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Mahasiswa</title>
</head>
<body>
    <h2>Search Mahasiswa 06TPLE005</h2>

    <!-- Form pencarian -->
    <form method="post" action="cari3.php">
        <label>Masukkan kata kunci:</label>
        <input type="text" name="searchKeyword">
        <input type="submit" name="search" value="Search">
    </form>

    <!-- Tabel hasil pencarian -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['email']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>

<?php
mysqli_close($conn);
?>