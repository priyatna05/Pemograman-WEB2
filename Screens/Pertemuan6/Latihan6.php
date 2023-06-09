<!DOCTYPE html>
<html>
<head>
	<title>Program Menghitung Luas Segitiga</title>
</head>
<body>
	<h2>Program Menghitung Luas Segitiga</h2>
	<form method="post">
		<label for="alas">Masukkan Alas:</label>
		<input type="text" name="alas" id="alas">
		<br><br>
		<label for="tinggi">Masukkan Tinggi:</label>
		<input type="text" name="tinggi" id="tinggi">
		<br><br>
		<input type="submit" name="submit" value="Hitung">
	</form>

	<?php
	// Definisikan data segitiga secara langsung menggunakan array
	$data_segitiga = array(
		array('nomor' => 1, 'alas' => 5, 'tinggi' => 8),
		array('nomor' => 2, 'alas' => 10, 'tinggi' => 15),
		array('nomor' => 3, 'alas' => 6, 'tinggi' => 10),
		array('nomor' => 4, 'alas' => 7, 'tinggi' => 12),
		array('nomor' => 5, 'alas' => 9, 'tinggi' => 13)
	);

	// Fungsi untuk menghitung luas segitiga
	function hitung_luas_segitiga($alas, $tinggi) {
		$luas = 0.5 * $alas * $tinggi;
		return $luas;
	}

	if(isset($_POST['submit'])) {
		$alas = $_POST['alas'];
		$tinggi = $_POST['tinggi'];
		$luas = hitung_luas_segitiga($alas, $tinggi);
		echo "<br>Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas";
	}

	// Output hasil perhitungan ke dalam tabel
	echo "<br><br><table border='1'>
		<tr>
			<th>Nomor</th>
			<th>Alas</th>
			<th>Tinggi</th>
			<th>Luas</th>
		</tr>";
	foreach ($data_segitiga as $segitiga) {
		$nomor = $segitiga['nomor'];
		$alas = $segitiga['alas'];
		$tinggi = $segitiga['tinggi'];
		$luas = hitung_luas_segitiga($alas, $tinggi);
		echo "<tr>
			<td>$nomor</td>
			<td>$alas</td>
			<td>$tinggi</td>
			<td>$luas</td>
		</tr>";
	}
	echo "</table>";
	?>
</body>
</html>
