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
        for ($i = 0; $i < count($nama); $i++) {
            // count berguna untuk menentukan jumlah elemen pada array.
            // sehingga looping akan berhenti ketika isi array sudah tampil semua.
            echo "<li>$nama[$i]</li>";
        }
    ?>
</body>
</html>