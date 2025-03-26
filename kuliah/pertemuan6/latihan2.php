<?php
// array associative

$mahasiswa = [
    [
        "nama" => "Fauzan Muhammad Luthfi",
        "nrp" => "243040043",
        "email" => "fauzanluthfi@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Ilham Kurniawan",
        "nrp" => "213040001",
        "email" => "ilhamkurniawan@gmail.com",
        "jurusan" => "Teknik mesin"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array asosiatif</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php foreach ($mahasiswa as $a) : ?>
        <ul>
            <li>Nama : <?= $a["nama"]?></li>
            <li>NRP : <?= $a["nrp"]?></li>
            <li>Email : <?= $a["email"]?></li>
            <li>Nama : <?= $a["jurusan"]?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>