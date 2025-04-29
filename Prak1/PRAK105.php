<!DOCTYPE html>
<html>
<head>
    <title>PRAK105</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: 'Times New Roman', serif;
        }
        th {
            background-color: red;
            color: black;
            font-weight: bold;
            font-size: 24px;
            padding: 10px;
            border: 2px solid black;
        }
        td {
            border: 2px solid black;
            padding: 6px 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
$samsung = [
    "s22" => "Samsung Galaxy S22",
    "s22plus" => "Samsung Galaxy S22+",
    "a03" => "Samsung Galaxy A03",
    "xcover5" => "Samsung Galaxy Xcover 5"
];
?>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php foreach ($samsung as $item): ?>
        <tr><td><?= $item ?></td></tr>
    <?php endforeach; ?>
</table>

</body>
</html>
