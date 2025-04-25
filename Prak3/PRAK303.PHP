<!DOCTYPE html>
<html>
<head>
    <title>PRAK303</title>
</head>
<body>
    <form method="POST">
        Batas Bawah : <input type="number" name="bawah" required><br>
        Batas Atas : <input type="number" name="atas" required><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        $i = $bawah;

        do {
            if ((($i + 7) % 5) == 0) {
                echo "<img src='star.PNG' width='25'>";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>
