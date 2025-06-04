<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        echo "
            <script>
                alert('berhasil');
                document.location.href = 'index.php';
            </script>
        "; 
    } else {
        echo "
            <script>
                alert('gagal');
                document.location.href = 'index.php';
            </script>
        "; 
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>

<body>

    <h1>tambah data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" autocomplete="off" require>
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" autocomplete="off" require>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" autocomplete="off" require>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" autocomplete="off" require>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">tambah data</button>
            </li>
        </ul>
    </form>

</body>

</html>