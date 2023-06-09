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

// Menyisipkan data dummy ke dalam tabel customer
$sql = "INSERT INTO customer (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES
    (1, 'John Doe', 'Doe', 'John', '123456789', '123 Main St', 'Apt 4B', 'New York', 'NY', '10001', 'USA', 123, 10000.00),
    (2, 'Jane Smith', 'Smith', 'Jane', '987654321', '456 Elm St', 'Unit 2C', 'Los Angeles', 'CA', '90001', 'USA', 456, 15000.00),
    (3, 'Michael Johnson', 'Johnson', 'Michael', '555888777', '789 Oak Ave', 'madri', 'Chicago', 'IL', '60601', 'USA', 789, 20000.00),
    (4, 'Andi', 'Santoso', 'Andi', '0812345678', 'Jl. Merdeka No. 10', '', 'Jakarta', 'DKI Jakarta', '12345', 'Indonesia', 123, 15000.00),
    (5, 'Siti', 'Rahayu', 'Siti', '087654321', 'Jl. Cendana No. 5', 'Blok A2', 'Surabaya', 'Jawa Timur', '67890', 'Indonesia', 456, 20000.00),
    (6, 'Budi', 'Kurniawan', 'Budi', '089876543', 'Jl. Jenderal Sudirman No. 25', 'Tower B, Lantai 12', 'Bandung', 'Jawa Barat', '54321', 'Indonesia', 789, 25000.00),
    (7, 'Rina', 'Wijaya', 'Rina', '0854321098', 'Jl. Sudirman No. 15', 'Apartemen Harmoni, Tower C', 'Medan', 'Sumatera Utara', '98765', 'Indonesia', 123, 18000.00),
    (8, 'Ahmad', 'Prasetyo', 'Ahmad', '0812345678', 'Jl. Pahlawan No. 8', '', 'Yogyakarta', 'DI Yogyakarta', '54321', 'Indonesia', 456, 22000.00),
    (9, 'Anita', 'Putri', 'Anita', '087654321', 'Jl. Diponegoro No. 12', 'Blok B3', 'Semarang', 'Jawa Tengah', '67890', 'Indonesia', 789, 27000.00),
    (10, 'Rudi', 'Hermawan', 'Rudi', '089876543', 'Jl. Gatot Subroto No. 20', 'Apt 6C', 'Makassar', 'Sulawesi Selatan', '12345', 'Indonesia', 123, 16000.00),
    (11, 'Dewi', 'Sari', 'Dewi', '0854321098', 'Jl. Thamrin No. 30', 'Blok D2', 'Denpasar', 'Bali', '98765', 'Indonesia', 456, 19000.00)";

if (mysqli_query($conn, $sql)) {
    echo "Data dummy berhasil disisipkan ke dalam tabel customer.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
