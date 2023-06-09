<?php include "koneksi.php";
$time=date("d M Y, H:i");
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update = "UPDATE articles SET judul='$title', penulis='$author', lead='$abstraksi', content='$content', waktu='$time' WHERE articleID='$ID'";
$hasil = mysqli_query($conn, $update);
if ($hasil) { echo "Artikel berhasil di update<br>";
echo "<a href=\"tampil_articles.php\">List</a>";
} else { echo "Artikel gagal di update";
}
?>
Membuat Delete Artikel
<?php include "koneksi.php";
$articleID = $_GET['articleID'];
$perintah="DELETE FROM articles WHERE articleID =\"$articleID\"";
$hasil1= mysqli_query ($koneksi,$perintah); if ($hasil1) { echo "Artikel berhasil dihapus<br>"; echo "<a href=\"edit_articles.php\">Back</a>";
} else { echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke database MySQL.";
}
?>
