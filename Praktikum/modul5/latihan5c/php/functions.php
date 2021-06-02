<?php 
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040161");

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

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM dekor WHERE id = $id");

  return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $bentuk = htmlspecialchars($data["bentuk"]);
    $warna = htmlspecialchars($data["warna"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "UPDATE dekor
				SET
        gambar = '$gambar',
        nama = '$nama',
        bentuk = '$bentuk',
        warna = '$warna',
        harga = '$harga',
        WHERE id = '$id'
        ";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn) ;
}
?>