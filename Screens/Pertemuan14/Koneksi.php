<?php
$host = "localhost";
$username = "id20382953_yatna05";
$password = "@Priyatna14";
$database = "id20382953_priyatna";

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
