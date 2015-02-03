<?php 
	include "../inc/headerv.php";
	if(empty($_SESSION['idn'])){
		redir(elink()."home");
	}
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
			$kelqty = tm::pilih("`order` WHERE `id_user` = '$_SESSION[idn]' AND `tgl` = '$dn'");
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
		<?php } ?>
				<tr>
					<td colspan="3" align="right"><strong>
						<?php 
							
							$ckuak = tm::pilih("`order` WHERE `id_user` = '$_SESSION[idn]' AND `tgl` = '$dn' LIMIT 0,1");
							$cktok = mysqli_fetch_array($ckuak);
							echo "Token : <strong>".$cktok['token']."</strong>";
						?>
					</strong></td>
					<td colspan="2" align="right">
					Rp <?php 
						$kelqtyt = tm::bebas("select sum(harga) as plg from `order` WHERE `id_user` = '$_SESSION[idn]'");
						$keldtt = mysqli_fetch_array($kelqtyt);
						echo number_format($keldtt['plg'],0,"-",".").htmlspecialchars(",-");
					?>
					
					</td>
					<td>
						<a class="btn btn-primary" href="">cekout<a>
					</td>
				</tr>
				</tbody>
				</table>
	<br><br>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>