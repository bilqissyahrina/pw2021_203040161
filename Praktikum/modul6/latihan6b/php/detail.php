<?php 
    session_start();

    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }

 if(!isset($_GET['id'])) {
   header("location: ../index.php");
   exit;
 }

 require 'functions.php';

 $id = $_GET['id'];

 $dekorasi = query("SELECT *FROM dekor WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
</head>
<body>
  <div class="container">
        <h1>Dekorasi</h1>
        <div class="card border border-primary" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4 mt-3 pl-2">
                    <img src="../assets/img/<?= $dekorasi["Gambar"]; ?>" class="card-img border border-dark">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title m-1"><?= $dekorasi["Nama"] ?></h5>
                            <ul>
                                <li class="card-text"><?= $dekorasi["Bentuk"] ?></li>
                                <li class="card-text"><?= $dekorasi["Warna"] ?></li>
                                <li class="card-text"><?= $dekorasi["Harga"] ?></li>
                            </ul>
                        <button class="tombol-kembali btn btn-outline-primary"><a href="../index.php">Kembali</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>