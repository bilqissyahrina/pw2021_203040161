<?php
// Bilqis Alpa Syahrina
// 203040161
// Praktikum Pemrograman Web

session_start();
session_destroy();
header("Location: ../index.php");
die;

session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>