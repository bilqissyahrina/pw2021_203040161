<?php
/*
 Bilqis Alpa Syahrina
 203040161
 https://github.com/bilqissyahrina/pw2021_203040161.git
 Pertemuan 5 - 3 Maret 2021
 Mempelajari Array
*/
$mahasiswa = [
    ["Bilqis Syahrina", "203040161", "Teknik Informatika", 
    "syahrinabilqis@gmail.com"],
    ["Bilqis ", "2030401612", "Informatika", 
    "syahrina@gmail.com"],
    ["Syahrina", "203040161", "Teknik Informatika", 
    "syahrinabilqis@gmail.com"]
];
?>
<!DOCTYPE html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>

<?php endforeach; ?>
</body>
</html>