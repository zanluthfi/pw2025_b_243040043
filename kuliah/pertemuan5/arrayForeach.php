<?php

$nama = ["Ahmad", "Budi", "Chika", "Dini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for array</title>
</head>
<body>
    <?php
        foreach ($nama as $absen) {
            // foreach akan otomatis menampilkan semua isi array
            echo "<li>$absen</li>";
        }
    ?>
</body>
</html>