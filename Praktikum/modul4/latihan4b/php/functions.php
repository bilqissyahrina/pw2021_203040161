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

?>