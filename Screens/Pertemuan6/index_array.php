<?php
$buah = array(
  1 => "Apel",
  2 => "Jeruk",
  3 => "Mangga",
  4 => "Pisang",
  5 => "Anggur"
);

echo "Daftar Buah:<br>";
foreach ($buah as $nomor => $nama) {
  echo $nomor . ". " . $nama . "<br>";
}
?>
