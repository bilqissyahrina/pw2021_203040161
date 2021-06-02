<?php
/*
 Bilqis Alpa Syahrina
 203040161
 https://github.com/bilqissyahrina/pw2021_203040161.git
 Pertemuan 5 - 3 Maret 2021
 Mempelajari Array
*/
// Pengulangan pada array
// for / foreach
$angka = [5,6,7,8,98,66,32,8];
?>
<!DOCTYPE html>
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    
<?php for( $i = 0; $i < count($angka); $i++ )  { ?>
<div class="kotak"><?php echo $angka[$i];  ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>
</body>
</html>