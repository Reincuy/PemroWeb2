<!DOCTYPE html>
<html>
<head>
    <title>Prak4</title>
</head>
<body>

    <form method="post" action="">
        <label>Nilai : </label>
        <input type="number" name="angka" required>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $angka = $_POST['angka'];
        $output = "";

        if ($angka < 0 || $angka >= 1000) {
            $output = "Anda Menginput Melebihi Limit Bilangan";
        } else if ($angka == 0) {
            $output = "Nol";
        } else if ($angka >= 1 && $angka <= 9) {
            $output = "Satuan";
        } else if ($angka >= 10 && $angka <= 19) {
            $output = "Belasan";
        } else if ($angka >= 20 && $angka <= 99) {
            $output = "Puluhan";
        } else if ($angka >= 100 && $angka <= 999) {
            $output = "Ratusan";
        }

        echo "<h3>Hasil: <span style='text-transform: lowercase;'>$output</span></h3>";
    }
    ?>
</body>
</html>
