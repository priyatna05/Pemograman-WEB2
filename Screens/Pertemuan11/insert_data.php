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

// Memeriksa jika form telah disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    // Menyisipkan data ke dalam tabel
    $sql = "INSERT INTO tbl_mhs (nama, nim, jurusan)
            VALUES ('$nama', '$nim', '$jurusan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disisipkan ke dalam tabel tbl_mhs";
    } else {
        echo "Error saat menyisipkan data: " . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>

        <input type="submit" name="submit" value="Tambah Data">
    </form>
</body>
</html>
