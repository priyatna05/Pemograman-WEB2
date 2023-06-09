<?php
class koneksi
{
    public function get_koneksi()
    {
        $conn = mysqli_connect("localhost","id20382953_yatna05","@Priyatna14","id20382953_priyatna");
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
            exit();
        }
        return $conn;
    }
}

$konek = new koneksi();
$koneksi = $konek->get_koneksi();
?>
