<?php
// Menampilkan waktu saat ini dalam format jam:menit:detik
echo "Waktu saat ini: " . date("H:i:s") . "<br>";

// Menampilkan tanggal hari ini dalam format dd-mm-yyyy
echo "Tanggal hari ini: " . date("d-m-Y") . "<br>";

// Menampilkan nama hari ini (dalam bahasa Inggris)
echo "Hari ini adalah: " . date("l") . "<br>";

// Menampilkan bulan ini (dalam bahasa Inggris)
echo "Bulan ini adalah: " . date("F") . "<br>";

// Menampilkan tahun ini dalam format empat digit
echo "Tahun ini: " . date("Y") . "<br>";

// Menampilkan waktu pada waktu yang ditentukan
echo "Waktu pada 27 Maret 2023 jam 10:30: " . date("H:i:s", strtotime("27 March 2023 10:30")) . "<br>";

// Menampilkan perbedaan waktu antara dua tanggal
$awal = date_create("2023-03-01");
$akhir = date_create("2023-03-15");
$selisih = date_diff($awal, $akhir);
echo "Perbedaan waktu antara 1 Maret 2023 dan 15 Maret 2023 adalah: " . $selisih->format("%R%a hari") . "<br>";
?>