<?php
// koneksi dengan basis data
include 'Koneksi.php';

// daftar barang
$daftarBarang = array(
    array('ID Barang' => 'BR001', 'Nama Barang' => 'Baju', 'Harga Barang' => 120000, 'Jumlah Barang' => 57),
    array('ID Barang' => 'BR002', 'Nama Barang' => 'Celana', 'Harga Barang' => 110000, 'Jumlah Barang' => 55),
    array('ID Barang' => 'BR003', 'Nama Barang' => 'Jas', 'Harga Barang' => 20000, 'Jumlah Barang' => 63)
);

// riwayat penambahan barang
$riwayatTambah = array();

// riwayat penjualan barang
$riwayatJual = array();

// form penambahan barang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'tambah') {
    $idBarang = $_POST['id_barang'];
    $jumlahSupply = $_POST['jumlah_supply'];

    // proses penambahan barang
    $query = "INSERT INTO riwayat_tambah (id_barang, jumlah_supply) VALUES ('$idBarang', $jumlahSupply)";
    mysqli_query($koneksi, $query);

    // tambahkan ke riwayat penambahan
    $riwayatTambah[] = array('ID Barang' => $idBarang, 'Jumlah Supply' => $jumlahSupply);
}

// tombol jual ditekan
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'jual') {
    $idBarang = $_POST['id_barang_jual'];
    $jumlahJual = $_POST['jumlah_jual'];

    // proses penjualan barang
    $query = "INSERT INTO riwayat_jual (id_barang, jumlah_jual) VALUES ('$idBarang', $jumlahJual)";
    mysqli_query($koneksi, $query);

    // tambahkan ke riwayat penjualan
    $riwayatJual[] = array('ID Barang' => $idBarang, 'Jumlah Jual' => $jumlahJual);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Barang</title>
</head>

<body>
    <h1>Daftar Barang</h1>

    <!-- Tombol Tambah Barang -->
    <form method="POST" action="">
        <input type="hidden" name="action" value="tambah">
        <label for="id_barang">ID Barang:</label>
        <input type="text" name="id_barang" id="id_barang" required>
        <label for="jumlah_supply">Jumlah Supply:</label>
        <input type="number" name="jumlah_supply" id="jumlah_supply" required>
        <input type="submit" value="Tambah Barang">
    </form>

    <!-- Tombol Jual -->
    <form method="POST" action="">
        <input type="hidden" name="action" value="jual">
        <label for="id_barang_jual">ID Barang:</label>
        <input type="text" name="id_barang_jual" id="id_barang_jual" required>
        <label for="jumlah_jual">Jumlah Jual:</label>
        <input type="number" name="jumlah_jual" id="jumlah_jual" required>
        <input type="submit" value="Jual">
    </form>

    <h2>Daftar Barang</h2>

    <!-- Tabel Daftar Barang -->
    <table>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Barang</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarBarang as $barang) : ?>
            <tr>
                <td><?php echo $barang['ID Barang']; ?></td>
                <td><?php echo $barang['Nama Barang']; ?></td>
                <td><?php echo $barang['Harga Barang']; ?></td>
                <td><?php echo $barang['Jumlah Barang']; ?></td>
                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="action" value="jual">
                        <input type="hidden" name="id_barang_jual" value="<?php echo $barang['ID Barang']; ?>">
                        <input type="number" name="jumlah_jual" min="1" max="<?php echo $barang['Jumlah Barang']; ?>" required>
                        <input type="submit" value="Jual">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Riwayat Tambah Barang</h2>

    <!-- Tabel Riwayat Tambah Barang -->
    <table>
        <tr>
            <th>ID Barang</th>
            <th>Jumlah Supply</th>
        </tr>
        <?php foreach ($riwayatTambah as $riwayat) : ?>
            <tr>
                <td><?php echo $riwayat['ID Barang']; ?></td>
                <td><?php echo $riwayat['Jumlah Supply']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Riwayat Jual Barang</h2>

    <!-- Tabel Riwayat Jual Barang -->
    <table>
        <tr>
            <th>ID Barang</th>
            <th>Jumlah Jual</th>
        </tr>
        <?php foreach ($riwayatJual as $riwayat) : ?>
            <tr>
                <td><?php echo $riwayat['ID Barang']; ?></td>
                <td><?php echo $riwayat['Jumlah Jual']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
