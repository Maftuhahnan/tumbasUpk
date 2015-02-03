<?php 
	include "../inc/headerv.php";
	if(empty($_SESSION['idn'])){
		alert("Anda Harus Login Terlebih Dahulu",elink()."home");
	}
	error_reporting(0);
	if(isset($_POST['saran'])){
		$pesan = sp('pesan');
		
		if(empty($pesan)){
			alert("Data Yang Anda Kirim Tidak Boleh Kosong","saran");
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
			$inp = tm::masuk("`saran` VALUES (null,'$pesan','$_SESSION[idn]','$ip','0')");
			if($inp){
				alert("Saran Terkirim, Terima Kasih","saran");
			}
		}
		
	}
?>
<section class="isi-ctn" id="isinya">
	<div class="container pdt">	
		
		<?php  include "../inc/usmenu.php"; ?>
		
		 <form class="form-horizontal" role="form" action="" method="post">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Pesan</label>
			<div class="col-sm-10">
			  <textarea class="form-control" rows="3" name="pesan" placeholder="Masukan Kritik Dan Saran"></textarea>
			</div>
		  </div>
		  <button type="submit" name="saran" class="btn btn-primary albutton">Kirim</button>
		 </form>
	<br><br>
		</div>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>