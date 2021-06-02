<?php
/*
 Bilqis Alpa Syahrina
 203040161
 https://github.com/bilqissyahrina/pw2021_203040161.git
 Pertemuan 5 - 3 Maret 2021
 Mempelajari Array
*/
// Array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value 
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama 
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan Array
// var_dam / print_r()
// var_dump($hari);
// echo "<br>"; 
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>