<?php
$servername = "localhost";
$username = "id20382953_yatna05";
$password = "@Priyatna14";
$dbname = "id20382953_priyatna";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT nim, nama_mhs, matakuliah, jmlhadir, tugas, uts, uas, ((uts * 0.3) + (uas * 0.4) + (tugas * 0.2) + (jmlhadir * 0.1)) AS nilai_akhir,
        CASE
            WHEN ((uts * 0.3) + (uas * 0.4) + (tugas * 0.2) + (jmlhadir * 0.1)) >= 80 THEN 'A'
            WHEN ((uts * 0.3) + (uas * 0.4) + (tugas * 0.2) + (jmlhadir * 0.1)) >= 70 THEN 'B'
            WHEN ((uts * 0.3) + (uas * 0.4) + (tugas * 0.2) + (jmlhadir * 0.1)) >= 60 THEN 'C'
            WHEN ((uts * 0.3) + (uas * 0.4) + (tugas * 0.2) + (jmlhadir * 0.1)) >= 50 THEN 'D'
            ELSE 'E'
        END AS grade
        FROM tblnilai
        ORDER BY nilai_akhir DESC";

$result = mysqli_query($con, $sql);

echo "<table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai Kehadiran</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
            <th>Grade</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row['nim'] . "</td>
            <td>" . $row['nama_mhs'] . "</td>
            <td>" . $row['matakuliah'] . "</td>
            <td>" . $row['jmlhadir'] . "</td>
            <td>" . $row['tugas'] . "</td>
            <td>" . $row['uts'] . "</td>
            <td>" . $row['uas'] . "</td>
            <td>" . $row['nilai_akhir'] . "</td>
            <td>" . $row['grade'] . "</td>
          </tr>";
}

echo "</table>";

mysqli_close($con);
?>