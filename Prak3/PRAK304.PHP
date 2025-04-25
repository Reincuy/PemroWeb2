<!DOCTYPE html>
<html>
<head>
    <title>PRAK304</title>
</head>
<body>
    <form method="post">
        <?php
        $jumlah = 0;
        if (isset($_POST['submit'])) {
            $jumlah = $_POST['jumlah'];
        } elseif (isset($_POST['tambah'])) {
            $jumlah = $_POST['jumlah'] + 1;
        } elseif (isset($_POST['kurang'])) {
            $jumlah = $_POST['jumlah'] - 1;
            if ($jumlah < 0) $jumlah = 0;
        }
        ?>

        <?php if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])) { ?>
            Jumlah bintang: 
            <input type="number" name="jumlah" required><br>
            <input type="submit" name="submit" value="Submit">
        <?php } else { ?>
            Jumlah bintang <?= $jumlah ?><br><br>
            <?php
            $i = 0;
            while ($i < $jumlah) {
                echo "<img src='star.png' width='50'>";
                $i++;
            }
            ?>
            <br><br>
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        <?php } ?>
    </form>
</body>
</html>
