<?php 
    require 'php/functions.php';

    $dekorasi = query("SELECT * FROM dekor")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Bentuk</th>
      <th scope="col">Warna</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($dekorasi as $dekor): ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="assets/img/<?= $dekor["Gambar"]; ?>"></td>
      <td><?= $dekor["Nama"] ?></td>
      <td><?= $dekor["Bentuk"] ?></td>
      <td><?= $dekor["Warna"] ?></td>
      <td><?= $dekor["Harga"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>