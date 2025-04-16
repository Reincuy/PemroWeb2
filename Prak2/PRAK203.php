<!DOCTYPE html>
<html>
<head>
    <title>Prak3</title>
</head>
<body>
    
    <form method="post" action="">
        <label>Nilai :</label>
        <input type="text" name="nilai" required><br>
        Dari :<br>
        <input type="radio" name="dari" value="C" required> Celcius<br>
        <input type="radio" name="dari" value="F" required> Fahrenheit<br>
        <input type="radio" name="dari" value="Re" required> Rheaumur<br>
        <input type="radio" name="dari" value="K" required> Kelvin<br>
        Ke :<br>
        <input type="radio" name="ke" value="C" required> Celcius<br>
        <input type="radio" name="ke" value="F" required> Fahrenheit<br>
        <input type="radio" name="ke" value="Re" required> Rheaumur<br>
        <input type="radio" name="ke" value="K" required> Kelvin<br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil = 0;

        // Konversi semua ke Celcius dulu
        switch ($dari) {
            case "C": $celcius = $nilai; break;
            case "F": $celcius = ($nilai - 32) * 5 / 9; break;
            case "Re": $celcius = $nilai * 5 / 4; break;
            case "K": $celcius = $nilai - 273.15; break;
        }

        // Dari Celcius ke tujuan
        switch ($ke) {
            case "C": $hasil = $celcius; break;
            case "F": $hasil = ($celcius * 9 / 5) + 32; break;
            case "Re": $hasil = $celcius * 4 / 5; break;
            case "K": $hasil = $celcius + 273.15; break;
        }

        // Satuan simbol
        $satuan = [
            "C" => "°C",
            "F" => "°F",
            "Re" => "°Re",
            "K" => "K"
        ];

        echo "<h3>Hasil Konversi: " . round($hasil, 2) . " " . $satuan[$ke] . "</h3>";
    }
    ?>
</body>
</html>
