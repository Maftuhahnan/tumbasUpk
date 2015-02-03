<?php 
	include "../inc/headerv.php";
	if(empty($_SESSION['idn'])){
		alert("Anda Harus Login Terlebih Dahulu",elink()."home");
	}
	error_reporting(0);
	if(isset($_POST['cekout'])){
		$token = sp('token');
		$filtgm = $_FILES['gambar']['name'];
		$date = date("Y-m-d H:i:s");
		$rep = str_replace(" ","-",$filtgm);
		$enkrip = enk($date).$rep;
		$tipe = $_FILES['gambar']['type'];
		if(empty($token)){
			alert("Maaf Data Tidak Boleh Kosong",elink()."konfirm");
		}else{
			$eckt = tm::pilih("`cekout` WHERE `id_us` = '$_SESSION[idn]' AND `token` = '$token'");
			$cekt = mysqli_num_rows($eckt);
			$cektd = mysqli_fetch_array($eckt);
			if($cektd['user_trans'] == 1){
				alert("Anda Sudah Membayar",elink()."konfirm");
			}else{
			if($cekt == 0){
				alert("Token Tidak Ada Dalam List",elink()."konfirm");
			}else{
				if($tipe === "image/jpeg" || $tipe === "image/png" || $tipe === "image/jpg" || $tipe === "image/gif"){
				$cgmup = move_uploaded_file($_FILES['gambar']['tmp_name'],"../tmp/konfirm/".$enkrip);
				if($cgmup){
					$cekar = tm::masuk("`konfirm` VALUES (null,'$token','$_SESSION[idn]','$enkrip')");
					if($cekar){
						$upd = tm::bebas("UPDATE `cekout` SET `user_trans`='1' WHERE `id_us` = '$_SESSION[idn]' AND `token` = '$token' ");
						if($upd){
							alert("Data Sukses Di Masukan",elink()."konfirm");
						}else{
							alert("Error UPDATE",elink()."konfirm");
						}
					}else{
						alert("Koneksi Ke Database Salah !",elink()."konfirm");
					}
				}else{
					alert("Upload gagal !",elink()."konfirm");
				}
				}else{
					alert("Image Harus Berformat jpg,jpeg,png,gif !! ",elink()."konfirm");
					
				}
			}
		}
		}
	}
?>
<section class="isi-ctn" id="isinya">
	<div class="container pdt">	
		
		<?php  include "../inc/usmenu.php"; ?>
		<div class="alamat">
		
		 <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
		 <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Token</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control"  name="token" placeholder="Masukan Token">
			</div>
		  </div>
		  <p><small>* Masukan Token Dengan Benar Ex : f01f8c82078523addfee8644d4d42aceb9bd9022 berjumlah <?php echo strlen("f01f8c82078523addfee8644d4d42aceb9bd9022"); ?> digit</small></p>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Bukti</label>
			<div class="col-sm-10">
			  <input type="file" class="form-control"  name="gambar" placeholder="Masukan Token">
			</div>
		  </div>
		   <p><small>*Img Harus JPG/JPEG/PNG/GIF </p>
		  <button type="submit" name="cekout" class="btn btn-primary albutton">Kirim</button>
		 </form>
	<br><br>
		</div>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>