<?php

// Input matriks A (2x3)
$A = array(
    array(1, 2, 3),
    array(4, 5, 6)
);

// Input matriks B (3x3)
$B = array(
    array(7, 8, 9),
    array(10, 11, 12),
    array(13, 14, 15)
);

// Inisialisasi matriks hasil (2x3)
$C = array(
    array(0, 0, 0),
    array(0, 0, 0)
);

// Perkalian matriks A dan B
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 3; $j++) {
        for ($k = 0; $k < 3; $k++) {
            $C[$i][$j] += $A[$i][$k] * $B[$k][$j];
        }
    }
}

// Output hasil perkalian matriks
echo "<table border='1'>";
echo "<tr><th>No</th><th>Matriks A</th><th>Matriks B</th><th>Hasil</th></tr>";
for ($i = 0; $i < 2; $i++) {
    echo "<tr>";
    echo "<td>" . ($i+1) . "</td>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $A[$i][$j] . "</td>";
    }
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $B[$j][$i] . "</td>";
    }
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $C[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
