<?php 
	include "../inc/headerv.php";
	if(empty($_SESSION['idn'])){
		alert("Anda Harus Login Terlebih Dahulu",elink()."home");
	}
	error_reporting(0);
	if(isset($_POST['cekout'])){
		$su = str_shuffle("ABCDFGHIJKLMNOPQRSTUFWXYZabcdefghijklmnopqrstuvwxyz123456789");
		$token = enk(date("Y-m-d H:i:s")."Ahmad Maftuh Ahnan".$su);
		$skrg = date("Y-m-d");
		$alam = sp('alamat');
		$kelqtyt = tm::bebas("select sum(harga) as plg from `order` WHERE `id_user` = '$_SESSION[idn]' AND `ck_dt`='N'");
		$keldtt = mysqli_fetch_array($kelqtyt);
		$ck = tm::masuk("`cekout` VALUES (null,'$_SESSION[idn]','$token','$skrg','$alam','$keldtt[plg]','0','0')");
		if($ck){
			
			$upd = tm::bebas("UPDATE `order` SET `token`='$token',`tgl_cekout`='$skrg',`ck_dt`='Y' WHERE `id_user` = '$_SESSION[idn]'");
			if($upd){
				alert("Check Out Sukses",elink()."cekout");
			}
		}
	}
?>
<section class="isi-ctn" id="isinya">
	<div class="container pdt">	
		
		<?php  include "../inc/usmenu.php"; ?>
		<div class="alamat">
			Total : Rp <?php 
						$kelqtyt = tm::bebas("select sum(harga) as plg from `order` WHERE `id_user` = '$_SESSION[idn]' AND `ck_dt`='N'");
						$keldtt = mysqli_fetch_array($kelqtyt);
						echo number_format($keldtt['plg'],0,"-",".").htmlspecialchars(",-");
					
					?>
		<br><br>
		 <form class="form-horizontal" role="form" action="" method="post">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
			  <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat dan Kode Pos"></textarea>
			</div>
		  </div>
		  <button type="submit" name="cekout" class="btn btn-primary albutton">Check Out</button>
		 </form>
	<br><br>
		</div>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>