<?php
$nama_anda = htmlspecialchars($_POST["nama-anda"])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome, <?= $nama_anda ?></title>
</head>
<body>
    <h2>
        welcome to the jungle, <?= $nama_anda ?>!
    </h2>
</body>
</html>