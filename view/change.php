<?php 
	include "../inc/headerv.php";
	if(empty($_SESSION['idn'])){
		alert("Anda Harus Login Terlebih Dahulu",elink()."home");
	}
	error_reporting(0);
	if(isset($_POST['ubah'])){
		$nama = sp('nama');
		$em = sp('email');
		$telp = sp('telp');
		
		if(empty($nama) || !filter_var($em,FILTER_VALIDATE_EMAIL) || empty($telp)){
			alert("Maaf Data yang Anda Masukan Tidak Boleh Kosong",elink()."change");
		}else{
			$upd = tm::bebas("UPDATE `user` SET `nama`='$nama',`email`='$em',`telp`='$telp' WHERE `id`='$_SESSION[idn]'");
			if($upd){
				alert("Data Berhasil Di Ubah",elink()."change");
			}
		}
	}
?>
<section class="isi-ctn" id="isinya">
	<div class="container pdt">	
		
		<?php  include "../inc/usmenu.php"; ?>
		<div class="alamat">
		<?php 
			$usr = tm::pilih("`user` WHERE `id`= '$_SESSION[idn]'");
			$yu = mysqli_fetch_array($usr);
		?>
		 <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
		 <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
			  <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $yu['username']; ?>" disabled>
			</div>
		  </div>
		  
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				 <input class="form-control" name="nama" type="text" value="<?php echo $yu['nama']; ?>" >
			</div>
		  </div>
		  
		   <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				 <input class="form-control" name="email" type="email" value="<?php echo $yu['email']; ?>" >
			</div>
		  </div>
		  
		   <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Telp</label>
			<div class="col-sm-10">
				 <input class="form-control" name="telp" type="text" value="<?php echo $yu['telp']; ?>" >
			</div>
		  </div>
		  <button type="submit" name="ubah" class="btn btn-primary albutton" onclick="return confirm('Apakan Anda Yakin Akan Mengubah Data ?');">Ubah</button>
		   <a href="<?php echo elink()."change/password"; ?>" class="btn btn-danger albutton yusp">Ganti Password</a>
		 </form>
	<br><br>
		</div>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>