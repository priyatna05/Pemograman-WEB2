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

// Mengambil Data dari form
$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$matakuliah = $_POST['matakuliah'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$jmlhadir = $_POST['jmlhadir'];

$sql = "INSERT INTO tblnilai (nim, nama_mhs, matakuliah, uts, uas, tugas, jmlhadir)
        VALUES ('$nim', '$nama_mhs', '$matakuliah', '$uts', '$uas', '$tugas', '$jmlhadir')";

if ($conn->query($sql) === true) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>