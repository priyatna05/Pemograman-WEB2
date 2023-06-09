<html>
<head>
    <title>Custom String App</title>
</head>
<body>
    <form method="post" action="">
        Inputkan sebuah string: <input type="text" name="string"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Memeriksa apakah input string telah diberikan oleh pengguna
    if(isset($_POST['string'])){
        // Mengambil input string dari pengguna
        $string = $_POST['string'];

        // Menampilkan string asli
        echo "<br><b>String asli:</b> " . $string;

        // Mengubah string menjadi huruf besar dan menampilkannya
        $uppercase = strtoupper($string);
        echo "<br><b>Uppercase:</b> " . $uppercase;

        // Mengubah string menjadi huruf kecil dan menampilkannya
        $lowercase = strtolower($string);
        echo "<br><b>Lowercase:</b> " . $lowercase;

        // Menghitung panjang dari string dan menampilkannya
        $length = strlen($string);
        echo "<br><b>Panjang:</b> " . $length;

        // Memotong string menjadi 5 karakter pertama dan menampilkannya
        $substring = substr($string, 0, 5);
        echo "<br><b>Substring:</b> " . $substring;
    }
    ?>
</body>
</html>