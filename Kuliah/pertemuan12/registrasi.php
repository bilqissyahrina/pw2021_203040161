<?php 

require 'functions.php';

if(isset($_POST['registrasi'])) {
  if(registrasi($_POST) > 0 ) {
    echo "<script>
            alert('user baru berhasil ditambahkan, silahkan login!');
            document.location.href = 'login.php';
          </script>";
    return false;
  } else {
    echo 'user gagal ditambahkan!';
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regristrasi</title>
</head>
<body>
  <h3>Form Registrasi</h3>

  <form action="" method="POST">
  <ul>
  <label>
    Username :  
    <input type="text" name="username" autofocus autocomplete="off" required>
  </label>
  <br><br>
  <label>
    Password :
    <input type="password" name="password1" required>
  </label>
  <br> <br>
  <label>
    Konfirmasi Password : 
    <input type="password" name="password" required>
  </label>
  <br><br>
  <button type="submit" name="registrasi">Registrasi</button>
  </ul>
  </form>
</body>
</html>