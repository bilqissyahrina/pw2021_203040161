<?php
// Bilqis Alpa Syahrina
// 203040161
// Praktikum Pemrograman Web

  session_start();

    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data buku berdasarkan id
$dekorasi = query("SELECT * FROM dekor WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

  // cek apakah data berhasil di ubahkan atau tidak
  if (ubah($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>
		";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body style="background-color: #e0e0e0;">
  <div class="container ">
      <h1>Form Ubah Data Dekor</h1>

      <form method="post" action="">
        <ul>
          <input type="hidden" name="id" id="id" value="<?= $dekorasi['id']; ?>">
          
            <label for="gambar">Gambar : </label> <br>
            <input type="file" name="gambar" id="gambar" required value="<?= $dekorasi["gambar"]; ?>">
            <br><br>
         
            <label for="Nama">Nama : </label>
            <input type="text" name="Nama" id="Nama" required value="<?= $dekorasi["Nama"]; ?>">
            <br><br>
          
            <label for="Bentuk">Bentuk : </label>
            <input type="text" name="Bentuk" id="Bentuk" required value="<?= $dekorasi["Bentuk"]; ?>">
            <br><br>
          
            <label for="Warna">Warna : </label>
            <input type="text" name="Warna" id="Warna" required value="<?= $dekorasi["Warna"]; ?>">
            <br><br>
          
            <label for="Harga">Harga : </label>
            <input type="text" name="Harga" id="Harga" required value="<?= $dekorasi["Harga"]; ?>">
            <br><br>
          
            <button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
              <a href="admin.php" style="text-decoration: none; color:black;">Kembali</a>
            </button>
          
        </ul>
      </form>
  </div>

</body>

</html>