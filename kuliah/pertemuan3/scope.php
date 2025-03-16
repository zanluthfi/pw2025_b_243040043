<?php

$GLOBALS['varGlobal'] = 18; //Variabel global

function testVar() {
    $varLokal = 1; //variabel lokal
    echo "<p> test variabel didalam function.<p>";
    // mengakses variabel global di dalam function
    echo "Variabel global : ".$GLOBALS['varGlobal'];
    echo "<br>";
    echo "Variabel lokal : $varLokal";
    echo "<br>";
}

testvar();

echo "<p> test variabel diluar function.<p>";
echo "Variabel global : $varGlobal";
echo "<br>";
// mengakses variabel lokal didalam function
echo "Variabel lokal : $varLokal";
echo "<br>";