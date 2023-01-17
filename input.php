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
	<!-- Form Inputan -->
	<br>
	<h1 class="display-6">Form Tambah Data Mahasiswa</h1>
	
	<Form action="aksimhs.php" method="POST">
		<div class="mb-3">	
		  <label for="NIM" class="form-label">NIM</label>
		  <input type="text" onkeyup="isi_otomatis()" name="nim" class="form-control" id="NIM" placeholder="Masukkan NIM" required="NIM">
		</div>
		<div class="mb-3">	
		  <label for="nama" class="form-label">NAMA </label>
		  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required="nama">
		</div>
		<div class="col- mb-3">	
			<legend class="col-form-label">JENIS KELAMIN</legend>
			<div class="form-check">
		  		<input type="radio" class="form-check-input" name="jenis_kelamin" value="L"> Laki-Laki
			</div>
			<div class="form-check">
				<input type="radio" class="form-check-input" name="jenis_kelamin"  value="P"> Perempuan 
			</div>
		  
		  
		</div>
		<div class="mb-3">
		  <label for="jumlah" class="form-label">JURUSAN</label>
		  <select class="form-control" name="jurusan">
		  	<option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
		  	<option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
		  	<option value="TEKNIK MESIN">TEKNIK MESIN</option>
		  	<option value="TEKNIK ELEKTRO">TEKNNIK ELEKTRO</option>
		  </select>
		</div>
		<div class="mb-3">	
		  <label for="alamat" class="form-label">ALAMAT </label>
		  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" required="alamat">
		</div>
		<input class="btn btn-sm btn-primary" type="submit" value="Simpan">
		<input class="btn btn-sm btn-outline-primary" type="reset" value="Ulangi">
	</Form>
	<!-- batas Form Inputan -->
</div>



<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>