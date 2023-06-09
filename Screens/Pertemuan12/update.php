<?php
$con = mysqli_connect("localhost", "root", "", "db_latihan11");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'";

if (!mysqli_query($con, $sql)) {
    die('Error updating table: ' . mysqli_error($con));
}

echo "Table 'tbl_mhs' updated successfully";

mysqli_close($con);

?>