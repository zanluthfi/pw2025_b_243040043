<?php

function hitungLuasLingkaran($r) {
    return 3.14*$r*$r;
}

function hitungKelilingLingkaran($r) {
    return 2*3.14*$r;
}

echo "<h4>Menghitung Luas Lingkaran</h4>";
$a = 10;
echo "Jari-jari = $a cm";
echo "<br>";
echo "Luas lingkaran = ";
echo hitungLuasLingkaran($a);
echo " cm2";
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
$b = 20;
echo "Jari-jari = $b cm";
echo "<br>";
echo "Keliling lingkaran = ";
echo hitungKelilingLingkaran($b);
echo " cm";
echo "<hr>";