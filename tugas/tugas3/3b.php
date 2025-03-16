<?php

function urutanAngka($angka) {
    for ($j = 1; $j <= $angka; $j++) {
        for ($i = 1; $i <= $j; $i++) {
            static $x = 1;
            echo "$x ";
            $x++;
        }
        echo "<br>";
    }
}

urutanAngka(5);