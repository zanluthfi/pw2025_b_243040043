<?php
$depan = "Fauzan";
$belakang = "Luthfi";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$depan $belakang";
    } else if ($i % 3 == 0) {
        echo "$depan";
    } else if ($i % 5 == 0) {
        echo "$belakang";
    } else {
        echo "$i";
    }
    echo "<br>";
}
?>