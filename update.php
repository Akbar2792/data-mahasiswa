<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_mahasiswa   = $_POST['id_mahasiswa'];
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_mahasiswa='$id_mahasiswa'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
 echo "<script>alert('Data berhasil di Ubah.');window.location='index.php';</script>";
?>