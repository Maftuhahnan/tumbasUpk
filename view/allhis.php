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
		<center><strong>History Semua Pembelian</strong></center><br>
		<table class="table table-bordered">
				  <thead>
					  <tr class="danger">
						<th>No</th>
						<th>Token</th>
						<th>Hari</th>
						<th>Alamat</th>
						<th>Total</th>
					  </tr>
				  </thead>
				  <tbody>
		<?php 
			$dn = date("Y-m-d");
			$no = 0;
			$kelqty = tm::pilih("`cekout` WHERE `id_us` = '$_SESSION[idn]'");
			$idkrj = mysqli_num_rows($kelqty);
			if($idkrj == 0){
				echo "<tr><td colspan='6'><strong>Anda Belum Pernah Melakukan Check Out </td>";
			}else{
				while($keldt = mysqli_fetch_array($kelqty)){
				$no+=1;
		?>
				  <tr>
						<td><?php echo $no; ?></td>
						<td>
						<?php 
							echo $keldt['token'];
						?>
						</td>
						<td>
						<?php 
							
							echo $keldt['tgl'];
						?>
						</td>
						<td>
						<?php 
							echo $keldt['alamat'];
						?>
						</td>
						<td>
							Rp <?php 
						
						echo number_format($keldt['total'],0,"-",".").htmlspecialchars(",-");
					
					?>
						</td>
						
				</tr>
			<?php }}?>
			
				</tr>
				</tbody>
				</table>
	<br><br>
	</div>
</section>
<?php
	include "../inc/footer.php";
?>