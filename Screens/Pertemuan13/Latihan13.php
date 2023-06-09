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

// Fungsi untuk melakukan query dan mengambil data dengan pagination
function getData($conn, $query, $page, $perPage)
{
    $start = ($page - 1) * $perPage;
    $query .= " LIMIT $start, $perPage";
    $result = mysqli_query($conn, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// Fungsi untuk menghitung total data
function getTotalData($conn, $query)
{
    $result = mysqli_query($conn, $query);
    return mysqli_num_rows($result);
}

// Konfigurasi pagination
$perPage = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Tombol searching DESC
if (isset($_GET['search_desc'])) {
    $searchQuery = "SELECT * FROM tbl_06TPLE005 ORDER BY nama DESC";
} else {
    $searchQuery = "SELECT * FROM tbl_06TPLE005 ORDER BY nama ASC";
}

// Tombol sorting
if (isset($_GET['sort'])) {
    $column = $_GET['sort'];
    $searchQuery .= " ORDER BY $column";
}

// Mengambil data dengan pagination
$data = getData($conn, $searchQuery, $page, $perPage);

// Menghitung total data
$totalData = getTotalData($conn, "SELECT * FROM tbl_06TPLE005");

// Menghitung total halaman
$totalPage = ceil($totalData / $perPage);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas 06TPLE005</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Menampilkan tombol pagination -->
    <br>
    <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
        <a href="cari3.php?page=<?= $i; ?>"><?= $i; ?></a>
    <?php endfor; ?>

    <!-- Menampilkan tombol searching DESC dan ASC -->
    <br><br>
    <a href="cari3.php?search_desc">Search DESC</a> |
    <a href="cari3.php">Search ASC</a>

    <!-- Menampilkan tombol sorting -->
    <br><br>
    <a href="cari3.php?sort=id">Sort by ID</a> |
    <a href="cari3.php?sort=nama">Sort by Nama</a> |
    <a href="cari3.php?sort=nim">Sort by NIM</a> |
    <a href="cari3.php?sort=alamat">Sort by Alamat</a> |
    <a href="cari3.php?sort=email">Sort by Email</a>

</body>
</html>

<?php
mysqli_close($conn);
?>