<?php
/*
 Bilqis Alpa Syahrina
 203040161
 https://github.com/bilqissyahrina/pw2021_203040161.git
 Pertemuan 6 - 7 Maret 2021
 Mempelajari Array Associative
*/
?>

<?php
// $mahasiswa = [
//     ["Bilqis Syahrina", "203040161", "syahrinabilqis@gmail.com", "Teknik Informatika"],
//     ["2020304050", "Bilqis", "bilqis22@gmail.com","Teknik Industri"]
// ];


// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>
</html>