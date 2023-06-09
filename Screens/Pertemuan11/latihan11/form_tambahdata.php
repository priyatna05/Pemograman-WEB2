<!DOCTYPE html>
<html>
<head>
    <title>Form Input Nilai</title>
</head>
<body>
    <h1>Form Input Nilai</h1>
    <form action="proses.php" method="">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br><br>
        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="matakuliah">Mata Kuliah:</label>
        <input type="text" name="matakuliah" id="matakuliah" required><br><br>
        <label for="uts">Nilai UTS:</label>
        <input type="text" name="uts" id="uts" required><br><br>
        <label for="uas">Nilai UAS:</label>
        <input type="text" name="uas" id="uas" required><br><br>
        <label for="tugas">Nilai Tugas:</label>
        <input type="text" name="tugas" id="tugas" required><br><br>
        <label for="jmlhadir">Jumlah Kehadiran:</label>
        <input type="text" name="jmlhadir" id="jmlhadir" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
