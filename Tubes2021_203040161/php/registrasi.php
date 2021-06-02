<?php
// Bilqis Alpa Syahrina
// 203040161
// Praktikum Pemrograman Web

require 'functions.php';

if(isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: burlywood;
            font-family: sans-serif;
        }
        
        .regisbox {
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
            font-size: 28px;
        }

        .regisbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .regisbox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .regisbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid;
            background: transparent;
            outline: none;
            height: 40px;
            font-size: 20px;
        }

        .regisbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #c39409;
            font-size: 20px;
            border-radius: 20px;
        }

        .regisbox input[type="submit"]:hover {
            cursor: pointer;
            color: #000;
        }

        .regisbox a {
            text-decoration: none;
            font-size: 20px;
            line-height: 20px;
            color: darkgrey;
        }

        .regisbox a:hover {
            color: #ca9a0a;
        }
    </style>
</head>
<body style="background-color: #e0e0e0;">

<div class="regisbox">
        <h1 style="color: black;">Registrasi</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td style="font-size: 20px;"><label for="username">username</label></td>
                <td style="font-size: 20px;">:</td>
                <td><input type="text" name="username"></td>
            </tr> 
            <tr>
                <td style="font-size: 20px;" ><label for="password">password</label></td>
                <td style="font-size: 20px;">:</td>
                <td><input type="password" name="password"></td> 
            </tr>
        </table>
        <button type="submit" name="register" style="color: #757575; font-size: 15px;"> REGISTER</button>
    </form>
</div>
</body>
</html>