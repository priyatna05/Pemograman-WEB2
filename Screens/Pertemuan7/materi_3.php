<!DOCTYPE html>
<html>
<head>
	<title>Program Menampilkan Bilangan Habis Dibagi 3</title>
</head>
<body>

	<h3>Program Menampilkan Bilangan Habis Dibagi 3</h3>

	<form method="post" action="">
		<label for="bilangan">Masukkan bilangan:</label>
		<input type="number" name="bilangan" id="bilangan" required>
		<br>
		<input type="submit" name="submit" value="Tampilkan">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$bilangan = $_POST['bilangan'];

			echo "Bilangan-bilangan yang habis dibagi 3: ";
			for($i = 1; $i <= $bilangan; $i++) {
				if($i % 3 == 0) {
					echo $i . " <br>";
				}
			}
		}
	?>
<br>
<button onclick="location.href='halaman_utama.php'">Kembali</button>
</body>
</html>