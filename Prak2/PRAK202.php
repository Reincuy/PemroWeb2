<!DOCTYPE html>
<html>
<head>
    <title>Prak2</title>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php
    $nama = $nim = $gender = "";
    $namaErr = $nimErr = $genderErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;

        if (empty($_POST["nama"])) {
            $namaErr = "* nama tidak boleh kosong";
            $valid = false;
        } else {
            $nama = htmlspecialchars($_POST["nama"]);
        }

        if (empty($_POST["nim"])) {
            $nimErr = "* nim tidak boleh kosong";
            $valid = false;
        } else {
            $nim = htmlspecialchars($_POST["nim"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "* jenis kelamin tidak boleh kosong";
            $valid = false;
        } else {
            $gender = htmlspecialchars($_POST["gender"]);
        }
    }
    ?>

    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?= $nama ?>"> <span class="error">*</span> 
        <span class="error"><?= $namaErr ?></span><br>

        Nim: <input type="text" name="nim" value="<?= $nim ?>"> <span class="error">*</span> 
        <span class="error"><?= $nimErr ?></span><br>

        Jenis Kelamin :<span class="error">* <?= $genderErr ?></span><br>
        <input type="radio" name="gender" value="Laki-laki" 
            <?= ($gender == "Laki-laki") ? "checked" : "" ?>> Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" 
            <?= ($gender == "Perempuan") ? "checked" : "" ?>> Perempuan<br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $valid) {
        echo "<h3>Output:</h3>";
        echo "$nama<br>";
        echo "$nim<br>";
        echo "$gender<br>";
    }
    ?>
</body>
</html>
