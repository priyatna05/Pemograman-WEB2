<?php
// Mengambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Mengirim pesan ke nomor WhatsApp
$phone_number = '085692533510'; // Nomor WhatsApp tujuan
$wa_message = "Pesan dari: $name\nEmail: $email\nSaran: $message";
$wa_link = "https://wa.me/$phone_number?text=" . urlencode($wa_message);

// Mengarahkan pengguna kembali ke halaman utama setelah mengirim pesan
header("Location: index.html");
exit();
?>