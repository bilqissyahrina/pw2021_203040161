<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['tambah'])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>

<h3>Form Tambah Data</h3>
<form action="" method="post">
<ul>
    <li>
        <label for="name">Gambar :</label><br>
        <input type="file" name="gambar" id="gambar" required><br><br>
    </li>
    <li>
        <label for="name">Nama :</label><br>
        <input type="nama" name="nama" id="nama" required><br><br>
    </li>
    <li>
        <label for="name">Bentuk :</label><br>
        <input type="bentuk" name="bentuk" id="bentuk" required><br><br>
    </li>
    <li>
        <label for="name">Warna :</label><br>
        <input type="warna" name="warna" id="warna" required><br><br>
    </li>
    <li>
        <label for="name">Harga :</label><br>
        <input type="harga" name="harga" id="harga" required><br><br>
    </li>
    <br>
    <button type="submit" name="tambah">Tambah Data!</button>
    <button type="submit">
        <a href="admin.php" style="text-decoration : none; color: black;">Kembali</a>
    </button>
</ul>
</form>
</body>

</html>