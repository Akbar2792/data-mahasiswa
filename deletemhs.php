<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_mahasiswa   = $_GET['id_mahasiswa'];
// query SQL untuk insert data
$query="DELETE from mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
mysqli_query($conn, $query);

// mengalihkan ke halaman index.php
header("location:index.php");
?>