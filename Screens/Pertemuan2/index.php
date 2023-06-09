<!DOCTYPE html>
<html>
<head>
	<title>Program Hitung Nilai Akhir</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Program Hitung Nilai Akhir</h2>
		<form action="hitung.php" method="post">
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
			</div>
			<div class="form-group">
				<label for="nim">NIM:</label>
				<input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
			</div>
			<div class="form-group">
				<label for="matkul">Mata Kuliah:</label>
				<select class="form-control" id="matkul" name="matkul">
					<option value="Pemrograman Web">Pemrograman Web</option>
					<option value="Basis Data">Basis Data</option>
					<option value="Algoritma dan Pemrograman">Algoritma dan Pemrograman</option>
				</select>
			</div>
			<div class="form-group">
				<label for="kehadiran">Jumlah Kehadiran:</label>
				<input type="number" class="form-control" id="kehadiran" placeholder="Masukkan Jumlah Kehadiran" name="kehadiran" min="0" max="18">
			</div>
			<div class="form-group">
				<label for="tugas">Nilai Tugas:</label>
				<input type="number" class="form-control" id="tugas" placeholder="Masukkan Nilai Tugas" name="tugas" min="0" max="100">
			</div>
			<div class="form-group">
				<label for="uts">Nilai UTS:</label>
				<input type="number" class="form-control" id="uts" placeholder="Masukkan Nilai UTS" name="uts" min="0" max="100">
			</div>
			<div class="form-group">
				<label for="uas">Nilai UAS:</label>
				<input type="number" class="form-control" id="uas" placeholder="Masukkan Nilai UAS" name="uas" min="0" max="100">
			</div>
			<button type="submit" class="btn btn-primary">Hitung</button>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
