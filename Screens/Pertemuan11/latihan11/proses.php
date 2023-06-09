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

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matakuliah'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $jmlhadir = $_POST['jmlhadir'];

    // Menghitung nilai akhir dengan bobot yang ditentukan
    $nilai_akhir = ($uts * 0.3) + ($uas * 0.4) + ($tugas * 0.2) + ($jmlhadir * 0.1);

    // Menghitung grade berdasarkan nilai akhir
    if ($nilai_akhir >= 80) {
        $grade = 'A';
    } elseif ($nilai_akhir >= 70) {
        $grade = 'B';
    } elseif ($nilai_akhir >= 60) {
        $grade = 'C';
    } elseif ($nilai_akhir >= 50) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    $sql = "INSERT INTO tblnilai (nim, nama_mhs, matakuliah, uts, uas, tugas, jmlhadir)
            VALUES ('$nim', '$nama', '$matakuliah', '$uts', '$uas', '$tugas', '$jmlhadir')";

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    echo "Data berhasil dimasukan";
}

mysqli_close($con);
?>