<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-sm">
	<h3 class="display-5 text-center">Daftar Mahasiswa</h3>
	
	<br><br>
	<a href="input.php" class="btn btn-primary btn-sm">[+] Tambah Data </a>
	<br><br>

<table class="table">
	<thead class="table-dark">
	<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>GENDER</th>
		<th>JURUSAN</th>
		<th>ALAMAT</th>
		<th colspan="2">AKSI</th>
	</tr>
</thead>
<?php
include 'koneksi.php';
$mahasiswa = mysqli_query($conn, "select * FROM mahasiswa");

$no=1;
 foreach ($mahasiswa as $isi){
 	$jenis_kelamin = $isi['jenis_kelamin']=='P'?'Perempuan':'Laki-laki';
 	echo " <tr>
		    	<td>$no</td>
		    	<td>".$isi['nim']."</td>
		    	<td>".$isi['nama']."</td>
		    	<td>".$jenis_kelamin."</td>
		    	<td>".$isi['jurusan']."</td>
		    	<td>".$isi['alamat']."</td>
		    	<td>
		    		<a href='edit.php?id_mahasiswa=$isi[id_mahasiswa]'>Edit</a>
		    		<a href='deletemhs.php?id_mahasiswa=$isi[id_mahasiswa]'>Delete</a>
		    	</td>
   		   </tr>";
  	$no++;
    }
  ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</div>
</body>
</html>