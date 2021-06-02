<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if(!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}


$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

if(isset($_POST['ubah'])) {
 if(ubah($_POST) > 0 ) {
   echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'latihan3.php';
         </script>";
 } else {
   echo "data gagal diubah";
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
  <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
  <ul>
  <li>
    <label>
      Gambar    : 
      <input type="file" name="Gambar" required value="<?= $mhs['Gambar']; ?>" onchange="previewImage()">
    </label>
    <img src="img/<?= $mhs['Gambar'] ?>" width="120" style="display: block;" class="img-preview">
    </li>
    <li>
      <label>
        NRP :
        <input type="text" name="NRP" autofocus required value="<?= $mhs['NRP']; ?>">
      </label>
    </li>
    <li>
      <label>
        Nama    :
        <input type="text" name="Nama" required  value="<?= $mhs['Nama']; ?>">
      </label>
    </li>
    <li>
      <label>
        Jurusan : 
        <input type="text" name="Jurusan" required value="<?= $mhs['Jurusan']; ?>">
      </label>
    </li>
    <li>
      <label>
        Email   : 
        <input type="text" name="Email" required value="<?= $mhs['Email']; ?>">
      </label>
    </li>
    <button type="submit" name="ubah">Ubah Data!</button>
  </ul>
  </form>

  <script src="js/script.js"></script>
</body>
</html>