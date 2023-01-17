<?php
$servername = "localhost";
$database = "db_mahasiswa";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_errno()){
	die("Gagal konek ke database:".mysqli_connect_error());
}
?>