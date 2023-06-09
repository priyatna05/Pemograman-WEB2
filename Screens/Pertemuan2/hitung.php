<!DOCTYPE html>
<html>
<head>
	<title>Hasil Program Hitung Nilai Akhir</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			// mengambil nilai dari form
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];
			$matkul = $_POST['matkul'];
			$kehadiran = $_POST['kehadiran'];
			$tugas = $_POST['tugas'];
			$uts = $_POST['uts'];
			$uas = $_POST['uas'];
			
			// menghitung nilai akhir
			$nilai_akhir = 0.1 * $kehadiran + 0.2 * $tugas + 0.3 * $uts + 0.4 * $uas;

			// menentukan grade dan keterangan
			if ($nilai_akhir >= 80) {
				$grade = 'A';
			} elseif ($nilai_akhir >= 70) {
				$grade = 'B';
			} elseif ($nilai_akhir >= 60) {
				$grade = 'C';
			} elseif ($nilai_akhir >= 50) {
				$grade = 'D';
			} else {
				$grade = 'E';
			}

			if ($nilai_akhir > 65) {
				$keterangan = 'Lulus';
			} else {
				$keterangan = 'Tidak Lulus';
			}
		?>
		<h1>Hasil Program Hitung Nilai Akhir</h1>
		<table class="table">
			<tbody>
				<tr>
					<th>Nama:</th>
					<td><?php echo $nama; ?></td>
				</tr>
				<tr>
					<th>NIM:</th>
					<td><?php echo $nim; ?></td>
				</tr>
				<tr>
					<th>Mata Kuliah:</th>
					<td><?php echo $matkul; ?></td>
				</tr>
				<tr>
					<th>Jumlah Kehadiran:</th>
					<td><?php echo $kehadiran; ?></td>
				</tr>
				<tr>
					<th>Nilai Tugas:</th>
					<td><?php echo $tugas; ?></td>
				</tr>
				<tr>
					<th>Nilai UTS:</th>
					<td><?php echo $uts; ?></td>
				</tr>
				<tr>
					<th>Nilai UAS:</th>
					<td><?php echo $uas; ?></td>
				</tr>
				<tr>
					<th>Nilai Akhir:</th>
					<td><?php echo $nilai_akhir; ?></td>
				</tr>
				<tr>
					<th>Grade:</th>
					<td><?php echo $grade; ?></td>
				</tr>
				<tr>
					<th>Keterangan:</th>
					<td><?php echo $keterangan; ?></td>
				</tr>
			</tbody>
		</table>
		<a href="index.php" class="btn btn-primary">Kembali ke Form</a>
	</div>
</body>
</html>
