<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM tabel_user WHERE username='$username' AND password1='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: dashboard.php");
} else {
    header("location: login.php?pesan=gagal");
}
?>
