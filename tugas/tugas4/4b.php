<?php

$i = array("CPU", "Cooler", "GPU", "Hard disk", "RAM", "Motherboard");

echo "Macam-macam perangkat keras komputer<br>";
foreach ($i as $list) {
    echo "<li>$list</li>";
}

echo "Macam-macam perangkat keras komputer baru<br>";
$r = array_push($i, "Power supply", "SSD");
foreach ($i as $list) {
    echo "<li>$list</li>";
}