<?php 

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_tubes_203040161');
}


function query($query) 
{
 $conn = koneksi();

 $result = mysqli_query($conn, $query);

 if(mysqli_num_rows($result) == 1) {
   return mysqli_fetch_assoc($result);
 }

 $rows = [];
 while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row;
 }
  
return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $gambar = htmlspecialchars ($data['Gambar']);
  $gambar = htmlspecialchars ($data['Gambar']);
  $nrp = htmlspecialchars ($data['NRP']);
  $nama = htmlspecialchars ($data['Nama']);
  $jurusan = htmlspecialchars ($data['Jurusan']);
  $email = htmlspecialchars ($data['Email']);




  $query = "INSERT INTO
              mahasiswa
              VALUES
              ('', '$gambar', '$nrp', '$nama', '$jurusan', '$email' )
   ;         ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}