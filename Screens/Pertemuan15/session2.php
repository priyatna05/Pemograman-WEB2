<?php
/***************************************************
Pemeriksaan Session
****************************************************/
session_start();

// cek session
if (isset($_SESSION['login'])) {
    // jika sudah login
    // menampilkan isi session
    echo "<h1>Selamat Jumpa kembali " . $_SESSION['login'] . "</h1>";
    echo "<h2>Jika sudah login Anda dapat mengakses halaman ini</h2>";
    echo "<h2>Klik <a href='session3.php'>di sini (session3.php)</a> untuk LOGOUT</h2>";
} else {
    // jika belum login, maka session tidak ada artinya
    die("Anda belum login! Anda tidak berhak masuk ke halaman ini. Silahkan login <a href='session1.php'>di sini</a>");
}
?>
