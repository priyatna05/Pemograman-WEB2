<?php
// deklarasi multidimensional array untuk menyimpan biodata mahasiswa
$students = array(
    array("Nama" => "yatna", "Jurusan" => "Teknik Informatika", "NIM" => "201011400103"),
    array("Nama" => "Budi", "Jurusan" => "Sistem Informasi", "NIM" => "23456"),
    array("Nama" => "Citra", "Jurusan" => "Teknik Komputer", "NIM" => "34567"),
    array("Nama" => "Dewi", "Jurusan" => "Teknik Elektro", "NIM" => "45678"),
    array("Nama" => "Eko", "Jurusan" => "Teknik Mesin", "NIM" => "56789")
);

// menampilkan biodata mahasiswa
echo "Biodata Mahasiswa: <br>";
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Jurusan</th><th>NIM</th></tr>";
for ($row = 0; $row < count($students); $row++) {
    echo "<tr>";
    foreach ($students[$row] as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
