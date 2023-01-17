<?php
include 'koneksi.php';
$id = $_GET['id_mahasiswa'];
$query = "select * from mahasiswa where id_mahasiswa='$id'";
$result = mysqli_query($conn, $query);
$isi = mysqli_fetch_array($result);

$jurusan = array('TEKNIK INFORMATIKA','SISTEM INFORMASI','TEKNIK MESIN','TEKNIK ELEKTRO');
//fungsi set aktif radio button
function active_radio_button($value, $input){
	$result = $value==$input?'checked':'';
	return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Digital Talent</title>
	
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-sm">
	<h1 class="display-6 text-center">Form Perubahan Data Mahasiswa</h1>
	<form action="update.php" method="post">
		<input type="hidden" value="<?php echo $isi['id_mahasiswa'];?>" name="id_mahasiswa">
			<div class="mb-3">
				<label for="NIM" class="form-label">NIM</label>
		    	<input type="text" class="form-control" id="NIM" value="<?php echo $isi['nim'];?>" name="nim">
		  	</div>
		   	<div class="mb-3">	
				<label for="nama" class="form-label">NAMA </label>
				<input type="text" class="form-control"  value="<?php echo $isi['nama'];?>" name="nama">
			</div>
			<div class="mb-3">	
				<legend class="col-form-label">JENIS KELAMIN</legend>
				<input type="radio" name="jenis_kelamin" class="form-check-input" value="L" <?php echo active_radio_button("L", $isi['jenis_kelamin'])?>> Laki-laki
				<input type="radio" name="jenis_kelamin" class="form-check-input" value="P" <?php echo active_radio_button("P", $isi['jenis_kelamin'])?>> Perempuan
			</div>
			<div class="mb-3" form-group>	
				<label for="Jurusan" class="form-label">JURUSAN </label>
				<select name="jurusan" class="form-control">
					<?php
					foreach ($jurusan as $jur) {
						echo "<option value='$jur' ";
						echo $isi['jurusan']==$jur?'selected="selected"':'';
						echo ">$jur</option>";
					}
					?>
				</select>
			</div>
			<div class="mb-3">	
				<label for="Alamat" class="form-label">Alamat</label>
				<td><input type="text" class="form-control" value="<?php echo $isi['alamat'];?>" name="alamat">
			</div>
			<div class="mb-3">	
				<input class="btn btn-sm btn-primary" type="submit" value="Simpan">
				<a href="index.php" class="btn btn-sm btn-outline-primary" type="reset" value="Kembali">Kembali</a>
		    </div>
	</form>
</div>
</body>
</html>