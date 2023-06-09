<?php
$conn = mysqli_connect("localhost","root","","db_latihan12");
//membuat tabel
$sql = "CREATE TABLE IF NOT EXISTS artikel (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    judul TEXT,
    penulis TEXT,
    lead TEXT,
    content TEXT,
    waktu DATE
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel 'artikel' berhasil dibuat atau sudah ada sebelumnya.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>
