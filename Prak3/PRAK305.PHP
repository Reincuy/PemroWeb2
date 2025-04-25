<!DOCTYPE html>
<html>
<head>
    <title>PRAK305</title>
</head>
<body>
    <form method="post">
        <label>Masukkan String:</label>
        <input type="text" name="inputStr" />
        <input type="submit" value="submit" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputStr"];
        $length = strlen($input);
        echo "<br><b>Input:</b><br>$input<br><br><b>Output:</b><br>";

        for ($i = 0; $i < $length; $i++) {
            $char = $input[$i];
            $outputChar = strtoupper($char);
            $outputChar .= str_repeat(strtolower($char), $length - 1);
            echo $outputChar;
        }
    }
    ?>
</body>
</html>
