<?php 
//SUPERGLOBALS
// variabel global milik php
// merupakan Array Associative

// $_GET
$mahasiswa = [
    [
        "nama" => "Syahrina", 
        "nrp" => "2040506030",
        "email" => "syahrina22@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto.png"
    ],
    [
        "nama" => "Bilqis", 
        "nrp" => "20406030",
        "email" => "syahrina@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "foto.png"
    ]
];
?>
<!DOCTYPE html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) :?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>
        &email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
        <?= $mhs["nama"];?></a>
    </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>