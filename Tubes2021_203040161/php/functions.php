<?php 
// Bilqis Alpa Syahrina
// 203040161
// Praktikum Pemrograman Web

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "tubes_pw_203040161");

    return $conn;
}

function query($sql)
{
    $con = koneksi();
    $result = mysqli_query($con, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $bentuk = htmlspecialchars($data['bentuk']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO dekor
				VALUES
			('', '$gambar', '$nama', '$bentuk', '$warna', '$harga')
			";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data["id"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["Nama"]);
    $bentuk = htmlspecialchars($data["Bentuk"]);
    $warna = htmlspecialchars($data["Warna"]);
    $harga = htmlspecialchars($data["Harga"]);

    $query = "UPDATE dekor SET
				gambar = '$gambar',
				Nama = '$nama',
				Bentuk = '$bentuk',
				Warna = '$warna',
        Harga = '$harga'
			    WHERE id = '$id'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM dekor WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>