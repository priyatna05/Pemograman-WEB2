<?php
// Koneksi ke database
$servername = "localhost"; 
$username = "id20382953_yatna05";
$password = "@Priyatna14";
$dbname = "id20382953_priyatna";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Data dummy untuk dimasukkan ke tabel
$data = array(
    array("ACHMAD APRIYANSAH", "1910016017", "Jl. Merdeka No. 123", "achmad.apriyansah@example.com"),
    array("AHMAD BAJURI", "1910016018", "Jl. Mawar No. 456", "ahmad.bajuri@example.com"),
    array("AKMAL TAUFIQ HIDAYAT", "1910016019", "Jl. Teratai No. 789", "akmal.hidayat@example.com"),
    array("ALAN JAYA", "1910016020", "Jl. Anggrek No. 101", "alan.jaya@example.com"),
    array("ARDHESTA YOGA MEZZALUNA", "1910016021", "Jl. Melati No. 202", "ardhesta.mezzaluna@example.com"),
    array("BRANDLY MICHAEL VALENTINO MIDE", "1910016022", "Jl. Kenanga No. 303", "brandly.valentino@example.com"),
    array("CAHAYA WAHYU HIDAYANA", "1910016023", "Jl. Kamboja No. 404", "cahaya.hidayana@example.com"),
    array("DENNIS FAJRIANSYAH", "1910016024", "Jl. Sakura No. 505", "dennis.fajriansyah@example.com"),
    array("FUAD MUSTAMIRRUL ISHLAH", "1910016025", "Jl. Dahlia No. 606", "fuad.ishlah@example.com"),
    array("IBNU ADI NUGROHO", "1910016026", "Jl. Cempaka No. 707", "ibnu.nugroho@example.com"),
    array("MOHAMAD BRAYAN KAYA", "1910016027", "Jl. Teratai No. 808", "brayan.kaya@example.com"),
    array("MUHAMAD MUKHLIS", "1910016028", "Jl. Melati No. 909", "muhamad.mukhlis@example.com"),
    array("MUHAMMAD AFIF ALRASYID", "1910016029", "Jl. Anggrek No. 1010", "afif.alrasyid@example.com"),
    array("MUHAMMAD FADHLY NOOR RIZQI", "1910016030", "Jl. Kenanga No. 1111", "fadhly.rizqi@example.com"),
    array("MUHAMMAD SYAHRILAMSYAH", "1910016031", "Jl. Kamboja No. 1212", "syahrilamsyah@example.com"),
    array("MUHTADIN FAUYAN", "1910016032", "Jl. Sakura No. 1313", "muhtadin.fauyan@example.com"),
    array("NANDI PURA NUGRAHA", "1910016033", "Jl. Dahlia No. 1414", "nandi.nugraha@example.com"),
    array("NUR MEGA SARI", "1910016034", "Jl. Cempaka No. 1515", "nur.mega@example.com"),
    array("OKI NANDA FRAVILA", "1910016035", "Jl. Teratai No. 1616", "oki.fravila@example.com"),
    array("OKKY WAHYU ENDRAWAN", "1910016036", "Jl. Melati No. 1717", "okky.endrawan@example.com"),
    array("PRIYATNA", "1910016037", "Jl. Anggrek No. 1818", "priyatna@example.com"),
    array("PUTRI ROKHMAYATI", "1910016038", "Jl. Kenanga No. 1919", "putri.rokhmayati@example.com"),
    array("RIZKY DESTYAN PULUNGGONO", "1910016039", "Jl. Kamboja No. 2020", "rizky.pulunggono@example.com"),
    array("RIZKY HANIFUDIN", "1910016040", "Jl. Sakura No. 2121", "rizky.hanifudin@example.com"),
    array("RIZKY SETIAWAN", "1910016041", "Jl. Dahlia No. 2222", "rizky.setiawan@example.com"),
    array("RUSPIYADI", "1910016042", "Jl. Cempaka No. 2323", "ruspiyadi@example.com"),
    array("SALWA CARELINA MAYBRELLA", "1910016043", "Jl. Teratai No. 2424", "salwa.maybrella@example.com"),
    array("SATRIA BANISTAMA", "1910016044", "Jl. Melati No. 2525", "satria.banistama@example.com"),
    array("TRITYA ADI DHARMA", "1910016045", "Jl. Anggrek No. 2626", "tritya.dharma@example.com"),
    array("WAFA ALFIAN", "1910016046", "Jl. Kenanga No. 2727", "wafa.alfian@example.com"),
    array("WARDAH OKTAFIANI", "1910016047", "Jl. Kamboja No. 2828", "wardah.oktafiani@example.com"),
    array("NUR CAHYA", "1910016048", "Jl. Sakura No. 2929", "nur.cahya@example.com"),
    array("MUHAMAD YUSUF", "1910016049", "Jl. Dahlia No. 3030", "muhamad.yusuf@example.com")
);

// Query untuk memasukkan data dummy
foreach ($data as $item) {
    $nama = $item[0];
    $nim = $item[1];
    $alamat = $item[2];
    $email = $item[3];
    
    $sql = "INSERT INTO tbl_06TPLE005 (nama, nim, alamat, email) VALUES ('$nama', '$nim', '$alamat', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dimasukkan: $nama <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>