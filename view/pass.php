<?php 
	include "../inc/headerv.php";
	if(empty($_SESSION['idn'])){
		alert("Anda Harus Login Terlebih Dahulu",elink()."home");
	}
	error_reporting(0);
	if(isset($_POST['ubah'])){
		$passl = enk(sp('passw'));
		$pass = enk(sp('pass2'));
		$pass1 = enk(sp('pass'));
		
		if(empty($passl) || empty($pass) || empty($pass1)){
			alert("Maaf Data yang Anda Masukan Tidak Boleh Kosong",elink()."change/password");
		}else{
			if($pass != $pass1){
				alert("Kombinasi Password Tidak Tepat !",elink()."change/password");
			}else{
				$ck = tm::pilih("`user` WHERE `id` = '$_SESSION[idn]' AND `pass` = '$passl'");
				$rowp = mysqli_num_rows($ck);
				if($rowp == 0){
					alert("Password Lama Anda Salah !",elink()."change/password");
				}else{
					$upd = tm::bebas("UPDATE `user` SET `pass` = '$pass' WHERE `id`='$_SESSION[idn]'");
					if($upd){
						alert("Password Berhasil Di Ubah",elink()."change/password");
					}
				}
			}
		}
	}
?>
<section class="isi-ctn" id="isinya">
	<div class="container pdt">	
		
		<?php  include "../inc/usmenu.php"; ?>
		<div class="">
		
		 <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
		 
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Password Lama</label>
			<div class="col-sm-10">
				 <input class="form-control" name="passw" type="password"  >
			</div>
		  </div>
		  
		   <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				 <input class="form-control" name="pass" type="password" >
			</div>
		  </div>
		  
		   <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Re Type Password</label>
			<div class="col-sm-10">
				 <input class="form-control" name="pass2" type="password" >
			</div>
		  </div>
		  <button type="submit" name="ubah" class="btn btn-danger albutton" onclick="return confirm('Apakan Anda Yakin Akan Mengubah Password ?');">Ganti Password</button>
		 </form>
	<br><br>
		</div>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>