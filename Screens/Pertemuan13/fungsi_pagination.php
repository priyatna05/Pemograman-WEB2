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

// Fungsi untuk mendapatkan total baris data
function getTotalRows($conn, $searchTerm) {
    $sql = "SELECT COUNT(*) as total FROM customer WHERE customerName LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Konfigurasi pagination
$resultsPerPage = 10; // Jumlah data per halaman
$totalRows = 0;
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Halaman saat ini

// Mendapatkan nilai search term jika ada
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Mendapatkan jumlah total baris data
if (!empty($searchTerm)) {
    $totalRows = getTotalRows($conn, $searchTerm);
}

// Menghitung total halaman
$totalPages = ceil($totalRows / $resultsPerPage);

// Mendapatkan data customer dengan pencarian, pengurutan, dan pagination
$sql = "SELECT * FROM customer WHERE customerName LIKE '%$searchTerm%' ORDER BY customerNumber ASC LIMIT " . (($page - 1) * $resultsPerPage) . ", $resultsPerPage";
$result = mysqli_query($conn, $sql);

// Menampilkan data
echo "<h3>Data Customer:</h3>";
echo "<form action=\"\" method=\"get\">";
echo "<input type=\"text\" name=\"search\" placeholder=\"Cari berdasarkan nama\" value=\"$searchTerm\">";
echo "<input type=\"submit\" value=\"Cari\">";
echo "</form>";
echo "<table>";
echo "<tr><th>Customer Number</th><th>Customer Name</th><th>Contact Last Name</th><th>Contact First Name</th><th>Phone</th><th>Address Line 1</th><th>Address Line 2</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Sales Rep Employee Number</th><th>Credit Limit</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["customerNumber"]."</td>";
    echo "<td>".$row["customerName"]."</td>";
    echo "<td>".$row["contactLastName"]."</td>";
    echo "<td>".$row["contactFirstName"]."</td>";
    echo "<td>".$row["phone"]."</td>";
    echo "<td>".$row["addressLine1"]."</td>";
    echo "<td>".$row["addressLine2"]."</td>";
    echo "<td>".$row["city"]."</td>";
    echo "<td>".$row["state"]."</td>";
    echo "<td>".$row["postalCode"]."</td>";
    echo "<td>".$row["country"]."</td>";
    echo "<td>".$row["salesRepEmployeeNumber"]."</td>";
    echo "<td>".$row["creditLimit"]."</td>";
    echo "</tr>";
}
echo "</table>";

// Menampilkan navigasi pagination
if ($totalPages > 1) {
    echo "<div class=\"pagination\">";
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            echo "<span class=\"current\">$i</span>";
        } else {
            echo "<a href=\"cari1.php?search=$searchTerm&page=$i\">$i</a>";
        }
    }
    echo "</div>";
}

mysqli_free_result($result);
mysqli_close($conn);
?>