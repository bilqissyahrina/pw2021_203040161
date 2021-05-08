<?php 
    require 'php/functions.php';

    $dekorasi = query("SELECT * FROM dekor")
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
 <div class="container mt-3" >
    <h1>Dekorasi</h1>
    <div class="card" style="width: 45">
        <div class="card-body">
        <div class="row">
            <div class="col md-6">
            <?php foreach( $dekorasi as $dekor ) : ?>
                <p class="Nama">
                <a href="php/detail.php?id=<?= $dekor['id'] ?>">
                <?= $dekor ["Nama"] ?>
                </a>
                </p>  
            <?php endforeach;  ?>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>