<?php
include 'koneksi.php';

$kode = $_POST['kode']; 
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "CALL update_datatable('$kode','$jumlah')");

header("location: form.php");
?>
