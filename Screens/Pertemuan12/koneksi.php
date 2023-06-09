<?php
$dbhost1 = "localhost";
$dbusername1 = "root";
$dbpass1 = "";
$dbname1= "db_latihan12";
//lakukan koneksi dengan mysql
$connection = mysqli_connect($dbhost1,$dbusername1,$dbpass1,$dbname1); if(!$connection)
{
echo "Tidak dapat terhubung dengan database";
}
echo "Koneksi berhasil";
?>

