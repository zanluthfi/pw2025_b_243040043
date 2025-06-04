<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $id = 1;
    foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $id++ ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['nrp'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['jurusan'] ?></td>
        <td>
          <img src="img/<?= $row['gambar'] ?>" width="50">
        </td>
        <td>
          <a href="">ubah</a> |
          <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>