<?php  
// Bilqis Alpa Syahrina
// 203040161
// Pemrograman Web 10:00 - 11:00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan1b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>  

        <?php for($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <th>Baris
                    <?= $i; ?>
                </th>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td>Baris <?= $i; ?>, Kolom <?= $j; ?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>


    </table>
</body>
</html>