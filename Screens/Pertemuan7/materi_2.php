<!DOCTYPE html>
<html>
<head>
	<title>Program Kalkulator Sederhana</title>
</head>
<body>

	<h3>Program Kalkulator Sederhana</h3>

	<form method="post" action="">
		<label for="angka1">Angka 1:</label>
		<input type="number" name="angka1" id="angka1" required>
		<br>
		<label for="angka2">Angka 2:</label>
		<input type="number" name="angka2" id="angka2" required>
		<br>
		<label for="operator">Operator:</label>
		<select name="operator" id="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<br>
		<input type="submit" name="submit" value="Hitung">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$operator = $_POST['operator'];

			switch($operator) {
				case "+":
					$hasil = $angka1 + $angka2;
					break;
				case "-":
					$hasil = $angka1 - $angka2;
					break;
				case "*":
					$hasil = $angka1 * $angka2;
					break;
				case "/":
					$hasil = $angka1 / $angka2;
					break;
				default:
					echo "Operator tidak valid";
					exit;
			}

			echo "Hasil: " . $hasil;
		}
	?>
<br>
<button onclick="location.href='halaman_utama.php'">Kembali</button>
</body>
</html>