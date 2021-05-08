<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
<?php endif; ?>

<h1>Halo, Selamat Datang <?= $_POST["nama"]?></h1>
    <form action="" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>

    </form>
</body>
</html>