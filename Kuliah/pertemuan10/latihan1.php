<?php 
// koneksi ke DB & Pilih Database
  $conn = mysqli_connect('localhost', 'root', '', 'pw_tubes_203040161');

// Query isi tabel mahasiswa
  $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
  
// Ubah data ke dalam Array
$rows = [];
 while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row;
 }

 $mahasiswa = $rows;
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


<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Email</th>
    <th>Aksi</th>
  </tr>
    <?php  $i = 1;
    foreach($mahasiswa as $mhs) : ?>
  <tr>
    <td><?= $i++; ?></td>
    <td><img src="img/<?= $mhs['Gambar'] ?>" width="60"></td>
    <td><?= $mhs['NRP'] ?></td>
    <td><?= $mhs['Nama'] ?></td>
    <td><?= $mhs['Jurusan'] ?></td>
    <td><?= $mhs['Email'] ?></td>
    <td>
    <a href="">Ubah</a> | <a href="">Hapus</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>