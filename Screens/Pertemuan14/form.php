<?php
// koneksi database 
include 'Koneksi.php';
?>
<html>
<body>
<h2>Tabel 1</h2>
<table>
<tr>
<th>kode</th>
<th>nama barang</th>
<th>jumlah</th>
</tr>
<?php
$tabel1=mysqli_query($koneksi,"select * from tabel_1");
while($dataku=mysqli_fetch_row($tabel1)) {
    echo "<tr>
    <td>$dataku[0]</td>
    <td>$dataku[1]</td>
    <td>$dataku[2]</td>
    </tr>";
}
?>
</table>
<h2>Tabel 2</h2>
<table>
<tr>
<th>kode</th>
<th>nama barang</th>
<th>jumlah</th>
</tr>
<?php
$tabel2=mysqli_query($koneksi,"select * from tabel_2");
while($data2=mysqli_fetch_row($tabel2)) {
    echo "<tr>
    <td>$data2[0]</td>
    <td>$data2[1]</td>
    <td>$data2[2]</td>
    </tr>";
}
?>
</table>
<h2>kirim barang</h2>
<form action="aksi_form.php" method="post">
<label for="kode">kode barang :</label>
<select name="kode" id="kode">
<?php
$tabel2=mysqli_query($koneksi,"select * from tabel_2");
while($data1=mysqli_fetch_row($tabel2)) {
    echo '<option value="'.$data1[0].'">'.$data1[0].'/'.$data1[1].'</option>';
}
?>
</select><br><br>
<label for="jumlah">jumlah:</label><input type="number" name="jumlah" id="jumlah"><br><br>
<input type="submit" value="kirim">
</form>
</body>
</html>
