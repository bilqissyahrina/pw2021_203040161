<?php
// Bilqis Alpa Syahrina
// 203040161
// Praktikum Pemrograman Web

//cek cookie
if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil user berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("location: admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // menyocokan username dan password
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            //jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            color: white;
            background-color: #e0e0e0;
            font-family: sans-serif;
        }
        
        .loginbox {
            width: 320px;
            height: 420px;
            background: transparent;
            
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        h1 {
            margin: 0;
            padding: 0;
            text-align: center;
            font-size: 22px;
        }

        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            font-size: 16px;
        }

        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #757575;
            font-size: 18px;
            border-radius: 20px;
        }

        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            color: #000;
        }

        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }

        .loginbox a:hover {
            color: #ca9a0a;
        }
    </style>
</head>

<body>
        <div class="loginbox">
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic">username / password salah!</p>
            <?php endif; ?>
            <h1 style="color: black ;">Login Here</h1> 
            <br>
            <form action="" method="post">
                <p style="color: black ;">Username</p>
                <input type="text" name="username" placeholder="Enter Username" id="username">
                <p style="color: black ;">Password</p>
                <input type="password" name="password" placeholder="Enter Password" id="password">
                <input type="submit" name="submit" value="Login">
                <a href="registrasi.php" style="color: darkolivegreen;">Don't Have An Account?</a>
            </form>
        </div>
    </div>
</body>

</html>