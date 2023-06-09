<?php
$file = "Pertemuan5/buah.txt";
$handle = fopen($file, "r");
if ($handle) {
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
}
?>