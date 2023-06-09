<?php
$con = mysqli_connect("localhost", "root", "", "db_latihan11");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'";

if (!mysqli_query($con, $sql)) {
    die('Error deleting from table: ' . mysqli_error($con));
}

echo "Data deleted successfully";

mysqli_close($con);
?>
