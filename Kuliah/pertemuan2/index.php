<?php
/*
 Bilqis Alpa Syahrina
 203040161
 https://github.com/bilqissyahrina/pw2021_203040161.git
 Pertemuan 2 - 8 Februari 2021
 Mempelajari mengenal sintaks PHP
*/
// Pertemuan 2 - PHP Dasar
//Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Bilqis Syahrina";
// echo 'Halo, nama saya $nama';

// Operator
// aritmatika 
// + - * / % 
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabungan string / concatenation / concat
// . 
// $nama_depan = "Bilqis";
// $nama_belakang = "Syahrina";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -+, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Bilqis";
// $nama .= " ";
// $nama .= "Syahrina";
// echo $nama;

// Perbandingan 
// <, >, <=, >=, ==
// var_dump(1 == "1");

// Logika 
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>