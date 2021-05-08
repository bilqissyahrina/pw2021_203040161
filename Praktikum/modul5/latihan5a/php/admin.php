<?php 
    require 'functions.php';

    $dekorasi = query("SELECT * FROM dekor")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="add">
      <a href="tambah.php">Tambah Data</a>
    </div>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Bentuk</th>
      <th>Warna</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($dekorasi as $dekor) : ?>
    <tr>
      <td><?php $i; ?></td>
      <td>
        <a href=""><button>Ubah</button></a>
        <a href=""><button>Hapus</button></a>
      </td>

      <td><img src="../assets/img/<?= $dekor['Gambar']; ?>" alt=""></td>
      <td><?= $dekor['Nama']; ?></td>
      <td><?= $dekor['Bentuk']; ?></td>
      <td><?= $dekor['Warna']; ?></td>
      <td><?= $dekor['Harga']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>
</html>