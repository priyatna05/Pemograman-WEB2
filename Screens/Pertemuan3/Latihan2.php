<html>
    <head>
        <title>Pembelian peralatan</title>
</head>
<style type = "text/css">
    body{
        font-size: 14 px;
    }
    table{
        font-size:25pt;
    }
    </style>
    <body>
        <center>
            <font face="comic sans serif" size = 5 color = "blue">Contoh perhitungan dengan PHP</font>
            <table border="1" celllspacing="0" cellspadding="3">
                <tr>
                    <td colspan="4" align="center" valign="middle">
                        <b>Pesanan alat kantor</b>
</td>
</tr>
<tr>
    <td><b>Nama Alat</b></td>
    <td><b>Kwantitas</b></td>
    <td><b>Harga_Satuan</b></td>
    <td><b>Jumblah_Harga</b></td>
</tr>
<?php
//input data
//inisialisasi variabel yang digunakan
//nama peralatan
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "flashDisk";
$brg4 = "Pulpen";
//harga per unit peralatan
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;
//jumblah peralatan yang ada
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;
//total harga per jenis peralatan
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;
//hitung grand total nilai peralatan
$tharga = $th1 + $th2 + $th3 + $th4;
//potongan
$pot = 5;
//total potongan
$tpot = ($pot *$tharga)/100;
//total bersih yang dibayar
$tdibayar = $tharga - $tpot;
?>
<tr>
<td align="left"><?php echo $brg1; ?></td>
<td align="right"><?php echo $jmlbrg1; ?></td>
<td align="right"><?php echo $harga1; ?></td>
<td align="right"><?php echo $th1; ?></td>
</tr>
<tr>
<tr>
<td align="left"><?php echo $jmlbrg2; ?></td>
<td align="right"><?php echo $jmlbrg2; ?></td>
<td align="right"><?php echo $harga2; ?></td>
<td align="right"><?php echo $th2; ?></td>
</tr>
<tr>
<tr>
<td align="left"><?php echo $brg3; ?></td>
<td align="right"><?php echo $jmlbrg3; ?></td>
<td align="right"><?php echo $harga3; ?></td>
<td align="right"><?php echo $th3; ?></td>
</tr>
<tr>
<tr>
<td align="left"><?php echo $brg4; ?></td>
<td align="right"><?php echo $jmlbrg4; ?></td>
<td align="right"><?php echo $harga4; ?></td>
<td align="right"><?php echo $th4; ?></td>
</tr>
<tr>
    <td colspan="3" align="right">Total Harga</td>
    <td align="right"><?php echo $tharga; ?></td>
</tr>
<tr>
    <td colspan="3" align="right">Diskon<?php echo "($pot %)"; ?></td>
    <td align="right"><?php echo $tpot; ?></td>
</tr>
</tr>
<td colspan="3" align="right">Jumblah Harus dibayar</td>
<td align="right"><?php echo $tdibayar; ?> </td>
</tr>
</table>
</center>
</body>
</html>