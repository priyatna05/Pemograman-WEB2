<?php
$file = "Pertemuan5/buah.txt";
$contents = file($file);
foreach($contents as $line) {
  echo $line;
}
?>
