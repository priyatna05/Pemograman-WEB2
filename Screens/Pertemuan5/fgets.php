<?php
$file = "/Pertemuan5/buah.txt";
$handle = fopen($file, "r");
if ($handle) {
  while (($line = fgets($handle)) !== false) {
    echo $line;
  }
  fclose($handle);
}
?>