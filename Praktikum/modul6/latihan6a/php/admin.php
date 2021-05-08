<?php 
    session_start();

    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }
    require 'functions.php';
    //melakukan query
    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $dekorasi = query("SELECT * FROM dekor WHERE
            Nama LIKE '%$keyword%' OR
            Bentuk LIKE '%$keyword%' OR
            Warna LIKE '%$keyword%' OR
            Harga LIKE '%$keyword%' 
            ");
        } else {
        $dekorasi = query("SELECT * FROM dekor");
        }
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
  <div class="logout">
        <a href="logout.php">Logout</a>
  </div>
  <form action="" method="get" style="float: right;">
        <input type="text" name="keyword" size="30" class="rounded-pill" placeholder="Cari Disini!" autofocus>
        <button type="submit" name="cari" class="btn btn-outline-success rounded-pill">Cari!</button>
    </form>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Bentuk</th>
      <th>Warna</th>
      <th>Harga</th>
    </tr>
    
    <?php if(empty($dekorasi)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php $i = 1 ?>
        <?php foreach( $dekorasi as $dekor) : ?>
                <tr>
                
                <th scope="row"><?= $i ?></th>
                <td>
                <a href="ubah.php?id=<?= $dekor['id']?>"><button class="btn btn-outline-primary rounded-pill">Ubah</button></a>
                <a href="hapus.php?id=<?= $dekor["id"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-outline-danger rounded-pill">Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $dekor["Gambar"]; ?>"></td>
                <td><?= $dekor["Nama"] ?></td>
                <td><?= $dekor["Bentuk"] ?></td>
                <td><?= $dekor["Warna"] ?></td>
                <td><?= $dekor["Harga"] ?></td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
        <?php endif; ?>
  </table>
</body>
</html>