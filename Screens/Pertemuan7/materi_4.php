<!DOCTYPE html>
<html>
<head>
	<title>Perkalian Matriks</title>
	<style>
		table {
			border-collapse: collapse;
			margin: 20px 0;
		}
		td {
			padding: 5px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>Perkalian Matriks</h1>
	<form method="post" action="">
		<p>Input Matriks Pertama:</p>
		<table border="1">
			<?php
			for ($i=0; $i<2; $i++) {
				echo "<tr>";
				for ($j=0; $j<2; $j++) {
					echo "<td><input type='number' name='matriks1[$i][$j]' required></td>";
				}
				echo "</tr>";
			}
			?>
		</table>
		<p>Input Matriks Kedua:</p>
		<table border="1">
			<?php
			for ($i=0; $i<2; $i++) {
				echo "<tr>";
				for ($j=0; $j<2; $j++) {
					echo "<td><input type='number' name='matriks2[$i][$j]' required></td>";
				}
				echo "</tr>";
			}
			?>
		</table>
		<br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	<br>
	<?php
	if (isset($_POST['submit'])) {
		$matriks1 = $_POST['matriks1'];
		$matriks2 = $_POST['matriks2'];

		echo "<p>Hasil Perkalian Matriks:</p>";
		echo "<table border='1'>";
		for ($i=0; $i<2; $i++) {
			echo "<tr>";
			for ($j=0; $j<2; $j++) {
				$hasil = 0;
				for ($k=0; $k<2; $k++) {
					$hasil += $matriks1[$i][$k] * $matriks2[$k][$j];
				}
				echo "<td>$hasil</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
	<br>
<button onclick="location.href='halaman_utama.php'">Kembali</button>
</body>
</html>
