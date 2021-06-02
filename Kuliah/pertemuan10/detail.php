<?php 
require 'functions.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
  <img src="img/<?= $mhs['Gambar']; ?>" width="100">
  <li>Nama : <?= $mhs['Nama']; ?></li>
  <li>NRP : <?= $mhs['NRP']; ?></li>
  <li>Jurusan : <?= $mhs['Jurusan']; ?></li>
  <li>Email : <?= $mhs['Email']; ?></li>
  <button><a href="">Ubah</a></button> <button><a href="">Hapus</a></button> <br>
  <button><a href="latihan3.php">Kembali ke daftar mahasiswa</a></button>
  </ul>
</body>
</html>