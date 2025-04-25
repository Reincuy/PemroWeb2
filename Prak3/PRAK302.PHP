<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <form method="POST">
        Tinggi : <input type="number" name="tinggi" required><br>
        Alamat Gambar : <input type="text" name="gambar" required><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['gambar'];

        $i = $tinggi;
        while ($i >= 1) {
            $spasi = $tinggi - $i;
            while ($spasi > 0) {
                echo "<span style='display:inline-block; width:30px;'></span>";
                $spasi--;
            }

            $j = 1;
            while ($j <= $i) {
                echo "<img src='$gambar' width='30' height='30'>";
                $j++;
            }

            echo "<br>";
            $i--;
        }
    }
    ?>
</body>
</html>
