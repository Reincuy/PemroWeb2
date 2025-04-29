<?php
// Data sesuai soal
$jariJari = 4.2;

// Volume bola = (4/3) * π * r^3
$volume = (4 / 3) * pi() * pow($jariJari, 3);

// Tampilkan hasil
echo "Bangun ruang: Bola<br>";
echo "Volume: " . number_format($volume, 3) . " m3";
?>
