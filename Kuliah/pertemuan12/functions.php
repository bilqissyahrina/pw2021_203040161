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


function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username 
  if ($admin = query("SELECT * FROM admin WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $admin['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada 
  if (query("SELECT * FROM admin WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO admin
              VALUES
            (null, '$username', '$password_baru')
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}