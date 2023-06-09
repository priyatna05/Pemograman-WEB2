<!DOCTYPE html>
<html>
<head>
	<title>Program Menentukan Nilai Akhir dan Grade</title>
</head>
<body>

	<h3>Program Menentukan Nilai Akhir dan Grade</h3>

	<form method="post" action="">
		<label for="nilai_uts">Nilai UTS:</label>
		<input type="number" name="nilai_uts" id="nilai_uts" required>
		<br>
		<label for="nilai_uas">Nilai UAS:</label>
		<input type="number" name="nilai_uas" id="nilai_uas" required>
		<br>
		<label for="nilai_tugas">Nilai Tugas:</label>
		<input type="number" name="nilai_tugas" id="nilai_tugas" required>
		<br>
		<input type="submit" name="submit" value="Hitung">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$nilai_uts = $_POST['nilai_uts'];
			$nilai_uas = $_POST['nilai_uas'];
			$nilai_tugas = $_POST['nilai_tugas'];

			$nilai_akhir = (0.4 * $nilai_uts) + (0.4 * $nilai_uas) + (0.2 * $nilai_tugas);

			echo "Nilai akhir: " . $nilai_akhir . "<br>";
			echo "Grade: ";

			if($nilai_akhir >= 80) {
				echo "A";
			} else if($nilai_akhir >= 70) {
				echo "B";
			} else if($nilai_akhir >= 60) {
				echo "C";
			} else if($nilai_akhir >= 50) {
				echo "D";
			} else {
				echo "E";
			}
		}
	?>
<br>
<button onclick="location.href='halaman_utama.php'">Kembali</button>
</body>
</html>