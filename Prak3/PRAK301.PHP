<!DOCTYPE html>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <form method="POST">
        Jumlah Peserta : <input type="number" name="jumlah" required><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {
            if ($i % 2 == 0) {
                echo "<h2 style='color:green;'>Peserta ke-$i</h2>";
            } else {
                echo "<h2 style='color:red;'>Peserta ke-$i</h2>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>
