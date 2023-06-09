<html>
<head>
    <title>Function UDF</title>
</head>
<body>
    <!-- Input Bilangan -->
    <form method="POST">
        Masukkan Bilangan Pertama : <br>
        <input type="text" name="A1" size="10"> <br>
        Masukkan Bilangan Kedua : <br>
        <input type="text" name="B1" size="10"> <br>
        <input type="submit" name="submit" value="hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve the input values and convert them to integers
        $A1 = (int) $_POST["A1"];
        $B1 = (int) $_POST["B1"];

        // Define the arithmetic functions with correct variable names
        function jumlah1($A1,$B1) {
            $jumlahbil = $A1 + $B1;
            return $jumlahbil;
        }

        function kurang1($A1,$B1) {
            $kurangbil = $A1 - $B1;
            return $kurangbil;
        }

        function kali1($A1,$B1) {
            $kalibil = $A1 * $B1;
            return $kalibil;
        }

        function bagi1($A1,$B1) {
            $bagibil = $A1 / $B1;
            return $bagibil;
        }

        echo "<br>";
        echo ("Bilangan Pertama : "); 
        echo $A1;
        echo "<br>";

        echo ("Bilangan Kedua : "); 
        echo $B1;
        echo "<br> <br>";

        echo "Hasil Penjumlahan 2 buah bilangan "; 
        echo "<br>";
        // Call the correct function and use the correct variable name
        $jumlahbil = jumlah1($A1,$B1);
        printf("Penjumlahan antara : %d + %d = %d ",$A1,$B1,$jumlahbil); 
        echo "<br><br>";
        echo "Hasil Pengurangan 2 buah bilangan "; 
        echo "<br>";
        // Call the correct function and use the correct variable name
        $kurangbil = kurang1($A1,$B1);

        printf( "Pengurangan antara : %d - %d = %d ",$A1,$B1,$kurangbil); 
        echo "<br><br>";
        echo "Hasil Perkalian 2 buah bilangan "; 
        echo "<br>";
        // Call the correct function and use the correct variable name
        $kalibil = kali1($A1,$B1);

        printf( "Perkalian antara : %d * %d = %d ", $A1, $B1, $kalibil); 
        echo "<br><br>";
        echo "Hasil Pembagian 2 buah bilangan "; 
        echo "<br>";
        // Call the correct function and use the correct variable name
        $bagibil = bagi1($A1,$B1);

        printf( "Pembagian antara : %d / %d = %d ",$A1,$B1,$bagibil); 
        echo "<br><br>";
    }
    ?>

</body>
</html>