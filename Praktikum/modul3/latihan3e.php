<?php 

$dekorasi = [ 
    [
        "Gambar" => "1.png",
        "Nama" => "Walldecor",
        "Bentuk" => "Kotak, Hexagonal",
        "Warna" => "Kuning, Krem, Coklat",
        "Harga" => "Rp 15.000"
    ],
    [
        "Gambar" => "2.png",
        "Nama" => "Cermin",
        "Bentuk" => "Kotak, Persegi Panjang",
        "Warna" => "Putih",
        "Harga" => "Rp 20.000"
    ],
    [
        "Gambar" => "3.png",
        "Nama" => "Frame",
        "Bentuk" => "Kotak",
        "Warna" => "Putih, Hitam, Coklat",
        "Harga" => "Rp 10.000"
    ],
    [
        "Gambar" => "4.png",
        "Nama" => "Wall Grid",
        "Bentuk" => "Persegi Panjang",
        "Warna" => "Putih, Hitam",
        "Harga" => "Rp 10.000"
    ],
    [
        "Gambar" => "5.png",
        "Nama" => "Lukisan",
        "Bentuk" => "Kotak, Persegi Panjang",
        "Warna" => "Custom",
        "Harga" => "Rp 25.000"
    ],
    [
        "Gambar" => "6.png",
        "Nama" => "Rak Pojok",
        "Bentuk" => "Seperempat Lingkaran",
        "Warna" => "Putih, Hitam",
        "Harga" => "Rp 38.000"
    ],
    [
        "Gambar" => "7.png",
        "Nama" => "Pot Tanaman",
        "Bentuk" => "Bulat",
        "Warna" => "Putih, Hitam, Coklat",
        "Harga" => "Rp 17.000"
    ],
    [
        "Gambar" => "8.png",
        "Nama" => "Tanaman Kering",
        "Bentuk" => "Daun",
        "Warna" => "Coklat",
        "Harga" => "Rp 15.000"
    ],
    [
        "Gambar" => "9.png",
        "Nama" => "Pulpen Karakter",
        "Bentuk" => "Karakter",
        "Warna" => "Semua Warna",
        "Harga" => "Rp 12.000"
    ],
    [
        "Gambar" => "10.png",
        "Nama" => "Lampu Karakter",
        "Bentuk" => "Awan, Kaktus, Unicorn, Pohon",
        "Warna" => "Putih, Kuning, Biru, Abu-abu",
        "Harga" => "Rp 23.000"
    ]
]
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
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Bentuk</th>
      <th scope="col">Warna</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($dekorasi as $dekor) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="img/<?= $dekor["Gambar"]; ?>"></td>
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