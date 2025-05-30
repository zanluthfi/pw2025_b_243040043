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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Daftar Mahasiswa</h1>
        <table class="table table-striped table-hover">
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
                <a href="" ; class="btn btn-warning">
                  <i class="bi bi-pencil-square"></i>
                </a>
                |
                <a href="" ; class="btn btn-danger">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>