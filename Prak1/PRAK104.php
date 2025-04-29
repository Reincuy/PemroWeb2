<!DOCTYPE html>
<html>
<head>
    <title>PRAK104</title>
    <style>
        table {
            border-collapse: collapse;
            width: 250px;
            font-family: 'Times New Roman', Times, serif;
        }
        th, td {
            border: 1px solid black;
            padding: 4px;
        }
        th {
            background-color: white;
            font-weight: bold;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
$samsung = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
];
?>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php
    foreach ($samsung as $tipe) {
        echo "<tr><td>$tipe</td></tr>";
    }
    ?>
</table>

</body>
</html>
