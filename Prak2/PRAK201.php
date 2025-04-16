<!DOCTYPE html>
<html>
<head>
    <title>Prak1</title>
</head>
<body>
    <form method="post">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <input type="submit" name="submit" value="Urutkan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['nama1'];
        $b = $_POST['nama2'];
        $c = $_POST['nama3'];

        if ($a <= $b && $a <= $c) {
            if ($b <= $c) {
                echo "<br><b>Output</b><br>$a<br>$b<br>$c";
            } else {
                echo "<br><b>Output</b><br>$a<br>$c<br>$b";
            }
        } elseif ($b <= $a && $b <= $c) {
            if ($a <= $c) {
                echo "<br><b>Output</b><br>$b<br>$a<br>$c";
            } else {
                echo "<br><b>Output</b><br>$b<br>$c<br>$a";
            }
        } else {
            if ($a <= $b) {
                echo "<br><b>Output</b><br>$c<br>$a<br>$b";
            } else {
                echo "<br><b>Output</b><br>$c<br>$b<br>$a";
            }
        }
    }
    ?>
</body>
</html>
