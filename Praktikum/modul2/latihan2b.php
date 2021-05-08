<?php
// Bilqis Alpa Syahrina
// 203040161
// Jum'at 13:00
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 2B</title>

    <style>
        .wrapper {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php

    $jawabanIsset = "Isset adalah = Berfungsi untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset juga mengembalikan false jika variabel pengujian berisi nilai NULL. <br><br>";
    $jawabanEmpty = "Empty adalah = Berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data, apakah data tersebut ada isinya atau tidak.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }

    ?>

    <div class="wrapper">
        <?= soal(" "); ?>
    </div>

</body>

</html>