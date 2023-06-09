<!DOCTYPE html>
<html>
<head>
	<title>Form Input dan Output Tabel Perkalian</title>
</head>
<body>
	<h1>Form Input dan Output Tabel Perkalian</h1>

	<?php
		if(isset($_POST['submit'])) {
			$bilangan = $_POST['bilangan'];
	?>

	<h2>Hasil Perkalian:</h2>
	<table border="1">
		<tr>
			<th>Angka</th>
			<th>Hasil Perkalian</th>
		</tr>

		<?php
			for($i = 1; $i <= 10; $i++) {
				$hasil = $bilangan * $i;
				echo "<tr>";
				echo "<td>" . $i . "</td>";
				echo "<td>" . $hasil . "</td>";
				echo "</tr>";
			}
		?>

	</table>

	<?php } else { ?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		Masukkan Bilangan: <input type="number" name="bilangan">
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php } ?>
</body>
</html>