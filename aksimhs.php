<?php
include 'koneksi.php';
//simpan data ke variabel
$nim 			= $_POST['nim'];
$nama 			= $_POST['nama'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];
$jur 			= $_POST['jurusan'];
$alamat 		     = $_POST['alamat'];


$query = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, jurusan, alamat)
          VALUES ('$nim','$nama','$jenis_kelamin','$jur','$alamat')";
$result = mysqli_query($conn, $query);

     // periksa query apakah ada error
if(!$result){
     die ("Query gagal dijalankan: ".mysqli_error($conn).
          " - ".mysqli_error($conn));
     }else{
     echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
     }
?>