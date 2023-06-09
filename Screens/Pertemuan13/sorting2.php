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

// Mengambil data customer dengan pengurutan dari kecil ke besar berdasarkan customerNumber
$sql = "SELECT * FROM customer ORDER BY customerNumber ASC";
$result = mysqli_query($conn, $sql);

// Menampilkan data
if (mysqli_num_rows($result) > 0) {
    echo "<h3>Data Customer (Urutan Kecil ke Besar):</h3>";
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
} else {
    echo "Tidak ada data customer.";
}

mysqli_free_result($result);
mysqli_close($conn);
?>