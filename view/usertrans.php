<?php 
	include "../inc/headerv.php";
	if(empty($_SESSION['idn'])){
		alert("Anda Harus Login Terlebih Dahulu",elink()."home");
	}
	error_reporting(0);
?>
<section class="isi-ctn" id="isinya">
	<div class="container pdt">	
		
		<?php  include "../inc/usmenu.php"; ?>
		 <table class="table table-bordered">
				  <thead>
					  <tr class="danger">
						<th>No</th>
						<th>Jumlah</th>
						<th>Nama</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Aksi</th>
					  </tr>
				  </thead>
				  <tbody>
		<?php 
			$dn = date("Y-m-d");
			$no = 0;
			$kelqty = tm::pilih("`order` WHERE `id_user` = '$_SESSION[idn]' AND `ck_dt` = 'N'");
			$idkrj = mysqli_num_rows($kelqty);
			if($idkrj == 0){
				echo "<tr><td colspan='6'><strong>Silahkan Berbelanja </td>";
			}else{
				while($keldt = mysqli_fetch_array($kelqty)){
				$no+=1;
		?>
				  <tr>
						<td><?php echo $no; ?></td>
						<td>
						<?php 
							echo $keldt['jumlah'];
						?>
						</td>
						<td>
						<?php 
							$cku = tm::pilih("`barang` WHERE `id` = '$keldt[id_barang]'");
							$kdku = mysqli_fetch_array($cku);
							echo $kdku['title'];
						?>
						</td>
						<td>
						<?php 
							$cku = tm::pilih("`barang` WHERE `id` = '$keldt[id_barang]'");
							$kdku = mysqli_fetch_array($cku);
							$ckuk = tm::pilih("`kategori` WHERE `id` = '$kdku[kategori]'");
							$kdkuk = mysqli_fetch_array($ckuk);
							echo $kdkuk['nama'];
						?>
						</td>
						<td><?php echo "Rp ".number_format($keldt['harga'],0,"-",".").htmlspecialchars(",-");?></td>
						<td>Aksi</td>
				</tr>
			<?php }
			
			 ?>
				<tr>
					<td colspan="5" align="right"><strong>
						
					Rp <?php 
						$kelqtyt = tm::bebas("select sum(harga) as plg from `order` WHERE `id_user` = '$_SESSION[idn]' AND `ck_dt`='N'");
						$keldtt = mysqli_fetch_array($kelqtyt);
						echo number_format($keldtt['plg'],0,"-",".").htmlspecialchars(",-");
					
					?>
					
					</td>
					<td>
						<a class="btn btn-primary" href="<?php echo elink()."cekout"; ?>">cekout<a>
					</td>
			<?php } ?>
				</tr>
				</tbody>
				</table>
	<br><br>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>