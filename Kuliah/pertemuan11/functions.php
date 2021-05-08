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

function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars ($data['id']);
  $gambar = htmlspecialchars ($data['Gambar']);
  $nrp = htmlspecialchars ($data['NRP']);
  $nama = htmlspecialchars ($data['Nama']);
  $jurusan = htmlspecialchars ($data['Jurusan']);
  $email = htmlspecialchars ($data['Email']);




  $query = "UPDATE mahasiswa SET
              Gambar = '$gambar',
              NRP = '$nrp',
              Nama = '$nama',
              Jurusan = '$jurusan',
              Email = '$email',
            WHERE id = $id";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function tambah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars ($data['id']);
  $gambar = htmlspecialchars ($data['Gambar']);
  $nrp = htmlspecialchars ($data['NRP']);
  $nama = htmlspecialchars ($data['Nama']);
  $jurusan = htmlspecialchars ($data['Jurusan']);
  $email = htmlspecialchars ($data['Email']);




  $query = "INSERT INTO
              mahasiswa
              VALUES
              ('', '$gambar', '$nrp', '$nama', '$jurusan', '$email' )
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $conn = koneksi();

  $query = "SELECT *FROM mahasiswa
              WHERE nama LIKE '%$keyword%'";
  
  $result  = mysqli_query($conn, $query);
  $rows = [];
 while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row;
 }
  
return $rows;
             
}