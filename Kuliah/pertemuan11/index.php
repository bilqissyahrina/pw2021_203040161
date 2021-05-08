<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


if(!isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>

  <button><a href="tambah.php">Tambah Data Mahasiswa</a></button>
 <br><br> 
 <form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="masukan keyword pencarian" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br> <br>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>
  <?php if(empty($mahasiswa)): ?>
  <tr>
    <td colspan="4"><p>data mahasiswa tidak ditemukan!</p></td>
  </tr>
  <?php endif; ?>
    <?php  $i = 1;
    foreach($mahasiswa as $mhs) : ?>
  <tr>
    <td><?= $i++; ?></td>
    <td><img src="img/<?= $mhs['Gambar'] ?>" width="60"></td>
    <td><?= $mhs['Nama'] ?></td>
    <td>
    <a href="detail.php?id=<?= $mhs['id'] ?>">lihat detail</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>